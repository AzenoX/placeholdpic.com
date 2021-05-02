<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Image placeholders for your website. Customize everything, like text, colors, font, etc...">

        <title>PlaceholdPic.com</title>

        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!--Montserrat-->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body class="bg-gray-800">
        <header class="bg-gradient-to-tr from-purple-700 to-purple-800 py-32 px-4 mb-20">
            <h1 class="lg:text-5xl text-xl text-white font-bold text-center">Placehol<span class="lg:mr-3 letters-merged">dP</span>ic.com</h1>
            <p class="text-gray-300 text-md lg:text-md text-center font-thin">Image placeholders for your website</p>
        </header>

        <main class="xl:mx-60 pb-20">
            <h2 class="font-bold text-2xl text-white">Explore Endpoints</h2>
            <br>

            <!--Docs-->
            <div>

                <div class="shadow-lg mb-6">
                    <div class="flex justify-between items-center text-lg bg-purple-700 pr-4 slider_header cursor-pointer">
                        <div class="bg-yellow-600 py-3 px-7 text-white font-bold">GET</div>
                        <p class="text-left w-full px-4 text-white">Classic Image Placeholder</p>
                        <div class="text-white">/<span class="text-purple-300 font-bold">WIDTH</span>x<span class="text-purple-300 font-bold">HEIGHT</span></div>
                    </div>
                    <div class="bg-gray-900 text-white py-6 px-5 hidden">

                        <!--Parameters-->
                        <div class="mb-10">

                            <p class="font-bold text-lg mb-4">Optional Parameters:</p>

                            <?php

                            $parameters = [
                                [
                                    'title' => 'bg',
                                    'desc' => 'Hexadecimal color for background.',
                                    'default' => 'e0e0e0',
                                ],
                                [
                                    'title' => 'text',
                                    'desc' => 'Hexadecimal color for text.',
                                    'default' => '333333',
                                ],
                                [
                                    'title' => 'font',
                                    'desc' => 'Url for a custom font. Only .ttf are accepted.',
                                    'default' => 'Montserrat',
                                ],
                                [
                                    'title' => 'fsize',
                                    'desc' => 'Size for the text',
                                    'default' => '-1 (Auto fill)',
                                ],
                                [
                                    'title' => 'content',
                                    'desc' => 'Displayed text',
                                    'default' => '%dimensions%',
                                ],
                            ];

                            ?>

                            <?php foreach($parameters as $parameter): ?>
                            <div>
                                <p>
                                    <span class="font-bold text-purple-400"><?= $parameter['title'] ?></span>
                                    ➜ <?= $parameter['desc'] ?>&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold"><?= $parameter['default'] ?></span></span>
                                </p>
                            </div>
                            <?php endforeach; ?>

                        </div>

                        <!--Examples-->
                        <div>
                            <?php

                            $examples = [
                                [
                                    'title' => 'Simple Image request 600x400:',
                                    'link' => 'https://placeholdpic.com/600x400',
                                ],
                                [
                                    'title' => 'Simple Image request 600x400 with a purple background:',
                                    'link' => 'https://placeholdpic.com/600x400?bg=A78BFA',
                                ],
                                [
                                    'title' => 'Simple Image request 600x400 with a custom text:',
                                    'link' => 'https://placeholdpic.com/600x400?content=Hello%20World',
                                ],
                                [
                                    'title' => 'Simple Image request 600x400 with a purple background and light text:',
                                    'link' => 'https://placeholdpic.com/600x400?bg=6D28D9&text=e0e0e0',
                                ],
                                [
                                    'title' => 'Simple Image request 700x300 with a custom font and a custom text size:',
                                    'link' => 'https://placeholdpic.com/700x300?font=http%3A%2F%2Fplaceholdpic.com%2Ffonts%2FZenDots.ttf&fsize=70',
                                ],
                            ];

                            ?>


                            <p class="font-bold text-lg mb-4">Examples:</p>

                            <?php foreach($examples as $example): ?>
                            <div class="mb-20">
                                <p class="font-bold"><?= $example['title'] ?></p>
                                <div class="bg-white h-0.5 w-1/4 mb-8 mt-2"></div>
                                <div class="flex justify-start items-center mt-1 flex-col lg:flex-row">
                                    <img class="h-24 mr-10 purple-shadow mb-4 lg:mb-0" alt="Example" src="<?= $example['link'] ?>">
                                    <p class="text-purple-400"><a href="<?= $example['link'] ?>" target="_blank" class="whitespace-breakspaces wrap-all"><?= $example['link'] ?></a></p>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>

                <div class="shadow-lg mb-6">
                    <div class="flex justify-between items-center text-lg bg-purple-700 pr-4 slider_header cursor-pointer">
                        <div class="bg-yellow-600 py-3 px-7 text-white font-bold">GET</div>
                        <p class="text-left w-full px-4 text-white">Initials Icon Placeholder</p>
                        <div class="text-white">/i/<span class="text-purple-300 font-bold">SIZE</span>/<span class="text-purple-300 font-bold">TEXT</span></div>
                    </div>
                    <div class="bg-gray-900 text-white py-6 px-5 hidden">

                        <!--Parameters-->
                        <div class="mb-10">

                            <p class="font-bold text-lg mb-4">Optional Parameters:</p>

                            <?php

                            $parameters = [
                                [
                                    'title' => 'bg',
                                    'desc' => 'Hexadecimal color for background.',
                                    'default' => 'e0e0e0',
                                ],
                                [
                                    'title' => 'text',
                                    'desc' => 'Hexadecimal color for text.',
                                    'default' => '333333',
                                ],
                                [
                                    'title' => 'font',
                                    'desc' => 'Url for a custom font. Only .ttf are accepted.',
                                    'default' => 'Montserrat',
                                ],
                                [
                                    'title' => 'fsize',
                                    'desc' => 'Size for the text',
                                    'default' => '-1 (Auto fill)',
                                ],
                            ];

                            ?>

                            <?php foreach($parameters as $parameter): ?>
                            <div>
                                <p>
                                    <span class="font-bold text-purple-400"><?= $parameter['title'] ?></span>
                                    ➜ <?= $parameter['desc'] ?>&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold"><?= $parameter['default'] ?></span></span>
                                </p>
                            </div>
                            <?php endforeach; ?>

                        </div>

                        <!--Examples-->
                        <div>
                            <?php

                            $examples = [
                                [
                                    'title' => 'Simple "Alexis Hayat" Icon request 400px:',
                                    'link' => 'https://placeholdpic.com/i/400/Alexis+Hayat',
                                ],
                                [
                                    'title' => 'Simple "Alexis Hayat" Icon request with a purple background 400px:',
                                    'link' => 'https://placeholdpic.com/i/400/Alexis+Hayat?bg=A855F7',
                                ],
                                [
                                    'title' => 'Simple "Alexis Hayat" Icon request with a purple background and a white text 400px:',
                                    'link' => 'https://placeholdpic.com/i/400/Alexis+Hayat?bg=A855F7&text=FFF',
                                ],
                                [
                                    'title' => 'Simple "Alexis Hayat" Icon request 500px with a custom font, a custom text size and a purple text:',
                                    'link' => 'https://placeholdpic.com/i/500/Alexis+Hayat?font=http%3A%2F%2Fplaceholdpic.com%2Ffonts%2FFira.ttf&fsize=200&text=6B21A8',
                                ],
                            ];

                            ?>


                            <p class="font-bold text-lg mb-4">Examples:</p>

                            <?php foreach($examples as $example): ?>
                            <div class="mb-20">
                                <p class="font-bold"><?= $example['title'] ?></p>
                                <div class="bg-white h-0.5 w-1/4 mb-8 mt-2"></div>
                                <div class="flex justify-start items-center mt-1 flex-col lg:flex-row">
                                    <img class="h-24 mr-10 purple-shadow mb-4 lg:mb-0" alt="Example" src="<?= $example['link'] ?>">
                                    <p class="text-purple-400"><a href="<?= $example['link'] ?>" target="_blank" class="whitespace-breakspaces wrap-all"><?= $example['link'] ?></a></p>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>

            </div>

            <br><br>

            <!--Creation-->
            <div class="shadow-lg bg-gray-200">

                <div class="flex justify-center items-center text-lg bg-purple-700 pr-4">
                    <p class="text-white py-3 text-center">Create your own link</p>
                </div>

                <div class="bg-gray-900 text-white py-10 px-6 flex flex-col">

                    <!--Form & Preview-->
                    <div class="flex justify-around mb-10 flex-col md:flex-row">
                        <div class="flex-1 px-4">
                            <p class="font-bold text-lg">Fill these following fields in order to create your link:</p>
                            <div class="bg-white h-0.5 w-1/4 mb-8 mt-2"></div>

                            <!--Inputs-->
                            <div class="mb-8">
                                <p>Image dimensions</p>
                                <div class="flex justify-between items-center">
                                    <input type="number" name="width" data-default="600" placeholder="Width" class="form-input outline-none text-black py-2 px-2 w-5/12">
                                    <span class="mx-2">x</span>
                                    <input type="number" name="height" data-default="400" placeholder="Height" class="form-input outline-none text-black py-2 px-2 w-5/12">
                                </div>
                            </div>
                            <div class="mb-8 w-full">
                                <p>Text Content</p>
                                <div>
                                    <input type="text" name="content" placeholder="Text" data-default="%dimensions%" class="form-input outline-none text-black py-2 px-2 w-full">
                                </div>
                            </div>
                            <div class="mb-8 flex justify-start">
                                <div class="">
                                    <p>Background Color</p>
                                    <div>
                                        <input type="color" id="bgColor" name="bgColor" data-default="#e0e0e0" value="#e0e0e0" class="form-input form-input--color outline-none">
                                        <label for="bgColor" class="text-gray-500 italic">#e0e0e0</label>
                                    </div>
                                </div>
                                <div class="ml-10">
                                    <p>Text Color</p>
                                    <div>
                                        <input type="color" id="textColor" name="textColor" data-default="#333333" value="#333333" class="form-input form-input--color outline-none">
                                        <label for="textColor" class="text-gray-500 italic">#333333</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8 flex justify-between w-full">
                                <div class="mr-2" style="flex: 5;">
                                    <p>Font url</p>
                                    <div class="relative">
                                        <input type="text" data-active="select_url" name="fontUrl" placeholder="Font Url (Only .ttf)" data-default="https://placeholdpic.com/fonts/Montserrat.ttf" class="select_input form-input outline-none text-black py-2 px-2 w-full">
                                        <div id="select_url" class="absolute bg-gray-50 py-3 px-2 w-full hidden">
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/Montserrat.ttf">Montserrat</p>
                                            <div class="bg-black w-full my-4" style="height: 1px;"></div>
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/OpenSans.ttf">OpenSans</p>
                                            <div class="bg-black w-full my-4" style="height: 1px;"></div>
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/Raleway.ttf">Raleway</p>
                                            <div class="bg-black w-full my-4" style="height: 1px;"></div>
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/Roboto.ttf">Roboto</p>
                                            <div class="bg-black w-full my-4" style="height: 1px;"></div>
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/ZenDots.ttf">ZenDots</p>
                                            <div class="bg-black w-full my-4" style="height: 1px;"></div>
                                            <p class="text-black cursor-pointer w-full" data-value="https://placeholdpic.com/fonts/Fira.ttf">Fira</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-2" style="flex: 1;">
                                    <p>Font Size</p>
                                    <div>
                                        <input type="number" name="fontSize" placeholder="Font Size" data-default="40" class="form-input outline-none text-black py-2 px-2 w-full" style="min-width: 90px;">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--Preview-->
                        <div class="flex-1 px-4">
                            <div class="preview xl:max-h-80 flex justify-center">
                                <img id="preview_img" src="https://placeholdpic.com/600x400?bg=e0e0e0&text=333333&font=https%3A%2F%2Fplaceholdpic.com%2Ffonts%2FMontserrat.ttf&fsize=40&content=%dimensions%" alt="preview" class="w-full h-80 object-contain">
                            </div>
                        </div>
                    </div>


                    <!--Btns-->
                    <div class="pt-6">
                        <p class="font-bold text-lg">Your link:</p>
                        <div class="bg-white h-0.5 w-1/4 mb-8 mt-2"></div>

                        <div class="mb-3">
                            <p id="create_link" class="font-bold whitespace-pre wrap-word">https://placeholdpic.com/<span id="create-width">600</span>x<span id="create-height">400</span>?<span class="whitespace-breakspaces">bg=<span
                                        id="create-bgColor">e0e0e0</span>&text=<span
                                        id="create-textColor">333333</span>&font=<span
                                        id="create-fontUrl">https://placeholdpic.com/fonts/Montserrat.ttf</span>&fsize=<span id="create-fontSize">40</span>&content=<span id="create-content">%dimensions%</span></span></p>
                        </div>

                        <br>

                        <div class="flex justify-between items-center mb-4 flex-col lg:flex-row">
                            <div class="flex justify-between items-center">
                                <a id="create-copy-btn" class="py-3 px-6 bg-purple-700 text-white cursor-pointer whitespace-nowrap">Copy Link</a>
                                <p class="mx-4">or</p>
                                <a id="create-select-btn" class="py-3 px-6 bg-purple-700 text-white cursor-pointer whitespace-nowrap">Select Link</a>
                            </div>
                            <a id="create-reset-btn" class="py-3 px-6 bg-indigo-900 text-white cursor-pointer whitespace-nowrap ml-2 mt-6 lg:mt-0">Reset Link</a>
                        </div>
                    </div>

                </div>
            </div>

        </main>

        <footer class="flex justify-center bg-purple-800 py-3 text-white text-lg">
            <div class="flex items-center">
                <p>
                    Made by&nbsp;<a href="https://azenox.fr" target="_blank" class="underline">AzenoX</a>
                </p>
                <p>&nbsp;-&nbsp;</p>
                <p>
                    See on <a href="https://github.com/AzenoX/placeholdpic.com" target="_blank"><svg id="github-svg" fill="#fff" class="ml-1 h-10 inline" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                </p>
            </div>
        </footer>
    </body>
</html>
