<?php

namespace App\Livewire\Page;

use App\Models\Contact as ModelsContact;
use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;

class Contact extends Component
{
      public $name, $email, $phone, $service, $message;
      public $serviceList;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'service' => 'nullable|string|max:255',
        'message' => 'required|string|min:5',
    ];
    public function mount(){
        $this->serviceList = Service::orderBy('name')->get();
    }

    public function submit()
    {
        $this->validate();

        $since = Carbon::now()->subHours(48);

   
        $unprocessedExists = ModelsContact::where('phone', $this->phone)
            ->where('is_processed', false)
            ->where('created_at', '>=', $since)
            ->exists();

        if ($unprocessedExists) {
            $this->reset(['name', 'email', 'phone', 'service', 'message']);
            session()->flash('info', 'We have received your request and will contact you shortly.');
            return;
        }

        $processedExists = ModelsContact::where('phone', $this->phone)
            ->where('is_processed', true)
            ->where('created_at', '>=', $since)
            ->exists();

        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'service' => $this->service,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'phone', 'service', 'message']);

        if ($processedExists) {
            session()->flash('info', 'We have already received your request and will contact you shortly.');
        } else {
            session()->flash('success', 'Thank you! Your message has been sent successfully.');
        }
    }

    public function render()
    {
        return view('livewire.page.contact');
    }
}
