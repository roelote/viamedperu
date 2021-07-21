@extends('layouts.app2')


@section('title', 'Covid 19')
@section('description','Covid-19, Contamos con todo los protocolos de medida y seguridad para el cuidado personal, evitando cualquier tipo de contagios.')

@section('content')


<section class="flex items-center justify-center m-auto mb-5 bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">COVID 19</h1>
    </div>
    <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>

<section class="py-5">
    <div class="container max-w-7xl">

        <h2 class="font-cuprum sm:text-4xl text-2xl text-center font-semibold my-3 text-viamed-500">PROTOCOLO DE PROTECCION Y MEDIDAS DE BIOSEGURIDAD COVID–19</h2>
        <span class="w-20 block h-1 bg-gray-300 mx-auto my-2"></span>
        <div class="my-7 px-3 text-justify">
            <p>El Protocolo y las Medidas de Bioseguridad son un conjunto de normas preventivas para el cuidado personal, cuyo fin es minimizar los contagios por factores que pueden generar la transmisión del Covid-2019. Es así que se debe coordinar la reapertura de la actividad turística de manera responsable para que no aumente el riesgo de contagio comunitario una vez que se vayan flexibilizando las medidas de confinamiento.</p>
            <p>Para viajes auténticos, sin detenciones y que proporcionen experiencias seguras e inolvidables, es imprescindible establecer Protocolos de Protección y Medidas de Bioseguridad necesarias tanto para nuestros visitantes nacionales e internacionales, así como para el personal que presta los servicios requeridos.</p>
            <p>Para la elaboración de este Protocolo de Protección y Medidas de Bioseguridad, se ha tomado en cuenta los procedimientos que ha desarrollado el Ministerio de Turismo y otras entidades del Estado Peruano, para identificar y evaluar los riesgos en las prestaciones de servicios, así como la implantación de las buenas prácticas.</p>

            <h3 class="text-2xl text-red-600 font-semibold py-3 font-cuprum">OBJETIVO</h3>
            <p>Nuestro objetivo principal es proteger la Salud y Seguridad de nuestros Visitantes Nacionales e Internacionales, además del Personal que labora con nuestra empresa; a través del Cumplimiento del Protocolo y las Medidas de Bioseguridad, para que nuestros Visitantes se sientan tranquilos y seguros y puedan disfrutar de un viaje inolvidable llena de experiencias nuevas.</p>

        </div>

        <h3 class="text-xl font-semibold py-3 text-red-600 px-3">I.	MEDIDAS DE BIOSEGURIDAD GENERALES PARA EL PERSONAL</h3>
        <p class="px-3">La seguridad de nuestro personal es importante, es por eso que se tomara medidas, tomando en cuenta el uso de equipos de protección personales tales como: trajes de protección, guantes de látex, mascarillas de protección (Mascarillas Quirúrgicas - KN95) y sustancias químicas que eviten que el virus se propague, así como el control de temperatura al Ingreso y salida del horario de trabajo; para de esa manera realizar unas buenas prácticas de bioseguridad.</p>

        <h3 class="text-xl font-semibold py-3 text-red-600 px-3">II.	CONDICIONES DE BIOSEGURIDAD EN NUESTROS SERVICIOS</h3>
            <h4 class="font-cuprum text-xl px-3">1.	Condiciones de Bioseguridad antes de Iniciar el Traslado – Tour Turístico.</h4>
        <ul class="list-inside list-disc ml-3 px-3">
            <li>Limpieza y desinfección de la Unidad, utilizando liquido desinfectante en base a lejía o alcohol etílico al 70% cloro, con un paño limpio, desde una hora antes de realizar el Servicio del Traslado - Tour, prestando especial atención en las superficies y objetos que tienen contacto frecuente con los pasajeros que ingresan al vehículo, tales como manijas de las puertas, antebrazos, asientos, manija de ventanas, entre otros. Los reposacabezas de cada asiento serán cambiados para cada servicio y serán de color blanco.</li>
            <li>Mantener disponible, de manera gratuita y permanente, para el uso, elementos de desinfección permanente, alcohol y jabón en gel, para los pasajeros, así como Conductores, Transfer y Guías que están a la espera de su Traslado o Tour.</li>
            <li>Incorporar en un lugar visible del interior de la unidad vehicular carteles informativos o mecanismos audiovisuales respecto a las disposiciones que deben cumplir las persona que ingresan a la unidad vehicular: “Sentarse en los asientos habilitados” “Usar el pediluvio para desinfectar los calzados al ingresar al vehículo”</li>
            <li>Mantener una ventilación adecuada en el vehículo durante el viaje, tener abiertas las ventanas de la parte del conductor y copiloto, mantener encendido el aire acondicionado.</li>
            <li>Los Conductores de nuestra empresa utilizaran el equipo de protección personal que contempla las mascarillas. No se permite el ingreso de personas que no cuenten con mascarillas y Protector Facial. Los conductores deberán brindar alcohol etílico al 70% en un pulverizador a los pasajeros para la desinfección de las manos antes del ingreso a la unidad vehicular.</li>
            <li>El conductor efectuara la desinfección del vehículo antes de iniciar el traslado o Tour indicado por la Agencia de Viajes y Turismo.</li>
            <li>El conductor llevara un control de actividades sobre la cantidad de veces de limpieza y desinfección del vehículo (cabina de conducción, timón, pisos, asientos, puertas, etc.)</li>
        </ul>

        <h4 class="font-cuprum text-xl px-3">3.	Condiciones de Bioseguridad de los Conductores durante el Tour Turístico.</h4>
        <ul class="list-inside list-disc ml-3 px-3">
            <li>Usar obligatoriamente mascarillas en todo momento. Asimismo, se debe evitar tocarse la nariz, la boca y los ojos. Usar el equipo de protección y los guantes.</li>
            <li>No permitir el ingreso de personas no autorizadas por la empresa de transporte al vehículo.</li>
            <li>Mantener la distancia mínima de un metro con otras personas.</li>
            <li>Procurar una adecuada ventilación en las unidades vehiculares manteniendo las ventanas de la cabina del vehículo abiertas.</li>
            <li>En caso la autoridad de control solicite durante el trayecto documentos personales y del vehículo y se haya tenido contacto físico, desinfectar inmediatamente sus manos usando gel desinfectante, o lavarse las manos con agua y jabón por no menos de 20 segundos, cuando sea posible.</li>

        </ul>

        <h4 class="font-cuprum text-xl px-3">2.	Condiciones de Bioseguridad de los Conductores antes de Iniciar el Tour Turístico.</h4>
        <p class="px-3">Los Conductores deben ejecutar las siguientes medidas de Bioseguridad:</p>
    <ul class="list-inside list-disc ml-3 px-3">
        <li>Lavarse las manos con jabón, por un periodo de veinte segundos.</li>
        <li>Mantener una distancia mínima de un metro con otras personas y utilizar mascarillas en todo momento sin retirárselo del rostro.</li>
        <li>Contar de manera permanente con desinfectantes para manos, pañuelos de papel y liquido desinfectante como lejía o alcohol etílico al 70% en un pulverizador.</li>
        <li>Limpiar y desinfectar las superficies y objetos que toca habitualmente: celulares, volante del vehículo, palanca de cambios, entre otras.</li>
        <li>Usar el mameluco o equipo de protección proporcionado por la empresa.</li>
        <li>Utilizar guantes desechables.</li>
        <li>La empresa de transporte turístico proporcionara al conductor: jabón líquido o jabón desinfectante, papel toalla y dispensador de alcohol gel, para el lavado y desinfección de manos, mascarillas, paños de limpieza, así como desinfectantes de superficies de uso seguro y eficaz como alcohol etílico al 70%, soluciones de lejía o agua oxigenada.</li>
    </ul>

        <h4 class="font-cuprum text-xl px-3">4.	Condiciones de Bioseguridad de los Conductores durante las Pautas para la Alimentación y/o descanso en Ruta Turístico.</h4>
            <p class="px-3">Los Conductores deben ejecutar las siguientes medidas de Bioseguridad:</p>
        <ul class="list-inside list-disc ml-3 px-3">
            <p class="px-3">Los Conductores deben ejecutar las siguientes medidas de Bioseguridad:</p>
            <li>Continuar con el uso obligatorio de mascarillas en todo momento. Asimismo, se debe evitar tocarse la nariz, la boca y los ojos.</li>
            <li>Mantener la distancia mínima de 01 metro con otras personas y evitar en la medida de los posible salir del vehículo.</li>
            <li>En la medida de lo posible, ingerir sus alimentos al aire libre, lejos de otras personas.</li>
            <li>Cuando exista un servicio de restaurante en sus lugares de parada de preferencia, los conductores no deben comer en el establecimiento y deben solicitar su comida para llevar, de forma que puedan comer lejos de los demás.</li>
        </ul>

        <h3 class="text-xl font-semibold py-3 text-red-600 px-3">III.	CONDICIONES DE BIOSEGURIDAD EN NUESTROS VEHICULOS</h3>
        <h4 class="font-cuprum text-xl px-3">1.	Condiciones de Bioseguridad del Vehículo antes de Iniciar el Servicio Turístico.</h4>
        <p class="px-3">Los Conductores deben ejecutar las siguientes medidas de Bioseguridad:</p>
        <ul class="list-inside list-disc ml-3 px-3">
            <li>Limpiar y desinfectar la cabina del conductor por dentro y por fuera, así como las llantas o ruedas de los vehículos de transporte de carga una hora antes del servicio prestando especial atención en las superficies del vehículo como: las manecillas, picaportes de puertas, volante, panel de control, muebles, pisos y botones.</li>
            <li>Las cabinas de los vehículos de transporte de carga deben desinfectarse antes de cada nuevo uso.</li>
            <li>Disponer de un contenedor esterilizado de elementos de protección mascarillas y elementos de desinfección permanente, alcohol etílico al 70% en un pulverizador o gel antibacterial y jabón, para el conductor.</li>
            <li>Nuestras unidades cuentan con un Panel de Protección Sanitaria: (Acrílico o policarbonato de color transparente) con la finalidad de aislar al conductor de los pasajeros tal como indica la Mincetur.</li>
        </ul>
        <h4 class="font-cuprum text-xl px-3">2.	Condiciones de Bioseguridad del Vehículo al Finalizar el Servicio Turístico.</h4>
        <p class="px-3">Los Conductores deben ejecutar las siguientes medidas de Bioseguridad:</p>
        <ul class="list-inside list-disc ml-3 px-3">
            <li>Desechar la mascarilla una vez utilizados, procediendo posteriormente a lavarse las manos, por un periodo de tiempo mínimo de 20 segundos.</li>
            <li>Una vez culminada la labor, el conductor debe con precaución lavar la ropa de trabajo, así como desinfectar los zapatos para volverlos a utilizar.</li>
            <li>Limpiar y desinfectar las superficies del vehículo que toca habitualmente (volante del vehículo, palanca de cambios, etc.) así como los objetos personales (celulares, billetera, correas, lentes, gorra, etc.) para el próximo servicio turístico.</li>
            <li>Limpiar y desinfectar la cabina del conductor por dentro y por fuera, así como las llantas o ruedas de los vehículos de transporte de carga una hora antes del viaje prestando especial atención en las superficies del vehículo como: las manecillas, picaportes de puertas, volante, panel de control, muebles, pisos y botones.</li>
            <li>Tomar las medidas de seguridad necesarias para el desecho de los residuos sólidos producto de la limpieza y desinfección del vehículo.</li>
        </ul>
