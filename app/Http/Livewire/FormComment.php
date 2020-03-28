<?php

namespace App\Http\Livewire;

use App\Clip;
use Exception;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FormComment extends Component
{
    use AuthorizesRequests;

    public $clip;

    public function mount(Clip $clip)
    {
        $this->clip = $clip;
    }

    public function submit(Request $request)
    {
        //
    }

    public function render()
    {
        return view('livewire.form_comment');
    }
}
