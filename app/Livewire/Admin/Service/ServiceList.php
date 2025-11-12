<?php

namespace App\Livewire\Admin\Service;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ServiceList extends Component
{
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.service.service-list');
    }
}
