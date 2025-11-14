<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Service;

class Home extends Component
{
    public $services = [];
    public $icons = [
        'accounting-services' => 'fa-calculator',
        'service-tax' => 'fa-receipt',
        'corporate-finance' => 'fa-chart-line',
        'corporate-services' => 'fa-building-columns',
        'income-tax' => 'fa-file-invoice-dollar',
        'tds' => 'fa-file-pen',
        'corporate-governance' => 'fa-gavel',
        'services-for-non-residents' => 'fa-globe',
        'payroll' => 'fa-money-bill-trend-up',
        'forensic-audit' => 'fa-user-secret',
    ];

    public function mount()
    {
        $this->services = Service::orderBy('id')->get();
    }

    public function render()
    {
        return view('livewire.page.home', [
            'services' => $this->services,
            'icons' => $this->icons,
        ])->layout('components.layouts.app', ['title' => 'ADR & Associates']);
    }
}
