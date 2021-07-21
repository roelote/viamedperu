<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Viamed Peru - @yield('title')</title>
        <meta name="description" content="@yield('description')" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#515d60">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M7XLD8MC7Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M7XLD8MC7Q');
</script>

    </head>
    <body>

        <div class="headertop">
            <div class="top-header bg-viamed-400">
                <div class="container flex justify-between mx-auto">
                    <div class="text-white"></div>
                    <div class="text-white my-1 mx-3"><small>Apv. Los Olivos de la Paz A-10 | San Jeronimo - Cusco - Peru</small><small> | Tef. +51 942727638</small>  </div>
                </div>
            </div>
        </div>

    <div class="sticky banner-wrapper top-0 z-50 bg-white border-b-2">
        <header x-data="{ mobileMenuOpen : false }" class="banner flex flex-wrap flex-row justify-between md:items-center md:space-x-4 bg-white py-2 px-6 relative max-w-7xl mx-auto">
            <a href="{{ route('home') }}" class="block">
            <span class="sr-only">Viamed Peru</span>
            <div>
                <img class="w-20 inline-block" src="{{ asset('img/logo-viamed.jpg') }}" alt="logo viamed"  title="logo viamed">
                <small class="text-base font-rochester  sm:inline-block hidden">
                    ¡Cuidamos tus Viajes, Cuidamos tu Vida!
                 </small>
            </div>
            </a>


            <button  @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-12 h-12 bg-gray-200 text-gray-600 p-1 mt-5">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <nav class="border z-50 sm:border-transparent absolute md:relative top-24 left-0 md:top-0  md:flex flex-col md:flex-row md:space-x-6 font-semibold w-full md:w-auto bg-white shadow-md md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
            :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false"
            >
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase" >Inicio</a>
                <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase">Nosotros</a>
                <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase">Servicios</a>
                <a href="{{ route('unidades') }}" class="{{ request()->routeIs('unidades') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase">Nuestras Unidades</a>
                <a href="{{ route('politicas') }}" class="{{ request()->routeIs('politicas') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase">Politicas</a>
                <a href="{{ route('contactanos') }}" class="{{ request()->routeIs('contactanos') ? 'active-menu' : '' }} text-viamed-700 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum font-semibold uppercase">Contactenos</a>
                <a href="{{ route('covid') }}" class="text-white font-extrabold bg-red-500 hover:bg-viamed-500 hover:text-white px-3 py-2 rounded-md text-base font-cuprum uppercase">COVID 19</a>
            </nav>
        </header>
    </div>

        @yield('content')

        <section class="border border-gray-100">
                <div class="container max-w-7xl">
                    <div class="flex flex-wrap overflow-hidden xl:-mx-1">
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/indicopi-logo.jpg') }}" alt="">
                        </div>
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/innovate-logo.jpg') }}" alt="">
                        </div>
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/mincetur-logo.jpg') }}" alt="">
                        </div>
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/mtc-logo.jpg') }}" alt="">
                        </div>
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/sutran-logo.jpg') }}" alt="">
                        </div>
                        <div class="w-1/3 overflow-hidden sm:w-1/3 md:w-1/3 xl:my-1 xl:w-1/6 px-5 sm:px-7">
                            <img src="{{ asset('img/marcas/safetravels.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
        </section>
        <footer class=" bg-viamed-500 ">
            <div class="container max-w-7xl">
            <div class="flex flex-col sm:py-10 py-5">

                <div class="mt-4 flex flex-wrap overflow-hidden sm:-mx-3 md:-mx-3 xl:-mx-1">
                    <div class=" w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 xl:my-1 xl:px-1 xl:w-1/3 justify-end md:border-r border-gray-100">
                        <div>

                            <ul class="text-center sm:text-right sm:pr-5 pr-0">
                                <li class="text-white"><a aria-current="page" href="{{ route('nosotros') }}" class="hover:text-white font-cuprum tracking-wider">
                                    Nosotros
                                </a></li>
                                <li class="text-white"><a aria-current="page" href="{{ route('servicios') }}" class="hover:text-white font-cuprum tracking-wider">
                                    Servicios
                                </a></li>
                                <li class="text-white"><a aria-current="page" href="{{ route('unidades') }}" class="hover:text-white font-cuprum tracking-wider">
                                    Nuestras Unidades
                                </a></li>
                                <li class="text-white"><a aria-current="page" href="{{ route('politicas') }}" class="hover:text-white font-cuprum tracking-wider">
                                    Politicas
                                </a></li>
                                <li class="text-white"><a aria-current="page" href="{{ route('contactanos') }}" class="hover:text-white font-cuprum tracking-wider">
                                    Contactenos
                                </a></li>
                                <li class="text-white"><a aria-current="page" href="{{ route('covid') }}" class=" hover:text-white font-cuprum tracking-wider">
                                    Covid 19
                                </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 xl:my-1 xl:px-1 xl:w-1/3 justify-center md:border-r border-gray-100">
                        <div class="flex items-center justify-center">
                            <div class="border bg-white rounded-2xl p-3">
                                <img src="{{ asset('img/logo-footer.png') }}" alt="">
                            </div>
                        </div>


                    </div>
                    <div class=" w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 xl:my-1 xl:px-1 xl:w-1/3 items-center justify-center md:items-start md:pl-5">
                        <ul class="ml-0 sm:ml-5 text-center sm:text-left">
                            <li class="text-white font-cuprum tracking-wider underline">Teléfono</li>
                            <li class="text-white font-cuprum tracking-wider">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                  </svg>
                                <a href="tel:51-942-727-638" >+51 942 727 638</a>
                            </li>
                            <li class="text-white font-cuprum tracking-wider underline">Email</li>
                            <li class="text-white font-cuprum tracking-wider">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                                <a href="mailto:reserve@viamedperu.com">reserve@viamedperu.com</a>
                            </li>
                            <li class="text-white font-cuprum tracking-wider underline">Dirección</li>
                            <li class="text-white font-cuprum tracking-wider">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>
                                Apv. Los Olivos de la Paz A-10 - San Jeronimo</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-white mt-5 text-gray-900 text-center">
            <small>Todos los derechos reservados © Dpt. de desarrollo Viamed Peru <?=date("Y")?> .</small>
        </div>
        </footer>

        <script src="{{ mix('/js/app.js') }}"></script>
         @stack('scripts')

         <!-- GetButton.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+51 942727638", // WhatsApp number
                    call_to_action: "Envíanos un mensaje", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                    pre_filled_message: "Hola, quisiera información.", // WhatsApp pre-filled message
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /GetButton.io widget -->

    </body>
</html>
