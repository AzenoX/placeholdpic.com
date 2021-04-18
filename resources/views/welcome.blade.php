<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PlaceholdPic.com</title>

        <!--Montserrat-->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        <header class="bg-gradient-to-tr from-purple-700 to-purple-800 p-32 mb-20">
            <h1 class="text-5xl text-white font-bold text-center">Placehol<span style="letter-spacing: -12px" class="mr-3">dP</span>ic.com</h1>
            <p class="text-gray-300 text-xl text-center font-thin">Image placeholders for your website</p>
        </header>

        <main class="xl:mx-60 pb-20">
            <h2 class="font-bold text-2xl">Explore Endpoints</h2>
            <br>

            <div class="shadow-lg">

                <div class="flex justify-between items-center text-lg bg-gray-200 pr-4">
                    <div class="bg-yellow-600 py-3 px-7 text-white font-bold">GET</div>
                    <div>/<span class="font-bold">WIDTH</span>x<span class="font-bold">HEIGHT</span></div>
                </div>

                <div class="bg-gray-800 text-white py-6 px-3">

                    <!--Parameters-->
                    <div class="mb-10">
                        <p class="font-bold text-lg mb-4">Optional Parameters:</p>
                        <div>
                            <span class="font-bold text-purple-400">bg</span>
                            ➜ Hexadecimal color for background&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold">e0e0e0</span></span>
                        </div>

                        <div>
                            <span class="font-bold text-purple-400">text</span>
                            ➜ Hexadecimal color for text&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold">333333</span></span>
                        </div>

                        <div>
                            <span class="font-bold text-purple-400">font</span>
                            ➜ Url for a custom font.<span>Only .ttf</span>&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold">Montserrat</span></span>
                        </div>

                        <div>
                            <span class="font-bold text-purple-400">fsize</span>
                            ➜ Size for the text&nbsp;<span class="italic text-gray-400 text-purple-400">Default: <span class="font-bold">40</span></span>
                        </div>
                    </div>

                    <!--Examples-->
                    <div>
                        <p class="font-bold text-lg mb-4">Examples:</p>

                        <div class="mb-3">
                            <p class="font-bold">Simple Image request 600x400:</p>
                            <p class="text-purple-400"><a href="https://placeholdpic.com/600x400" target="_blank">https://placeholdpic.com/600x400</a></p>
                        </div>

                        <div class="mb-3">
                            <p class="font-bold">Simple Image request 600x400 with a purple background:</p>
                            <p class="text-purple-400"><a href="https://placeholdpic.com/600x400?bg=6D28D9" target="_blank">https://placeholdpic.com/600x400?bg=6D28D9</a></p>
                        </div>

                        <div class="mb-3">
                            <p class="font-bold">Simple Image request 600x400 with a purple background and light text:</p>
                            <p class="text-purple-400"><a href="https://placeholdpic.com/600x400?bg=6D28D9&text=e0e0e0" target="_blank">https://placeholdpic.com/600x400?bg=6D28D9&text=e0e0e0</a></p>
                        </div>

                        <div class="mb-3">
                            <p class="font-bold">Simple Image request 700x300 with a custom font and a custom text size:</p>
                            <p class="text-purple-400"><a href="https://placeholdpic.com/700x300?font=http%3A%2F%2Fplaceholdpic.com%2FZenDots.ttf&fsize=70" target="_blank">https://placeholdpic.com/700x300?font=http%3A%2F%2Fplaceholdpic.com%2FZenDots.ttf&fsize=70</a></p>
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
                    See on <a href="" target="_blank"><svg id="github-svg" fill="#fff" class="ml-1 h-10 inline" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                </p>
            </div>
        </footer>
    </body>
</html>
