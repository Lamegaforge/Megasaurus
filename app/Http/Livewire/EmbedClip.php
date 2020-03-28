<?php

namespace App\Http\Livewire;

use App\Clip;
use Livewire\Component;

class EmbedClip extends Component
{
    public $clip;

    public function mount(Clip $clip)
    {
        $this->clip = $clip;
    }

    public function render()
    {
        return view('livewire.embed_clip');
    }
}