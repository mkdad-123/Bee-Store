<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗧𝗢𝗢𝗟𝗦</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسينات تحميل الموارد -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- تحميل الخطوط بشكل غير متزامن -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap"></noscript>

    <!-- تضمين CSS مباشرة لتجنب طلبات HTTP الإضافية -->
    <style>
        /* CSS مضغوط ومحسن */
        :root {
            --primary-color: #2E7D32;
            --secondary-color: #8BC34A;
            --hover-color: #689F38;
            --white: #ffffff;
            --shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: url("{{ asset('\pic_1.jpg') }}") center/cover no-repeat fixed,
                      linear-gradient(60deg, rgba(139, 195, 74, 0.3) 0%, rgba(205, 220, 57, 0.3) 100%);
            background-blend-mode: overlay;
            min-height: 100vh;
            color: #000;
            line-height: 1.6;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            height: 90px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: 100px;
            object-fit: contain;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .search-bar {
            flex: 1;
            margin: 0 30px;
            display: flex;
            justify-content: center;
            max-width: 700px;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(139, 195, 74, 0.2);
        }

        .search-bar button {
            padding: 12px 25px;
            font-size: 16px;
            background-color: var(--secondary-color);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-left: 10px;
            transition: all 0.3s ease;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-bar button:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
        }

        .navbar-icons {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 26px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-color);
            padding: 8px;
            border-radius: 50%;
        }

        .navbar-icons i:hover {
            color: var(--hover-color);
            background-color: rgba(139, 195, 74, 0.1);
            transform: scale(1.1);
        }

        .language-menu {
            display: none;
            position: absolute;
            top: 90px;
            right: 40px;
            background-color: var(--white);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            z-index: 1001;
            width: 180px;
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
            color: var(--primary-color);
            font-weight: 500;
        }

        .language-menu ul li:hover {
            background-color: rgba(139, 195, 74, 0.1);
        }

        .content {
            padding: 30px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.92);
            border-radius: 20px;
            margin: 120px auto 40px;
            max-width: 1300px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            min-height: calc(100vh - 200px);
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 30px;
            color: var(--primary-color);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
            padding: 20px;
        }

        .tool-card {
            background: linear-gradient(135deg, #7CB342, #9CCC65);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            color: white;
            height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            position: relative;
        }

        .tool-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.03);
            z-index: 1;
        }

        .tool-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--hover-color), var(--secondary-color));
        }

        .tool-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 15px;
            transition: transform 0.4s ease;
            position: relative;
            z-index: 2;
        }

        .tool-card:hover img {
            transform: scale(1.03);
        }

        .tool-card h3 {
            font-size: 1.5rem;
            margin: 15px 0;
            position: relative;
            z-index: 2;
        }

        .tool-card p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .tool-card .price {
            font-weight: bold;
            font-size: 1.2rem;
            position: relative;
            z-index: 2;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 12px;
            flex-wrap: wrap;
        }

        .pagination button {
            padding: 12px 20px;
            font-size: 1rem;
            background: linear-gradient(135deg, var(--secondary-color), #7CB342);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
            min-width: 45px;
        }

        .pagination button:hover {
            background: linear-gradient(135deg, #7CB342, var(--secondary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .pagination button.active {
            background: linear-gradient(135deg, var(--hover-color), var(--secondary-color));
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        /* تحسينات للشاشات الصغيرة */
        @media (max-width: 992px) {
            .navbar {
                padding: 0 20px;
                height: 80px;
            }

            .logo {
                width: 80px;
                height: 80px;
            }

            .search-bar {
                margin: 0 15px;
            }

            .content {
                margin: 100px auto 30px;
                padding: 20px;
            }

            .content h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
                height: auto;
                padding: 15px;
            }

            .logo-container {
                width: 100%;
                justify-content: center;
                margin-bottom: 15px;
            }

            .logo {
                width: 70px;
                height: 70px;
            }

            .search-bar {
                order: 3;
                width: 100%;
                margin: 15px 0;
            }

            .navbar-icons {
                order: 2;
                margin-left: auto;
                gap: 20px;
            }

            .content {
                margin: 150px auto 20px;
                padding: 15px;
            }

            .tools-grid {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 10px;
            }

            .tool-card {
                height: auto;
                padding: 20px;
            }

            .language-menu {
                top: 140px;
                right: 20px;
            }
        }

        @media (max-width: 480px) {
            .content h1 {
                font-size: 1.8rem;
            }

            .search-bar button {
                padding: 12px 15px;
            }

            .pagination button {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <div class="logo-container">
            <a href="{{ route('home') }}">
                <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                     alt="Company Logo"
                     class="logo"
                     loading="eager"
                     width="100"
                     height="100">
            </a>
        </div>

        <div class="search-bar">
            <input type="text"
                   id="searchInput"
                   placeholder="Search for tools..."
                   aria-label="Search tools">
            <button onclick="searchItem()" aria-label="Search">
                <span class="search-icon">Search</span>
            </button>
        </div>

        <div class="navbar-icons">
            <i class="fas fa-globe"
               onclick="toggleLanguageMenu()"
               aria-label="Change language"
               id="languageIcon"></i>
            <i class="fas fa-headset"
               onclick="redirectToCustomerService()"
               aria-label="Customer service"></i>
        </div>

        <!-- قائمة اللغة -->
        <div class="language-menu" id="languageMenu">
            <ul>
                <li onclick="changeLanguage('ar')">
                    <span>العربية</span>
                </li>
                <li onclick="changeLanguage('en')">
                    <span>English</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="mainTitle">𝐓𝐎𝐎𝐋𝐒</h1>

        <div class="tools-grid" id="tools-grid">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination">
            @for($i = 1; $i <= ceil($tools->count() / 9); $i++)
                <button onclick="changePage({{ $i }})"
                        class="{{ $i === 1 ? 'active' : '' }}"
                        aria-label="Page {{ $i }}">
                    {{ $i }}
                </button>
            @endfor
        </div>
    </div>

    <!-- JavaScript المحسن -->
    <script>
        // البيانات الأساسية
        const tools = @json($tools);
        const languageData = {
            ar: {
                mainTitle: "الأدوات",
                searchPlaceholder: "ابحث عن أداة...",
                searchButton: "بحث"
            },
            en: {
                mainTitle: "𝐓𝐎𝐎𝐋𝐒",
                searchPlaceholder: "Search for tools...",
                searchButton: "Search"
            }
        };

        // حالة التطبيق
        let currentLanguage = 'en';
        let currentPage = 1;

        // تهيئة الصفحة عند تحميل DOM
        document.addEventListener("DOMContentLoaded", () => {
            // تحميل الصفحة الأولى
            renderTools();

            // إضافة مستمع للأحداث
            setupEventListeners();

            // تحميل Font Awesome بشكل متأخر
            loadFontAwesome();
        });

        // عرض الأدوات بناء على الصفحة الحالية
        function renderTools() {
            const start = (currentPage - 1) * 9;
            const end = start + 9;
            const currentTools = tools.slice(start, end);

            const toolsGrid = document.getElementById('tools-grid');
            toolsGrid.innerHTML = '';

            currentTools.forEach(tool => {
                const toolCard = document.createElement('div');
                toolCard.className = 'tool-card';
                toolCard.setAttribute('data-tool-id', tool.id);
                toolCard.innerHTML = `
                    <img src="/storage/${tool.image}"
                         alt="${tool.name}"
                         loading="lazy"
                         width="300"
                         height="220">
                    <h3>${tool.name}</h3>
                    <p>${tool.description}</p>
                    <p class="price">${tool.price}</p>
                `;
                toolsGrid.appendChild(toolCard);
            });

            // إضافة أحداث النقر للبطاقات
            document.querySelectorAll('.tool-card').forEach(card => {
                card.addEventListener('click', () => {
                    window.location.href = `/home/tools/details/${card.getAttribute('data-tool-id')}`;
                });
            });

            // تحديث أزرار الترقيم
            updatePagination();
        }

        // تحديث أزرار الترقيم
        function updatePagination() {
            const paginationButtons = document.querySelectorAll('#pagination button');
            paginationButtons.forEach((button, index) => {
                if (index === currentPage - 1) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        }

        // تغيير الصفحة
        function changePage(page) {
            currentPage = page;
            renderTools();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // تبديل قائمة اللغة
        function toggleLanguageMenu() {
            const menu = document.getElementById('languageMenu');
            menu.classList.toggle('show');

            // إغلاق القائمة عند النقر خارجها
            if (menu.classList.contains('show')) {
                document.addEventListener('click', closeLanguageMenuOnClickOutside);
            } else {
                document.removeEventListener('click', closeLanguageMenuOnClickOutside);
            }
        }

        // إغلاق قائمة اللغة عند النقر خارجها
        function closeLanguageMenuOnClickOutside(e) {
            const menu = document.getElementById('languageMenu');
            const icon = document.getElementById('languageIcon');

            if (!menu.contains(e.target) && !icon.contains(e.target)) {
                menu.classList.remove('show');
                document.removeEventListener('click', closeLanguageMenuOnClickOutside);
            }
        }

        // تغيير اللغة
        function changeLanguage(lang) {
            currentLanguage = lang;
            const data = languageData[lang];

            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;

            // إغلاق القائمة بعد التغيير
            toggleLanguageMenu();
        }

        // البحث
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/tools_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert(currentLanguage === 'ar' ? 'الرجاء إدخال كلمة البحث' : 'Please enter a search term');
            }
        }

        // خدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // تحميل Font Awesome بشكل متأخر
        function loadFontAwesome() {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css';
            link.onload = () => {
                // استبدال نص زر البحث بأيقونة بعد تحميل Font Awesome
                const searchIcons = document.querySelectorAll('.search-icon');
                searchIcons.forEach(icon => {
                    icon.innerHTML = '<i class="fas fa-search"></i>';
                });
            };
            document.head.appendChild(link);
        }

        // إعداد مستمعي الأحداث
        function setupEventListeners() {
            // البحث عند الضغط على Enter
            document.getElementById('searchInput').addEventListener('keypress', (e) => {
                if (e.key === 'Enter') searchItem();
            });

            // تحميل متقطع للصور
            if ('IntersectionObserver' in window) {
                const lazyImageObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            const lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src || lazyImage.src;
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                document.querySelectorAll("img[loading='lazy']").forEach((lazyImage) => {
                    lazyImageObserver.observe(lazyImage);
                });
            }
        }
    </script>
</body>
</html>
