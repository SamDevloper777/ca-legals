<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Service;

class ServiceView extends Component
{
    public $title = 'SERVICE TAX';
    public $description = 'We provide comprehensive services related to Service Tax to ensure compliance and efficient tax management for your business.';
    public $slug;
    public $service;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->service = Service::where('slug', $slug)->first();

        if ($this->service) {
            $this->title = $this->service->name;
            $this->description = $this->service->description;
        }
    }
    public function render()
    {
        return view('livewire.page.service-view');
    }
}
