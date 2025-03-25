<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al_Firdawas</title>

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">

    <!-- Inline critical CSS -->
    <style>
        /* Minimal critical CSS */
        body{margin:0;font-family:system-ui,-apple-system,BlinkMacSystemFont,sans-serif;background:#FFC107;color:#000}
        .navbar{display:flex;justify-content:space-between;align-items:center;padding:1rem;background:rgba(255,255,255,0.8);box-shadow:0 2px 5px rgba(0,0,0,0.1);position:sticky;top:0;z-index:100}
        .logo{height:3rem;aspect-ratio:1/1;cursor: pointer;}
        .search-bar{flex:1;margin: 0 20px; 1rem;display:flex;justify-content:center}
        .search-bar input{width:100%;max-width: 400px;padding: 10px;border:1px solid #ccc;border-radius:4px;  font-size: 16px;}
        .search-bar button{padding:0.5rem 1rem;margin-left:0.5rem;background:#FFEB3B;border:none;border-radius:4px;cursor:pointer}
        .navbar-icons{display:flex;gap:1rem}
        .navbar-icons i{font-size:1.5rem;cursor:pointer}
        .floating-buttons{display:flex;flex-direction:column;align-items:center;gap:1rem;padding:1rem}
        .floating-buttons button{width:90%;padding:1rem;display:flex;flex-direction:column;align-items:center;font-size:1.25rem;font-weight:bold;color:#fff;background:#FF9800;border:none;border-radius:0.75rem;cursor:pointer}
        .floating-buttons img{width:100%;height:9rem;object-fit:cover;border-radius:0.5rem;margin-bottom:0.5rem}
        .pagination{display:flex;justify-content:center;gap:0.5rem;margin:1rem 0}
        .pagination button{padding:0.5rem 0.75rem;background:#FFEB3B;border:none;border-radius:4px;cursor:pointer}
        .pagination button.active{background:#FFC107;color:#fff}

        /* Defer non-critical styles */
        .non-critical{display:none}
    </style>

    <!-- Load non-critical CSS asynchronously -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </noscript>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo" width="48" height="48" loading="lazy">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a category..." aria-label="Search">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" role="button" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" role="button" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu" style="display:none;position:absolute;top:4rem;right:1rem;background:#FFEB3B;border-radius:4px;box-shadow:0 2px 5px rgba(0,0,0,0.1);z-index:1000">
        <ul style="list-style:none;padding:0;margin:0">
            <li style="padding:0.5rem 1rem;cursor:pointer" onclick="changeLanguage('ar')">العربية</li>
            <li style="padding:0.5rem 1rem;cursor:pointer" onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- الأزرار العائمة -->
    <div class="floating-buttons" id="floating-buttons">
        @foreach($categories->take(5) as $category)
            <button onclick="redirectToProducts({{ $category->id }})" aria-label="{{ $category->name }}">
                @if($category->image_path)
                    <img src="{{ $category->image_path }}" alt="{{ $category->name }}" width="320" height="180" loading="lazy">
                @endif
                <span>{{ $category->name }}</span>
            </button>
        @endforeach
    </div>

    <!-- شريط الترقيم -->
    @if($categories->count() > 5)
        <div class="pagination" id="pagination">
            @for($i = 1; $i <= ceil($categories->count() / 5); $i++)
                <button onclick="changePage({{ $i }})" class="{{ $i === 1 ? 'active' : '' }}" aria-label="Page {{ $i }}">{{ $i }}</button>
            @endfor
        </div>
    @endif

    <!-- تخزين بيانات الفئات لتجنب طلبات AJAX -->
    <script id="categories-data" type="application/json">@json($categories)</script>

    <!-- Inline critical JavaScript -->
    <script>
        // Minimal JavaScript for initial functionality
        (function() {
            // Language functions
            window.toggleLanguageMenu = function() {
                document.getElementById('languageMenu').style.display =
                    document.getElementById('languageMenu').style.display === 'block' ? 'none' : 'block';
            };

            // Close language menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.fa-globe') && !e.target.closest('#languageMenu')) {
                    document.getElementById('languageMenu').style.display = 'none';
                }
            });

            // Search function
            window.searchItem = function() {
                const term = document.getElementById('searchInput').value.trim();
                if (term) {
                    window.location.href = `/home/category_search?keyword=${encodeURIComponent(term)}`;
                }
            };

            // Handle Enter key in search
            document.getElementById('searchInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') searchItem();
            });

            // Redirect functions
            window.redirectToCustomerService = function() {
                window.location.href = "/home/compliants";
            };

            window.redirectToProducts = function(id) {
                window.location.href = `/home/products/${id}`;
            };

            // Pagination
            window.changePage = function(page) {
                const categories = JSON.parse(document.getElementById('categories-data').textContent);
                const start = (page - 1) * 5;
                const buttons = categories.slice(start, start + 5).map(cat => `
                    <button onclick="redirectToProducts(${cat.id})" aria-label="${cat.name}">
                        ${cat.image_path ? `<img src="${cat.image_path}" alt="${cat.name}" width="320" height="180" loading="lazy">` : ''}
                        <span>${cat.name}</span>
                    </button>
                `).join('');

                document.getElementById('floating-buttons').innerHTML = buttons;

                // Update pagination buttons
                document.querySelectorAll('#pagination button').forEach((btn, i) => {
                    btn.classList.toggle('active', i === page - 1);
                });
            };

            // Load language preference
            if (localStorage.getItem('preferredLanguage')) {
                const lang = localStorage.getItem('preferredLanguage');
                document.getElementById('searchInput').placeholder =
                    lang === 'ar' ? "ابحث عن فئة بالاسم..." : "Search for a category...";
            }
        })();
    </script>

    <!-- Defer non-critical background pattern -->
    <script>
        window.addEventListener('load', function() {
            document.body.style.backgroundImage = "url('https://www.transparenttextures.com/patterns/honeycomb.png'), linear-gradient(60deg, #FFC107 0%, #FFEB3B 100%)";
        });
    </script>
</body>
</html>
