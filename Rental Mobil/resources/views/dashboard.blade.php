@include('layouts.header');

@include('layouts.sidebar');
<div class="content-wrapper">
<x-app-layout>
    <x-slot name="header">
        <h6 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('') }}
            <img src="{{asset('landing/images/rental1.webp')}}" class="img-fluid product-thumbnail">
            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rental mobil cogan adalah layanan yang menyediakan kendaraan untuk disewa oleh individu atau perusahaan untuk jangka waktu tertentu, baik itu beberapa jam, sehari, mingguan, 
                atau bahkan bulanan. Berikut adalah beberapa aspek penting dari layanan rental mobil') }}
            
        </h3>
    </x-slot>
</x-app-layout>
</div>
