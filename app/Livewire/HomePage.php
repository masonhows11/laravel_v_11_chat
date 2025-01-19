<?php

namespace App\Livewire;

// use App\Events\EmojiClicked;
use App\Events\ClickEvent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Test Websocket')]
class HomePage extends Component
{
    /**
     * Receive user's selected emoji to broadcast
     *
     * @param string $text
     *
     * @return void
     */
    public function broadcast(string $text): void
    {
        // dd($emoji);

        // call ClickEvent() event with argument
        event(new ClickEvent($text));
    }
}
