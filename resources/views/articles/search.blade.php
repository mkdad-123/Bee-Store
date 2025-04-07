<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Search Results - {{ $keyword }}">
    <title> 𝗔𝗥𝗧𝗜𝗖𝗟𝗘𝗦 - {{ $keyword }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- Font loading optimizations -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet"></noscript>

    <!-- Font Awesome optimizations -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <style>
        /* General design with green/white color scheme */
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --secondary-color: #FFFFFF;
            --white: #FFFFFF;
            --black: #000000;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --border-radius: 15px;
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
            background:
                url('/pic_3.jpg') center/cover no-repeat fixed,
                linear-gradient(60deg, rgba(139, 195, 74, 0.8) 0%, rgba(156, 204, 101, 0.8) 100%);
            background-blend-mode: overlay;
            color: var(--black);
            min-height: 100vh;
        }

        /* Top bar with optimizations */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            backdrop-filter: blur(5px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: var(--black);
        }

        /* Search bar with optimizations */
        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
            min-width: 200px;
        }

        .search-bar input {
            width: 100%;
            max-width: 400px;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: var(--border-radius);
            outline: none;
            transition: box-shadow 0.3s ease;
        }

        .search-bar input:focus {
            box-shadow: 0 0 0 2px var(--primary-dark);
        }

        .search-bar button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: var(--primary-dark);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            margin-left: 10px;
            transition: all 0.3s ease;
            will-change: transform, background-color;
        }

        .search-bar button:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Language and customer service icons */
        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-dark);
            will-change: transform, color;
        }

        .navbar-icons i:hover {
            color: var(--primary-color);
            transform: scale(1.1);
        }

        /* Language menu */
        .language-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 20px;
            background-color: var(--primary-color);
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
            z-index: 1000;
            width: 150px;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
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
            transition: all 0.3s ease;
            color: var(--white);
        }

        .language-menu ul li:hover {
            background-color: var(--primary-dark);
        }

        /* Main content */
        .content {
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            color: var(--white);
        }

        /* Article cards with optimizations */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            will-change: transform;
        }

        .article-card {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: var(--white);
            min-height: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            will-change: transform, box-shadow;
            overflow: hidden;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
        }

        .article-card h3 {
            font-size: 20px;
            margin: 0;
            word-break: break-word;
        }

        /* Logo styling */
        .logo {
            height: 80px;
            width: auto;
            cursor: pointer;
            object-fit: contain;
            transition: transform 0.3s ease;
            content-visibility: auto;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
        }

        .logo:hover {
            transform: scale(1.05);
        }

        /* No results message */
        #noResultsMessage {
            color: var(--white);
            font-size: 18px;
            grid-column: 1 / -1;
            text-align: center;
            padding: 20px;
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
                margin: 10px 0;
            }

            .logo {
                height: 60px;
            }

            .content h1 {
                font-size: 36px;
            }

            .articles-grid {
                grid-template-columns: 1fr;
            }

            .language-menu {
                top: 120px;
            }
        }

        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body>
    <!-- Top bar -->
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
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for an article..." aria-label="Search articles">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <!-- Language and customer service icons -->
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- Language menu -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
            <li onclick="changeLanguage('en')" aria-label="English">English</li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="content">
        <h1>{{ $keyword }}</h1>
        <div class="articles-grid" id="articles-grid">
            @if($articles->count() > 0)
                @foreach($articles as $article)
                    <div class="article-card" data-article-id="{{ $article->id }}" aria-label="Article: {{ $article->title }}">
                        <h3>{{ $article->title }}</h3>
                    </div>
                @endforeach
            @else
                <p id="noResultsMessage">No articles found.</p>
            @endif
        </div>
    </div>

    <script>
        // Defer non-critical resources
        function loadDeferredResources() {
            // Add any non-critical scripts here
        }

        // Run after page load
        if (window.requestIdleCallback) {
            window.requestIdleCallback(loadDeferredResources);
        } else {
            window.addEventListener('load', loadDeferredResources);
        }

        // Language data
        const languageData = {
            ar: {
                searchPlaceholder: "ابحث عن مقال...",
                noResultsMessage: "لم يتم العثور على مقالات.",
            },
            en: {
                searchPlaceholder: "Search for an article...",
                noResultsMessage: "No articles found.",
            },
        };

        // Function to show/hide language menu
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // Function to change language
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            const noResultsMessage = document.getElementById('noResultsMessage');
            if (noResultsMessage) {
                noResultsMessage.textContent = data.noResultsMessage;
            }
            toggleLanguageMenu();
        }

        // Function for customer service
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // Search function
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/article_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }

        // Add event for Enter key in search field
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchItem();
            }
        });

        // Add click event to article cards
        const articleCards = document.querySelectorAll('.article-card');
        articleCards.forEach(card => {
            card.addEventListener('click', () => {
                const articleId = card.getAttribute('data-article-id');
                window.location.href = `/home/article/content/${articleId}`;
            });
        });

        // Close language menu when clicking outside
        document.addEventListener('click', (e) => {
            const languageMenu = document.getElementById('languageMenu');
            const languageIcon = document.querySelector('.fa-globe');

            if (!languageMenu.contains(e.target) && e.target !== languageIcon && languageMenu.classList.contains('show')) {
                languageMenu.classList.remove('show');
            }
        });
    </script>
</body>
</html>
