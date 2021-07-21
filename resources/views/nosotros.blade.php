@extends('layouts.app2')

@section('title', 'Sobre Nosotros')
@section('description','Nos distinguimos por brindar un servicio distinto y fuera de lo tradicional tanto como en la organización y planificación de excursiones.')

@section('content')


<section class="flex items-center justify-center m-auto mb-5 bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">Sobre Nosotros</h1>
    </div>
    <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>

<section class="my-5 sm:py-10">
    <div class="container max-w-7xl">

        <h2 class="font-cuprum text-4xl text-center font-semibold my-3 text-viamed-500">¿QUIÉNES SOMOS?</h2>
        <span class="w-20 block h-1 bg-gray-300 mx-auto -mt-2 my-2"></span>
        <div class="my-7 mx-3">
            <p class="text-gray-700 text-justify sm:text-left">Se distingue por brindar un servicio distinto y fuera de lo tradicional tanto como en la organización y planificación de excursiones, programas de viaje y tours; tanto así contamos con principios éticos y de responsabilidad social, fomentamos el desarrollo y el bienestar de nuestros trabajadores con el compromiso continuo de mantener la seguridad en nuestras operaciones y el respeto al medio ambiente.</p>

                <p>Hoy contamos con un portafolio de profesionales abocadados a la atención personalizada del cliente, por el cual nuestros clientes buscan encontrar cómo llevar a cabo sus sueños de viajar y conocer otras culturas.
                </p>
        </div>
    </div>
</section>

<section class="py-5 sm:py-10 bg-gray-50">
    <div class="container max-w-7xl">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-8">
            <div class="mx-1 m:mx-3">
                 <h3 class="text-3xl text-center text-red-600 font-semibold py-5">VISION</h3>
                 <img src="{{ asset('img/vision.png') }}" class="float-left w-36 mr-5" alt="vision">
                    <p class="p-5">Catalogarnos como una empresa de transporte turístico líder en el mercado turístico de la ciudad de Cusco, nacional e internacional, con productos innovadores acorde a las necesidades y exigencias de nuestros clientes.
                        Con una atención personal y directa, con la tarea constante de ofrecer nuestros servicios con los altos estándares de calidad que el mercado turístico requiere.
                        </p>
            </div>
            <div class="mx-1 m:mx-3">
                 <h3 class="text-3xl text-center text-red-600 font-semibold py-5">MISION</h3>
                 <img src="{{ asset('img/mision.png') }}" class="float-right w-36 ml-5" alt="vision">
                 <p class="p-5">Somos una empresa de transporte turístico estructurada para satisfacer las necesidades de nuestros clientes, Brindar un servicio de calidad y confiabilidad.Contamos con un staff especializado y la tecnología propicia para brindarle un servicio personalizado que supere las expectativas de nuestros clientes. Trabajamos con gran responsabilidad respetando nuestra cultura y medio ambiente contribuyendo al desarrollo de nuestro país.
                    </p>

            </div>
    </div>
</div>
</section>
<section class="my-5 sm:py-10">
        <div class="container max-w-7xl  px-3">

            <h2 class="font-cuprum text-3xl font-semibold my-3 text-gray-700 uppercase"> NUESTROS VALORES</h2>
            {{-- <span class="w-20 block h-1 bg-gray-600 mx-auto -mt-2 my-2"></span> --}}

                    <p>Ponemos en valor la transmisión de costumbres y tradiciones de nuestros antepasados, capacitando a nuestros colaboradores (Personal Administrativo, Guías, Transfers, Asistentes y Conductores) sobre la correcta forma de interactuar ante situaciones inesperadas como emergencias (Primeros auxilios), el manejo apropiado de los alimentos, el nivel de seguridad al conducir y/o traslado del participante.</p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="pl-10">
                            <ul class="list-disc list-inside">
                                <li>Pasión y compromiso</li>
                                <li>Calidad y excelencia en el servicio</li>
                                <li>Confiabilidad</li>
                                <li>Responsabilidad</li>
                                <li>Puntualidad</li>
                            </ul>
                    </div>
                    <div class="pl-10">
                            <ul class="list-disc list-inside">
                                <li>Integridad y respeto</li>
                                <li>Honestidad</li>
                                <li>Innovación e inspiración</li>
                                <li>Diversión y trabajo en equipo</li>
                            </ul>
                    </div>
                </div>

                <h2 class="font-cuprum text-3xl font-semibold my-3 text-gray-700 uppercase">NUESTRA FILOSOFIA</h2>
                    {{-- <span class="w-20 block h-1 bg-gray-600 mx-auto -mt-2 my-2"></span> --}}
                    <p>ViaMed Perú, se preocupa por los viajes responsables, basándose en el respeto por la gente y los destinos que operamos, como también realizar un viaje ético y consciente por parte de nuestros visitantes, los cuales dada las características de este segmento muestran gran interés en la interacción con la “Vida Real” de los destinos que visitan y por ello eligen un tipo de viaje en el que no sean cómplices de destrucción y explotación de los mismos.</p>


        </div>
