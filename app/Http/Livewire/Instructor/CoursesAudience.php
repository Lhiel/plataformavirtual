<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Audience;
use App\Models\Course;
use Livewire\Component;

class CoursesAudience extends Component
{
    public function render()
    {
        return view('livewire.instructor.courses-audience');
    }


    
    protected $rules = [
        'audience.name' =>'required'
    ];
    public $course, $audience, $name;

    public function mount(Course $course){
        $this->course = $course;
        $this->audience = new Audience();
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);
        $this->course->audiences()->create([
            'name' => $this->name
        ]);
        $this->reset('name');
        $this->course = Course::find($this->course->id);
    }

    public function edit(Audience $audience){
        $this->audience=$audience;
    }

    public function update(){
        $this->validate();
        $this->audience->save();
        $this->audience = new Audience();
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Audience $audience){
        $audience->delete();
        $this->course = Course::find($this->course->id);

    }
}
