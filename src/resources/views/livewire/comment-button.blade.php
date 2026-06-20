<div class="itemDetail-info__group">
    <div class="itemDetail-info__group-title">
        <span class="info__title-item">コメント({{ $comments->count() }})</span>
    </div>
    <div class="info__content">
        @foreach($comments as $comment)
        <div class="info__comment-card">
            <div class="comment__user">
                <div class="comment__user-icon">
                    <img src="" alt="">
                </div>
                <span class="comment__user-name">{{ $comment->user->name }}</span>
            </div>
            <p class="info__comment-history">{{ $comment->content }}</p>
        </div>
        @endforeach
        <form wire:submit.prevent="saveComment">
            <div class="info__comment-form">
                <span class="info__date-title">商品へのコメント</span>
                @auth
                <textarea wire:model="content" class="info__comment-area"></textarea>
                @error('content')
                <p class="comment__error-massage">{{ $message }}</p>
                @enderror
                <div class="comment__button">
                    <button type="submit" class="comment__button-submit">コメントを送信する</button>
                </div>
                @endauth
            </div>
        </form>
    </div>
</div>
