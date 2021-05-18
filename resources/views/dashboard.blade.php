<x-app-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="border-radius: 5rem;">
                <div class="p-6 border-b border-gray-200" style="text-align: center; font-weight: bolder; background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea)">
                @include('flash-message')
                <span class="mx-auto"> Welcome To Talentegra..</span> <i style="font-size: 2rem;color: mediumseagreen;padding-top: 1.5rem;overflow: visible;" class="fas fa-smile-beam"></i>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
