<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public $num1 = 0;
    public $num2 = 0;
    public string $action = '+';
    public float $result = 0;
    public function render()
    {
        return view('livewire.calculator');
    }
}
