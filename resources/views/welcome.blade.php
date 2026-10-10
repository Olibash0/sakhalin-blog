<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKHALINE | Блог</title>
    <!-- Подключаем наши стили -->
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    
    <style>
        /* Временный стиль для демонстрации сетки */
        .demo-container {
            max-width: 1200px;
            margin: 100px auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 60px;
        }
        .cards-grid {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .demo-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .demo-section h2 {
            font-family: var(--font-serif);
            font-size: 48px;
            font-weight: 400;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="demo-container">
        
        <!-- Демонстрация кнопок -->
        <div class="demo-section">
            <h2>UI Kit: Кнопки</h2>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <x-ui.button type="primary">Войти</x-ui.button>
                <x-ui.button type="outline">Регистрация</x-ui.button>
                <x-ui.button type="full">Подписаться</x-ui.button>
            </div>
        </div>

        <!-- Демонстрация инпута -->
        <div class="demo-section">
            <h2>UI Kit: Инпуты</h2>
            <div class="input-group">
                <label class="input-label">E-MAIL</label>
                <input type="email" class="input-field" placeholder="your@email.com">
            </div>
        </div>

        <!-- Демонстрация карточки поста -->
        <div class="demo-section">
            <h2>UI Kit: Карточка поста</h2>
            
            @php
                // Фейковые данные для демонстрации (в реальности придут из БД)
                $fakePost = (object) [
                    'slug' => 'mayak-aniva',
                    'title' => 'Маяк Анива: Забытый страж на краю земли',
                    'excerpt' => 'На самом юге полуострова Крильон, там, где суша встречается с яростью Охотского моря, стоит памятник из бетона и истории.',
                    'category' => 'История',
                    'author_initials' => 'ДК',
                    'author_name' => 'Дмитрий Ким',
                    'comments_count' => 14,
                    'likes_count' => 342,
                    'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400'
                ];
            @endphp

            <div class="cards-grid">
                <x-post.card :post="$fakePost" />
                
                <x-post.card 
                    :post="(object) [
                        'slug' => 'vulkan',
                        'title' => 'Восхождение на спящего гиганта',
                        'excerpt' => 'Вулкан Богдан Хмельницкий открывает один из самых захватывающих видов на Дальнем Востоке.',
                        'category' => 'Природа',
                        'author_initials' => 'ИТ',
                        'author_name' => 'Иван Тихонов',
                        'comments_count' => 8,
                        'likes_count' => 124,
                        'image_url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=400'
                    ]" 
                />
            </div>
        </div>

    </div>

</body>
</html>