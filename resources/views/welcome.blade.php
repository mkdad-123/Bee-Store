<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al_Firdawas</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
        }

        h1 {
            font-family: 'Times New Roman', serif;
            font-size: 72px;
            color: #333;
            text-transform: uppercase;
        }

        .company-text {
            font-family: 'Lato', sans-serif;
            font-size: 24px;
            color: black;
            margin-bottom: 20px;
        }

        .home-button {
            background-color: #FFD700;
            color: black;
            padding: 20px 50px;
            font-size: 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: auto;
            margin-top: 30px;
            white-space: nowrap;
        }

        .home-button:hover {
            background-color: #FFC107;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(255, 193, 7, 1) 0%, rgba(255, 235, 59, 1) 100%);
            color: white;
            overflow: hidden;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }
            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /* جرة العسل كعلامة مائية */
        .honey-jar {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><linearGradient id="jarGradient" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:%23FFD700;stop-opacity:1" /><stop offset="100%" style="stop-color:%23FFA500;stop-opacity:1" /></linearGradient><linearGradient id="honeyGradient" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:%23FFD700;stop-opacity:1" /><stop offset="100%" style="stop-color:%23FF8C00;stop-opacity:1" /></linearGradient></defs><path d="M50 10 Q70 20 70 40 Q70 60 50 70 Q30 60 30 40 Q30 20 50 10 Z" fill="url(%23jarGradient)" /><rect x="40" y="5" width="20" height="10" fill="%238B4513" /><path d="M40 20 Q50 15 60 20" stroke="%238B4513" stroke-width="2" fill="none" /><path d="M40 30 Q50 25 60 30" stroke="%238B4513" stroke-width="2" fill="none" /><path d="M40 40 Q50 35 60 40" stroke="%238B4513" stroke-width="2" fill="none" /><path d="M40 50 Q50 45 60 50 Q60 60 40 60 Z" fill="url(%23honeyGradient)" /><path d="M50 10 Q70 20 70 40 Q70 60 50 70 Q30 60 30 40 Q30 20 50 10 Z" fill="none" stroke="%23000000" stroke-width="2" stroke-opacity="0.2" /></svg>');
            background-size: contain;
            animation: fly 10s infinite ease-in-out;
        }

        .honey-jar-1 {
            top: 10%;
            left: 5%;
            animation-duration: 12s;
        }

        .honey-jar-2 {
            top: 30%;
            left: 80%;
            animation-duration: 15s;
        }

        .honey-jar-3 {
            top: 70%;
            left: 20%;
            animation-duration: 18s;
        }

        .honey-jar-4 {
            top: 50%;
            left: 60%;
            animation-duration: 20s;
        }

        .honey-jar-5 {
            top: 20%;
            left: 40%;
            animation-duration: 14s;
        }

        .honey-jar-6 {
            top: 80%;
            left: 70%;
            animation-duration: 16s;
        }

        @keyframes fly {
            0% {
                transform: translate(0, 0);
            }
            25% {
                transform: translate(200px, 100px);
            }
            50% {
                transform: translate(400px, 0);
            }
            75% {
                transform: translate(200px, -100px);
            }
            100% {
                transform: translate(0, 0);
            }
        }

        /* إضافة تنسيقات للوغو */
        .logo {
            height: 100px;
            margin-right: 40px;
            vertical-align: middle;
        }

        /* أيقونات اللغة وخدمة العملاء */
        .navbar-icons {
            position: absolute;
            top: 20px;
            right: 20px;
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
            top: 50px;
            right: 0;
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

        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 48px;
            }

            .company-text {
                font-size: 18px;
            }

            .home-button {
                padding: 15px 30px;
                font-size: 20px;
                width: auto;
            }

            .logo {
                height: 60px;
            }

            .navbar-icons {
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <!-- أيقونات اللغة وخدمة العملاء -->
        <div class="navbar-icons">
            <!-- أيقونة اللغة -->
            <i class="fas fa-globe" onclick="toggleLanguageMenu()"></i>
            <!-- أيقونة خدمة العملاء -->
            <i class="fas fa-headset" onclick="redirectToCustomerService()"></i>
        </div>
        <!-- قائمة اللغة -->
        <div class="language-menu" id="languageMenu">
            <ul>
                <li onclick="changeLanguage('ar')">العربية</li>
                <li onclick="changeLanguage('en')">English</li>
            </ul>
        </div>

        <!-- جرات العسل كعلامة مائية -->
        <div class="honey-jar honey-jar-1"></div>
        <div class="honey-jar honey-jar-2"></div>
        <div class="honey-jar honey-jar-3"></div>
        <div class="honey-jar honey-jar-4"></div>
        <div class="honey-jar honey-jar-5"></div>
        <div class="honey-jar honey-jar-6"></div>

        <div class="inner-header">
            <!-- إضافة اللوغو -->
            <img src="logo\hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
            <h1 id="mainTitle">𝔸𝕃_𝔽𝕀ℝ𝔻𝔸𝕎𝔸𝕊</h1>
            <div class="company-text" id="companyText">Company</div>
            <a href="{{ route('home') }}">
                <button class="home-button" id="homeButton">Go to Home Page</button>
            </a>
        </div>

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "الفردوس",
                companyText: "شركة",
                homeButton: "انتقل إلى الصفحة الرئيسية",
            },
            en: {
                mainTitle: "𝔸𝕃_𝔽𝕀ℝ𝔻𝔸𝕎𝔸𝕊",
                companyText: "Company",
                homeButton: "Go to Home Page",
            },
        };

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('companyText').textContent = data.companyText;
            document.getElementById('homeButton').textContent = data.homeButton;
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لخدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }
    </script>
</body>
</html>