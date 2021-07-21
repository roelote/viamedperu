@extends('layouts.app2')


@section('title', 'Transporte Turisco en todo el Perú - Transporte Lujo')
@section('description','Somos una empresa dedicada a brindar el servicio de transporte turístico, con 6 años de experiencia en la región del Cusco.')

@section('content')


        <section class="sm:hidden block">
            <div class="h-96" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})">
            </div>
        </section>

        <section class="hidden sm:block">
            <section class="relative flex items-center justify-center h-96 sm:h-screen overflow-hidden">
                <div class="absolute h-full w-full z-20"></div>
                 <div class="relative z-30 p-5 text-2xl text-white bg-red-600 rounded-xl ">
                  <h2 class="font-cuprum sm:text-5xl text-3xl text-center "> NOS ADAPTAMOS AL CAMBIO</h2>
                </div>
                <video
                  autoplay
                  loop
                  muted
                    poster="{{ asset('img/home-viamed.jpg') }}"
                  class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
                  <source src="{{ asset('media/video-home.mp4') }}" type="video/mp4" />
                  Su navegador no soporta el video.
                </video>
              </section>
        </section>

        <section class="border-b  border-gray-100  py-10 sm:py-32">

            <div class="container mx-auto max-w-7xl">
                    <div class="flex flex-wrap-reverse">
                        <div class="w-max sm:w-1/2 px-4">
                            <img class="shadow-2xl rounded-md" src="{{ asset('img/nosotros.jpg') }}" alt="">
                        </div>
                        <div class="w-max sm:w-1/2 px-4 mb-3">
                            <h1 class="font-cuprum text-4xl text-center font-medium my-3">VIAMED PERU</h1>
                            <span class="w-20 block h-1 bg-viamed-500 mx-auto -mt-2"></span>
                            <p class="text-gray-600 tracking-wide text-lg text-justify my-4">VIAMED PERU es una empresa dedicada a brindar el servicio de transporte turístico, con años de experiencia en la región del Cusco. Nuestro servicio personalizado hace que Ud. se pueda sentir en confianza, este como en casa y disfrutar de su estadía en nuestro país de la mejor manera.</p>
                            <br>
                            <div class="text-center mb-4">
                                <a href="{{ route('nosotros') }}" class="my-1 inline-flex items-center h-10 px-5 text-white transition-colors duration-150 bg-red-700 rounded-sm focus:shadow-outline hover:bg-red-800">
                                    <svg class="w-4 h-4 mr-3 fill-current" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                    <span>Sobre Nosotros</span>
                                </a>

                                <a href="{{ route('contactanos') }}" class="my-1 inline-flex items-center h-10 px-5 text-white transition-colors duration-150 bg-red-700 rounded-sm focus:shadow-outline hover:bg-red-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                      </svg>
                                    <span>Contactenos</span>
                                </a>

                            </div>
                        </div>
                    </div>
            </div>

        </section>
        <section class="bg-viamed-500 pb-5 pt-5 sm:pb-10 sm:pt-10">
            <div class="container max-w-7xl">
                <div class="my-5 sm:my-10">
                    <h3 class="text-center text-white font-cuprum text-3xl mb-3">¿POR QUE ELEGIRNOS?</h3>
                    <span class="w-20 block h-1 bg-white mx-auto -mt-2"></span>
                </div>

                <div class="swiper-container valores py-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="p-3 bg-white rounded-md shadow-md">
                                <img class="w-14 mx-auto py-1 my-2 border-b-2 border-red-500" src="{{ asset('img/recompensa.svg') }}" alt="">
                                <h6 class="text-xl font-semibold text-center font-cuprum"> PROFESIONALISMO </h6>
                                {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Responsabilidad / Disciplina </p> --}}
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="p-3 bg-white rounded-md shadow-md">
                                <img class="w-14 mx-auto py-1 my-2 border-b-2 border-viamed-500" src="{{ asset('img/honestidad.svg') }}" alt="">
                                <h6 class="text-xl font-semibold text-center font-cuprum"> RESPETO Y INTEGRIDAD </h6>
                                {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Responsabilidad / Disciplina </p> --}}
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="p-3 bg-white rounded-md shadow-md">
                                <img class="w-14 mx-auto py-1 my-2 border-b-2 border-red-500" src="{{ asset('img/innovacion.svg') }}" alt="">
                                <h6 class="text-xl font-semibold text-center font-cuprum"> INNOVACION </h6>
                                {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Responsabilidad / Disciplina </p> --}}
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="p-3 bg-white rounded-md shadow-md">
                                <img class="w-14 mx-auto py-1 my-2 border-b-2 border-viamed-500" src="{{ asset('img/team.svg') }}" alt="">
                                <h6 class="text-xl font-semibold text-center font-cuprum"> TRABAJO EN EQUIPO </h6>
                                {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Responsabilidad / Disciplina </p> --}}
                            </div>
                          </div>

                      <div class="swiper-slide">
                        <div class="p-3 bg-white rounded-md shadow-md">
                            <img class="w-14 mx-auto py-1 my-2 border-b-2 border-red-500" src="{{ asset('img/experiencia.svg') }}" alt="">
                            <h6 class="text-xl font-semibold text-center font-cuprum"> EXPERIENCIA </h6>
                            {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Responsabilidad / Disciplina </p> --}}
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="p-3 bg-white rounded-md shadow-md">
                            <img class="w-14 mx-auto py-1 my-2 border-b-2 border-viamed-500" src="{{ asset('img/calidad.svg') }}" alt="">
                            <h6 class="text-xl font-semibold text-center font-cuprum">SERVICIO DE CALIDAD</h6>
                            {{-- <p class="mt-2 mb-4 text-gray-700 text-center">A todo, a todos y por todos  </p> --}}
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="p-3 bg-white rounded-md shadow-md">
                            <img class="w-14 mx-auto py-1 my-2 border-b-2 border-red-500" src="{{ asset('img/confort.svg') }}" alt="">
                            <h6 class="text-xl font-semibold text-center font-cuprum">COMODIDAD Y CONFORT</h6>
                            {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Hacer y ser mejores </p> --}}
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="p-3 bg-white rounded-md shadow-md">
                            <img class="w-14 mx-auto py-1 my-2 border-b-2 border-viamed-500" src="{{ asset('img/carros.svg') }}" alt="">
                            <h6 class="text-xl font-semibold text-center font-cuprum">UNIDADES MODERNAS</h6>
                            {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Divide el trabajo y multiplica </p> --}}
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="p-3 bg-white rounded-md shadow-md">
                            <img class="w-14 mx-auto py-1 my-2 border-b-2 border-red-500" src="{{ asset('img/seguro-de-coche.svg') }}" alt="">
                            <h6 class="text-xl font-semibold text-center font-cuprum">SEGURIDAD</h6>
                            {{-- <p class="mt-2 mb-4 text-gray-700 text-center">Divide el trabajo y multiplica </p> --}}
                        </div>
                      </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    {{-- <div class="swiper-pagination"></div> --}}
                  </div>
                  <div class="text-center mt-5">
                    <a href="{{ route('nosotros') }}#por-que-elegirnos" class="text-white block mx-auto hover:underline"><span>Saber más sobre nosotros </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                      </svg>
                    </a>
                  </div>
            </div>
        </section>

        <section class="py-10">

            <div class="container max-w-7xl ">

                <div class="flex flex-wrap sm:-mx-2">
                    <div class="w-full overflow-hidden px-3 xl:my-2 sm:px-2 sm:w-1/3 mb-4">
                        <h1 class="font-cuprum text-3xl text-center font-semibold my-3 text-red-700">NUESTRAS UNIDADES</h1>
                        <span class="w-20 block h-1 bg-gray-300 mx-auto -mt-2"></span>
                            <div class="my-5">
                                <p class="text-gray-600 text-lg text-justify my-4">
                                    Contamos con unidades modernas, cómodas, seguras y con diseños de vanguardia, garantizamos un servicio único con el compromiso de ofrecer: Innovación, Confort y Soluciones con servicios de excelencia adaptando nuestro recurso a las necesidades de nuestros clientes.
                                    </p>
                                    <ul class="text-gray-600 tracking-wide text-lg text-justify list-inside list-disc">
                                        <li>Hyundai Elantra</li>
                                        <li>Toyota Rav4</li>
                                        <li>Toyota Fortuner</li>
                                        <li>Hyundai Elantra H1</li>
                                        <li>Renault Master Minibus</li>
                                        <li>SPC (Mercedes-Benz)</li>
                                        <li>SPL (Mercedes –Benz)</li>
                                    </ul>

                            </div>
                         <div class="text-center">
                            <a href="{{ route('unidades') }}" class="inline-flex items-center h-10 px-5 text-white transition-colors duration-150 bg-red-700 rounded-sm focus:shadow-outline hover:bg-red-800">
                                <span>🡺 Ver Unidades</span>
                              </a>

                        </div>

                    </div>
                    <div class="w-full overflow-hidden xl:my-2 sm:px-2 sm:w-2/3 px-3">
                        <div class="swiper-container mySwiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/renault-master.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/rav-4.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/hyundai-elantra.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/mercedes-corta.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/toyota-fortuner.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/h1.jpg') }}" />
                          </div>
                          <div class="swiper-slide">
                            <img class="w-full" src="{{ asset('img/autos/mercedes-larga.jpg') }}" />
                          </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                       <div thumbsSlider="" class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/renault-master.jpg') }}" />
                          </div>
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/rav-4.jpg') }}" />
                          </div>
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/hyundai-elantra.jpg') }}" />
                          </div>
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/mercedes-corta.jpg') }}" />
                          </div>
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/h1.jpg') }}" />
                          </div>
                          <div class="swiper-slide mt-1 border">
                            <img src="{{ asset('img/autos/mercedes-larga.jpg') }}" />
                          </div>

                        </div>
                      </div>
                    </div>
                </div>

            </div>



        </section>
        <section class="bg-gray-50 my-5 sm:py-10">
            <div class="container max-w-7xl">
                <h2 class="font-cuprum text-4xl text-center font-medium my-3 text-red-700">NUESTROS SERVICIOS</h2>
                <span class="w-20 block h-1 bg-viamed-500 mx-auto -mt-2"></span>

                <div class="grid sm:grid-cols-3 sm:gap-4 grid-cols-1 gap-2 px-3 my-10">

                    <div>
                        <article class="shadow-lg mx-auto relative max-w-md group cursor-pointer">
                            <a href="{{ route('servicios') }}#servicio-turistico">
                                <div class="overflow-hidden">
                                    <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/transporte-turistico-viamed.jpg') }}" alt="">
                                </div>
                                <div class="p-4 my-auto">
                                    <h3 class="text-xl font-semibold text-center text-gray-800 font-cuprum">
                                        SERVICIO TURISTICO
                                        </h3>
                                        <p class="text-gray-700 text-justify p-2">El servicio de Transporte Turístico, les ofrece distintas alternativas en todo el Perú. Siempre pensando en la estadía ....</p>
                                </div>
                                <div class="border-t py-4 text-center text-base text-gray-500 uppercase tracking-widest font-bold font-cuprum group-hover:text-red-600 bg-gray-50">
                                    Ver Información
                                </div>
                            </a>
                        </article>
                    </div>


                    <div>
                        <article class="shadow-lg mx-auto relative max-w-md group cursor-pointer">
                            <a href="{{ route('servicios') }}#servicio-lujo">
                                <div class="overflow-hidden">
                                    <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/transporte-de-lujo-viamed.jpg') }}" alt="">
                                </div>
                                <div class="p-4 my-auto">
                                    <h3 class="text-xl font-semibold text-center text-gray-800 font-cuprum">
                                        SERVICIO DE LUJO
                                        </h3>
                                        <p class="text-gray-700 text-justify p-2">ViamedPeru en su calidad de Empresa de Transporte Turístico, cuenta con un producto exclusivo y diferenciado..</p>
                                </div>
                                <div class="border-t py-4 text-center text-base text-gray-500 uppercase tracking-widest font-bold font-cuprum group-hover:text-red-600 bg-gray-50">
                                    Ver Información
                                </div>
                            </a>
                        </article>
                    </div>
                    <div>
                        <article class="shadow-lg mx-auto relative max-w-md group cursor-pointer">
                           <a href="{{ route('servicios') }}#servicio-corporativo">
                            <div class="overflow-hidden">
                                <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/servicio-corporativo-viamed.jpg') }}" alt="">
                            </div>
                            <div class="p-4 my-auto">
                                <h3 class="text-xl font-semibold text-center text-gray-800 font-cuprum">
                                    SERVICIO CORPORATIVO
                                    </h3>
                                    <p class="text-gray-700 text-justify p-2">El servicio de transporte corporativo que ofrece VIAMED PERU, se adapta a las necesidades de cada uno de nuestros clientes..</p>
                            </div>
                            <div class="border-t py-4 text-center text-base text-gray-500 uppercase tracking-widest font-bold font-cuprum group-hover:text-red-600 bg-gray-50">
                               Ver Información
                            </div>
                           </a>
                        </article>
                    </div>

                </div>
            </div>
        </section>

        <section class="pb-10">
            <div class="container max-w-7xl">
                <div class="my-8">
                    <h3 class="font-cuprum text-4xl text-center  font-medium uppercase">Nuestros Destinos</h3>
                    <p class="max-w-5xl text-center mx-auto">Conoce nuestros diferentes destinos por todo el Perú.</p>
                </div>

                <div class="grid sm:grid-cols-4 sm:gap-4 grid-cols-2 gap-2 px-3 my-10">
                    <div class="relative group">
                                <a href="{{ route('contactanos') }}">
                                    <div class="absolute top-0 bg-red-700 px-5 font-cuprum z-20 text-white text-xl group-hover:bg-viamed-500 rounded-br-md py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Cusco
                                    </div>
                                     <div class="overflow-hidden">
                                        <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/cusco-city-viamed.jpg') }}" alt="">
                                    </div>
                                </a>
                    </div>
                    <div class="relative group">
                        <a href="{{ route('contactanos') }}">
                            <div class="absolute top-0 bg-red-700 px-5 font-cuprum z-20 text-white text-xl group-hover:bg-viamed-500 rounded-br-md py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Lima
                            </div>
                             <div class="overflow-hidden">
                                <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/lima-city-viamed.jpg') }}" alt="">
                            </div>
                        </a>
            </div>
            <div class="relative group">
                <a href="{{ route('contactanos') }}">
                    <div class="absolute top-0 bg-red-700 px-5 font-cuprum z-20 text-white text-xl group-hover:bg-viamed-500 rounded-br-md py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Puno
                    </div>
                     <div class="overflow-hidden">
                        <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/puno-city-viamed.jpg') }}" alt="">
                    </div>
                </a>
                    </div>
                    <div class="relative group">
                        <a href="{{ route('contactanos') }}">
                            <div class="absolute top-0 bg-red-700 px-5 font-cuprum z-20 text-white text-xl group-hover:bg-viamed-500 rounded-br-md py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Arequipa
                            </div>
                            <div class="overflow-hidden">
                                <img class="w-full h-auto transform hover:scale-110 duration-200" src="{{ asset('img/arequipa-city-viamed.jpg') }}" alt="">
                            </div>
                        </a>
                </div>
                </div>
            </div>
        </section>



 @endsection

