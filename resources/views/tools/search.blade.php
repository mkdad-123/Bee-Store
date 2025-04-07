<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="أدوات متاحة للاستخدام">
    <title>𝗧𝗢𝗢𝗟𝗦 - {{ $keyword }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسينات تحميل الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet"></noscript>

    <!-- تحسينات Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <style>
        /* التصميم العام مع تحسينات الأداء */
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --secondary-color: #FFD700;
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
        /* الصورة الثابتة مع التكرار */
        url('/pic_3.jpg') center/cover no-repeat fixed,
        /* التدرج اللوني الأخضر */
        linear-gradient(60deg, rgba(139, 195, 74, 0.8) 0%, rgba(156, 204, 101, 0.8) 100%);
            background-blend-mode: overlay;
            color: var(--black);
            min-height: 100vh;
        }

        /* الشريط العلوي مع تحسينات */
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

        /* شريط البحث مع تحسينات */
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

        /* أيقونات اللغة وخدمة العملاء */
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

        /* قائمة اللغة */
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

        /* المحتوى الرئيسي */
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

        /* تنسيقات العناصر العائمة مع تحسينات */
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            will-change: transform;
        }

        .tool-card {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: var(--white);
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            will-change: transform, box-shadow;
            overflow: hidden;
        }

        .tool-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
        }

        .tool-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            content-visibility: auto;
            transition: transform 0.3s ease;
            border: 2px solid rgba(255,255,255,0.3);
        }

        .tool-card:hover img {
            transform: scale(1.02);
        }

        .tool-card h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .tool-card p {
            font-size: 16px;
            color: var(--white);
        }

        /* تنسيقات اللوغو مع الحجم المطلوب */
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

        /* تنسيقات شريط التنقل */
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

        /* تحسينات للأجهزة المحمولة */
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

            .tools-grid {
                grid-template-columns: 1fr;
            }

            .language-menu {
                top: 120px;
            }
        }

        /* تحسينات للأجهزة التي تفضل تقليل الحركة */
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
    <!-- الشريط العلوي -->
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
            <input type="text" id="searchInput" placeholder="Search for a tool by name..." aria-label="Search tools">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <!-- أيقونات اللغة وخدمة العملاء -->
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
            <li onclick="changeLanguage('en')" aria-label="English">English</li>
        </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="mainTitle">𝐓𝐎𝐎𝐋𝐒</h1>
        <div class="tools-grid" id="tools-grid">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
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

        // بيانات الأدوات
        const tools = @json($tools); // تحويل البيانات إلى JSON

        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "الأدوات",
                searchPlaceholder: "ابحث عن أداة بالاسم...",
            },
            en: {
                mainTitle: "𝐓𝐎𝐎𝐋𝐒",
                searchPlaceholder: "Search for a tool by name...",
            },
        };

        // عدد العناصر في كل صفحة
        const itemsPerPage = 9;
        let currentPage = 1;

        // عرض الصفحة الأولى عند التحميل
        document.addEventListener('DOMContentLoaded', () => {
            changePage(1); // عرض الصفحة الأولى

            // إضافة حدث النقر خارج قائمة اللغة لإغلاقها
            document.addEventListener('click', (e) => {
                const languageMenu = document.getElementById('languageMenu');
                const languageIcon = document.querySelector('.fa-globe');

                if (!languageMenu.contains(e.target) && e.target !== languageIcon && languageMenu.classList.contains('show')) {
                    languageMenu.classList.remove('show');
                }
            });
        });

        // وظيفة لتغيير الصفحة
        function changePage(page) {
            currentPage = page;
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const currentTools = tools.slice(start, end);

            const toolsGrid = document.getElementById('tools-grid');
            toolsGrid.innerHTML = '';

            currentTools.forEach(tool => {
                const toolCard = document.createElement('div');
                toolCard.className = 'tool-card';
                toolCard.setAttribute('data-tool-id', tool.id);
                toolCard.setAttribute('aria-label', `Tool: ${tool.name}`);
                toolCard.innerHTML = `
                    <img src="/storage/${tool.image}"
                         alt="${tool.name}"
                         loading="lazy"
                         width="300"
                         height="200"
                         decoding="async">
                    <h3>${tool.name}</h3>
                    <p>${tool.description}</p>
                    <p>${tool.price}</p>
                `;
                toolsGrid.appendChild(toolCard);
            });

            // إضافة حدث النقر إلى الأزرار العائمة
            const toolCards = document.querySelectorAll('.tool-card');
            toolCards.forEach(card => {
                card.addEventListener('click', () => {
                    const toolId = card.getAttribute('data-tool-id');
                    window.location.href = `/home/tools/details/${toolId}`;
                });
            });

            // تحديث أزرار الترقيم
            updatePaginationButtons(page);
        }

        // وظيفة لتحديث أزرار الترقيم
        function updatePaginationButtons(page) {
            const totalPages = Math.ceil(tools.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            // زر الصفحة السابقة
            if (page > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
                prevButton.onclick = () => changePage(page - 1);
                prevButton.setAttribute('aria-label', 'Previous page');
                paginationContainer.appendChild(prevButton);
            }

            // أزرار الصفحات
            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.onclick = () => changePage(i);
                button.setAttribute('aria-label', `Page ${i}`);
                if (i === page) {
                    button.classList.add('active');
                }
                paginationContainer.appendChild(button);
            }

            // زر الصفحة التالية
            if (page < totalPages) {
                const nextButton = document.createElement('button');
                nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
                nextButton.onclick = () => changePage(page + 1);
                nextButton.setAttribute('aria-label', 'Next page');
                paginationContainer.appendChild(nextButton);
            }
        }

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

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
                window.location.href = `/tools_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }
    </script>
</body>
</html>
