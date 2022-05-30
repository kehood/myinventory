<?php

namespace App\Http\Livewire\User\Modals;

use App\Models\User;
use Livewire\Component;

class ItemModal extends Component
{
    public User $user;

    public $itemModal = false;

    public $category_id, $vendor_id, $quick_lookup, $item_name, $quick_name, $description, $quantity_on_hand, $quantity_on_order, $list_price, $cost;

    protected $listeners = ['openItemModal'];

    public function openItemModal()
    {
        $this->itemModal = true;
    }

    public function close()
    {
        $this->reset(
            'itemModal',
            'category_id',
            'vendor_id',
            'quick_lookup',
            'item_name',
            'quick_name',
            'description',
            'quantity_on_hand',
            'quantity_on_order',
            'list_price',
            'cost'
        );

    }

    public function save()
    {
        $this->user->items()->create([
            'category_id'       => $this->category_id,
            'vendor_id'         => $this->vendor_id,
            'quick_lookup'      => $this->quick_lookup,
            'item_name'         => $this->item_name,
            'quick_name'        => $this->quick_name,
            'description'       => $this->description,
            'quantity_on_hand'  => $this->quantity_on_hand,
            'quantity_on_order' => $this->quantity_on_order,
            'list_price'        => $this->list_price,
            'cost'              => $this->cost,
        ]);
    }


    public function render()
    {
        return view('livewire.user.modals.item-modal');
    }
}
