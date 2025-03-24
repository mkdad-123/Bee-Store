<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الأداة - {{ $tool->name }}</title>
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
            padding: 10px 20px; /* حجم أصغر للشريط العلوي */
            background-color: rgba(255, 255, 255, 0.8); /* شفافية */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* حجم اللوغو صغير */
        .logo {
            height: 60px; /* حجم صغير للوغو */
            cursor: pointer;
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
            top: 50px; /* تعديل الموقع بسبب حجم الشريط الأصغر */
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
            font-size: 36px; /* حجم أصغر للعنوان */
            margin-bottom: 20px;
        }

        /* تنسيقات الأزرار العائمة */
        .floating-buttons {
            display: flex;
            flex-direction: column; /* عرض الأزرار بشكل عمودي */
            align-items: center;
            gap: 20px; /* المسافة بين الأزرار */
            padding: 20px;
        }

        .floating-buttons button {
            width: 80%; /* عرض الأزرار */
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: black;
            background: linear-gradient(45deg, #FF8C42, #FF6F00); /* تدرج برتقالي غامق */
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .floating-buttons button:hover {
            transform: translateY(-5px); /* تأثير الطفو */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* إضافة ظل */
        }

        .floating-buttons img {
            max-width: 100%; /* عرض الصورة بحجمها الطبيعي */
            height: auto; /* الحفاظ على نسب الصورة */
            border-radius: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
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
        <h1 id="mainTitle">𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒</h1>
        <div class="floating-buttons">
            <!-- زر الاسم -->
            <button>
                <span id="nameLabel">𝙽𝙰𝙼𝙴: {{ $tool->name }}</span>
            </button>

            <!-- زر الوصف -->
            <button>
                <span id="descriptionLabel">𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽: {{ $tool->description }}</span>
            </button>

            <!-- زر السعر -->
            <button>
                <span id="priceLabel">𝙿𝚁𝙸𝙲𝙴: {{ $tool->price }}</span>
            </button>

            <!-- زر الصورة -->
            <button>
                <img src="{{ $tool->image }}" alt="{{ $tool->name }}">
            </button>
        </div>
    </div>

    <script>
        // بيانات اللغة
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

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('nameLabel').textContent = data.nameLabel + " {{ $tool->name }}";
            document.getElementById('descriptionLabel').textContent = data.descriptionLabel + " {{ $tool->description }}";
            document.getElementById('priceLabel').textContent = data.priceLabel + " {{ $tool->price }}";
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }
    </script>
</body>
</html>