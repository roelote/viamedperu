@extends('layouts.app2')

@section('content')

<section class="flex items-center justify-center m-auto bg-center bg-cover relative" style="background-image: url({{ asset('img/hader-pages-viamed.jpg') }})" >
    <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
        <h1 class="text-white text-6xl font-cuprum uppercase py-20">ERROR 404</h1>
    </div>
    <div class="overlay absolute bg-viamed-700 w-full h-full opacity-60"></div>
</section>


<section>
    <div class="">
        <div class="w-9/12 m-auto py-10  flex items-center justify-center">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg pb-8">
        <div class="border-t border-gray-200 text-center pt-8">
        <h1 class="text-9xl font-bold text-viamed-400">404</h1>
        <h1 class="text-6xl font-medium py-8">oops! Esta Pagina No Existe</h1>
        <p class="text-2xl pb-8 px-12 font-medium">Oops! La página que busca no existe. Puede que se haya movido o eliminado.</p>
            <a href="{{ route('home') }}" class="bg-gradient-to-r from-viamed-400 to-blue-500 hover:from-pink-500 hover:to-orange-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
            INICIO
            </a>
            <a href="{{ route('contactanos') }}" class="bg-gradient-to-r from-red-400 to-red-500 hover:from-red-500 hover:to-red-500 text-white font-semibold px-6 py-3 rounded-md">
            Contactanos
            </a>
        </div>
        </div>
        </div>
        </div>
</section>

@endsection







