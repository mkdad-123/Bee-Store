<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - {{ $category->name }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسين تحميل الخطوط -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet" preload>
    <!-- تحسين تحميل أيقونات Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>
    <!-- تضمين CSS بشكل مضغوط -->
    <style>
        body{margin:0;font-family:'Lato',sans-serif;background:url("{{ asset('\pic_1.jpg') }}") center/cover no-repeat fixed,linear-gradient(60deg,rgba(139,195,74,0.3) 0%,rgba(205,220,57,0.3) 100%);background-blend-mode:overlay;min-height:100vh}.navbar{display:flex;justify-content:space-between;align-items:center;padding:20px 40px;background-color:rgba(255,255,255,0.9);box-shadow:0 2px 5px rgba(0,0,0,0.1);backdrop-filter:blur(5px)}.navbar h1{font-family:'Times New Roman',serif;font-size:28px;font-weight:bold;margin:0;color:#2E7D32;text-shadow:1px 1px 2px rgba(0,0,0,0.1)}.search-bar{flex:1;margin:0 20px;display:flex;justify-content:center}.search-bar input{width:100%;max-width:400px;padding:10px;font-size:16px;border:1px solid #ccc;border-radius:5px;outline:none}.search-bar button{padding:10px 15px;font-size:16px;background-color:#8BC34A;border:none;border-radius:5px;cursor:pointer;margin-left:10px;transition:background-color 0.3s ease;color:white}.search-bar button:hover{background-color:#689F38}.navbar-icons{display:flex;gap:15px;align-items:center}.navbar-icons i{font-size:24px;cursor:pointer;transition:color 0.3s ease;color:#2E7D32}.navbar-icons i:hover{color:#558B2F}.language-menu{display:none;position:absolute;top:60px;right:40px;background-color:#8BC34A;box-shadow:0 2px 10px rgba(0,0,0,0.1);border-radius:5px;overflow:hidden;z-index:1000}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:10px 20px;cursor:pointer;transition:background-color 0.3s ease;color:white}.language-menu ul li:hover{background-color:#689F38}.content{padding:20px;text-align:center;background-color:rgba(255,255,255,0.85);border-radius:15px;margin:20px auto;max-width:1200px;box-shadow:0 5px 15px rgba(0,0,0,0.1);backdrop-filter:blur(8px)}.content h1{font-size:48px;margin-bottom:20px;font-family:'Times New Roman',serif;color:#2E7D32}.products-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;padding:20px}.product-card{background:linear-gradient(45deg,#7CB342,#9CCC65);border-radius:15px;padding:20px;box-shadow:0 10px 20px rgba(0,0,0,0.1);text-align:center;transition:transform 0.3s ease,box-shadow 0.3s ease;cursor:pointer;color:white;height:400px;display:flex;flex-direction:column;justify-content:space-between;overflow:hidden}.product-card:hover{transform:translateY(-10px);box-shadow:0 15px 30px rgba(0,0,0,0.2);background:linear-gradient(45deg,#689F38,#8BC34A)}.product-card img{width:100%;height:200px;object-fit:cover;border-radius:10px;border:2px solid rgba(255,255,255,0.3);loading:lazy}.product-card h3{font-size:24px;margin:10px 0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.product-card p{font-size:16px;color:white;overflow:hidden;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical}.logo-container{width:80px;height:60px;display:flex;align-items:center}.logo{max-width:100%;max-height:100%;object-fit:contain;cursor:pointer;filter:drop-shadow(1px 1px 2px rgba(0,0,0,0.2))}.pagination{display:flex;justify-content:center;margin-top:20px;gap:10px}.pagination button{padding:10px 15px;font-size:16px;background:linear-gradient(45deg,#8BC34A,#7CB342);border:none;border-radius:5px;cursor:pointer;transition:background-color 0.3s ease;color:white}.pagination button:hover{background:linear-gradient(45deg,#7CB342,#8BC34A)}.pagination button.active{background:linear-gradient(45deg,#689F38,#8BC34A)}.flying-bee{position:absolute;width:40px;height:40px;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FFC107"/><circle cx="30" cy="50" r="20" fill="%23333"/><circle cx="70" cy="50" r="25" fill="%23333"/><path d="M20,50 Q50,30 80,50 Q50,70 20,50" fill="%23FFEB3B"/><path d="M40,20 L40,30 M60,20 L60,30 M40,70 L40,80 M60,70 L60,80" stroke="%23333" stroke-width="3"/></svg>');background-size:contain;z-index:-1;animation:flyAround 20s linear infinite}@keyframes flyAround{0%{transform:translate(0,0) rotate(0deg)}25%{transform:translate(200px,150px) rotate(90deg)}50%{transform:translate(400px,0) rotate(180deg)}75%{transform:translate(200px,-150px) rotate(270deg)}100%{transform:translate(0,0) rotate(360deg)}}.pollen{position:absolute;width:15px;height:15px;background:radial-gradient(circle,#FFEB3B 30%,transparent 70%);border-radius:50%;z-index:-1;animation:floatPollen 8s ease-in-out infinite}@keyframes floatPollen{0%,100%{transform:translateY(0) rotate(0deg);opacity:0.8}50%{transform:translateY(-30px) rotate(180deg);opacity:0.3}}
    </style>
</head>
<body>
    <!-- تأثيرات النحل المتحركة -->
    <div class="flying-bee" style="top:15%;left:10%;animation-delay:0s"></div>
    <div class="flying-bee" style="top:65%;left:75%;animation-delay:2s;animation-duration:25s"></div>
    <div class="flying-bee" style="top:30%;left:80%;animation-delay:4s;animation-duration:18s"></div>

    <!-- تأثيرات حبوب اللقاح -->
    <div class="pollen" style="top:20%;left:30%;animation-delay:0.5s"></div>
    <div class="pollen" style="top:50%;left:60%;animation-delay:1.2s"></div>
    <div class="pollen" style="top:70%;left:20%;animation-delay:2.3s"></div>

    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home" class="logo-container">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for an item by name..." aria-label="Search products">
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
        <h1 id="mainTitle">{{ $category->name }}</h1>
        <div class="products-grid" id="products-grid" role="list">
            <!-- سيتم ملء هذا القسم عبر JavaScript -->
        </div>

        <!-- شريط التنقل -->
        <div class="pagination" id="pagination" role="navigation">
            @for($i = 1; $i <= ceil($products->count() / 9); $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}" aria-label="Page {{ $i }}">{{ $i }}</button>
            @endfor
        </div>
    </div>

    <!-- تحميل JavaScript بشكل غير متزامن -->
    <script>
        // بيانات المنتجات
        const products = @json($products);

        // بيانات اللغة
        const languageData = {
            ar: {
                mainTitle: "{{ $category->name }}",
                searchPlaceholder: "ابحث عن منتج بالاسم...",
            },
            en: {
                mainTitle: "{{ $category->name }}",
                searchPlaceholder: "Search for an item by name...",
            },
        };

        // تهيئة الصفحة بعد تحميل DOM
        document.addEventListener('DOMContentLoaded', () => {
            // تحميل الصفحة الأولى
            changePage(1);

            // إضافة مستمعي الأحداث
            document.getElementById('searchInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') searchItem();
            });

            // إغلاق قائمة اللغة عند النقر خارجها
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.fa-globe') && !e.target.closest('#languageMenu')) {
                    document.getElementById('languageMenu').classList.remove('show');
                }
            });
        });

        // وظيفة تغيير الصفحة
        function changePage(page) {
            const start = (page - 1) * 9;
            const end = start + 9;
            const currentProducts = products.slice(start, end);
            const productsGrid = document.getElementById('products-grid');

            // استخدام DocumentFragment لتحسين الأداء
            const fragment = document.createDocumentFragment();

            currentProducts.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.setAttribute('data-product-id', product.id);
                productCard.setAttribute('role', 'listitem');
                productCard.innerHTML = `
                    <img src="/storage/${product.image}" alt="${product.name}" loading="lazy">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p>${product.price}</p>
                `;
                productCard.addEventListener('click', () => {
                    window.location.href = `/home/products/details/${product.id}`;
                });
                fragment.appendChild(productCard);
            });

            // تفريغ الشبكة وإضافة العناصر الجديدة دفعة واحدة
            productsGrid.innerHTML = '';
            productsGrid.appendChild(fragment);

            // تحديث أزرار الترقيم
            updatePaginationButtons(page);
        }

        // تحديث أزرار الترقيم
        function updatePaginationButtons(activePage) {
            const buttons = document.querySelectorAll('#pagination button');
            buttons.forEach((button, index) => {
                button.classList.toggle('active', index === activePage - 1);
            });
        }

        // تبديل قائمة اللغة
        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        // تغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu();
            localStorage.setItem('preferredLanguage', lang);
        }

        // التوجيه إلى خدمة العملاء
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // البحث عن عنصر
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/product_search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }
    </script>
</body>
</html>
