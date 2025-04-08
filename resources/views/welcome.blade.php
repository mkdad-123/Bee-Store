<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗣𝗔𝗥𝗔𝗗𝗜𝗦𝗘</title>
    <!-- Preload أهم الموارد -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- تحسين تحميل الخطوط -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">

    <style>
        /* CSS مضغوط ومحسن */
        body,h1,p{margin:0;font-family:'Lato',sans-serif;background: url('https://www.transparenttextures.com/patterns/honeycomb.png'), linear-gradient(60deg,rgba(255,255,255,0) 0%,rgba(255,255,255,0));color:#000}h1{font-size:clamp(1.5rem,4vw,2.5rem);color:#000;text-shadow:1px 1px 2px rgba(0,0,0,0.1);font-family:'Times New Roman',serif;font-weight:700}.company-text{font-size:clamp(1rem,2vw,1.5rem);margin-bottom:1.25rem;font-weight:600;color:#000}.home-button{--btn-color:#000;background:var(--btn-color);color:#fff;padding:1.25rem 3.125rem;font-size:clamp(1rem,2vw,1.5rem);border:none;border-radius:0.3125rem;cursor:pointer;text-transform:uppercase;font-weight:700;transition:background-color .3s ease;margin-top:1.875rem;white-space:nowrap;box-shadow:0 5px 15px rgba(0,0,0,0.1)}.home-button:hover{background-color:#689F38}.header{position:relative;text-align:center;background-image:url('\welcom.jpg');color:#000;overflow:hidden;background-size:cover;background-position:center;background-blend-mode:overlay;background-color:rgba(255, 255, 255, 0.7)}.inner-header{height:65vh;width:100%;margin:0;padding:0;display:flex;flex-direction:column;justify-content:center;align-items:center}.flex{display:flex;justify-content:center;align-items:center;text-align:center}.waves{position:relative;width:100%;height:15vh;margin-bottom:-7px;min-height:100px;max-height:150px}.content{position:relative;text-align:center;background-color:transparent;margin:20px auto;max-width:800px}.parallax>use{animation:move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite}.parallax>use:nth-child(1){animation-delay:-2s;animation-duration:7s}.parallax>use:nth-child(2){animation-delay:-3s;animation-duration:10s}.parallax>use:nth-child(3){animation-delay:-4s;animation-duration:13s}.parallax>use:nth-child(4){animation-delay:-5s;animation-duration:20s}@keyframes move-forever{0%{transform:translate3d(-90px,0,0)}100%{transform:translate3d(85px,0,0)}}.logo{height:150px;width:auto;margin-bottom:20px;vertical-align:middle}.navbar-icons{position:absolute;top:20px;right:20px;display:flex;gap:15px;align-items:center}.navbar-icons i{font-size:24px;cursor:pointer;transition:color .3s ease;color:#2E7D32}.navbar-icons i:hover{color:#558B2F}.language-menu{display:none;position:absolute;top:50px;right:0;background-color:#8BC34A;box-shadow:0 2px 10px rgba(0,0,0,.1);border-radius:5px;overflow:hidden;z-index:1000}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:10px 20px;cursor:pointer;transition:background-color .3s ease;color:white}.language-menu ul li:hover{background-color:#689F38}@media (max-width:768px){.waves{height:40px;min-height:40px}.logo{height:100px}.navbar-icons{top:10px;right:10px}}

        /* تأثيرات النحل المتحركة */
        .flying-bee {
            position: absolute;
            width: 40px;
            height: 40px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FFC107"/><circle cx="30" cy="50" r="20" fill="%23333"/><circle cx="70" cy="50" r="25" fill="%23333"/><path d="M20,50 Q50,30 80,50 Q50,70 20,50" fill="%23FFEB3B"/><path d="M40,20 L40,30 M60,20 L60,30 M40,70 L40,80 M60,70 L60,80" stroke="%23333" stroke-width="3"/></svg>');
            background-size: contain;
            z-index: 1;
            animation: flyAround 20s linear infinite;
        }

        @keyframes flyAround {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(200px, 150px) rotate(90deg); }
            50% { transform: translate(400px, 0) rotate(180deg); }
            75% { transform: translate(200px, -150px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        /* تأثيرات حبوب اللقاح */
        .pollen {
            position: absolute;
            width: 15px;
            height: 15px;
            background: radial-gradient(circle, #FFEB3B 30%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
            animation: floatPollen 8s ease-in-out infinite;
        }

        @keyframes floatPollen {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 0.3; }
        }

        .welcome-text {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 10px;
            color: #000;
        }

        .welcome-message {
            font-size: clamp(1rem, 2vw, 1.5rem);
            font-weight: 600;
            color: #000;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- تأثيرات النحل المتحركة -->
    <div class="flying-bee" style="top:15%; left:10%; animation-delay:0s;"></div>
    <div class="flying-bee" style="top:65%; left:75%; animation-delay:2s; animation-duration:25s;"></div>
    <div class="flying-bee" style="top:30%; left:80%; animation-delay:4s; animation-duration:18s;"></div>

    <!-- تأثيرات حبوب اللقاح -->
    <div class="pollen" style="top:20%; left:30%; animation-delay:0.5s;"></div>
    <div class="pollen" style="top:50%; left:60%; animation-delay:1.2s;"></div>
    <div class="pollen" style="top:70%; left:20%; animation-delay:2.3s;"></div>

    <div class="header">
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>

        <div class="language-menu" id="languageMenu">
            <ul>
                <li onclick="changeLanguage('ar')">العربية</li>
                <li onclick="changeLanguage('en')">English</li>
            </ul>
        </div>

        <div class="inner-header">
            <img src="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Al_Firdawas Logo" class="logo" loading="lazy">
            <h1 id="mainTitle">ℙ𝔸ℝ𝔸𝔻𝕀𝕊𝔼</h1>
            <div class="company-text" id="companyText">Company</div>
            <a href="{{ route('home') }}">
                <button class="home-button" id="homeButton">Go to Home Page</button>
            </a>
        </div>

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none" aria-hidden="true">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
                </defs>
                <g class="parallax">
                    <use href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)"/>
                    <use href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
                    <use href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
                    <use href="#gentle-wave" x="48" y="7" fill="#fff"/>
                </g>
            </svg>
        </div>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 class="welcome-text" id="welcomeTitle">𝓦𝓔𝓛𝓒𝓞𝓜𝓔 𝓣𝓞 𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔</h1>
        <p class="welcome-message" id="welcomeMessage">Where nature's harmony meets the sweetness of honey in a green paradise.</p>
    </div>

    <!-- JS مضغوط ومعالج -->
    <script>
        const languageData={
            ar:{
                mainTitle:"الفردوس",
                companyText:"شركة",
                homeButton:"انتقل إلى الصفحة الرئيسية",
                welcomeTitle: "مرحبًا بكم في الفردوس",
                welcomeMessage: "حيث تلتقي أنسجام الطبيعة مع حلاوة العسل في فردوس أخضر."
            },
            en:{
                mainTitle:"ℙ𝔸ℝ𝔸𝔻𝕀𝕊𝔼",
                companyText:"Company",
                homeButton:"Go to Home Page",
                welcomeTitle: "𝓦𝓔𝓛𝓒𝓞𝓜𝓔 𝓣𝓞 𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔",
                welcomeMessage: "Where nature's harmony meets the sweetness of honey in a green paradise."
            }
        };

        function changeLanguage(e){
            const t=languageData[e];
            document.getElementById("mainTitle").textContent=t.mainTitle;
            document.getElementById("companyText").textContent=t.companyText;
            document.getElementById("homeButton").textContent=t.homeButton;
            document.getElementById("welcomeTitle").textContent=t.welcomeTitle;
            document.getElementById("welcomeMessage").textContent=t.welcomeMessage;
            toggleLanguageMenu();
        }

        function toggleLanguageMenu(){
            document.getElementById("languageMenu").classList.toggle("show");
        }

        function redirectToCustomerService(){
            window.location.href="/home/compliants";
        }

        // إنشاء المزيد من تأثيرات الطبيعة بشكل عشوائي
        document.addEventListener('DOMContentLoaded', function() {
            const natureContainer = document.body;

            // إنشاء النحل الإضافي
            for (let i = 0; i < 5; i++) {
                const bee = document.createElement('div');
                bee.className = 'flying-bee';
                bee.style.top = Math.random() * 80 + 10 + '%';
                bee.style.left = Math.random() * 80 + 10 + '%';
                bee.style.animationDelay = Math.random() * 5 + 's';
                bee.style.animationDuration = 15 + Math.random() * 20 + 's';
                natureContainer.appendChild(bee);
            }

            // إنشاء حبوب اللقاح الإضافية
            for (let i = 0; i < 10; i++) {
                const pollen = document.createElement('div');
                pollen.className = 'pollen';
                pollen.style.top = Math.random() * 80 + 10 + '%';
                pollen.style.left = Math.random() * 80 + 10 + '%';
                pollen.style.animationDelay = Math.random() * 5 + 's';
                pollen.style.width = 10 + Math.random() * 10 + 'px';
                pollen.style.height = pollen.style.width;
                natureContainer.appendChild(pollen);
            }
        });
    </script>
</body>
</html>
