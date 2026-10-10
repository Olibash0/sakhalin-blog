@props(['post'])

<a href="#" class="post-card" {{ $attributes }}>
    <img src="{{ $post->image_url ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400' }}" alt="{{ $post->title }}" class="post-card__img">
    
    <div class="post-card__body">
        <span class="post-card__category">{{ $post->category ?? 'Журнал' }}</span>
        <h3 class="post-card__title">{{ $post->title }}</h3>
        <p class="post-card__excerpt">{{ Str::limit($post->excerpt, 90) }}</p>
        
        <div class="post-card__divider"></div>
        
        <div class="post-card__meta">
            <div class="post-card__author">
                <div class="avatar">{{ $post->author_initials ?? 'АК' }}</div>
                <span>{{ $post->author_name ?? 'Автор' }}</span>
            </div>
            <div style="display: flex; gap: 16px;">
                <span>💬 {{ $post->comments_count ?? 0 }}</span>
                <span>♡ {{ $post->likes_count ?? 0 }}</span>
            </div>
        </div>
    </div>
</a>