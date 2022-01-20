@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Learn to <span class="text-pink-500">code</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">with Mikseros Development</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A necessitatibus consequuntur 
                dolorem, aliquid suscipit nemo! Sint ratione doloremque enim ipsum recusandae tempore 
                perspiciatis, ab animi in. Facilis sunt consequatur deserunt similique eligendi beatae 
                dicta ducimus consequuntur tempore quia repellat architecto provident sit dolorum at 
                recusandae eum, facere, magni rerum minima.
            </p>
            <a href="{{ route('about') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more</a>
        </div>
    </section>
@endsection