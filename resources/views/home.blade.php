<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗣𝗔𝗥𝗔𝗗𝗜𝗦𝗘</title>
<link rel="icon" href="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- Inline critical CSS -->
    <style>
        /* التصميم العام */
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: url('https://www.transparenttextures.com/patterns/honeycomb.png'),
                        linear-gradient(60deg, rgba(139,195,74,0.3) 0%, rgba(205,220,57,0.3) 100%);
            color: #2E7D32;
            background-image: url('home.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-blend-mode: overlay;
            min-height: 100vh;
            background-repeat: no-repeat;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: rgba(255,255,255,0.9);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            backdrop-filter: blur(5px);
            position: relative;
            z-index: 100;
        }
        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: #2E7D32;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .navbar-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s ease;
            color: #2E7D32;
        }
        .navbar-icons i:hover {
            color: #558B2F;
        }
        .language-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 40px;
            background-color: #8BC34A;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            color: white;
        }
        .language-menu ul li:hover {
            background-color: #689F38;
        }
        .floating-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
            gap: 40px;
            flex-wrap: wrap;
            padding: 20px;
        }
        .floating-buttons button {
            width: 220px;
            height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #4CAF50, #8BC34A);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }
        .floating-buttons button::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(45deg);
            transition: all 0.5s ease;
        }
        .floating-buttons button:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }
        .floating-buttons button:hover::before {
            top: -30%;
            left: -30%;
        }
        .floating-buttons button i {
            font-size: 60px;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }
        .content {
            padding: 20px;
            text-align: center;
            background-color: rgba(255,255,255,0.8);
            border-radius: 15px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            backdrop-filter: blur(5px);
        }
        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #2E7D32;
            font-family: 'Times New Roman', serif;
        }
        .content p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }
        .logo {
            height: 50px;
            width: auto;
            cursor: pointer;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
            object-fit: contain;
        }
        .flying-bee {
            position: absolute;
            width: 40px;
            height: 40px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FFC107"/><circle cx="30" cy="50" r="20" fill="%23333"/><circle cx="70" cy="50" r="25" fill="%23333"/><path d="M20,50 Q50,30 80,50 Q50,70 20,50" fill="%23FFEB3B"/><path d="M40,20 L40,30 M60,20 L60,30 M40,70 L40,80 M60,70 L60,80" stroke="%23333" stroke-width="3"/></svg>');
            background-size: contain;
            z-index: -1;
            animation: flyAround 20s linear infinite;
            content-visibility: auto;
        }
        @keyframes flyAround {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(200px, 150px) rotate(90deg); }
            50% { transform: translate(400px, 0) rotate(180deg); }
            75% { transform: translate(200px, -150px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }
        .pollen {
            position: absolute;
            width: 15px;
            height: 15px;
            background: radial-gradient(circle, #FFEB3B 30%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
            animation: floatPollen 8s ease-in-out infinite;
            content-visibility: auto;
        }
        @keyframes floatPollen {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 0.3; }
        }
        @media (prefers-reduced-motion: reduce) {
            * { animation: none !important; transition: none !important; }
        }
    </style>

    <!-- Load non-critical CSS asynchronously -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
</head>
<body>
    <!-- تأثيرات الطبيعة الأساسية -->
    <div class="flying-bee" style="top:15%; left:10%; animation-delay:0s;"></div>
    <div class="pollen" style="top:20%; left:30%; animation-delay:0.5s;"></div>

    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 loading="eager"
                 width="50"
                 height="50">
        </a>
        <div class="center-text">
            <h1 id="mainTitle">𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" id="languageIcon" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- القائمة المنزلقة للغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li data-lang="ar" aria-label="Arabic">العربية</li>
            <li data-lang="en" aria-label="English">English</li>
        </ul>
    </div>

    <!-- الأزرار العائمة -->
    <div class="floating-buttons">
        <button onclick="openTools()" aria-label="Tools">
            <i class="fas fa-tools"></i>
            <span id="toolsText">Tools</span>
        </button>
        <button onclick="redirectToCategoryProducts()" aria-label="Products">
            <i class="fas fa-utensils"></i>
            <span id="productsText">Products</span>
        </button>
        <button onclick="openArticles()" aria-label="Articles">
            <i class="fas fa-book"></i>
            <span id="articlesText">Articles</span>
        </button>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="welcomeTitle">𝓦𝓔𝓛𝓒𝓞𝓜𝓔 𝓣𝓞 𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔</h1>
        <p id="welcomeMessage">Where nature's harmony meets the sweetness of honey in a green paradise.</p>
    </div>

    <!-- Deferred JavaScript -->
    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔",
                toolsText: "المستلزمات",
                productsText: "المنتجات",
                articlesText: "المقالات",
                welcomeTitle: "مرحبًا بكم في الفردوس",
                welcomeMessage: "حيث تلتقي أنسجام الطبيعة مع حلاوة العسل في فردوس أخضر.",
            },
            en: {
                mainTitle: "𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔",
                toolsText: "Tools",
                productsText: "Products",
                articlesText: "Articles",
                welcomeTitle: "𝓦𝓔𝓛𝓒𝓞𝓜𝓔 𝓣𝓞 𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔",
                welcomeMessage: "Where nature's harmony meets the sweetness of honey in a green paradise.",
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
            toggleLanguageMenu();
        }

        // وظيفة تبديل قائمة اللغة
        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        // إغلاق قائمة اللغة عند النقر خارجها
        function closeLanguageMenu(e) {
            const languageMenu = document.getElementById('languageMenu');
            const languageIcon = document.getElementById('languageIcon');

            if (!languageMenu.contains(e.target) && e.target !== languageIcon &&
                languageMenu.classList.contains('show')) {
                languageMenu.classList.remove('show');
            }
        }

        // وظائف الأزرار العائمة
        function openTools() {
            window.location.href = "{{ route('tools') }}";
        }

        function redirectToCategoryProducts() {
            window.location.href = "{{ route('categorys') }}";
        }

        function openArticles() {
            window.location.href = "{{ route('articles') }}";
        }

        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // تهيئة الأحداث بعد تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            // حدث النقر على أيقونة اللغة
            document.getElementById('languageIcon').addEventListener('click', toggleLanguageMenu);

            // أحداث النقر على خيارات اللغة
            document.querySelectorAll('.language-menu li').forEach(item => {
                item.addEventListener('click', function() {
                    const lang = this.getAttribute('data-lang');
                    changeLanguage(lang);
                });
            });

            // حدث النقر خارج قائمة اللغة لإغلاقها
            document.addEventListener('click', closeLanguageMenu);
        });

        // إنشاء تأثيرات الطبيعة بعد تحميل الصفحة
        window.addEventListener('load', function() {
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                const natureContainer = document.body;

                // إنشاء النحل الإضافي
                for (let i = 0; i < 3; i++) {
                    const bee = document.createElement('div');
                    bee.className = 'flying-bee';
                    bee.style.top = Math.random() * 80 + 10 + '%';
                    bee.style.left = Math.random() * 80 + 10 + '%';
                    bee.style.animationDelay = Math.random() * 5 + 's';
                    bee.style.animationDuration = 15 + Math.random() * 20 + 's';
                    natureContainer.appendChild(bee);
                }

                // إنشاء حبوب اللقاح الإضافية
                for (let i = 0; i < 5; i++) {
                    const pollen = document.createElement('div');
                    pollen.className = 'pollen';
                    pollen.style.top = Math.random() * 80 + 10 + '%';
                    pollen.style.left = Math.random() * 80 + 10 + '%';
                    pollen.style.animationDelay = Math.random() * 5 + 's';
                    pollen.style.width = 10 + Math.random() * 10 + 'px';
                    pollen.style.height = pollen.style.width;
                    natureContainer.appendChild(pollen);
                }
            }
        }, { once: true });
    </script>
</body>
</html>
