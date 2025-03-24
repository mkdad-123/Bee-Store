<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al_Firdawas</title>
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

        /* أيقونات الشريط العلوي */
        .navbar-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .navbar-icons i:hover {
            color: #FFD700;
        }

        /* القائمة المنزلقة للغة */
        .language-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 40px;
            background-color: #FFEB3B;
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
            background-color: #FFD700;
        }

        /* الأزرار العائمة */
        .floating-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
            gap: 20px;
        }

        .floating-buttons button {
            width: 20%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #FFC107, #FF9800);
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .floating-buttons button:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* الأيقونات */
        .floating-buttons button i {
            font-size: 48px;
            margin-bottom: 10px;
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

        .content p {
            font-size: 18px;
            color: #333;
        }

        /* تنسيقات اللوغو */
        .logo {
            height: 60px;
            margin-left: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="center-text">
            <h1 id="mainTitle">𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <div class="navbar-icons">
            <!-- أيقونة اللغة -->
            <i class="fas fa-globe" onclick="toggleLanguageMenu()"></i>
            <!-- أيقونة خدمة العملاء -->
            <i class="fas fa-headset" onclick="redirectToCustomerService()"></i>
        </div>
    </div>

    <!-- القائمة المنزلقة للغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- الأزرار العائمة -->
    <div class="floating-buttons">
        <button onclick="openTools()">
            <i class="fas fa-tools"></i>
            <span id="toolsText">Tools</span>
        </button>
        <button onclick="redirectToCategoryProducts()">
            <i class="fas fa-utensils"></i>
            <span id="productsText">Products</span>
        </button>
        <button onclick="openArticles()">
            <i class="fas fa-book"></i>
            <span id="articlesText">Articles</span>
        </button>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="welcomeTitle">𝒲ℰℒ𝒞𝒪ℳℰ 𝒯𝒪 𝒜ℒ_ℱℐℛ𝒟𝒜𝒲𝒜𝒮</h1>
    </div>

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢",
                toolsText: "المستلزمات",
                productsText: "المنتجات",
                articlesText: "المقالات",
                welcomeTitle: " مرحبًا بكم في الفردوس",
                welcomeMessage: "هذا مثال لواجهة مستخدم مع قائمة منسدلة.",
            },
            en: {
                mainTitle: "𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢",
                toolsText: "Tools",
                productsText: "Products",
                articlesText: "Articles",
                welcomeTitle: "𝒲ℰℒ𝒞𝒪ℳℰ 𝒯𝒪 𝒜ℒ_ℱℐℛ𝒟𝒜𝒲𝒜𝒮",
                welcomeMessage: "This is an example of a user interface with a dropdown menu.",
            },
        };

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('toolsText').textContent = data.toolsText;
            document.getElementById('productsText').textContent = data.productsText;
            document.getElementById('articlesText').textContent = data.articlesText;
            document.getElementById('welcomeTitle').textContent = data.welcomeTitle;
            document.getElementById('welcomeMessage').textContent = data.welcomeMessage;
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            // إعادة التوجيه إلى صفحة خدمة العملاء
            window.location.href = "/home/compliants";
        }

        // وظائف الأزرار العائمة
        function openTools() {
            // إعادة التوجيه إلى واجهة tools
            window.location.href = "{{ route('tools') }}";
        }

        function redirectToCategoryProducts() {
            // إعادة التوجيه إلى واجهة categorys
            window.location.href = "{{ route('categorys') }}";
        }

        function openArticles() {
            // إعادة التوجيه إلى واجهة articles
            window.location.href = "{{ route('articles') }}";
        }
    </script>
</body>
</html>