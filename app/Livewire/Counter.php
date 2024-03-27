<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

public $todo ='';

public $todos = [

    'Take out trash',
     'Do dishes',
];

public function add()
{

$this->todos [] = $this->todo;

$this->reset('todo');
}


    
public $count=1;

public function increment()
{

 //  $this->count =$this->count +1;
   $this->count++;
}

public function decrement()
{

    $this->count--;
}

    public function render()
    {
        return view('livewire.counter');
    }
}
