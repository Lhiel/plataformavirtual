<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/estudiante.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full md:w-3/4 lg:w-1/2 ">
              <h1 class="text-white font-fold text-4xl">Domina la tecnologia web</h1>
              <p class="text-white text-lg mt-2 mb-4">Aprende tecnologia web avanzada con laravel</p>


         @livewire('search')
                

          </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen1.jpg')}}" alt="">
                </figure>
                <header class="mt-2"> <h1 class="text-center text-xl text-gray-700"> Cursos y proyectos</h1></header>
                <p class="text-sm text-gray-500 ">esto es una imagen de prueba para el proyecto formativo</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen2.jpg')}}" alt="">
                </figure>
                <header class="mt-2"> <h1 class="text-center text-xl text-gray-700"> Manual de laravel</h1></header>
                <p class="text-sm text-gray-500 ">esto es una imagen de prueba para el proyecto formativo</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/imagen3.jpg')}}" alt="">
                </figure>
                <header class="mt-2"> <h1 class="text-center text-xl text-gray-700"> Blog</h1></header>
                <p class="text-sm text-gray-500 ">esto es una imagen de prueba para el proyecto formativo</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/imagen4.jpg')}}" alt="">
                </figure>
                <header class="mt-2"> <h1 class="text-center text-xl text-gray-700"> Desarrollo web</h1></header>
                <p class="text-sm text-gray-500 ">esto es una imagen de prueba para el proyecto formativo</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos y filtrado por categoria o nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
            </a>
        </div>
    </section>

    <section class="my-24 ">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para crear plataformas</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8" >
            @foreach ($courses as $course)
                
                <x-course-card :course="$course"/>

            @endforeach
        </div>
        

    </section>

</x-app-layout>
