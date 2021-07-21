@extends('layouts.app2')


@section('title', 'Nuestras Unidades')
@section('description','Contamos con la más alta tecnología de vehículos modernos y cómodos de diferentes capacidades, diseños hechos a la vanguardia que garantizan su servicio.')

@section('content')


<section class="flex items-center justify-center m-auto mb-5 bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">Nuestras Unidades</h1>
    </div>
   <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>

<section>
    <div class="container max-w-7xl">

        <div >
            <p class="text-gray-700 sm:text-left text-justify">Contamos con la más alta tecnología de vehículos modernos y cómodos de diferentes capacidades de hasta 45 pasajeros y diseños hechos a la vanguardia que garantizan un servicio único con altos estándares de calidad, seguridad y confort.</p>

            <p class="text-gray-700 py-2 sm:text-left text-justify"> Asimismo, como la seguridad es importante para nosotros, contamos de manera complementaria con un Seguro Contra Todo Riesgo de la empresa Pacíficos Seguros y lunas con protección impenetra para un mayor cuidado de nuestros pasajeros. Además de un permiso de circulación a nivel nacional y un sistema de GPS para un mejor control y seguimiento. </p>

            {{-- <img class="mx-auto" src="{{ asset('img/logos-pie.JPG') }}" alt=""> --}}
        </div>
    </div>
</section>

