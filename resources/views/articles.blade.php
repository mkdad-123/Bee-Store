<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗔𝗥𝗧𝗜𝗖𝗟𝗘𝗦</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- Optimized font loading -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">

    <style>
        /* Optimized CSS with fixed layout */
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --white: #FFFFFF;
            --black: #000000;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --border-radius: 15px;
            --content-width: 1200px;
            --logo-size: 70px;
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
            font-family: 'Lato', sans-serif;
            background: url("{{ asset('\pic_1.jpg') }}") center/cover no-repeat fixed,
                      linear-gradient(60deg, rgba(139, 195, 74, 0.3) 0%, rgba(205, 220, 57, 0.3) 100%);
            background-blend-mode: overlay;
            min-height: 100vh;
            color: var(--black);
            display: flex;
            flex-direction: column;
        }

        /* Navbar with fixed height */
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
            height: 100px;
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: var(--primary-dark);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        /* Search bar */
        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
            min-width: 200px;
            max-width: 500px;
        }

        .search-bar input {
            width: 100%;
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
        }

        .search-bar button:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Navbar icons */
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
        }

        .navbar-icons i:hover {
            color: var(--primary-color);
            transform: scale(1.1);
        }

        /* Language menu */
        .language-menu {
            display: none;
            position: absolute;
            top: 100px;
            right: 30px;
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

        /* Main content with fixed size */
        .content {
            flex: 1;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: var(--border-radius);
            margin: 20px auto;
            width: calc(100% - 40px);
            max-width: var(--content-width);
            box-shadow: var(--shadow);
            backdrop-filter: blur(8px);
            min-height: calc(100vh - 160px); /* Adjust based on header/footer */
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Times New Roman', serif;
            color: var(--primary-dark);
        }

        /* Articles list with fixed height */
        .articles-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            min-height: 600px; /* Fixed height for layout stability */
        }

        /* Article card with consistent sizing */
        .article-card {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: var(--white);
            height: 120px; /* Fixed height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            will-change: transform, box-shadow;
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

        /* Consistent logo sizing */
        .logo {
            height: var(--logo-size);
            width: var(--logo-size);
            object-fit: contain;
            cursor: pointer;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pagination button {
            padding: 10px 15px;
            font-size: 16px;
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--white);
            will-change: transform, background;
        }

        .pagination button:hover {
            background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
            transform: translateY(-2px);
        }

        .pagination button.active {
            background: linear-gradient(45deg, var(--primary-light), var(--primary-color));
            transform: scale(1.05);
        }

        /* Nature effects */
        .flying-bee {
            position: fixed;
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
            position: fixed;
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

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: auto;
                padding: 15px;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
                margin: 10px 0;
            }

            .content h1 {
                font-size: 36px;
            }

            .articles-list {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .language-menu {
                top: auto;
                right: 15px;
            }
        }

        /* Reduced motion preference */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }

            html {
                scroll-behavior: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Nature effects -->
    <div class="flying-bee" style="top:15%; left:10%; animation-delay:0s;"></div>
    <div class="flying-bee" style="top:65%; left:75%; animation-delay:2s; animation-duration:25s;"></div>
    <div class="pollen" style="top:20%; left:30%; animation-delay:0.5s;"></div>
    <div class="pollen" style="top:50%; left:60%; animation-delay:1.2s;"></div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 loading="eager"
                 width="70"
                 height="70">
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

    <!-- Language menu -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
            <li onclick="changeLanguage('en')" aria-label="English">English</li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="content">
        <h1 id="mainTitle">𝐀𝐑𝐓𝐈𝐂𝐋𝐄𝐒</h1>
        <div class="articles-list" id="articles-list">
            @php
                $currentPage = request()->get('page', 1);
                $perPage = 9;
                $offset = ($currentPage - 1) * $perPage;
                $paginatedArticles = $articles->slice($offset, $perPage);
            @endphp

            @foreach($paginatedArticles as $article)
                <div class="article-card" onclick="showArticle({{ $article->id }})" aria-label="Article: {{ $article->title }}">
                    <h3>{{ $article->title }}</h3>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination" id="pagination">
            @php
                $totalPages = ceil($articles->count() / $perPage);
            @endphp

            @for($i = 1; $i <= $totalPages; $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i == $currentPage ? 'active' : '' }}" aria-label="Page {{ $i }}">{{ $i }}</button>
            @endfor
        </div>
    </div>

    <script>
        // Defer non-critical resources
        function loadDeferredResources() {
            // Load additional nature effects after main content
            const natureContainer = document.body;

            // Only add more effects if user hasn't prefers-reduced-motion
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                for (let i = 0; i < 3; i++) {
                    const bee = document.createElement('div');
                    bee.className = 'flying-bee';
                    bee.style.top = Math.random() * 80 + 10 + '%';
                    bee.style.left = Math.random() * 80 + 10 + '%';
                    bee.style.animationDelay = Math.random() * 5 + 's';
                    bee.style.animationDuration = 15 + Math.random() * 20 + 's';
                    natureContainer.appendChild(bee);
                }

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
        }

        // Run deferred loading when idle
        if (window.requestIdleCallback) {
            window.requestIdleCallback(loadDeferredResources);
        } else {
            window.addEventListener('load', loadDeferredResources);
        }

        // Language data
        const languageData = {
            ar: {
                mainTitle: "المقالات",
                searchPlaceholder: "ابحث عن مقال بالعنوان..."
            },
            en: {
                mainTitle: "𝐀𝐑𝐓𝐈𝐂𝐋𝐄𝐒",
                searchPlaceholder: "Search for an article by title..."
            }
        };

        // Article functions
        function showArticle(articleId) {
            window.location.href = `/home/article/content/${articleId}`;
        }

        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu();
        }

        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/article_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }

        // Pagination function - now working with server-side pagination
        function changePage(page) {
            // Redirect to the same page with the new page number
            window.location.href = window.location.pathname + '?page=' + page;
        }

        // Add event listeners
        document.addEventListener('DOMContentLoaded', () => {
            // Search on Enter key
            document.getElementById('searchInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') searchItem();
            });

            // Close language menu when clicking outside
            document.addEventListener('click', (e) => {
                const languageMenu = document.getElementById('languageMenu');
                const languageIcon = document.querySelector('.fa-globe');

                if (!languageMenu.contains(e.target) && e.target !== languageIcon &&
                    languageMenu.classList.contains('show')) {
                    languageMenu.classList.remove('show');
                }
            });
        });

        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const lazyLoadObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        lazyLoadObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[loading="lazy"]').forEach(img => {
                lazyLoadObserver.observe(img);
            });
        }
    </script>
</body>
</html>