</div>
</section>

<section class="sm:py-10 py-5 bg-gray-50 px-3">
    <div class="container max-w-7xl">
        <h3 class="sm:text-2xl text-xl font-semibold py-3 text-red-600 text-center mb-3">PAUTAS PARA LA OPERACIÓN DE TRASLADOS EXCUSIONES Y CIRCUITOS</h3>
        <div class="grid sm:grid-cols-3 sm:gap-8 gap-3 grid-cols-2">

            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-1.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">DESINFECCION DE VEHICULOS</h3>
                <p class="px-3 text-center">Procedimiento de Desinfección y Limpieza de Nuestros Vehículos Permanentemente.</p>
            </div>
            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-2.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">USO DE MASCARILLAS</h3>
                <p class="px-3 text-center">Establecer el Uso Obligatorio de Mascarillas y Protectores Faciales.</p>
            </div>
            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-3.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">DISPOSICION PERMANENTE</h3>
                <p class="px-3 text-center">Proporcionaremos para la de Desinfección de Manos: Alcohol en Gel & Jabón Líquido.
                    Cazados: Pediluvio o Piso de Desinfección.
                    </p>
            </div>

            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-4.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">DISTANCIAMIENTO</h3>
                <p class="px-3 text-center">Monitoreando constantemente el cumplimiento del Distanciamiento mínimo de 1 metro de distanciamiento.</p>
            </div>
            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-5.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">REGISTRO DE TEMPERATURA</h3>
                <p class="px-3 text-center">En cada Embarque según el Protocolo de la MTC y el MINCETUR, además de la Ficha de Evaluación del Pasajero.</p>
            </div>
            <div class="shadow-md">
                <img class="w-full" src="{{ asset('img/covid-6.jpg') }}" alt="covid">
                <h3 class="text-center font-cuprum text-xl text-viamed-500 mt-2">MONITOREAR</h3>
                <p class="px-3 text-center">Las Operaciones y Registrar las Incidencias en el caso de que tengamos alguna.
                    </p>
            </div>

    </div>
</div>
</section>


 @endsection

