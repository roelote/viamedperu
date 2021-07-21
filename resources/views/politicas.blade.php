@extends('layouts.app2')


@section('title', 'Politicas de la Empresa')
@section('description','Politicas De Reservas y Pagos Para Servicios De Traslados y Tours')

@section('content')


<section class="flex items-center justify-center m-auto mb-5 bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">POLITICAS DE EMPRESA</h1>
    </div>
    <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>

<section class="py-5">
    <div class="container max-w-7xl px-3">

        <h2 class="font-cuprum sm:text-4xl text-2xl text-center font-semibold my-3 text-viamed-500">POLITICAS DE RESERVAS Y PAGOS PARA SERVICIOS DE TRASLADOS Y TOURS</h2>
        <span class="w-20 block h-1 bg-gray-300 mx-auto -mt-2 my-2"></span>

        <h3 class="text-xl font-semibold py-3 text-red-600">RESERVAS</h3>
        <ul class="list-inside list-disc ml-3">
            <li>Toda reserva tendrá que ser solicitada por vía email para evitar errores e inconvenientes en los servicios a la siguiente dirección: <a class="text-viamed-400 font-semibold" href="mailto:reserve@viamedperu.com"> reserve@viamedperu.com.</a> </li>
            <li>Las reservas tendrán que ser realizadas hasta con 24 Hrs. de anticipación. Si el pedido del servicio lo realizan el mismo día se les atenderá, pero viendo la disponibilidad del caso.</li>

        </ul>

        <h3 class="text-xl font-semibold py-3 text-red-600">CONFIRMACIONES</h3>
        <ul class="list-inside list-disc ml-3">
            <li>Las reservas enviadas a nuestra dirección electrónica ésta es Confirmada cuando se le envía la respuesta de Confirmación del Correo, no habiendo ninguna respuesta se dará como Correcta y Aceptada.</li>
            <li>Los cambios, modificaciones y datos adicionales se deben realizar al siguiente correo <a class="text-viamed-400 font-semibold" href="mailto:reserve@viamedperu.com"> reserve@viamedperu.com</a>, caso contrario no se tomará en cuenta.</li>
            <li>Las Reservas hechas para pasajeros directos se deben pagar por medio de depósito, si no se presenten al servicio o tour solicitado, será considerada como <strong>NO SHOW</strong>, por lo cual, se facturará a la agencia de viajes al 100% del servicio.</li>
        </ul>

        <h3 class="text-xl font-semibold py-3 text-red-600">CANCELACIONES Y ANULACIONES:</h3>
        <ul class="list-inside list-disc ml-3">
            <li>La Anulación o Cancelaciones de un servicio reservado NO tendrá costo alguno si se realiza con 24 horas de anticipación.</li>
            <li>Las Cancelaciones y Anulaciones de reservas de pasajeros deberán ser hasta 24 horas antes del servicio caso contrario, <strong>se cobrará y facturará el 100 % del servicio</strong></li>
            <li>En caso que pidan la Anulación o Cancelación en el mismo momento del servicio o faltando 1 hora se le cobrara el 100% del costo.</li>
            <li>Las Cancelaciones y Anulaciones de Reservas de Grupos Mayores a 08 personas deberán ser hasta con <strong>48 horas de anticipación</strong>, caso contrario se cobrará y facturará el 100% de servicio. Salvo causas climatológicas, emergencias, paros, anulaciones, etc.</li>
            <li>En caso de que el pasajero no se presente o no se le encuentre en el lugar indicado, será facturado como <strong>NO SHOW al 100 % del costo del servicio</strong>.</li>
        </ul>

        <h3 class="text-xl font-semibold py-3 text-red-600">CONDICIONES DE PAGO:</h3>
        <ul class="list-inside list-disc ml-3">
            <li>El pago por la solicitud de las Reservas se debe realizar 15 días antes del Servicio.</li>
            <li>Los Depósitos se realizarán a la siguiente cuenta:</li>
<hr>
                <ul class="ml-4">
                    <li><b>BANCO:</b> BANCO DEL CREDITO DEL PERU</li>
                    <li><b>RAZON SOCIAL:</b> <span class="mark">INVERSIONES CM TOUR E.I.R.L.</span></li>
                    <li><b>DIRECCION:</b> LOS OLIVOS DE LA PAZ A-10 SAN JERONIMO - CUSCO</li>
                    <li><b>NUMERO DE CTA EN DOLARES:</b> <span class="mark">285-2426849-1-21</span></li>
                    <li><b>CODIGO INTERBANCARIO:</b> 00228500242684912154</li>
                </ul>
                <hr>
                <ul class="ml-4">
                    <li><b>BANCO:</b> BANCO DEL CREDITO DEL PERU</li>
                    <li><b>RAZON SOCIAL:</b> <span class="mark">INVERSIONES CM TOUR E.I.R.L.</span></li>
                    <li><b>DIRECCION:</b> LOS OLIVOS DE LA PAZ A-10 SAN JERONIMO - CUSCO</li>
                    <li><b>NUMERO DE CTA EN SOLES:</b> <span class="mark">285-2623663-0-32</span></li>
                    <li><b>CODIGO INTERBANCARIO:</b> 00228500262366303258</li>
                </ul>
                <hr>
                <ul class="ml-4">
                    <li><b>BANCO:</b> BANCO DE LA NACION</li>
                    <li><b>NUMERO DE CTA DE DETRACCIONES:</b> <span class="mark">00-161-363537</span></li>
                    <li><b>CODIGO INTERBANCARIO:</b> 00-01816100016136353702</li>
                </ul>
                <hr>

                <li>Se les solicita remitir copia del Voucher del depósito de Banco a nuestro correo electrónico de contabilidad y cobranzas: <a class="text-viamed-400 font-semibold" href="mailto:reserve@viamedperu.com"> reserve@viamedperu.com</a>, para dar conformidad a la misma.</li>
        </ul>


        {{-- <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
              <th class="px-4 py-3">NOMBRE DE LA EMPRESA</th>
              <th class="px-4 py-3">INVERSIONES CM TOURS OPERADOR EIRL.</th>
            </tr>
            <tr class="bg-gray-100 border-b border-gray-200">
              <td class="px-4 py-3">Jill</td>
              <td class="px-4 py-3">Smith</td>
            </tr>
            <tr class="bg-gray-100 border-b border-gray-200">
              <td class="px-4 py-3">Jill</td>
              <td class="px-4 py-3">Smith</td>
            </tr>
            <tr class="bg-gray-100 border-b border-gray-200">
              <td class="px-4 py-3">Jill</td>
              <td class="px-4 py-3">Smith</td>
            </tr>

          </table> --}}







</div>
</section>



 @endsection

