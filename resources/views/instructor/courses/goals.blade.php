

<x-instructor-layout :course="$course">



<div>
  @livewire('instructor.courses-goals', ['course' => $course], key( 'courses-goals'.$course->id))
</div>  
<div class="my-8">
    @livewire('instructor.courses-requeriments', ['course' => $course], key('courses-requeriments'.$course->id))
</div> 
<div>
    @livewire('instructor.courses-audience', ['course' => $course], key('courses-audience'.$course->id))
</div>
<div class="text">
  <p>
    <textarea name="" id="" cols="10" rows="20">
      
    </textarea>
  </p>
</div>



</x-instructor-layout>