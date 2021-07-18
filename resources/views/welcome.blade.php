<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="container items-center">
    <div class="text-blueGray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
        <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
            <nav class="flex flex-wrap items-center justify-start text-base ">
                <ul class="items-center inline-block list-none lg:inline-flex">
                    <li>
                        <a href="#"
                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Contact</a>
                    </li>
                    <li>
                        <a href="#"
                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Services</a>
                    </li>
                    <li>
                        <a href="#"
                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Now</a>
                    </li>
                </ul>
            </nav>
            <a href="/" class=" justify-center focus:outline-none md:ml-auto md:mr-auto ">
                <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                    </div>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">
                        {{ config('app.name', 'Laravel') }} </h2>
                </div>
            </a>
            <div>

                @if (Route::has('login'))
                    <div>
                        @auth
                            <x-button-primary>
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </x-button-primary>
                        @else
                            <x-button-primary><a href="{{ route('login') }}">Log in</a></x-button-primary>

                            @if (Route::has('register'))
                                <x-button-primary>
                                    <a href="{{ route('register') }}">Register</a>
                                </x-button-primary>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


<section class="text-blueGray-700 ">
    <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
        <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
            <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Your tagline </h2>
            <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> Medium length
                display headline. </h1>
            <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 "> Deploy your mvp in minutes, not
                days. WT offers you a a wide selection swapable sections for your landing page. </p>
            <div class="flex flex-col justify-center lg:flex-row">
                <button
                    class="flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Show me
                </button>
                <p class="mt-2 text-sm text-left text-blueGray-600 md:ml-6 md:mt-0"> It will take you to candy shop. <br
                        class="hidden lg:block">
                    <a href="#"
                       class="inline-flex items-center font-semibold text-blue-600 md:mb-2 lg:mb-0 hover:text-black "
                       title="read more"> Read more about it » </a>
                </p>
            </div>
        </div>
        <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
            <img class="object-cover object-center rounded-lg " alt="hero"
                 src="https://dummyimage.com/720x600/F3F4F7/8693ac">
        </div>
    </div>
</section>

<section class="text-blueGray-700 ">
    <div class="container items-center px-5 py-8 mx-auto lg:px-24">
        <div class="flex flex-wrap mb-12 text-left">
            <div class="w-full mx-auto lg:w-1/3">
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="inline-flex justify-between w-full">
                        <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-black title-font">
                            Short headline. </h1>
                        <span>$00.00</span>
                    </div>
                    <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">You're about to launch
                        soon and must be 100% focused on your product. </p>
                </div>
            </div>
            <div class="w-full mx-auto lg:w-1/3">
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="inline-flex justify-between w-full">
                        <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-black title-font">
                            Short headline. </h1>
                        <span>$00.00</span>
                    </div>
                    <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">You're about to launch
                        soon and must be 100% focused on your product. </p>
                </div>
            </div>
            <div class="w-full mx-auto lg:w-1/3">
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="inline-flex justify-between w-full">
                        <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-black title-font">
                            Short headline. </h1>
                        <span>$00.00</span>
                    </div>
                    <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">You're about to launch
                        soon and must be 100% focused on your product. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container items-center px-5 py-12 lg:px-20">
    <div class="flex flex-wrap ">
        <div class="w-full mx-auto my-4 bg-white border rounded-lg shadow-xl lg:w-1/4">
            <div class="p-6 text-center">
                <img alt="team"
                     class="flex-shrink-0 object-cover object-center w-16 h-16 mx-auto -mt-12 rounded-full shadow-xl aboslute"
                     src="https://storage.googleapis.com/indie-hackers.appspot.com/avatars/300x300_DUFTlhOdmSdoT9F4r1Woo40pyML2.webp">
                <h2 class="pt-4 mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> great info
                    right here</h2>
                <h4 class="mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font ">
                    Note</h4>
                <p class="mb-3 text-base leading-relaxed text-blueGray-500"> If any Environment Variables values are
                    changed between Deployments, deduplication will always be bypassed. </p>
                <p></p>
            </div>
        </div>
    </div>
</div>

