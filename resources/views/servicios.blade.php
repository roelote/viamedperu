@extends('layouts.app2')

@section('title', 'Nuestros Servicios')
@section('description','Ofrecemos distintas alternativas en todo el Perú. Siempre pensando en la estadía de sus clientes sea realmente una experiencia inolvidable.')

@section('content')


<section class="flex items-center justify-center m-auto mb-5 bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">Servicios</h1>
    </div>
    <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>

<section class="my-5 sm:my-10">
    <div class="container max-w-7xl">

        <h2 class="font-cuprum text-4xl text-center font-semibold my-3 text-viamed-500">NUESTROS SERVICIOS</h2>
        <span class="w-20 block h-1 bg-gray-300 mx-auto -mt-2 my-2"></span>
        <div class="my-5 mx-3">
            <p class="text-gray-700 text-justify sm:text-left">
            </p>
        </div>
    </div>
</section>

<section class="my-5 sm:py-5">
        <div class="container max-w-7xl  px-3">


            <h2 class="font-cuprum text-3xl font-semibold my-3 text-red-700 uppercase" id="servicio-turistico"> SERVICIO TURISTICO </h2>


            <p>El servicio de Transporte Turístico, les ofrece distintas alternativas en todo el Perú. Siempre pensando en la estadía de sus clientes sea realmente una experiencia inolvidable.</p>
            <p>Nuestro propósito es conectar a nuestros pasajeros a sus destinos, brindándoles los mayores estándares de calidad, seguridad y confort.</p>

              <h3 class="font-cuprum text-2xl font-semibold my-3 text-gray-700 ">Nuestros Servicios:</h3>
              <ul class="list-inside list-disc sm:ml-6 ml-2">

                  <li>Traslados desde/al aeropuerto.</li>
                  <li>Excursiones ½ Day</li>
                  <li>Excursiones full Day</li>
                  <li>Viajes al interior del país.</li>
                  <li>Turismo receptivo y nacional.</li>
                  <li>Tour gastronómico.</li>
                  <li>Visita a museos.</li>
                  <li>Servicios complementarios.</li>


              </ul>
              <br>

            <h2 class="font-cuprum text-3xl font-semibold my-3 text-red-700 uppercase" id="servicio-corporativo"> SERVICIO CORPORATIVO</h2>


                    <p>El servicio de transporte corporativo que ofrece VIAMED PERU, se adapta a las necesidades de cada uno de nuestros clientes. Es por esta razón que son aquellos quienes pueden escoger el modelo de movilidad a utilizar para que este se adapte a sus necesidades, que otorgue calidad, comodidad y seguridad. </p>
                    <p>Además de ser atendido por conductores que llevan años en el rubro y que conocen perfectamente las necesidades de los clientes.</p>

              <h3 class="font-cuprum text-2xl font-semibold my-3 text-gray-700 ">Nuestros Servicios:</h3>
              <ul class="list-inside list-disc sm:ml-6 ml-2">
                 <li>Transporte de personal ejecutivo</li>
                 <li>Transporte de personal operativo y/o técnico.</li>
                 <li>Eventos para personales y más.</li>
                 <li>Paseos corporativos.</li>
                 <li>Aniversarios empresariales.</li>
                 <li>Reuniones a talleres y capacitaciones.</li>
                 <li>Disposición por Hora</li>
                 <li>Planificamos la ruta y horarios según itinerario</li>
                 <li>Traslados </li>
                 <li>Entre otros.</li>

              </ul>
              <p>Todas nuestras unidades están conectadas vía móvil, cubiertas con el Seguro Obligatorio de Accidentes de Tránsito (SOAT) y Autorizaciones y documentación en regla.</p>

              <br>

              <h2 class="font-cuprum text-3xl font-semibold my-3 text-red-700 uppercase" id="servicio-lujo">SERVICIO DE LUJO</h2>


              <p>ViamedPeru en su calidad de Empresa de Transporte Turístico, cuenta con un producto exclusivo y diferenciado, que nos adaptados a las necesidades y exigencias de cada uno de nuestros clientes, que gustan vivir en cada destino una experiencia única, inolvidable. </p>
              <p>Nuestro propósito es conectar a nuestros pasajeros a sus destinos, brindándoles los mayores estándares de calidad, seguridad y confort.</p>

        <h3 class="font-cuprum text-2xl font-semibold my-3 text-gray-700 ">Nuestros Servicios:</h3>
        <ul class="list-inside list-disc sm:ml-6 ml-2">
            <li>Traslados desde/al aeropuerto.</li>
            <li>Excursiones ½ Day</li>
            <li>Excursiones full Day</li>
            <li>Viajes al interior del país.</li>
            <li>Turismo receptivo y nacional.</li>
            <li>Tour gastronómico.</li>
            <li>Visita a museos.</li>
            <li>Servicios complementarios.</li>
            <li>Contamos con vehículos y conductores que cumplen con todos los protocolos de Bioseguridad.</li>
            <li>Buscamos el bienestar y la comodidad de nuestros pasajeros.</li>
            <li>Entre otros.</li>
        </ul>
        <p>Todas nuestras unidades están conectadas vía móvil, cubiertas con el Seguro Obligatorio de Accidentes de Tránsito (SOAT) y Autorizaciones y documentación en regla.</p>

        <br>


            {{-- <h2 class="font-cuprum text-3xl font-semibold my-3 text-gray-700 uppercase">NUESTRA FILOSOFIA</h2>

                    <p>ViaMed Perú, se preocupa por los viajes responsables, basándose en el respeto por la gente y los destinos que operamos, como también realizar un viaje ético y consciente por parte de nuestros visitantes, los cuales dada las características de este segmento muestran gran interés en la interacción con la “Vida Real” de los destinos que visitan y por ello eligen un tipo de viaje en el que no sean cómplices de destrucción y explotación de los mismos.</p> --}}


        </div>
</section>

 @endsection

