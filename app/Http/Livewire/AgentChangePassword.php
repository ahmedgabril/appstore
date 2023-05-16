<?php

namespace App\Http\Livewire;

use App\Models\User;
use http\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AgentChangePassword extends Component
{
    public $password;
    public function render()
    {

        return view('livewire.agent-change-password');
    }

    protected $rules = [
        'password' => 'required|min:6',

    ];
    protected $messages = [
        'password.min'  => 'الحد الادني هو 6 احرف '
];
    public function changepass(){
        $this->validate();
     User::where('name',auth()->user()->name)->update([
         'password' => Hash::make($this->password),

     ]);
        Auth::guard('web')->logout();


       session()->invalidate();

      session()->regenerateToken();

        return redirect('/login');
    }
}
