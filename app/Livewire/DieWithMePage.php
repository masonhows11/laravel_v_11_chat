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
        $this->unique_identifier = v6();
    }

    public function send(string $message)
    {
        broadcast(new MessageSent($this->unique_identifier, $this->display_name, $message))->toOthers();
    }

    public function typing()
    {
        $this->isTyping = true;
        broadcast(new IsTyping($this->unique_identifier, $this->display_name))->toOthers();
    }

    public function idle()
    {
        $this->isTyping = false;
        broadcast(new TypingStopped($this->unique_identifier, $this->display_name))->toOthers();
    }

    public function render()
    {
        return view('livewire.die-with-me-page');
    }
}
