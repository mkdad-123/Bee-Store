<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al_Firdawas</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet">
    <!-- إضافة Font Awesome للأيقونات -->
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
            padding: 20px 40px; /* زيادة الحجم */
            background-color: rgba(255, 255, 255, 0.8); /* شفافية */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif; /* تغيير الخط */
            font-size: 28px; /* زيادة حجم الخط */
            font-weight: bold;
            margin: 0;
        }

        /* زر القائمة (ثلاث شخطات) */
        .menu-btn {
            background: none;
            border: none;
            font-size: 32px; /* تكبير حجم الزر */
            cursor: pointer;
        }

        /* القائمة المنزلقة */
        .menu {
            display: none;
            position: absolute;
            top: 70px; /* تعديل الموقع بسبب زيادة حجم الشريط */
            right: 20px;
            background-color: #FFEB3B; /* لون أصفر */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
        }

        .menu.show {
            display: block;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu ul li {
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: relative; /* لإضافة القوائم الفرعية */
        }

        .menu ul li:hover {
            background-color: #FFD700; /* لون أصفر داكن */
        }

        /* القوائم الفرعية */
        .submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%; /* وضع القائمة الفرعية بجانب العنصر الرئيسي */
            background-color: #FFEB3B; /* لون أصفر */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            min-width: 120px;
        }

        .menu ul li.active .submenu {
            display: block;
        }

        .submenu li {
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .submenu li:hover {
            background-color: #FFD700; /* لون أصفر داكن */
        }

        /* قسم الفئات */
        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .category {
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #FFC107, #FF9800); /* تدرج لوني أصفر */
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category:hover {
            transform: translateY(-10px); /* تأثير الطفو */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* إضافة ظل */
        }

        .category img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .category h3 {
            font-size: 18px;
            margin: 0;
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

        .content p {
            font-size: 18px;
            color: #333;
        }

        /* تنسيقات اللوغو */
        .logo {
            height: 60px; /* تكبير حجم اللوغو */
            margin-left: auto; /* نقل اللوغو إلى اليمين */
            cursor: pointer; /* تغيير شكل المؤشر عند التمرير */
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}"> <!-- رابط إلى الصفحة الرئيسية -->
            <img src="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <button class="menu-btn" onclick="toggleMenu()">☰</button>
    </div>

    <!-- القائمة المنزلقة -->
    <div class="menu" id="menu">
        <ul>
            <li onclick="toggleSubmenu('language')">
                Language
                <ul class="submenu" id="languageSubmenu">
                    <li onclick="changeLanguage('ar')">العربية</li>
                    <li onclick="changeLanguage('en')">English</li>
                </ul>
            </li>
            <li onclick="sendNote()">Send a Note</li>
            <li onclick="customerService()">Customer Service</li>
        </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1>Welcome to Al_Firdawas</h1>
        <p>This is an example of a user interface with a dropdown menu.</p>
    </div>

    <!-- قسم الفئات -->
    <div class="categories" id="categories">
        <!-- سيتم ملء هذا القسم بالبيانات من الباك إند -->
    </div>

    <script>
        // وظيفة لإظهار/إخفاء القائمة
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('show');
        }

        // وظيفة لإظهار/إخفاء القوائم الفرعية
        function toggleSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId + 'Submenu');
            const allSubmenus = document.querySelectorAll('.submenu');
            allSubmenus.forEach((sm) => {
                if (sm !== submenu) sm.style.display = 'none';
            });
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            if (lang === 'ar') {
                alert('تم تغيير اللغة إلى العربية');
            } else if (lang === 'en') {
                alert('Language changed to English');
            }
        }

        // وظيفة لإرسال ملاحظة
        function sendNote() {
            alert('Note sent');
        }

        // وظيفة لخدمة العملاء
        function customerService() {
            alert('Customer service contacted');
        }

        // وظيفة لجلب البيانات من الباك إند
        async function fetchCategories() {
            try {
                const response = await fetch('/api/categories'); // رابط API لجلب الفئات
                const data = await response.json();
                displayCategories(data);
            } catch (error) {
                console.error('Error fetching categories:', error);
            }
        }

        // وظيفة لعرض الفئات
        function displayCategories(categories) {
            const categoriesContainer = document.getElementById('categories');
            categoriesContainer.innerHTML = ''; // مسح المحتوى القديم

            categories.forEach(category => {
                const categoryElement = document.createElement('div');
                categoryElement.className = 'category';
                categoryElement.innerHTML = `
                    <img src="${category.image}" alt="${category.name}">
                    <h3>${category.name}</h3>
                `;
                categoriesContainer.appendChild(categoryElement);
            });
        }

        // جلب البيانات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', fetchCategories);
    </script>
</body>
</html>
