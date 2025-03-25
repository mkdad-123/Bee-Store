<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $tool->name }}</title>

    <!-- Preload الموارد الحرجة -->
    <link rel="preload" href="{{ $tool->image }}" as="image">
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- CSS مضمن مع تحسينات الأداء -->
    <style>
        /* الأساسيات + الأيقونات - 3KB */
        :root {
            --primary: #FFEB3B;
            --primary-dark: #FFD700;
            --orange: linear-gradient(45deg, #FF8C42, #FF6F00);
        }
        body {
            margin: 0;
            font-family: 'Lato', system-ui, -apple-system, sans-serif;
            background: #FFC107;
            color: #000;
            min-height: 100vh;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.8);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo {
            height: 60px;
            width: auto;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        button {
            width: 80%;
            padding: 20px;
            margin: 0 auto 20px;
            font-size: 24px;
            font-weight: bold;
            background: var(--orange);
            border: none;
            border-radius: 15px;
            display: block;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .navbar-icons {
            display: flex;
            gap: 15px;
        }
        .fa-globe, .fa-headset {
            font-size: 24px;
            cursor: pointer;
        }

        /* أيقونات Font Awesome الأساسية */
        .fa-globe:before { content: "\f0ac"; }
        .fa-headset:before { content: "\f590"; }
        [class*=" fa-"]:before, [class^=fa-]:before {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: 400;
            speak: none;
            display: inline-block;
            text-decoration: inherit;
            width: 1em;
            text-align: center;
            font-variant: normal;
            text-transform: none;
            line-height: 1em;
        }
    </style>

    <!-- تحميل Font Awesome بشكل غير متزامن -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 width="60"
                 height="60"
                 loading="eager"
                 decoding="async">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu" style="display:none;position:absolute;top:70px;right:20px;background:#FFEB3B;border-radius:5px;z-index:1000;box-shadow:0 2px 10px rgba(0,0,0,0.1)">
        <ul style="list-style:none;padding:0;margin:0;">
            <li style="padding:10px 20px;cursor:pointer;" onclick="changeLanguage('ar')">العربية</li>
            <li style="padding:10px 20px;cursor:pointer;" onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="mainTitle">𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒</h1>
        <div>
            <button id="nameBtn">
                <span id="nameLabel">𝙽𝙰𝙼𝙴: {{ $tool->name }}</span>
            </button>
            <button id="descBtn">
                <span id="descriptionLabel">𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽: {{ $tool->description }}</span>
            </button>
            <button id="priceBtn">
                <span id="priceLabel">𝙿𝚁𝙸𝙲𝙴: {{ $tool->price }}</span>
            </button>
            <button>
                <img src="{{ $tool->image }}"
                     alt="{{ $tool->name }}"
                     loading="lazy"
                     width="400"
                     height="300"
                     decoding="async">
            </button>
        </div>
    </div>

    <!-- JavaScript الأساسي -->
    <script>
        // وظائف أساسية فورية
        function toggleLanguageMenu() {
            const menu = document.getElementById('languageMenu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        }

        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // تحميل باقي الموارد بعد العرض الأولي
        window.addEventListener('DOMContentLoaded', function() {
            // تحميل CSS الإضافي
            const styles = `
                .floating-buttons button {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                .floating-buttons button:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
                }
                .navbar-icons i:hover {
                    color: #FFD700;
                    transition: color 0.3s ease;
                }
                .language-menu li:hover {
                    background-color: #FFD700;
                    transition: background-color 0.3s ease;
                }
                body {
                    background: url('https://www.transparenttextures.com/patterns/honeycomb.png'),
                               linear-gradient(60deg, rgba(255, 193, 7, 1) 0%, rgba(255, 235, 59, 1) 100%);
                }
            `;
            const styleEl = document.createElement('style');
            styleEl.textContent = styles;
            document.head.appendChild(styleEl);

            // بيانات اللغة
            const languageData = {
                ar: { mainTitle: "التفاصيل", nameLabel: "الاسم:", descriptionLabel: "الوصف:", priceLabel: "السعر:" },
                en: { mainTitle: "𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒", nameLabel: "𝙽𝙰𝙼𝙴:", descriptionLabel: "𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽:", priceLabel: "𝙿𝚁𝙸𝙲𝙴:" }
            };

            window.changeLanguage = function(lang) {
                const data = languageData[lang];
                document.getElementById('mainTitle').textContent = data.mainTitle;
                document.getElementById('nameLabel').textContent = data.nameLabel + " {{ $tool->name }}";
                document.getElementById('descriptionLabel').textContent = data.descriptionLabel + " {{ $tool->description }}";
                document.getElementById('priceLabel').textContent = data.priceLabel + " {{ $tool->price }}";
                toggleLanguageMenu();
            };

            // إغلاق القائمة عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.fa-globe') && !e.target.closest('#languageMenu')) {
                    document.getElementById('languageMenu').style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