<section class="text-blueGray-700 ">
    <div class="container items-center px-5 py-12 lg:px-16">
        <div class="flex flex-wrap items-center justify-center w-full gap-4">
            <div class="w-full xl:w-1/4 md:w-2/6">
                <div
                    class="relative flex flex-col h-full transition duration-500 ease-in-out transform bg-white border rounded-lg shadow-xl">
                    <img class="object-cover object-center w-full rounded-t-lg lg:h-44 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="p-6">
                        <h2 class="mb-4 text-sm font-medium tracking-widest text-blueGray-700 uppercase title-font">
                            Sponsorships </h2>
                        <strong class="flex items-end mb-8 text-3xl font-black leading-none text-black lg:text-4xl ">
                            $10 <span class="text-sm"> /mo </span>
                        </strong>
                        <p class="flex items-center mb-4 text-base font-medium leading-relaxed text-blueGray-700">
                            You're about to launch soon and must be 100% focused on your product. </p>
                        <button role="button"
                                class="w-full px-4 py-2 mt-6 text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-2/6">
                <div
                    class="relative flex flex-col h-full transition duration-500 ease-in-out transform bg-white border rounded-lg shadow-xl ">
                    <img class="object-cover object-center w-full lg:h-44 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="p-6">
                        <h2 class="mb-4 text-sm font-medium tracking-widest text-blueGray-700 uppercase title-font">
                            Sponsorships </h2>
                        <strong class="flex items-end mb-8 text-3xl font-black leading-none text-black lg:text-4xl ">
                            $50 <span class="text-sm"> /mo </span>
                        </strong>
                        <p class="flex items-center mb-4 text-base font-medium leading-relaxed text-blueGray-700">
                            You're about to launch soon and must be 100% focused on your product. </p>
                        <button role="button"
                                class="w-full px-4 py-2 mx-auto mt-6 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md items-centerw-full focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700 ">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-2/6">
                <div
                    class="relative flex flex-col h-full transition duration-500 ease-in-out transform bg-white border rounded-lg shadow-xl">
                    <img class="object-cover object-center w-full rounded-t-lg lg:h-44 md:h-36"
                         src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                    <div class="p-6">
                        <h2 class="mb-4 text-sm font-medium tracking-widest text-blueGray-700 uppercase title-font">
                            Sponsorships </h2>
                        <strong class="flex items-end mb-8 text-3xl font-black leading-none text-black lg:text-4xl ">
                            $10 <span class="text-sm"> /mo </span>
                        </strong>
                        <p class="flex items-center mb-4 text-base font-medium leading-relaxed text-blueGray-700">
                            You're about to launch soon and must be 100% focused on your product. </p>
                        <button role="button"
                                class="w-full px-4 py-2 mt-6 text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container items-center ">
    <footer class="text-blueGray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
        <div
            class="container flex flex-col flex-wrap p-8 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap ">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                    <div class="inline-flex items-center">
                        <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                        </div>
                        <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">{{ config('app.name', 'Laravel') }}</h2>
                    </div>
                </a>
            </div>
            <div class="flex flex-wrap flex-grow mt-8 -mb-10 text-left md:pl-20 md:mt-0 ">
                <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                    <h1 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">
                        Product </h1>
                    <nav class="mb-10 space-y-4 list-none">
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Email
                                Templates</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Web
                                Templates</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Figma
                                Files</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Sketch
                                Files</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                    <h1 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">
                        Company </h1>
                    <nav class="mb-10 space-y-4 list-none">
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Home</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">About</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Carriers</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Pricing</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                    <h1 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Legal </h1>
                    <nav class="mb-10 space-y-4 list-none">
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Privacy
                                Policy</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Terms
                                Of Service</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Trademark
                                Policy</a>
                        </li>
                        <li>
                            <a class=" mr-1 text-sm text-blueGray-500 transition duration-500 ease-in-out transform rounded-sm focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Inactivity
                                Policy</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="w-full px-8 mt-4 rounded-b-lg bg-blueGray-50">
            <div class="container flex flex-col flex-wrap px-5 py-6 mx-auto sm:flex-row">
                <p class="text-sm text-center text-black sm:text-left ">© 2021 </p>
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a class="text-blue-500 hover:text-black">
                      <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-3 text-blue-500 hover:text-black">
                      <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                      </svg>
                    </a>
                    <a class="ml-3 text-blue-500 hover:text-black">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                      </svg>
                    </a>
                    <a class="ml-3 text-blue-500 hover:text-black">
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                      </svg>
                    </a>
                  </span>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
