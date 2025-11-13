<?php

namespace App\Livewire\Form;

use App\Models\Contact;
use App\Models\Service;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class ConsultationForm extends Component
{
     public $open = false;
    public $name = '';
    public $email = '';
    public $phone = '';
    public $service = '';
    public $message = '';
    public $services;
    public $successMessage = null;
    public $showConfirmation = false;
    public $isProcessed = false;
    public $processingMessage = null;
    public $showProcessingModal = false;
    public $processingSince = null;
    public $processingAvailableAt = null;


    protected $rules = [ 
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'service' => 'nullable|string|max:255',
        'message' => 'nullable|string|max:2000',
    ];

    public function mount()
    {
        $this->services = Service::orderBy('name')->get();
    }

    #[On('openConsultation')]
    public function open()
    {
        $this->resetValidation();
        $this->successMessage = null;
        $this->open = true;
        $this->showConfirmation = false;
        $this->processingMessage = null;
        $this->showProcessingModal = false;
        $this->processingSince = null;
        $this->processingAvailableAt = null;
    }
    
    public function close()
    {
        $this->open = false;
        $this->resetValidation();
        $this->showConfirmation = false;
        $this->processingMessage = null;
        $this->showProcessingModal = false;
        $this->processingSince = null;
        $this->processingAvailableAt = null;
    }

    public function submit()
    {
       

        $this->isProcessed = true;

        $this->validate();

        $threshold = Carbon::now()->subHours(48);
        $isProcessed = Contact::where('is_processed', false)
            ->where(function($q) {
                $q->where('phone', $this->phone)
                  ->orWhere('email', $this->email);
            })
            ->where('created_at', '>=', $threshold)
            ->first();

        if ($isProcessed) {
            $this->processingMessage = 'Thank you for reaching out. We have already received your request and are currently processing it. Please allow up to 48 hours for our reply we will get back to you as soon as possible. Thank you for your patience.';
            $this->processingSince = optional($isProcessed->created_at)->toDateTimeString();
            $this->processingAvailableAt = optional($isProcessed->created_at)->addHours(48)->toDateTimeString();
            $this->showProcessingModal = true;
            $this->isProcessed = false;
            return;
        }

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'service' => $this->service,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'phone', 'service', 'message']);
        $this->open = false;
        $this->successMessage = 'Your request has been submitted. We will contact you shortly.';
        $this->showConfirmation = true;

        $this->isProcessed = false;
        $this->processingMessage = null;
    }
    public function render()
    {
        return view('livewire.form.consultation-form');
    }
}
