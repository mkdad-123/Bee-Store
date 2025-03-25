<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!-- تحسين: إضافة preconnect للخطوط وموارد الطرف الثالث -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- تحسين: تحميل الخطوط الأساسية فقط -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <!-- تحسين: استبدال Font Awesome بخط أيقونات أخف -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- تحسين: وضع CSS داخلي مع تقليل التكرار -->
    <style>
        :root {
            --primary-color: #FFEB3B;
            --primary-dark: #FFD700;
            --orange-gradient: linear-gradient(45deg, #FF8C42, #FF6F00);
            --red-gradient: linear-gradient(45deg, #FF6B6B, #FF8E8E);
            --red-gradient-hover: linear-gradient(45deg, #FF8E8E, #FF6B6B);
            --red-gradient-active: linear-gradient(45deg, #FF5252, #FF6B6B);
        }
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: url('https://www.transparenttextures.com/patterns/honeycomb.png'),
                        linear-gradient(60deg, rgba(255, 193, 7, 1) 0%, rgba(255, 235, 59, 1) 100%);
            color: black;
            min-height: 100vh;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }
        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
            min-width: 0; /* لمنع تجاوز الحدود */
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
            background-color: var(--primary-color);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }
        .search-bar button:hover {
            background-color: var(--primary-dark);
        }
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
            color: var(--primary-dark);
        }
        .language-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 40px;
            background-color: var(--primary-color);
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
            background-color: var(--primary-dark);
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .articles-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }
        .article-card {
            background: var(--orange-gradient);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            color: black;
            min-height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            will-change: transform; /* تحسين الأداء للتحريك */
        }
        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .article-card h3 {
            font-size: 24px;
            margin: 10px 0;
            word-break: break-word; /* منع تجاوز النص للحدود */
        }
        .logo {
            height: 60px;
            margin-left: auto;
            cursor: pointer;
            width: auto;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
            flex-wrap: wrap;
        }
        .pagination button {
            padding: 10px 15px;
            font-size: 16px;
            background: var(--red-gradient);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: white;
        }
        .pagination button:hover {
            background: var(--red-gradient-hover);
        }
        .pagination button.active {
            background: var(--red-gradient-active);
        }

        /* تحسينات للجوال */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }
            .search-bar {
                width: 100%;
                margin: 15px 0;
            }
            .articles-list {
                grid-template-columns: 1fr;
            }
            .content h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <!-- تحسين: تحديد أبعاد الصورة مسبقا -->
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo" width="60" height="60">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for an article by title..." aria-label="Search articles">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="mainTitle">𝐀𝐑𝐓𝐈𝐂𝐋𝐄𝐒</h1>
        <div class="articles-list" id="articles-list">
            @foreach($articles as $article)
                <div class="article-card" onclick="showArticle({{ $article->id }})" role="button" tabindex="0" aria-label="Read article: {{ $article->title }}">
                    <h3>{{ $article->title }}</h3>
                </div>
            @endforeach
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination">
            @for($i = 1; $i <= ceil($articles->count() / 9); $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}" aria-label="Go to page {{ $i }}">{{ $i }}</button>
            @endfor
        </div>
    </div>

    <!-- تحسين: وضع JavaScript في نهاية body مع defer -->
    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "المقالات",
                searchPlaceholder: "ابحث عن مقال بالعنوان...",
            },
            en: {
                mainTitle: "𝐀𝐑𝐓𝐈𝐂𝐋𝐄𝐒",
                searchPlaceholder: "Search for an article by title...",
            },
        };

        // وظيفة لعرض المقالة كاملة
        function showArticle(articleId) {
            window.location.href = `/home/article/content/${articleId}`;
        }

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        // إغلاق قائمة اللغة عند النقر خارجها
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.fa-globe') && !e.target.closest('#languageMenu')) {
                document.getElementById('languageMenu').classList.remove('show');
            }
        });

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu();
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // وظيفة البحث
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/article_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }

        // إضافة حدث عند الضغط على Enter في حقل البحث
        document.getElementById('searchInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                searchItem();
            }
        });

        // تحسين: جعل بطاقات المقالات قابلة للتفاعل باللوحة المفاتيح
        document.querySelectorAll('.article-card').forEach(card => {
            card.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    card.click();
                }
            });
        });
    </script>
</body>
</html>
