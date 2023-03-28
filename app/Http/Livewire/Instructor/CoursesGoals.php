<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Goal;
use Doctrine\Inflector\Rules\English\Rules;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class CoursesGoals extends Component
{

    public function render()
    {
        return view('livewire.instructor.courses-goals');
    }

    protected $rules = [
        'goal.name' =>'required'
    ];
    public $course, $goal, $name;

    public function mount(Course $course){
        $this->course = $course;
        $this->goal = new Goal();
    }
    
    public function store(){

        $this->validate([
            'name' => 'required'
        ]);
        $this->course->goals()->create([
            'name' => $this->name
        ]);
        $this->reset('name');
        $this->course = Course::find($this->course->id);
    }

    public function edit(Goal $goal){
        $this->goal=$goal;
    }

    public function update(){
        $this->validate();
        $this->goal->save();
        $this->goal = new Goal();
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Goal $goal){
        $goal->delete();
        $this->course = Course::find($this->course->id);

    }

    }
