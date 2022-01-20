@extends('layouts/default')

@section('page-content')
    <section class="py-20 min-h-screen flex item-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Who is Mikseros?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos explicabo maiores 
                eveniet impedit fugiat cum vero, nam nesciunt, possimus in, nobis aliquam consequuntur 
                modi. Soluta nostrum ab qui, est totam porro quisquam dignissimos quia tempora 
                consectetur ipsum enim, numquam modi deserunt laudantium. Aut nesciunt a quidem, sint 
                doloribus perspiciatis earum deserunt voluptatem ipsa nemo laborum dolores quae sapiente
                magnam error. Odio nesciunt itaque animi vero voluptates necessitatibus ipsa nisi! Laborum
                hic veniam, et voluptatem quam recusandae a deleniti blanditiis alias ab qui totam 
                molestiae. Asperiores magni exercitationem ratione minus cumque, quasi amet optio 
                voluptatem, dolorem similique error dolore eum!
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nam ad? Placeat, in fuga! 
                Dignissimos assumenda cupiditate fuga quaerat quia perferendis iste at nobis distinctio.
            </p>
            <div class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint saepe officia at itaque necessitatibus, 
                a consectetur voluptates quas placeat ex impedit expedita magnam doloribus blanditiis harum, odio 
                error ut porro nam. At facere mollitia veniam inventore a aspernatur error necessitatibus animi. 
                Doloribus reiciendis vel modi ipsam veniam? Expedita, quod maxime!
            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection