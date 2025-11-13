<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $servicesCount = Service::count();
        $usersCount = User::count();
        $contactsCount = Contact::count();
        $processedCount = Contact::where('is_processed', true)->count();
        $unprocessedCount = Contact::where('is_processed', false)->count();

        $recentContacts = Contact::orderBy('created_at', 'desc')->limit(8)->get();

        return view('livewire.admin.dashboard.dashboard', compact(
            'servicesCount', 'usersCount', 'contactsCount', 'processedCount', 'unprocessedCount', 'recentContacts'
        ))->layout('components.layouts.admin', ['title' => 'Admin Dashboard']);
    }

    public function markProcessed($id)
    {
        $c = Contact::find($id);
        if ($c) {
            $c->is_processed = true;
            $c->save();
            session()->flash('success', 'Contact marked as processed.');
        }
    }

    public function markUnprocessed($id)
    {
        $c = Contact::find($id);
        if ($c) {
            $c->is_processed = false;
            $c->save();
            session()->flash('success', 'Contact marked as unprocessed.');
        }
    }
}
