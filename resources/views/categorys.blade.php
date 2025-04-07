<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗖𝗔𝗧𝗘𝗚𝗢𝗥𝗜𝗘𝗦</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">

    <!-- تحميل الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- تحميل الصور -->
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image" importance="high">
    <link rel="preload" href="{{ asset('\pic_2.jpg') }}" as="image">

    <style>
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --text-color: #000;
            --white: #fff;
            --shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: url("{{ asset('\pic_3.jpg') }}") center/cover no-repeat fixed,
                      linear-gradient(60deg, rgba(139, 195, 74, 0.3) 0%, rgba(205, 220, 57, 0.3) 100%);
            background-blend-mode: overlay;
            min-height: 100vh;
            color: var(--text-color);
            display: flex;
            flex-direction: column;
        }

        /* الشريط العلوي - أبيض كما كان */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: var(--shadow);
            position: relative;
            z-index: 10;
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
            color: #2E7D32;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
            max-width: 600px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .search-bar input:focus {
            border-color: var(--primary-color);
        }

        .search-bar button {
            padding: 10px 15px;
            font-size: 1rem;
            background-color: var(--primary-color);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
            color: var(--white);
            min-width: 40px;
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
            font-size: 1.5rem;
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
            right: 30px;
            background-color: var(--primary-color);
            box-shadow: var(--shadow);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
        }

        .language-menu.show {
            display: block;
        }

        .language-menu ul {
            list-style: none;
        }

        .language-menu ul li {
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: var(--white);
        }

        .language-menu ul li:hover {
            background-color: var(--primary-dark);
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            min-height: calc(100vh - 180px);
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* الأزرار العائمة - كما كانت */
        .floating-buttons {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            padding: 20px;
            width: 100%;
        }

        .floating-buttons button {
            width: 100%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--white);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 1/1;
            overflow: hidden;
        }

        .floating-buttons button:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
        }

        .floating-buttons img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            cursor: pointer;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        /* الشريط السفلي - شفاف فقط */
        .pagination-container {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            box-shadow: var(--shadow);
            border-radius: 15px;
            margin: 20px auto;
            max-width: 1200px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .pagination button {
            padding: 10px 15px;
            font-size: 1rem;
            background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: var(--white);
        }

        .pagination button:hover {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
        }

        .pagination button.active {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
        }

        .flying-bee {
            position: fixed;
            width: 30px;
            height: 30px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FFC107"/><circle cx="30" cy="50" r="20" fill="%23333"/><circle cx="70" cy="50" r="25" fill="%23333"/><path d="M20,50 Q50,30 80,50 Q50,70 20,50" fill="%23FFEB3B"/><path d="M40,20 L40,30 M60,20 L60,30 M40,70 L40,80 M60,70 L60,80" stroke="%23333" stroke-width="3"/></svg>');
            background-size: contain;
            z-index: -1;
            animation: flyAround 20s linear infinite;
            will-change: transform;
            pointer-events: none;
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
            width: 10px;
            height: 10px;
            background: radial-gradient(circle, #FFEB3B 30%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
            animation: floatPollen 8s ease-in-out infinite;
            will-change: transform;
            pointer-events: none;
        }

        @keyframes floatPollen {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 0.3; }
        }

        @media (max-width: 1200px) {
            .floating-buttons {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 10px;
                flex-wrap: wrap;
            }

            .search-bar {
                order: 3;
                width: 100%;
                margin: 10px 0;
            }

            .logo {
                width: 60px;
                height: 60px;
            }

            .floating-buttons {
                grid-template-columns: 1fr;
                padding: 10px;
            }

            .floating-buttons button {
                aspect-ratio: auto;
                height: auto;
            }

            .floating-buttons img {
                height: 100px;
            }

            .language-menu {
                right: 10px;
            }

            .main-content {
                min-height: calc(100vh - 150px);
            }
        }
    </style>
</head>
<body>
    <div class="flying-bee" style="top:15%; left:10%; animation-delay:0s;"></div>
    <div class="flying-bee" style="top:65%; left:75%; animation-delay:2s; animation-duration:25s;"></div>

    <div class="pollen" style="top:20%; left:30%; animation-delay:0.5s;"></div>
    <div class="pollen" style="top:50%; left:60%; animation-delay:1.2s;"></div>

    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Al_Firdawas Logo"
                 class="logo"
                 width="80"
                 height="80"
                 loading="eager"
                 fetchpriority="high">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a category by name..." aria-label="Search categories">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="content-container">
            <div class="floating-buttons" id="floating-buttons">
                @foreach($categories->take(5) as $category)
                    <button onclick="redirectToProducts({{ $category->id }})" aria-label="{{ $category->name }}">
                        @if($category->image_path)
                            <img src="{{ $category->image_path }}"
                                 alt="{{ $category->name }}"
                                 loading="lazy"
                                 width="250"
                                 height="150">
                        @endif
                        <span>{{ $category->name }}</span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    @if($categories->count() > 5)
        <div class="pagination-container">
            <div class="pagination" id="pagination">
                @for($i = 1; $i <= ceil($categories->count() / 5); $i++)
                    <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}" aria-label="Page {{ $i }}">{{ $i }}</button>
                @endfor
            </div>
        </div>
    @endif

    <script>
        const languageData = {
            ar: {
                searchPlaceholder: "ابحث عن فئة بالاسم...",
            },
            en: {
                searchPlaceholder: "Search for a category by name...",
            },
        };

        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        document.addEventListener('click', function(event) {
            const languageMenu = document.getElementById('languageMenu');
            const globeIcon = document.querySelector('.fa-globe');

            if (!languageMenu.contains(event.target) && event.target !== globeIcon) {
                languageMenu.classList.remove('show');
            }
        });

        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu();
        }

        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        function redirectToProducts(categoryId) {
            window.location.href = `/home/products/${categoryId}`;
        }

        function changePage(page) {
            const categories = @json($categories);
            const start = (page - 1) * 5;
            const end = start + 5;
            const currentCategories = categories.slice(start, end);

            const floatingButtons = document.getElementById('floating-buttons');
            floatingButtons.innerHTML = '';

            currentCategories.forEach(category => {
                const button = document.createElement('button');
                button.setAttribute('aria-label', category.name);
                button.onclick = () => redirectToProducts(category.id);

                if(category.image_path) {
                    const img = document.createElement('img');
                    img.src = category.image_path;
                    img.alt = category.name;
                    img.loading = 'lazy';
                    img.width = 250;
                    img.height = 150;
                    button.appendChild(img);
                }

                const span = document.createElement('span');
                span.textContent = category.name;
                button.appendChild(span);

                floatingButtons.appendChild(button);
            });

            document.querySelectorAll('#pagination button').forEach((btn, index) => {
                btn.classList.toggle('active', index === page - 1);
            });
        }

        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/category_search?keyword=${encodeURIComponent(searchTerm)}`;
            }
        }

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') searchItem();
        });

        if('IntersectionObserver' in window) {
            const lazyLoadImages = () => {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src || img.src;
                            observer.unobserve(img);
                        }
                    });
                }, {
                    rootMargin: '200px 0px'
                });

                lazyImages.forEach(img => observer.observe(img));
            };

            if(document.readyState === 'complete') {
                lazyLoadImages();
            } else {
                window.addEventListener('load', lazyLoadImages);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            if(window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.querySelectorAll('.flying-bee, .pollen').forEach(el => el.remove());
                return;
            }

            const natureContainer = document.body;
            const isMobile = window.innerWidth < 768;

            if(!isMobile) {
                for (let i = 0; i < 2; i++) {
                    const bee = document.createElement('div');
                    bee.className = 'flying-bee';
                    bee.style.top = Math.random() * 80 + 10 + '%';
                    bee.style.left = Math.random() * 80 + 10 + '%';
                    bee.style.animationDelay = Math.random() * 5 + 's';
                    bee.style.animationDuration = 15 + Math.random() * 20 + 's';
                    natureContainer.appendChild(bee);
                }
            }

            for (let i = 0; i < (isMobile ? 2 : 3); i++) {
                const pollen = document.createElement('div');
                pollen.className = 'pollen';
                pollen.style.top = Math.random() * 80 + 10 + '%';
                pollen.style.left = Math.random() * 80 + 10 + '%';
                pollen.style.animationDelay = Math.random() * 5 + 's';
                pollen.style.width = 8 + Math.random() * 7 + 'px';
                pollen.style.height = pollen.style.width;
                natureContainer.appendChild(pollen);
            }
        });
    </script>
</body>
</html>
