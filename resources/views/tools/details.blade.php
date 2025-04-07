<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="تفاصيل الأداة - {{ $tool->name }}">
    <title> 𝗧𝗢𝗢𝗟𝗦 - {{ $tool->name }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسينات تحميل الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet"></noscript>

    <!-- تحسينات Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css.all.min.css"></noscript>

    <!-- CSS المضمن مع تحسينات الأداء -->
    <style>
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --secondary-color: #FFD700;
            --text-color: #2C3E50;
            --white: #FFFFFF;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', system-ui, -apple-system, sans-serif;
            font-display: swap;
            background: url("{{ asset('/detaeils.jpg') }}") center/cover no-repeat fixed,
            linear-gradient(60deg, rgba(139, 195, 74, 0.3) 0%, rgba(205, 220, 57, 0.3) 100%);
            background-blend-mode: overlay;
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            backdrop-filter: blur(5px);
            position: relative;
            z-index: 10;
        }

        .logo {
            height: 80px;
            width: auto;
            object-fit: contain;
            cursor: pointer;
            transition: transform 0.3s ease;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
            content-visibility: auto;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .center-text h1 {
            font-family: 'Times New Roman', serif;
            font-size: 1.8rem;
            color: var(--primary-dark);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1));
        }

        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
            color: var(--primary-dark);
            will-change: color;
        }

        .navbar-icons i:hover {
            color: var(--primary-color);
        }

        /* Language Menu */
        .language-menu {
            display: none;
            position: absolute;
            top: 80px;
            right: 20px;
            background-color: var(--primary-color);
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
            z-index: 1000;
            width: 150px;
        }

        .language-menu.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .language-menu ul {
            list-style: none;
        }

        .language-menu ul li {
            padding: 12px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--white);
        }

        .language-menu ul li:hover {
            background-color: var(--primary-dark);
        }

        /* Main Content */
        .content {
            flex: 1;
            padding: 30px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content h1 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: var(--text-color);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1));
        }

        /* Floating Buttons */
        .floating-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 100%;
            max-width: 800px;
            padding: 20px;
        }

        .floating-buttons button {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--white);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            will-change: transform;
        }

        .floating-buttons button:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
        }

        .floating-buttons button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .floating-buttons button:hover::after {
            transform: translateX(100%);
        }

        .floating-buttons img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 8px;
            margin-top: 15px;
            border: 2px solid rgba(255,255,255,0.3);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            object-fit: cover;
            content-visibility: auto;
        }

        .floating-buttons img:hover {
            transform: scale(1.02);
        }

        /* Performance Optimizations */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .center-text h1 {
                font-size: 1.5rem;
                order: 1;
                width: 100%;
                text-align: center;
            }

            .logo {
                height: 60px;
            }

            .content h1 {
                font-size: 1.8rem;
            }

            .floating-buttons button {
                padding: 15px;
                font-size: 1.1rem;
            }

            .language-menu {
                top: 70px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 loading="eager"
                 width="120"
                 height="80"
                 fetchpriority="high">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- Language Menu -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
            <li onclick="changeLanguage('en')" aria-label="English">English</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1 id="mainTitle">𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒</h1>
        <div class="floating-buttons">
            <!-- Name Button -->
            <button aria-label="Tool name">
                <span id="nameLabel">𝙽𝙰𝙼𝙴: {{ $tool->name }}</span>
            </button>

            <!-- Description Button -->
            <button aria-label="Tool description">
                <span id="descriptionLabel">𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽: {{ $tool->description }}</span>
            </button>

            <!-- Price Button -->
            <button aria-label="Tool price">
                <span id="priceLabel">𝙿𝚁𝙸𝙲𝙴: {{ $tool->price }}</span>
            </button>

            <!-- Image Button -->
            <button aria-label="Tool image">
                <img src="/storage/{{ $tool->image }}"
                     alt="{{ $tool->name }} image"
                     loading="lazy"
                     width="400"
                     height="300"
                     decoding="async">
            </button>
        </div>
    </div>

    <!-- JavaScript مع تحسينات الأداء -->
    <script>
        // تأجيل تحميل السكريبت غير الضروري
        function loadDeferredResources() {
            // يمكن إضافة أي سكريبتات غير حرجة هنا
        }

        // تشغيل بعد تحميل الصفحة
        if (window.requestIdleCallback) {
            window.requestIdleCallback(loadDeferredResources);
        } else {
            window.addEventListener('load', loadDeferredResources);
        }

        // Language data
        const languageData = {
            ar: {
                mainTitle: "التفاصيل",
                nameLabel: "الاسم:",
                descriptionLabel: "الوصف:",
                priceLabel: "السعر:",
            },
            en: {
                mainTitle: "𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒",
                nameLabel: "𝙽𝙰𝙼𝙴:",
                descriptionLabel: "𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽:",
                priceLabel: "𝙿𝚁𝙸𝙲𝙴:",
            },
        };

        // Toggle language menu
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            const isShowing = languageMenu.classList.toggle('show');

            if (isShowing) {
                document.addEventListener('click', closeLanguageMenuOnClickOutside);
            } else {
                document.removeEventListener('click', closeLanguageMenuOnClickOutside);
            }
        }

        function closeLanguageMenuOnClickOutside(e) {
            const languageMenu = document.getElementById('languageMenu');
            const languageIcon = document.querySelector('.fa-globe');

            if (!languageMenu.contains(e.target) && e.target !== languageIcon) {
                languageMenu.classList.remove('show');
                document.removeEventListener('click', closeLanguageMenuOnClickOutside);
            }
        }

        // Change language
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('nameLabel').textContent = data.nameLabel + " {{ $tool->name }}";
            document.getElementById('descriptionLabel').textContent = data.descriptionLabel + " {{ $tool->description }}";
            document.getElementById('priceLabel').textContent = data.priceLabel + " {{ $tool->price }}";
            toggleLanguageMenu();
        }

        // Redirect to customer service
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // تحميل متقطع للصور
        document.addEventListener('DOMContentLoaded', function() {
            if ('IntersectionObserver' in window) {
                const lazyImages = [].slice.call(document.querySelectorAll('img[loading="lazy"]'));

                const lazyImageObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            const lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src || lazyImage.src;
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                }, {
                    rootMargin: '200px 0px'
                });

                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            }
        });
    </script>
</body>
</html>
