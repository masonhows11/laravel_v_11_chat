<?php

namespace App\Livewire;

use App\Events\IsTyping;
use App\Events\MessageSent;
use App\Events\TypingStopped;
use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;
use function Ramsey\Uuid\v6;

class DieWithMePage extends Component
{
    #[Locked]
    public string $unique_identifier;

    public string $display_name = 'anonymous';

    public bool $isTyping = false;

    public function mount()
    {

    }

    public function send(string $message)
    {

    }

    public function typing()
    {

    }

    public function idle()
    {

    }

    public function render()
    {
        return view('livewire.die-with-me-page');
    }
}
