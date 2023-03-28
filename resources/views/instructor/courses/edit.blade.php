<x-instructor-layout :course="$course">

    

    <h1 class="text-2x1 font-bold">INFORMACION DEL CURSO</h1>
        
    <hr class="mt-2 mb-6">

    {!! Form::model($course, ['route' => ['instructor.courses.update',$course], 'method'=>'put','files'=>true]) !!}

       
            @include('instructor.courses.partials.form')

            <div class="flex justify-end">

                    {!! Form::submit('Actualizar Informacion', ['class' => 'btn btn-primary']) !!}

            </div>
    {!! Form::close() !!}

    <x-slot name="js">

        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

        <script src="{{asset('js/instructor/courses/form.js')}}">

           
        </script>
    </x-slot>
</x-instructor-layout>