<div class="itemDetail-info__logo-box">
    <button type="button" wire:click="toggleLike" class="like-btn">
        @if($isLiked)
        <img src="{{ asset('img/ハートロゴ_ピンク.png') }}" alt="liked">
        @else
        <img src="{{ asset('img/ハートロゴ_デフォルト.png') }}" alt="default">
        @endif
    </button>

    <span>{{ $this->likesCount }}</span>
</div>