<section class="bg-gray-50 py-10">
    <div class="">

        <h2 class="font-cuprum text-5xl text-center font-semibold my-3 text-gray-700 uppercase"> catalogo de Unidades</h2>
        <span class="w-20 block h-1 bg-red-600 mx-auto -mt-2 my-2"></span>

        <div class="grid grid-cols-1 gap-6 my-10 sm:grid-cols-2 px-4">
            <div>
               <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                    <div class="relative sm:flex-1 flex-col">
                        <img class="w-full" src="{{ asset('img/autos/hyundai-elantra.jpg') }}" alt="">
                       <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded mr-1 mb-1 ">
                            Contáctenos
                          </a>
                       </div>
                    </div>

                    <div class="sm:flex-1 flex-col w-full">
                        <div class="">
                            <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum">NEW ELANTRA </h3>
                            <div class="table w-full text-base font-cuprum">
                                <div class="table-row-group">
                                      <div class="table-row border">
                                            <div class="table-cell py-1 border px-2">
                                            <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                                MARCA
                                            </div>
                                             <div class="table-cell py-1 border px-2">
                                               Hyundai
                                            </div>

                                      </div>
                                      <div class="table-row border border-gray-100">
                                        <div class="table-cell py-1 border px-2">
                                            <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                            MODELO
                                        </div>
                                        <div class="table-cell py-1 border px-2">
                                            New Elantra
                                        </div>
                                    </div>
                                  <div class="table-row border border-gray-100">
                                      <div class="table-cell py-1 border px-2">
                                        <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                            TIPO
                                      </div>
                                        <div class="table-cell py-1 border px-2">
                                            SEDAM
                                        </div>
                                    </div>
                                <div class="table-row border border-gray-100">
                                    <div class="table-cell py-1 border px-2">
                                        <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                        POTENCIA
                                    </div>
                                        <div class="table-cell py-1 border px-2">
                                            94,00@6300
                                        </div>
                                 </div>
                                 <div class="table-row border border-gray-100">
                                    <div class="table-cell py-1 border px-2">
                                        <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                        <div>
                                            <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                        </div>
                                    </div>
                                        <div class="table-cell py-1 border px-2">
                                            02 a 03 Pax
                                        </div>
                                 </div>
                                 <div class="table-row border border-gray-100">
                                    <div class="table-cell py-1 border px-2">
                                        <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                        <div>
                                            <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                        </div>


                                    </div>
                                        <div class="table-cell py-1 border px-2">
                                            02 Pasajeros, 01 Guía o Transfer

                                        </div>
                                 </div>
                                 <div class="table-row border border-gray-100">
                                    <div class="table-cell py-1 border px-2">
                                        <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                        <div>
                                            <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                        </div>


                                    </div>
                                        <div class="table-cell py-1 border px-2">
                                            Grandes:       01<br>
                                            Pequeñas:    02

                                        </div>
                                 </div>


                                </div>
                              </div>

                        </div>


                    </div>
                </article>
            </div>
            <div>
                <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                     <div class="relative sm:flex-1 flex-col">
                         <img class="w-full" src="{{ asset('img/autos/h1.jpg') }}" alt="">
                        <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded shadow   mr-1 mb-1 ">
                             Contáctenos
                           </a>
                        </div>
                     </div>

                     <div class="sm:flex-1 flex-col w-full">
                         <div class="">
                             <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum">H1/VAN </h3>
                             <div class="table w-full text-base font-cuprum">
                                 <div class="table-row-group">
                                       <div class="table-row border">
                                             <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                             MARCA
                                             </div>
                                              <div class="table-cell py-1 border px-2">
                                                Hyundai
                                             </div>

                                       </div>
                                       <div class="table-row border border-gray-100">
                                         <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                             MODELO
                                         </div>
                                         <div class="table-cell py-1 border px-2">
                                            H1
                                         </div>
                                     </div>
                                   <div class="table-row border border-gray-100">
                                       <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                             TIPO
                                       </div>
                                         <div class="table-cell py-1 border px-2">
                                            M/Bus
                                         </div>
                                     </div>
                                 <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                         POTENCIA
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            74,00@3800
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                         </div>
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            01 - 04 Pax
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            04 Pasajeros, 01 Guía o Transfer

                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            Grandes:     04<br>
                                            Pequeñas:    06

                                         </div>
                                  </div>


                                 </div>
                               </div>

                         </div>


                     </div>
                 </article>
             </div>
             <div>
                <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                     <div class="relative sm:flex-1 flex-col">
                         <img class="w-full" src="{{ asset('img/autos/renault-master.jpg') }}" alt="">
                        <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded shadow   mr-1 mb-1 ">
                             Contáctenos
                           </a>
                        </div>
                     </div>

                     <div class="sm:flex-1 flex-col w-full">
                         <div class="">
                             <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum">RENAULT/MASTER </h3>
                             <div class="table w-full text-base font-cuprum">
                                 <div class="table-row-group">
                                       <div class="table-row border">
                                             <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                                 MARCA
                                             </div>
                                              <div class="table-cell py-1 border px-2">
                                                Renault
                                             </div>

                                       </div>
                                       <div class="table-row border border-gray-100">
                                         <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                             MODELO
                                         </div>
                                         <div class="table-cell py-1 border px-2">
                                            Master
                                         </div>
                                     </div>
                                   <div class="table-row border border-gray-100">
                                       <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                             TIPO
                                       </div>
                                         <div class="table-cell py-1 border px-2">
                                            Microbus
                                         </div>
                                     </div>
                                 <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                         POTENCIA
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            95,45@3500
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                         </div>
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            01 – 08  Pax
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            09 Pasajeros,
                                            01 Guía o Transfer


                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                             Grandes:       06<br>
                                             Pequeñas:    10

                                         </div>
                                  </div>


                                 </div>
                               </div>

                         </div>


                     </div>
                 </article>
             </div>
             <div>
                <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                     <div class="relative sm:flex-1 flex-col">
                         <img class="w-full" src="{{ asset('img/autos/mercedes-larga.jpg') }}" alt="">
                        <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded shadow   mr-1 mb-1 ">
                             Contáctenos
                           </a>
                        </div>
                     </div>

                     <div class="sm:flex-1 flex-col w-full">
                         <div class="">
                             <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum uppercase">Sprinter Larga</h3>
                             <div class="table w-full text-base font-cuprum">
                                 <div class="table-row-group">
                                       <div class="table-row border">
                                             <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                                 MARCA
                                             </div>
                                              <div class="table-cell py-1 border px-2">
                                                Mercedes - Benz
                                             </div>

                                       </div>
                                       <div class="table-row border border-gray-100">
                                         <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                             MODELO
                                         </div>
                                         <div class="table-cell py-1 border px-2">
                                            Sprinter Larga
                                         </div>
                                     </div>
                                   <div class="table-row border border-gray-100">
                                       <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                             TIPO
                                       </div>
                                         <div class="table-cell py-1 border px-2">
                                            Minibus
                                         </div>
                                     </div>
                                 <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                         POTENCIA
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            11@3800
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                         </div>
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            01 – 18 Pax
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            18 Pasajeros, 01 Guía o Transfer

                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                             Grandes:       08<br>
                                             Pequeñas:    12

                                         </div>
                                  </div>


                                 </div>
                               </div>

                         </div>


                     </div>
                 </article>
             </div>

             <div>
                <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                     <div class="relative sm:flex-1 flex-col">
                         <img class="w-full" src="{{ asset('img/autos/mercedes-corta.jpg') }}" alt="">
                        <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded shadow   mr-1 mb-1 ">
                             Contáctenos
                           </a>
                        </div>
                     </div>

                     <div class="sm:flex-1 flex-col w-full">
                         <div class="">
                             <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum uppercase">Sprinter Corta</h3>
                             <div class="table w-full text-base font-cuprum">
                                 <div class="table-row-group">
                                       <div class="table-row border">
                                             <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                                 MARCA
                                             </div>
                                              <div class="table-cell py-1 border px-2">
                                                Mercedes - Benz
                                             </div>

                                       </div>
                                       <div class="table-row border border-gray-100">
                                         <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                             MODELO
                                         </div>
                                         <div class="table-cell py-1 border px-2">
                                            Sprinter Corta
                                         </div>
                                     </div>
                                   <div class="table-row border border-gray-100">
                                       <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                             TIPO
                                       </div>
                                         <div class="table-cell py-1 border px-2">
                                            Minibus
                                         </div>
                                     </div>
                                 <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                         POTENCIA
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            11@3800
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                         </div>
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            01 – 12 Pax
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            12 Pasajeros, 01 Guía o Transfer

                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                             Grandes:       06<br>
                                             Pequeñas:    10

                                         </div>
                                  </div>


                                 </div>
                               </div>

                         </div>


                     </div>
                 </article>
             </div>



             <div>
                <article class="flex flex-wrap md:flex-nowrap border mx-auto  group cursor-pointer transform duration-500 hover:-translate-y-1">
                     <div class="relative sm:flex-1 flex-col">
                         <img class="w-full" src="{{ asset('img/autos/rav-4.jpg') }}" alt="">
                        <div class="absolute bottom-4 left-1">
                         <a href="https://api.whatsapp.com/send/?phone=%2B51942727638&text=Por+favor+informaci%C3%B3n." class="bg-red-600 text-white font-bold uppercase text-sm px-6 py-3 rounded shadow   mr-1 mb-1 ">
                             Contáctenos
                           </a>
                        </div>
                     </div>

                     <div class="sm:flex-1 flex-col w-full">
                         <div class="">
                             <h3 class="text-4xl font-semibold text-red-700 my-3 text-center font-cuprum uppercase"> RAV 4 </h3>
                             <div class="table w-full text-base font-cuprum">
                                 <div class="table-row-group">
                                       <div class="table-row border">
                                             <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/brand.svg') }}" alt="">
                                                 MARCA
                                             </div>
                                              <div class="table-cell py-1 border px-2">
                                                Toyota
                                             </div>

                                       </div>
                                       <div class="table-row border border-gray-100">
                                         <div class="table-cell py-1 border px-2">
                                             <img class="w-5  inline-block" src="{{ asset('img/detalles/price-tag.svg') }}" alt="">
                                             MODELO
                                         </div>
                                         <div class="table-cell py-1 border px-2">
                                            RAV4
                                         </div>
                                     </div>
                                   <div class="table-row border border-gray-100">
                                       <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/volante.svg') }}" alt="">
                                             TIPO
                                       </div>
                                         <div class="table-cell py-1 border px-2">
                                            CAMIONETA
                                         </div>
                                     </div>
                                 <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  inline-block" src="{{ asset('img/detalles/motor-del-coche.svg') }}" alt="">
                                         POTENCIA
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                           -
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5  float-left mr-1" src="{{ asset('img/detalles/manten-distancia.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD PASAJEROS</span>
                                         </div>
                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            02 a 03 Pax
                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/asientos-de-cine.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block"> CAPACIDAD ASIENTOS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                            03 Pasajeros, 01 Guía o Transfer

                                         </div>
                                  </div>
                                  <div class="table-row border border-gray-100">
                                     <div class="table-cell py-1 border px-2">
                                         <img class="w-5 float-left mr-1" src="{{ asset('img/detalles/maleta.svg') }}" alt="">
                                         <div>
                                             <span class="overflow-hidden block">CAPACIDAD MALETAS</span>
                                         </div>


                                     </div>
                                         <div class="table-cell py-1 border px-2">
                                             Grandes:       01<br>
                                             Pequeñas:    02

                                         </div>
                                  </div>


                                 </div>
                               </div>

                         </div>


                     </div>
                 </article>
             </div>




        </div>
    </div>
</section>


<div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="viamed-1">
      <div class="relative w-auto my-6 mx-auto max-w-7xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
            <h3 class="text-3xl font-semibold">
              SPRINTER CORTAS
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('viamed-1')">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          <!--body-->
          <div class="relative p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>

                    </div>
                    <div>

                    </div>
                </div>

          </div>
          <!--footer-->
          <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
            <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('viamed-1')">
              Close
            </button>
            <button class="bg-viamed-500 text-white active:bg-viamed-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('viamed-1')">
              Save Changes
            </button>

          </div>
        </div>
      </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="viamed-1-backdrop"></div>
</div>

<div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="viamed-2">
      <div class="relative w-auto my-6 mx-auto max-w-7xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
            <h3 class="text-3xl font-semibold">
              SPRINTER CORTAS
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('viamed-2')">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          <!--body-->
          <div class="relative p-6 flex-auto">
            <img src="{{ asset('img/detalles.JPG') }}" alt="">
          </div>
          <!--footer-->
          <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
            <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('viamed-2')">
              Close
            </button>
            <button class="bg-viamed-500 text-white active:bg-viamed-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('viamed-2')">
              Save Changes
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="viamed-2-backdrop"></div>
</div>


 @endsection

 @push('scripts')
    <script type="text/javascript">
        function toggleModal(modalID){
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endpush

