<?php


namespace App\Core;


use Exception;

class Image{

    private $dimensions__;
    private $bgColor__;
    private $textColor__;
    private $fontUrl__;
    private $fontSize__;


    /**
     * @param mixed $dimensions__
     */
    public function setDimensions($dimensions__): void{
        $this->dimensions__ = $dimensions__;
    }

    /**
     * @param mixed $bgColor__
     */
    public function setBgColor($bgColor__): void{
        $this->bgColor__ = $bgColor__;
    }

    /**
     * @param mixed $textColor__
     */
    public function setTextColor($textColor__): void{
        $this->textColor__ = $textColor__;
    }

    /**
     * @param mixed $fontUrl__
     */
    public function setFontUrl($fontUrl__): void{
        $this->fontUrl__ = $fontUrl__;
    }

    /**
     * @param mixed $fontSize__
     */
    public function setFontSize($fontSize__): void{
        $this->fontSize__ = $fontSize__;
    }



    /**
     * Build image
     * @param null $customText
     */
    public function build($customText = null){
        //Init variable from object
        $height = $this->dimensions__['y'] ?? 600;
        $width = $this->dimensions__['x'] ?? 400;
        $bgColor = self::convertHexToRGB($this->bgColor__ ?? 'e0e0e0');
        $textColor = self::convertHexToRGB($this->textColor__ ?? '333333');
        $fontSize = $this->fontSize__ ?? 40;
        if($this->fontUrl__ !== null && $this->fontUrl__ !== ''){
            if(strpos($this->fontUrl__, '/') !== false){
                $fontUrl = $this->fontUrl__;
            }
            else{
                $fontUrl = urldecode($this->fontUrl__);
            }
        }
        else{
            $fontUrl = 'https://placeholdpic.com/Montserrat.ttf';
        }


        //Set text
        $text = $customText ?? "$width x $height";


        //Get Text Width
        $id = uniqid();
        $parts = explode('/', $fontUrl); //Split font url
        $fontName = explode('.', $parts[count($parts) - 1])[0]; //Get font name
        $fontExt = explode('.', $parts[count($parts) - 1])[1]; //Get font extension
        try{
            $font = file_get_contents($fontUrl); //Download Font
        }
        catch(Exception $e){
            echo 'Font not found';
            http_response_code(404);
            die();
        }
        $realFontPath = 'fonts/' . $id . '_' . $fontName . "." . $fontExt; //Build font path in folder
        file_put_contents($realFontPath, $font); //Put font in folder
        $type_space = imagettfbbox($fontSize, 0, $realFontPath, $text); //Make a box with the text
        $width_text = abs($type_space[4] - $type_space[0]) + 10; //Calculate box width
        $x = ($width / 2) - ($width_text / 2); //Get text start x
        $y = ($height / 2) + ($fontSize / 2); //Get text start y


        //Build Image
        $im = imagecreatetruecolor($width, $height); //Create image
        $finalBgColor = imagecolorallocate($im, $bgColor['r'], $bgColor['g'], $bgColor['b']); //Define background color
        $finalTextColor = imagecolorallocate($im, $textColor['r'], $textColor['g'], $textColor['b']); //Define text color
        imagefilledrectangle($im, 0, 0, $width, $height, $finalBgColor); //Set image background
        imagettftext($im, $fontSize, 0, $x, $y, $finalTextColor, $realFontPath, $text ); //Set image text
        imagepng($im); //Print image
        imagedestroy($im); //Destroy memory


        unlink($realFontPath); //Delete font from folder
    }



    /**
     * Used to convert short hex format to 6 length format
     * @param $hex
     * @return string|null
     */
    private function convert3to6hex($hex): ?string
    {
        if(strlen($hex) === 3){
            $char = str_split($hex);
            return $char[0] . $char[0] . $char[1] . $char[1] . $char[2] . $char[2];
        }
        else{
            return $hex;
        }
    }

    /**
     * Convert HEX to RGB
     * @param $hex
     * @return array
     */
    private function convertHexToRGB($hex): array
    {
        //Parse hex passed and assign variables
        list($r, $g, $b) = sscanf(self::convert3to6hex($hex), "%02x%02x%02x");
        return ['r' => intval($r), 'g' => intval($g), 'b' => intval($b)];
    }


}
