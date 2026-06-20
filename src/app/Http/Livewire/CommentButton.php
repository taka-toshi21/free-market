<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use App\Models\Comment;

class CommentButton extends Component
{
    public Item $item;
    public string $content = '';

    public function mount(Item $item){
        $this->item = $item;
    }

    public function saveComment(){
        if(!auth()->check()){
            return;
        }

        $this->validate([
            'content' => ['required', 'max:255'],
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'item_id' => $this->item->id,
            'content' => $this->content,
        ]);

        $this->reset('content');
    }

    public function render()
    {
        return view('livewire.comment-button', [
            'comments' => $this->item->comments()->with('user')->latest()->get(),
        ]);
    }
}
