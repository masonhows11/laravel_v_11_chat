<?php

namespace App\Livewire;

// use App\Events\EmojiClicked;
use App\Events\ClickEvent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Live Social Mood')]
class HomePage extends Component
{
    /**
     * Receive user's selected emoji to broadcast
     *
     * @param string $emoji
     *
     * @return void
     */
    public function broadcast(string $emoji): void
    {
        event(new ClickEvent($emoji));
    }
}
