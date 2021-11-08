<?php

namespace App\View\Components\Form\Control;

use Illuminate\View\Component;

class Input extends Component
{
  public $name;
  public $id;
  public $class;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($name, $id = null, $class = 'form-control')
  {
    $this->name = $name;
    $this->id = $id ?? $this->name;
    $this->class = $class;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.form.control.input');
  }
}
