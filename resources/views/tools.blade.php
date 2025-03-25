<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
    <!-- Preload أهم الموارد -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- تحسين تحميل الخطوط -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">

    <style>
        /* CSS مضغوط ومحسن */
        body{margin:0;font-family:'Lato',sans-serif;background:url('https://www.transparenttextures.com/patterns/honeycomb.png'),linear-gradient(60deg,rgba(255,193,7,1)0%,rgba(255,235,59,1)100%);color:#000}.navbar{display:flex;justify-content:space-between;align-items:center;padding:1.25rem 2.5rem;background-color:rgba(255,255,255,.8);box-shadow:0 2px 5px rgba(0,0,0,.1)}.navbar h1{font-family:'Times New Roman',serif;font-size:1.75rem;font-weight:700;margin:0}.search-bar{flex:1;margin:0 1.25rem;display:flex;justify-content:center}.search-bar input{width:100%;max-width:25rem;padding:.625rem;font-size:1rem;border:1px solid #ccc;border-radius:.3125rem;outline:none}.search-bar button{padding:.625rem .9375rem;font-size:1rem;background-color:#FFEB3B;border:none;border-radius:.3125rem;cursor:pointer;margin-left:.625rem;transition:background-color .3s ease}.search-bar button:hover{background-color:#FFD700}.navbar-icons{display:flex;gap:.9375rem;align-items:center}.navbar-icons i{font-size:1.5rem;cursor:pointer;transition:color .3s ease}.navbar-icons i:hover{color:#FFD700}.language-menu{display:none;position:absolute;top:3.75rem;right:2.5rem;background-color:#FFEB3B;box-shadow:0 2px 10px rgba(0,0,0,.1);border-radius:.3125rem;overflow:hidden;z-index:1000}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:.625rem 1.25rem;cursor:pointer;transition:background-color .3s ease}.language-menu ul li:hover{background-color:#FFD700}.content{padding:1.25rem;text-align:center}.content h1{font-size:3rem;margin-bottom:1.25rem}.tools-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:1.25rem;padding:1.25rem}.tool-card{background:linear-gradient(45deg,#FF8C42,#FF6F00);border-radius:.9375rem;padding:1.25rem;box-shadow:0 10px 20px rgba(0,0,0,.1);text-align:center;transition:transform .3s ease,box-shadow .3s ease;cursor:pointer;color:#fff;height:25rem;display:flex;flex-direction:column;justify-content:space-between}.tool-card:hover{transform:translateY(-.625rem);box-shadow:0 15px 30px rgba(0,0,0,.2)}.tool-card img{width:100%;height:12.5rem;object-fit:cover;border-radius:.625rem}.tool-card h3{font-size:1.5rem;margin:.625rem 0}.tool-card p{font-size:1rem;color:#fff}.logo{height:3.75rem;margin-left:auto;cursor:pointer}.pagination{display:flex;justify-content:center;margin-top:1.25rem;gap:.625rem}.pagination button{padding:.625rem .9375rem;font-size:1rem;background:linear-gradient(45deg,#FF6B6B,#FF8E8E);border:none;border-radius:.3125rem;cursor:pointer;transition:background-color .3s ease;color:#fff}.pagination button:hover{background:linear-gradient(45deg,#FF8E8E,#FF6B6B)}.pagination button.active{background:linear-gradient(45deg,#FF5252,#FF6B6B)}@media (max-width:768px){.navbar{padding:1rem}.navbar h1{font-size:1.25rem}.search-bar{margin:0 .5rem}.content h1{font-size:2rem}.tools-grid{grid-template-columns:1fr}}
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo" width="60" height="60" loading="lazy">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a tool by name..." aria-label="Search tools">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
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
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}" aria-label="Page {{ $i }}">{{ $i }}</button>
            @endfor
        </div>
    </div>

    <!-- JS مضغوط ومعالج -->
    <script>
        const tools=@json($tools);const languageData={ar:{mainTitle:"الأدوات",searchPlaceholder:"ابحث عن أداة بالاسم..."},en:{mainTitle:"𝐓𝐎𝐎𝐋𝐒",searchPlaceholder:"Search for a tool by name..."}};document.addEventListener("DOMContentLoaded",()=>{changePage(1)});function changePage(e){const t=(e-1)*9,n=t+9,o=tools.slice(t,n),a=document.getElementById("tools-grid");a.innerHTML="";o.forEach(e=>{const t=document.createElement("div");t.className="tool-card",t.setAttribute("data-tool-id",e.id),t.innerHTML=`<img src="${e.image}" alt="${e.name}" loading="lazy"><h3>${e.name}</h3><p>${e.description}</p><p>${e.price}</p>`,a.appendChild(t)});document.querySelectorAll(".tool-card").forEach(e=>{e.addEventListener("click",()=>{window.location.href=`/home/tools/details/${e.getAttribute("data-tool-id")}`})});document.querySelectorAll("#pagination button").forEach(e=>e.classList.remove("active")),document.querySelectorAll("#pagination button")[e-1].classList.add("active")}function toggleLanguageMenu(){document.getElementById("languageMenu").classList.toggle("show")}function changeLanguage(e){const t=languageData[e];document.getElementById("mainTitle").textContent=t.mainTitle,document.getElementById("searchInput").placeholder=t.searchPlaceholder,toggleLanguageMenu()}function redirectToCustomerService(){window.location.href="/home/compliants"}function searchItem(){const e=document.getElementById("searchInput").value;e?window.location.href=`/home/tools_search?keyword=${e}`:alert("Please enter a search term")}document.getElementById("searchInput").addEventListener("keypress",function(e){"Enter"===e.key&&searchItem()});

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
