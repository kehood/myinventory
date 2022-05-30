<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LivewireDashboard extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);

        return view('livewire.user.livewire-dashboard', [
            'items' => $user->items,
        ]);
    }
}
