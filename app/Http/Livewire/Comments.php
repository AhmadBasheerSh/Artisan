<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Comments extends Component
{
    public $post;
    protected $listeners = ['commentAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.comments');
    }
}
