<?php

namespace App\View\Components\Alpine;

use App\Models\Admin\Vue;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestAlpine extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;

    public function __construct() {
    
    }
    public function show_vue()
    {
        // Get data from database
        return $this->data = Vue::all();
        
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alpine.test-alpine', [ 'vue'=> $this->data]);
    }
}
