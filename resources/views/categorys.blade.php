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

        /* الأزرار العائمة */
        .floating-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
        }

        .floating-buttons button {
            width: 80%;
            height: auto; /* ارتفاع تلقائي حسب المحتوى */
            padding: 20px;
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
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .floating-buttons img {
            max-width: 100%; /* عرض الصورة بحجمها الطبيعي */
            height: 150px; /* ارتفاع ثابت للصورة */
            object-fit: cover; /* تغطية المساحة دون تشويه */
            border-radius: 10px;
            margin-bottom: 10px;
        }

        /* شريط الترقيم */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }

        .pagination button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #FFEB3B;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .pagination button:hover {
            background-color: #FFD700;
        }

        .pagination button.active {
            background-color: #FFC107;
            color: white;
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
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a category by name...">
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

    <!-- الأزرار العائمة -->
    <div class="floating-buttons" id="floating-buttons">
        @foreach($categories->take(5) as $category)
            <button onclick="redirectToProducts({{ $category->id }})">
                @if($category->image_path)
                    <img src="{{ $category->image_path }}" alt="{{ $category->name }}">
                @endif
                <span>{{ $category->name }}</span>
            </button>
        @endforeach
    </div>

    <!-- شريط الترقيم -->
    @if($categories->count() > 5)
        <div class="pagination" id="pagination">
            @for($i = 1; $i <= ceil($categories->count() / 5); $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}">{{ $i }}</button>
            @endfor
        </div>
    @endif

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                searchPlaceholder: "ابحث عن فئة بالاسم...",
            },
            en: {
                searchPlaceholder: "Search for a category by name...",
            },
        };

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // وظيفة لتغيير الصفحة
        function changePage(page) {
            const categories = @json($categories); // تحويل البيانات إلى JSON
            const start = (page - 1) * 5; // عرض 5 عناصر في كل صفحة
            const end = start + 5;
            const currentCategories = categories.slice(start, end);

            const floatingButtons = document.getElementById('floating-buttons');
            floatingButtons.innerHTML = '';

            currentCategories.forEach(category => {
                const button = document.createElement('button');
                button.innerHTML = `
                    ${category.image_path ? `<img src="${category.image_path}" alt="${category.name}">` : ''}
                    <span>${category.name}</span>
                `;
                button.onclick = () => redirectToProducts(category.id);
                floatingButtons.appendChild(button);
            });

            // تحديث أزرار الترقيم
            const paginationButtons = document.querySelectorAll('#pagination button');
            paginationButtons.forEach(button => button.classList.remove('active'));
            paginationButtons[page - 1].classList.add('active');
        }

        // وظيفة لإعادة التوجيه إلى صفحة المنتجات
        function redirectToProducts(categoryId) {
            window.location.href = `/home/products/${categoryId}`;
        }

        // وظيفة البحث
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value;
            if (searchTerm) {
                window.location.href = `/home/category_search?keyword=${searchTerm}`;
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

        // عرض الصفحة الأولى عند التحميل
        document.addEventListener('DOMContentLoaded', () => {
            changePage(1); // عرض الصفحة الأولى
        });
    </script>
</body>
</html>