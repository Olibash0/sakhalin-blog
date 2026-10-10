<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SAKHALINE | Блог о крае туманов')</title>
    
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    
    @stack('styles')
</head>
<body>

    <!-- HEADER -->
    <header class="site-header">
        <a href="{{ route('home') }}" class="logo">САХАЛИН</a>
        
        <nav class="main-nav">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">ГЛАВНАЯ</a>
            <a href="{{ route('category', 'nature') }}" class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}">ПРИРОДА</a>
            <a href="{{ route('category', 'history') }}" class="nav-link">ИСТОРИЯ</a>
            <a href="{{ route('category', 'routes') }}" class="nav-link">МАРШРУТЫ</a>
            <a href="{{ route('category', 'kitchen') }}" class="nav-link">КУХНЯ</a>
            <a href="{{ route('about') }}" class="nav-link">О ПРОЕКТЕ</a>
        </nav>
        
        <div class="header-actions">
            <a href="{{ route('login') }}" class="btn btn-outline">ВОЙТИ</a>
            <a href="{{ route('register') }}" class="btn btn-primary">РЕГИСТРАЦИЯ</a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="footer-logo">SAKHALINE</div>
        
        <nav class="footer-nav">
            <a href="{{ route('about') }}">О ПРОЕКТЕ</a>
            <a href="{{ route('home') }}">ЖУРНАЛ</a>
            <a href="{{ route('category', 'nature') }}">РУБРИКИ</a>
            <a href="#">КОНТАКТЫ</a>
            <a href="#">404</a>
        </nav>
        
        <div class="copyright">© 2026 SAKHALINE BLOG. Создано по приколу</div>
    </footer>

    @stack('scripts')
</body>
</html>