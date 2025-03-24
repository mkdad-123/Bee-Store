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
            color: #FFD700; /* لون أصفر داكن */
        }

        /* قائمة اللغة */
        .language-menu {
            display: none;
            position: absolute;
            top: 70px; /* تعديل الموقع بسبب حجم الشريط الأصغر */
            right: 20px;
            background-color: #FFEB3B; /* لون أصفر */
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
            background-color: #FFD700; /* لون أصفر داكن */
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
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 عناصر في كل صف */
            gap: 20px;
            padding: 20px;
        }

        .product-card {
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

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: 200px; /* ارتفاع ثابت للصور */
            object-fit: cover; /* تغطية المساحة دون تشويه */
            border-radius: 10px;
        }

        .product-card h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .product-card p {
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
            <input type="text" id="searchInput" placeholder="Search for an item by name...">
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
        <h1 id="mainTitle">𝐏𝐑𝐎𝐃𝐔𝐂𝐓𝐒</h1>
        <div class="products-grid" id="products-grid">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>
    </div>

    <script>
        // بيانات المنتجات
        const products = @json($products); // تحويل البيانات إلى JSON

        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "المنتجات",
                searchPlaceholder: "ابحث عن منتج بالاسم...",
            },
            en: {
                mainTitle: "𝐏𝐑𝐎𝐃𝐔𝐂𝐓𝐒",
                searchPlaceholder: "Search for an item by name...",
            },
        };

        // عدد العناصر في كل صفحة
        const itemsPerPage = 9;

        // عرض الصفحة الأولى عند التحميل
        document.addEventListener('DOMContentLoaded', () => {
            changePage(1); // عرض الصفحة الأولى
        });

        // وظيفة لتغيير الصفحة
        function changePage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const currentProducts = products.slice(start, end);

            const productsGrid = document.getElementById('products-grid');
            productsGrid.innerHTML = '';

            currentProducts.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.setAttribute('data-product-id', product.id); // إضافة معرف المنتج
                productCard.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p>${product.price}</p>
                `;
                productsGrid.appendChild(productCard);
            });

            // إضافة حدث النقر إلى الأزرار العائمة
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('click', () => {
                    const productId = card.getAttribute('data-product-id');
                    window.location.href = `/home/products/details/${productId}`; // إعادة التوجيه إلى صفحة التفاصيل
                });
            });

            // تحديث أزرار الترقيم
            updatePaginationButtons(page);
        }

        // وظيفة لتحديث أزرار الترقيم
        function updatePaginationButtons(currentPage) {
            const totalPages = Math.ceil(products.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.onclick = () => changePage(i);
                if (i === currentPage) {
                    button.classList.add('active');
                }
                paginationContainer.appendChild(button);
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
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // وظيفة البحث
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value;
            if (searchTerm) {
                window.location.href = `/home/products/search?keyword=${searchTerm}`;
            } else {
                alert('Please enter a search term');
            }
        }
    </script>
</body>
</html>