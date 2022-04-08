<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Linktree - Laravel</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/linktree.svg') }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="bg-white">

        <!-- home section -->
        <section>

            <div class="container max-w-screen-xl mx-auto px-4 mt-8">

                <nav class="flex-wrap lg:flex items-center justify-between mb-20 lg:mb-40" x-data="{navbarOpen:false}">
                    <div class="flex items-center justify-between mb-10 lg:mb-0">
                        <img src="{{ asset('img/linktree.svg') }}" alt="Logo">

                        <button class="flex items-center justify-center border border-red-500 w-10 h-10 text-red-500 rounded-md outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:space-x-5" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

                        <li class="font-medium text-red-500 text-lg hover:text-red-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="{{ route('login') }}">Login in</a>
                        </li>

                       <li class="px-3 py-1 font-medium bg-red-500 text-white hover:bg-red-700 text-lg text-center rounded-md transition ease-linear duration-300">
                            <a href="{{ route('register') }}">Sign up free</a>
                       </li>
                    </ul>
                </nav>

                <header class="flex-col xl:flex-row flex justify-between">

                    <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
                        <h1 class="font-bold text-gray-700 text-3xl md:text-6xl leading-tight mb-10">The Only <br> Link You`ll <br> Ever Need</h1>

                        <p class="font-normal text-gray-500 text-sm md:text-lg mb-10">Connect audiences to all of your content with just one link</p>

                        <div class="flex items-center justify-center lg:justify-start">
                            <a href="{{ route('register') }}" class="px-8 py-3 bg-red-700 font-medium text-white text-md md:text-lg rounded-md hover:bg-red-900 transition ease-in-out duration-300 mr-14">Get started for free</a>
                        </div>
                    </div>

                    <div class="mx-auto xl:mx-0">
                        <img src="{{ asset('img/linktree-phone.webp') }}" style="height: 700px; margin-top: -100px" alt="Image">
                    </div>

                </header>

            </div> <!-- container.// -->

        </section>
        <!-- home section //end -->


        <section style="background: #ebe6ff;">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="flex flex-col xl:flex-row items-center justify-between">
                    <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                        <img src="{{ asset('img/linktree-image.png') }}" alt="Image">
                    </div>

                    <div class="mx-auto xl:mx-0 text-center xl:text-left">
                        <h1 class="font-bold text-gray-700 text-3xl md:text-4xl mb-10">Design is our most intense <br> process</h1>

                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat <br> non proident, sunt in culpa qui officia deserunt mollit anim id est <br> laborum.</p>

                        <a href="#" class="flex items-center justify-center xl:justify-start font-semibold text-red-500 text-lg gap-3 hover:text-red-700 transition ease-in-out duration-300">
                            See more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div> <!-- container.// -->

        </section>


        <footer class="bg-red-50 py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="lg:flex flex-col md:flex-row text-center lg:text-left lg:justify-between">
                    <div class="mb-10 lg:mb-0">
                        <img src="{{ asset('img/linktree.svg') }}" alt="Logo" class="mb-5 mx-auto lg:mx-0">

                        <p class="font-normal text-gray-400 text-md">Excepteur sint occaecat cupidatat non <br> proident, sunt in culpa qui officia deserunt <br> mollit anim id est laborum.</p>
                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Our services</h4>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Pricing</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Animation</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Development</a>
                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Our Company</h4>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Reporting</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Get in Touch</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Management</a>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Our services</h4>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Cambridge, MA, Estados Unidos</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">000-000-00000</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">info@example.com</a>
                    </div>
                </div>

                <hr class="text-gray-300 mt-10">

                <p class="font-normal text-gray-400 text-md text-center mt-5">&copy; 2021 Digital Agency. All rights reserved.</p>

            </div> <!-- container.// -->

        </footer>

    </body>
</html>
