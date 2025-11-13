<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ContactList extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public $confirmingDeleteId = null;

    #[On('refreshContacts')]
    public function render()
    {
        $contacts = Contact::when($this->search, function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('phone', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.contact.contact-list', compact('contacts'))
            ->layout('components.layouts.admin', ['title' => 'Contacts']);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function markProcessed($id)
    {
        $c = Contact::find($id);
        if ($c && !$c->is_processed) {
            $c->is_processed = true;
            $c->save();
            session()->flash('success', 'Contact marked as processed.');
        }
    }

    public function markUnprocessed($id)
    {
        $c = Contact::find($id);
        if ($c && $c->is_processed) {
            $c->is_processed = false;
            $c->save();
            session()->flash('success', 'Contact marked as unprocessed.');
        }
    }

    public function confirmDelete($id)
    {
        $this->confirmingDeleteId = $id;
    }

    public function deleteConfirmed()
    {
        if (!$this->confirmingDeleteId) {
            return;
        }

        $c = Contact::find($this->confirmingDeleteId);
        if ($c) {
            $c->delete();
            session()->flash('success', 'Contact deleted.');
        }

        $this->confirmingDeleteId = null;
        $this->dispatch('refreshContacts');
    }

    public function deleteById($id)
    {
        $c = Contact::find($id);
        if ($c) {
            $c->delete();
            session()->flash('success', 'Contact deleted.');
            $this->dispatch('refreshContacts');
        }
    }
}
