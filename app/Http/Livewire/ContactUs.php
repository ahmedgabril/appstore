<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.contact-us',[

            'data'=> \App\Models\contactus::first()
        ]) ->extends('layouts.forntend')
            ->section('maincontent');
    }
}
