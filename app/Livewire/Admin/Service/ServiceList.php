<?php

namespace App\Livewire\Admin\Service;

use Livewire\Component;

class ServiceList extends Component
{
    public function render()
    {
        return view('livewire.admin.service.service-list')->layout('components.layouts.admin', ['title' => 'Services']);
    }
}
