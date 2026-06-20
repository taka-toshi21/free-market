<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class LikeButton extends Component
{
    public Item $item;

    public bool $isLiked = false;

    public function mount(Item $item){
        $this -> item = $item;

        $user = auth()->user();

        $this -> isLiked = $user?
            $user->likedItems()->where('item_id', $item->id)->exists(): false;
    }

    public function toggleLike(){
        if(!auth()->check()){
            return;
        }

        $user = auth()->user();

        if ($this->isLiked) {
            $user->likedItems()->detach($this->item->id);
            $this->isLiked = false;
        } else {
            $user->likedItems()->attach($this->item->id);
            $this -> isLiked = true;
        }
    }

    public function getLikesCountProperty(){
        return $this -> item -> likedUsers() -> count();
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
