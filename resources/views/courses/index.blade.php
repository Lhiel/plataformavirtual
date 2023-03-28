<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/courses/web.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full md:w-3/4 lg:w-1/2 ">
              <h1 class="text-white font-fold text-4xl">Los mejores cursos de programacion</h1>
              <p class="text-white text-lg mt-2 mb-4">Si buscas potenciar tus conocimientos de programacion has llegado al lugar indicado</p>

                @livewire('search')
                

          </div>
        </div>
    </section>

    @livewire('courses-index')



</x-app-layout>
