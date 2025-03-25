<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al_Firdawas</title>
    <!-- Preload أهم الموارد -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- تحسين تحميل الخطوط -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">

    <style>
        /* CSS مضغوط ومحسن */
        body{margin:0;font-family:'Lato',sans-serif;background:url('https://www.transparenttextures.com/patterns/honeycomb.png'),linear-gradient(60deg,rgba(255,193,7,1)0%,rgba(255,235,59,1)100%);color:#000}.navbar{display:flex;justify-content:space-between;align-items:center;padding:1.25rem 2.5rem;background-color:rgba(255,255,255,.8);box-shadow:0 2px 5px rgba(0,0,0,.1)}.navbar h1{font-family:'Times New Roman',serif;font-size:1.75rem;font-weight:700;margin:0}.navbar-icons{display:flex;gap:1.25rem;align-items:center}.navbar-icons i{font-size:1.5rem;cursor:pointer;transition:color .3s ease}.navbar-icons i:hover{color:#FFD700}.language-menu{display:none;position:absolute;top:3.75rem;right:2.5rem;background-color:#FFEB3B;box-shadow:0 2px 10px rgba(0,0,0,.1);border-radius:.3125rem;overflow:hidden;z-index:1000}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:.625rem 1.25rem;cursor:pointer;transition:background-color .3s ease}.language-menu ul li:hover{background-color:#FFD700}.floating-buttons{display:flex;justify-content:center;align-items:center;height:calc(100vh - 5rem);gap:1.25rem}@media (max-width:768px){.floating-buttons{flex-direction:column;height:auto;padding:1.25rem}}.floating-buttons button{width:20%;height:12.5rem;display:flex;flex-direction:column;justify-content:center;align-items:center;font-size:1.5rem;font-weight:700;color:#fff;background:linear-gradient(45deg,#FFC107,#FF9800);border:none;border-radius:.9375rem;cursor:pointer;transition:transform .3s ease,box-shadow .3s ease}@media (max-width:768px){.floating-buttons button{width:100%;margin-bottom:1.25rem}}.floating-buttons button:hover{transform:translateY(-.625rem);box-shadow:0 .625rem 1.25rem rgba(0,0,0,.2)}.floating-buttons button i{font-size:3rem;margin-bottom:.625rem}.content{padding:1.25rem;text-align:center}.content h1{font-size:3rem;margin-bottom:1.25rem}.content p{font-size:1.125rem;color:#333}.logo{height:3.75rem;margin-left:auto;cursor:pointer}.center-text{flex:1;text-align:center}
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo" width="60" height="60" loading="lazy">
        </a>
        <div class="center-text">
            <h1 id="mainTitle">𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- القائمة المنزلقة للغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- الأزرار العائمة -->
    <div class="floating-buttons">
        <button onclick="openTools()" aria-label="Tools">
            <i class="fas fa-tools"></i>
            <span id="toolsText">Tools</span>
        </button>
        <button onclick="redirectToCategoryProducts()" aria-label="Products">
            <i class="fas fa-utensils"></i>
            <span id="productsText">Products</span>
        </button>
        <button onclick="openArticles()" aria-label="Articles">
            <i class="fas fa-book"></i>
            <span id="articlesText">Articles</span>
        </button>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <h1 id="welcomeTitle">𝒲ℰℒ𝒞𝒪ℳℰ 𝒯𝒪 𝒜ℒ_ℱℐℛ𝒟𝒜𝒲𝒜𝒮</h1>
    </div>

    <!-- JS مضغوط ومعالج -->
    <script>
        const languageData={ar:{mainTitle:"𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢",toolsText:"المستلزمات",productsText:"المنتجات",articlesText:"المقالات",welcomeTitle:" مرحبًا بكم في الفردوس",welcomeMessage:"هذا مثال لواجهة مستخدم مع قائمة منسدلة."},en:{mainTitle:"𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢",toolsText:"Tools",productsText:"Products",articlesText:"Articles",welcomeTitle:"𝒲ℰℒ𝒞𝒪ℳℰ 𝒯𝒪 𝒜ℒ_ℱℐℛ𝒟𝒜𝒲𝒜𝒮",welcomeMessage:"This is an example of a user interface with a dropdown menu."}};function changeLanguage(e){const t=languageData[e];document.getElementById("mainTitle").textContent=t.mainTitle,document.getElementById("toolsText").textContent=t.toolsText,document.getElementById("productsText").textContent=t.productsText,document.getElementById("articlesText").textContent=t.articlesText,document.getElementById("welcomeTitle").textContent=t.welcomeTitle,document.getElementById("welcomeMessage").textContent=t.welcomeMessage,toggleLanguageMenu()}function toggleLanguageMenu(){document.getElementById("languageMenu").classList.toggle("show")}function redirectToCustomerService(){window.location.href="/home/compliants"}function openTools(){window.location.href="{{ route('tools') }}"}function redirectToCategoryProducts(){window.location.href="{{ route('categorys') }}"}function openArticles(){window.location.href="{{ route('articles') }}"}

        // تحميل متقطع للصور
        if('IntersectionObserver' in window) {
            const lazyImages = [].slice.call(document.querySelectorAll("img[loading='lazy']"));

            let lazyImageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src || lazyImage.src;
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    </script>
</body>
</html>
