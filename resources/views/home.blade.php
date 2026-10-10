@extends('layouts.app')

@section('title', 'SAKHALINE | Главная')

@section('content')
    <!-- Hero секция -->
    <section class="hero-section">
        <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1920');"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <span class="category-label">ЭКСКЛЮЗИВ · 12 МИН ЧТЕНИЯ</span>
            <h1 class="hero-title">Маяк Анива:<br>Забытый страж на краю земли</h1>
            <p class="hero-excerpt">На самом юге полуострова Крильон, там, где суша встречается с яростью Охотского моря, стоит памятник из бетона и истории.</p>
            
            <div class="hero-meta">
                <div class="avatar">ДК</div>
                <span>Дмитрий Ким</span>
                <span>24 Сентября 2026</span>
                <span>💬 14</span>
                <span>♡ 342</span>
            </div>
        </div>
    </section>

    <!-- Контент с карточками -->
    <div class="content-layout">
        <main class="main-content">
            <div class="section-header">
                <h2 class="section-title">Свежие публикации</h2>
                <a href="#" class="view-all">Все статьи →</a>
            </div>

            <div class="posts-grid">
                @php
                    $fakePosts = [
                        [
                            'slug' => 'vulkan',
                            'title' => 'Восхождение на спящего гиганта',
                            'excerpt' => 'Вулкан Богдан Хмельницкий открывает один из самых захватывающих видов на Дальнем Востоке.',
                            'category' => 'ПРИРОДА',
                            'author_initials' => 'ИТ',
                            'author_name' => 'Иван Тихонов',
                            'date' => '8 Сентября 2026',
                            'comments' => 6,
                            'likes' => 123,
                            'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=400'
                        ],
                        [
                            'slug' => 'kukhnya',
                            'title' => 'Сокровища Охотского моря',
                            'excerpt' => 'От свежего гребешка до камчатского краба: почему сахалинская кухня считается одной из лучших.',
                            'category' => 'КУХНЯ',
                            'author_initials' => 'МС',
                            'author_name' => 'Мария Сато',
                            'date' => '10 Сентября 2026',
                            'comments' => 14,
                            'likes' => 31,
                            'image' => 'https://images.unsplash.com/photo-1534604973900-c43ab4c2e0ab?w=400'
                        ],
                        [
                            'slug' => 'fauna',
                            'title' => 'Песнь серых китов',
                            'excerpt' => 'Каждую осень морские гиганты проходят вдоль западного побережья острова.',
                            'category' => 'ФАУНА',
                            'author_initials' => 'ЕК',
                            'author_name' => 'Елена Кравчук',
                            'date' => '8 Сентября 2026',
                            'comments' => 6,
                            'likes' => 123,
                            'image' => 'https://images.unsplash.com/photo-1568430462989-44163eb1752f?w=400'
                        ],
                        [
                            'slug' => 'istoriya',
                            'title' => 'Последние нивхи',
                            'excerpt' => 'Погружение в древнюю культуру коренных народов Сахалина.',
                            'category' => 'ИСТОРИЯ',
                            'author_initials' => 'ДК',
                            'author_name' => 'Дмитрий Ким',
                            'date' => '13 Сентября 2026',
                            'comments' => 10,
                            'likes' => 323,
                            'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400'
                        ]
                    ];
                @endphp

                @foreach($fakePosts as $post)
                    <x-post.card :post="(object) $post" />
                @endforeach
            </div>

            <!-- Пагинация -->
            <div class="pagination">
                <a href="#" class="pagination__item pagination__item--active">1</a>
                <a href="#" class="pagination__item">2</a>
                <a href="#" class="pagination__item">3</a>
                <a href="#" class="pagination__item">→</a>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-widget">
                <h3 class="sidebar-widget__title">Популярное</h3>
                
                <a href="#" class="trending-item">
                    <span class="trending-item__number">01</span>
                    <div class="trending-item__content">
                        <h4 class="trending-item__title">Термальные источники Данки</h4>
                        <span class="trending-item__meta">4.2к · 2 дня</span>
                    </div>
                </a>
                
                <a href="#" class="trending-item">
                    <span class="trending-item__number">02</span>
                    <div class="trending-item__content">
                        <h4 class="trending-item__title">Гид: Сахалин зимой</h4>
                        <span class="trending-item__meta">3.8к · 5 дней</span>
                    </div>
                </a>
                
                <a href="#" class="trending-item">
                    <span class="trending-item__number">03</span>
                    <div class="trending-item__content">
                        <h4 class="trending-item__title">Трасса 45: Между морем и горами</h4>
                        <span class="trending-item__meta">2.1к · 1 неделя</span>
                    </div>
                </a>
            </div>

            <div class="newsletter-box">
                <h3 class="newsletter-box__title">Письма с острова</h3>
                <p class="newsletter-box__text">Лучшие материалы, скрытые маршруты и размышления о Сахалине — каждое воскресенье.</p>
                <input type="email" class="newsletter-box__input" placeholder="Ваш e-mail">
                <button class="btn-outline-gold">ПОДПИСАТЬСЯ</button>
            </div>
        </aside>
    </div>
@endsection

@push('styles')
<style>
    .hero-section {
        position: relative;
        height: 1280px;
        overflow: hidden;
    }
    
    .hero-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
    }
    
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(0deg, #0A0A0A 60.57%, rgba(10, 10, 10, 0.5) 77.32%, rgba(10, 10, 10, 0) 81.31%);
    }
    
    .hero-content {
        position: absolute;
        bottom: 100px;
        left: 60px;
        max-width: 800px;
    }
    
    .hero-title {
        font-family: var(--font-serif);
        font-size: 70px;
        font-weight: 400;
        line-height: 81px;
        letter-spacing: 0.01em;
        color: var(--text-primary);
        margin: 20px 0;
    }
    
    .hero-excerpt {
        font-family: var(--font-sans);
        font-size: 16px;
        font-weight: 500;
        line-height: 25px;
        letter-spacing: 0.01em;
        color: var(--text-primary);
        margin-bottom: 30px;
    }
    
    .hero-meta {
        display: flex;
        align-items: center;
        gap: 20px;
        font-family: var(--font-sans);
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.01em;
        color: var(--text-primary);
        border-top: 1px solid var(--border-thin);
        padding-top: 20px;
    }
    
    .content-layout {
        max-width: 1920px;
        margin: 0 auto;
        padding: 100px 60px;
        display: grid;
        grid-template-columns: 820px 408px;
        gap: 80px;
    }
    
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border-thin);
    }
    
    .section-title {
        font-family: var(--font-serif);
        font-size: 50px;
        font-weight: 400;
        line-height: 81px;
        letter-spacing: 0.01em;
        color: var(--text-primary);
    }
    
    .view-all {
        font-family: var(--font-sans);
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.1em;
        color: var(--accent-gold);
        text-decoration: none;
    }
    
    .posts-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
    }
    
    .sidebar {
        position: sticky;
        top: 120px;
        height: fit-content;
    }
</style>
@endpush