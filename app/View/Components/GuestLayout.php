<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * The page title.
     *
     * @var string
     */
    public $headertext;
    
    /**
     * Create the component instance.
     *
     * @param  string  $title
     * @return void
     */
    public function __construct($headertext)
    {
        $this->headertext = $headertext;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function render()
    {
        return view('layouts.guest');
    }
}
