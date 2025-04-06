<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 𝗣𝗥𝗢𝗗𝗨𝗖𝗧 - {{ $product->name }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسينات متقدمة للخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap"></noscript>

    <!-- تحميل Font Awesome بشكل غير متزامن -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <!-- CSS مضغوط ومحسن -->
    <style>
        :root{--primary-color:#8BC34A;--primary-dark:#689F38;--primary-light:#9CCC65;--secondary-color:#FFD700;--white:#fff;--black:#000;--shadow:0 2px 10px rgba(0,0,0,.1);--border-radius:12px}*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{font-family:'Lato',system-ui,-apple-system,sans-serif;font-display:swap;background:url('/detaeils.jpg') center/cover no-repeat fixed,linear-gradient(60deg,rgba(139,195,74,.8) 0,rgba(156,204,101,.8) 100%);background-blend-mode:overlay;color:var(--black);min-height:100vh}.navbar{display:flex;justify-content:space-between;align-items:center;padding:10px 20px;background-color:rgba(255,255,255,.95);box-shadow:var(--shadow);backdrop-filter:blur(5px);position:sticky;top:0;z-index:100}.logo{height:60px;width:auto;object-fit:contain;cursor:pointer;transition:transform .3s ease;filter:drop-shadow(1px 1px 2px rgba(0,0,0,.2));content-visibility:auto}.logo:hover{transform:scale(1.05)}.center-text h1{font-family:'Times New Roman',serif;font-size:1.5rem;color:var(--primary-dark);text-shadow:1px 1px 2px rgba(0,0,0,.1)}.navbar-icons{display:flex;gap:15px;align-items:center}.navbar-icons i{font-size:1.5rem;cursor:pointer;transition:color .3s ease;color:var(--primary-dark);will-change:color}.navbar-icons i:hover{color:var(--primary-color)}.language-menu{display:none;position:absolute;top:60px;right:20px;background-color:var(--primary-color);box-shadow:var(--shadow);border-radius:var(--border-radius);overflow:hidden;z-index:1000;width:150px}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:10px 20px;cursor:pointer;transition:all .3s ease;color:var(--white)}.language-menu ul li:hover{background-color:var(--primary-dark)}.content{padding:20px;text-align:center}.content h1{font-size:2rem;margin-bottom:20px;color:var(--white);text-shadow:1px 1px 2px rgba(0,0,0,.2)}.floating-buttons{display:flex;flex-direction:column;align-items:center;gap:20px;padding:20px}.floating-buttons button{width:80%;padding:20px;display:flex;flex-direction:column;justify-content:center;align-items:center;font-size:1.3rem;font-weight:700;color:var(--white);background:linear-gradient(45deg,var(--primary-dark),var(--primary-color));border:none;border-radius:var(--border-radius);cursor:pointer;transition:all .3s ease;box-shadow:var(--shadow);position:relative;overflow:hidden;will-change:transform}.floating-buttons button:hover{transform:translateY(-5px);box-shadow:0 10px 20px rgba(0,0,0,.2);background:linear-gradient(45deg,var(--primary-dark),var(--primary-light))}.floating-buttons button::after{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:linear-gradient(45deg,transparent,hsla(0,0%,100%,.2),transparent);transform:translateX(-100%);transition:transform .6s ease}.floating-buttons button:hover::after{transform:translateX(100%)}.floating-buttons img{max-width:100%;height:auto;border-radius:8px;margin-top:10px;border:2px solid hsla(0,0%,100%,.3);box-shadow:0 2px 5px rgba(0,0,0,.1);transition:transform .3s ease;content-visibility:auto}@media (max-width:768px){.navbar{flex-wrap:wrap;justify-content:center;gap:10px}.center-text h1{font-size:1.3rem;order:1;width:100%;text-align:center}.logo{height:50px}.content h1{font-size:1.5rem}.floating-buttons button{width:90%;padding:15px;font-size:1.1rem}.language-menu{top:50px}}@media (prefers-reduced-motion:reduce){*,:after,:before{animation:none!important;transition:none!important;scroll-behavior:auto!important}}
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
                 height="60"
                 fetchpriority="high">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
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
        <h1 id="mainTitle">𝐓𝐇𝐄 𝐃𝐄𝐓𝐀𝐈𝐋𝐒</h1>
        <div class="floating-buttons">
            <!-- زر الاسم -->
            <button aria-label="Product name">
                <span id="nameLabel">𝙽𝙰𝙼𝙴: {{ $product->name }}</span>
            </button>

            <!-- زر الوصف -->
            <button aria-label="Product description">
                <span id="descriptionLabel">𝙳𝙴𝚂𝙲𝚁𝙸𝙿𝚃𝙸𝙾𝙽: {{ $product->description }}</span>
            </button>

            <!-- زر السعر -->
            <button aria-label="Product price">
                <span id="priceLabel">𝙿𝚁𝙸𝙲𝙴: {{ $product->price }}</span>
            </button>

            <!-- زر الصورة -->
            <button aria-label="Product image">
                <img src="/storage/{{$product->image}}"
                     alt="{{$product->name}} image"
                     loading="lazy"
                     width="400"
                     height="300"
                     decoding="async">
            </button>
        </div>
    </div>

    <!-- JavaScript محسن للغاية -->
    <script>
        // تحميل غير متزامن للغة
        const loadLanguageData = () => {
            return {
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
                }
            };
        };

        // وظائف أساسية فقط
        const toggleLanguageMenu = () => {
            const languageMenu = document.getElementById('languageMenu');
            const isShowing = languageMenu.classList.toggle('show');

            const handler = (e) => {
                if (!languageMenu.contains(e.target) && e.target !== document.querySelector('.fa-globe')) {
                    languageMenu.classList.remove('show');
                    document.removeEventListener('click', handler);
                }
            };

            isShowing ? document.addEventListener('click', handler) : document.removeEventListener('click', handler);
        };

        const changeLanguage = (lang) => {
            const data = loadLanguageData()[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('nameLabel').textContent = `${data.nameLabel} {{ $product->name }}`;
            document.getElementById('descriptionLabel').textContent = `${data.descriptionLabel} {{ $product->description }}`;
            document.getElementById('priceLabel').textContent = `${data.priceLabel} {{ $product->price }}`;
            toggleLanguageMenu();
        };

        const redirectToCustomerService = () => {
            window.location.href = "/home/compliants";
        };

        // تحميل متقطع للصور (للأجهزة التي لا تدعم loading="lazy" أصلياً)
        if (!('loading' in HTMLImageElement.prototype) && 'IntersectionObserver' in window) {
            const lazyImageObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src || lazyImage.src;
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            }, {rootMargin: '200px 0px'});

            document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
                lazyImageObserver.observe(img);
            });
        }
    </script>
</body>
</html>
