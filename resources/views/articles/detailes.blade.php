<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* التصميم العام */
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: url('https://www.transparenttextures.com/patterns/honeycomb.png'),
                        linear-gradient(60deg, rgba(255, 193, 7, 1) 0%, rgba(255, 235, 59, 1) 100%);
            color: black;
        }

        /* الشريط العلوي */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        /* شريط البحث */
        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
        }

        .search-bar input {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .search-bar button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #FFEB3B;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #FFD700;
        }

        /* أيقونات اللغة وخدمة العملاء */
        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .navbar-icons i:hover {
            color: #FFD700; /* لون أصفر داكن */
        }

        /* تنسيقات اللوغو */
        .logo {
            height: 60px;
            margin-left: auto;
            cursor: pointer;
        }

        /* قائمة اللغة */
        .language-menu {
            display: none;
            position: absolute;
            top: 70px; /* تعديل الموقع بسبب حجم الشريط الأصغر */
            right: 20px;
            background-color: #FFEB3B; /* لون أصفر */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
        }

        .language-menu.show {
            display: block;
        }

        .language-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .language-menu ul li {
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .language-menu ul li:hover {
            background-color: #FFD700; /* لون أصفر داكن */
        }

        /* المحتوى الرئيسي */
        .content {
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        /* مربع العنوان */
        .title-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .title-box h1 {
            font-size: 36px;
            margin: 0;
        }

        /* مربع المحتوى */
        .content-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
        }

        .content-box p {
            font-size: 18px;
            line-height: 1.6;
            margin: 0;
        }

        /* تنسيقات الصور */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 أعمدة */
            gap: 10px; /* المسافة بين الصور */
            margin-top: 20px;
        }

        .image-grid img {
            width: 100%; /* عرض الصورة بحجمها الطبيعي */
            height: auto; /* الحفاظ على نسب الصورة */
            border-radius: 10px; /* زوايا مدورة */
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <!-- أيقونات اللغة وخدمة العملاء -->
        <div class="navbar-icons">
            <!-- أيقونة اللغة -->
            <i class="fas fa-globe" onclick="toggleLanguageMenu()"></i>
            <!-- أيقونة خدمة العملاء -->
            <i class="fas fa-headset" onclick="redirectToCustomerService()"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- محتوى المقالة -->
    <div class="content">
        <!-- مربع العنوان -->
        <div class="title-box">
            <h1 id="articleTitle">{{ $article->title }}</h1>
        </div>

        <!-- مربع المحتوى -->
        <div class="content-box">
            <!-- عرض النص كاملًا -->
            <p id="articleText">{{ $article->text }}</p>

            <!-- عرض جميع الصور في grid -->
            @if (isset($article->images) && count($article->images) > 0)
                <div class="image-grid">
                    @foreach ($article->images as $image)
                        <img src="{{ $image->image_path }}" alt="Article Image">
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                articleTitle: "{{ $article->title }}",
                articleText: "{{ $article->text }}",
            },
            en: {
                articleTitle: "{{ $article->title }}",
                articleText: "{{ $article->text }}",
            },
        };

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('articleTitle').textContent = data.articleTitle;
            document.getElementById('articleText').textContent = data.articleText;
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }
        // وظيفة لعرض رسالة خدمة العملاء
        function showCustomerServiceMessage() {
            alert("مرحبًا! كيف يمكننا مساعدتك اليوم؟"); // رسالة خدمة العملاء
        }
    </script>
</body>
</html>