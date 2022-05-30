<?php

namespace App\Http\Livewire\User\Modals;

use Livewire\Component;

class ItemModal extends Component
{
    public $itemModal = false;

    protected $listeners = ['openItemModal'];

    public function openItemModal()
    {
        $this->itemModal = true;
    }

    public function close()
    {
        $this->reset();
    }


    public function render()
    {
        return view('livewire.user.modals.item-modal');
    }
}
