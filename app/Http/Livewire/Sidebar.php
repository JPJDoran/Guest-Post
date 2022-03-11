<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.sidebar', [
            'activeClass' => "flex items-center text-white py-4 pl-6 nav-item active-nav-link",
            'inactiveClass' => "flex items-center text-white py-4 pl-6 nav-item opacity-75 hover:opacity-100",
        ]);
    }
}
