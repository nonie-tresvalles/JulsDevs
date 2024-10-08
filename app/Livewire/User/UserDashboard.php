<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserDashboard extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
