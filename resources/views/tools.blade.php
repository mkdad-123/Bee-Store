<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
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
            color: #FFD700;
        }

        /* قائمة اللغة */
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

        /* المحتوى الرئيسي */
        .content {
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        /* تنسيقات العناصر العائمة */
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 عناصر في كل صف */
            gap: 20px;
            padding: 20px;
        }

        .tool-card {
            background: linear-gradient(45deg, #FF8C42, #FF6F00); /* تدرج برتقالي غامق */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            color: black; /* لون النص أبيض */
            height: 400px; /* ارتفاع ثابت للأزرار العائمة */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .tool-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .tool-card img {
            width: 100%;
            height: 200px; /* ارتفاع ثابت للصور */
            object-fit: cover; /* تغطية المساحة دون تشويه */
            border-radius: 10px;
        }

        .tool-card h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .tool-card p {
            font-size: 16px;
            color: white; /* لون النص أبيض */
        }

        /* تنسيقات اللوغو */
        .logo {
            height: 60px;
            margin-left: auto;
            cursor: pointer;
        }

        /* تنسيقات شريط التنقل */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }

        .pagination button {
            padding: 10px 15px;
            font-size: 16px;
            background: linear-gradient(45deg, #FF6B6B, #FF8E8E); /* تدرج أحمر فاتح */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: white; /* لون النص أبيض */
        }

        .pagination button:hover {
            background: linear-gradient(45deg, #FF8E8E, #FF6B6B); /* تدرج أحمر فاتح معكوس */
        }

        .pagination button.active {
            background: linear-gradient(45deg, #FF5252, #FF6B6B); /* تدرج أحمر داكن */
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a tool by name...">
            <button onclick="searchItem()"><i class="fas fa-search"></i></button>
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

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="mainTitle">𝐓𝐎𝐎𝐋𝐒</h1>
        <div class="tools-grid" id="tools-grid">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination">
            @for($i = 1; $i <= ceil($tools->count() / 9); $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}">{{ $i }}</button>
            @endfor
        </div>
    </div>

    <script>
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

        // عرض الصفحة الأولى عند التحميل
        document.addEventListener('DOMContentLoaded', () => {
            changePage(1); // عرض الصفحة الأولى
        });

        // وظيفة لتغيير الصفحة
        function changePage(page) {
            const start = (page - 1) * 9;
            const end = start + 9;
            const currentTools = tools.slice(start, end);

            const toolsGrid = document.getElementById('tools-grid');
            toolsGrid.innerHTML = '';

            currentTools.forEach(tool => {
                const toolCard = document.createElement('div');
                toolCard.className = 'tool-card';
                toolCard.setAttribute('data-tool-id', tool.id); // إضافة معرف الأداة
                toolCard.innerHTML = `
                    <img src="${tool.image}" alt="${tool.name}">
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
                    window.location.href = `/home/tools/details/${toolId}`; // إعادة التوجيه إلى صفحة التفاصيل
                });
            });

            // تحديث أزرار الترقيم
            const paginationButtons = document.querySelectorAll('#pagination button');
            paginationButtons.forEach(button => button.classList.remove('active'));
            paginationButtons[page - 1].classList.add('active');
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
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "customer_service.html";
        }

        // وظيفة البحث
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value;
            if (searchTerm) {
                window.location.href = `/home/tools_search?keyword=${searchTerm}`;
            } else {
                alert('Please enter a search term');
            }
        }

        // إضافة حدث عند الضغط على Enter في حقل البحث
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchItem();
            }
        });
    </script>
</body>
</html>