</section>
<section class="bg-gray-50 sm:py-10 py-5" id="por-que-elegirnos">
    <div class="container max-w-7xl">
        <h3 class="text-center text-red-700 font-semibold font-cuprum text-3xl mb-3">¿POR QUE ELEGIRNOS?</h3>
        <span class="w-20 block h-1 bg-gray-800 mx-auto -mt-2"></span>

        <div class="grid sm:grid-cols-3 sm:gap-8 gap-3 grid-cols-2 sm:py-10 py-5">
            <div class="">
                <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                    <img class="w-14 mx-auto py-1 my-2 border-b-2  border-red-500" src="{{ asset('img/recompensa.svg') }}" alt="">
                    <h6 class="text-xl font-semibold text-center font-cuprum"> PROFESIONALISMO </h6>
                   <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Contamos con un staff especializado y la tecnología propicia para brindarle un servicio personalizado que supere las expectativas de nuestros clientes.</p>

                </div>
              </div>
              <div class="">
                <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                    <img class="w-14 mx-auto py-1 my-2 border-b-2  border-viamed-500" src="{{ asset('img/honestidad.svg') }}" alt="">
                    <h6 class="text-xl font-semibold text-center font-cuprum"> HONESTIDAD Y RESPETO</h6>
                   <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Fomentamos el trabajo en equipo y las prácticas integras, honestas y transparentes con todos nuestros clientes, a fin de generar relaciones de confianza mutua.</p>
                </div>
              </div>
              <div class="">
                <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                    <img class="w-14 mx-auto py-1 my-2 border-b-2  border-red-500" src="{{ asset('img/innovacion.svg') }}" alt="">
                    <h6 class="text-xl font-semibold text-center font-cuprum"> INNOVACION </h6>
                   <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Proponer nuevas alternativas de servicios, de acuerdo a la exigencia y la solicitud de cada uno de nuestros clientes.</p>
                </div>
              </div>
              <div class="">
                <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                    <img class="w-14 mx-auto py-1 my-2 border-b-2  border-viamed-500" src="{{ asset('img/team.svg') }}" alt="">
                    <h6 class="text-xl font-semibold text-center font-cuprum"> TRABAJO EN EQUIPO </h6>
                   <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">En Viamedperu estamos comprometidos en realizar un trabajo en equipo, con el propósito de brindar un servicio de calidad y obtener la satisfacción de nuestros clientes.</p>
                </div>
              </div>

          <div class="">
            <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                <img class="w-14 mx-auto py-1 my-2 border-b-2  border-red-500" src="{{ asset('img/experiencia.svg') }}" alt="">
                <h6 class="text-xl font-semibold text-center font-cuprum"> EXPERIENCIA </h6>
                <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Contamos con años de experiencia en transporte turístico en Perú lo que nos permite garantizar la calidad en nuestro servicio. Ofrecemos transporte turístico, Corporativo, de lujo, empresarial y privado para satisfacer todos sus requerimientos</p>

            </div>
          </div>
          <div class="">
            <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                <img class="w-14 mx-auto py-1 my-2 border-b-2  border-viamed-500" src="{{ asset('img/calidad.svg') }}" alt="">
                <h6 class="text-xl font-semibold text-center font-cuprum">SERVICIO DE CALIDAD</h6>
               <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Ofrecemos un servicio de calidad y con calidez, nuestro compromiso es satisfacer todas sus necesidades brindándoles los mayores estándares de calidad, seguridad y confort. </p>
            </div>
          </div>
          <div class="">
            <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                <img class="w-14 mx-auto py-1 my-2 border-b-2  border-red-500" src="{{ asset('img/confort.svg') }}" alt="">
                <h6 class="text-xl font-semibold text-center font-cuprum">COMODIDAD Y CONFORT</h6>
                 <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Nuestra flota de unidades le ofrece confort y comodidad ya que cuanta con asientos reducidos de la capacidad máxima, por ende con asientos amplios, reclinables, aire acondicionado, y amplios espacios para el equipaje y mas. </p>
            </div>
          </div>
          <div class="">
            <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                <img class="w-14 mx-auto py-1 my-2 border-b-2  border-viamed-500" src="{{ asset('img/carros.svg') }}" alt="">
                <h6 class="text-xl font-semibold text-center font-cuprum">UNIDADES MODERNAS</h6>
                 <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Contamos con, autos, camionetas (Toyota Fortuner, Toyota Rav 4) , m/ buss (Hyundai H1), Sprinter Corta, Sprínter Larga y buses modernos y equipados con tecnología para ofrecerle un excelente servicio. </p>
            </div>
          </div>
          <div class="">
            <div class="p-3 bg-white rounded-md shadow-md border border-viamed-400 border-dashed hover:bg-viamed-400 cursor-pointer hover:text-white group">
                <img class="w-14 mx-auto py-1 my-2 border-b-2  border-red-500" src="{{ asset('img/seguro-de-coche.svg') }}" alt="">
                <h6 class="text-xl font-semibold text-center font-cuprum">SEGURIDAD</h6>
                  <p class="mt-2 mb-4 text-gray-700 text-center group-hover:text-white">Todas nuestras unidades están debidamente equipados, garantizamos su seguridad a través de servicios de calidad, vehículos modernos y personal altamente capacitado.</p>
            </div>
          </div>
        </div>

    </div>

</section>

<section class="my-5">

    <div class="container max-w-7xl">
        <img src="{{ asset('img/nosotros-footer.jpg') }}" alt="foto sobre nosotros">
    </div>
</section>

 @endsection

