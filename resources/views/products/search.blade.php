<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Al Firdawas Products">
    <title>𝗣𝗥𝗢𝗗𝗨𝗖𝗧𝗦 - {{ $keyword }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- Font loading optimizations -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet"></noscript>

    <!-- Font Awesome optimizations -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <style>
        /* General design with green/white color scheme */
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --secondary-color: #FFFFFF;
            --white: #FFFFFF;
            --black: #000000;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --border-radius: 15px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', system-ui, -apple-system, sans-serif;
            font-display: swap;
            background:
                url('/pic_3.jpg') center/cover no-repeat fixed,
                linear-gradient(60deg, rgba(139, 195, 74, 0.8) 0%, rgba(156, 204, 101, 0.8) 100%);
            background-blend-mode: overlay;
            color: var(--black);
            min-height: 100vh;
        }

        /* Top bar with optimizations */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            backdrop-filter: blur(5px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: var(--black);
        }

        /* Search bar with optimizations */
        .search-bar {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
            min-width: 200px;
        }

        .search-bar input {
            width: 100%;
            max-width: 400px;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: var(--border-radius);
            outline: none;
            transition: box-shadow 0.3s ease;
        }

        .search-bar input:focus {
            box-shadow: 0 0 0 2px var(--primary-dark);
        }

        .search-bar button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: var(--primary-dark);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            margin-left: 10px;
            transition: all 0.3s ease;
            will-change: transform, background-color;
        }

        .search-bar button:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Language and customer service icons */
        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-dark);
            will-change: transform, color;
        }

        .navbar-icons i:hover {
            color: var(--primary-color);
            transform: scale(1.1);
        }

        /* Language menu */
        .language-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 20px;
            background-color: var(--primary-color);
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
            z-index: 1000;
            width: 150px;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
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
            transition: all 0.3s ease;
            color: var(--white);
        }

        .language-menu ul li:hover {
            background-color: var(--primary-dark);
        }

        /* Main content */
        .content {
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            color: var(--white);
        }

        /* Product cards with optimizations */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            will-change: transform;
        }

        .product-card {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: var(--white);
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            will-change: transform, box-shadow;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            content-visibility: auto;
            transition: transform 0.3s ease;
            border: 2px solid rgba(255,255,255,0.3);
        }

        .product-card:hover img {
            transform: scale(1.02);
        }

        .product-card h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .product-card p {
            font-size: 16px;
            color: var(--white);
        }

        /* Logo styling */
        .logo {
            height: 80px;
            width: auto;
            cursor: pointer;
            object-fit: contain;
            transition: transform 0.3s ease;
            content-visibility: auto;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
        }

        .logo:hover {
            transform: scale(1.05);
        }

        /* Pagination styling */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pagination button {
            padding: 10px 15px;
            font-size: 16px;
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--white);
            will-change: transform, background;
        }

        .pagination button:hover {
            background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
            transform: translateY(-2px);
        }

        .pagination button.active {
            background: linear-gradient(45deg, var(--primary-light), var(--primary-color));
            transform: scale(1.05);
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
                margin: 10px 0;
            }

            .logo {
                height: 60px;
            }

            .content h1 {
                font-size: 36px;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .language-menu {
                top: 120px;
            }
        }

        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 loading="eager"
                 width="120"
                 height="80"
                 fetchpriority="high">
        </a>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a product by name..." aria-label="Search products">
            <button onclick="searchItem()" aria-label="Search"><i class="fas fa-search"></i></button>
        </div>
        <!-- Language and customer service icons -->
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
            <i class="fas fa-headset" onclick="redirectToCustomerService()" aria-label="Customer service"></i>
        </div>
    </div>

    <!-- Language menu -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
            <li onclick="changeLanguage('en')" aria-label="English">English</li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="content">
        <h1 id="mainTitle">𝐏𝐑𝐎𝐃𝐔𝐂𝐓𝐒</h1>
        <div class="products-grid" id="products-grid">
            <!-- Will be filled via JavaScript -->
        </div>

        <!-- Pagination -->
        <div class="pagination" id="pagination">
            <!-- Will be filled via JavaScript -->
        </div>
    </div>

    <!-- JavaScript with performance optimizations -->
    <script>
        // Defer non-critical resources
        function loadDeferredResources() {
            // Add any non-critical scripts here
        }

        // Run after page load
        if (window.requestIdleCallback) {
            window.requestIdleCallback(loadDeferredResources);
        } else {
            window.addEventListener('load', loadDeferredResources);
        }

        // Products data
        const products = @json($products); // Convert data to JSON

        // Language data
        const languageData = {
            ar: {
                mainTitle: "المنتجات",
                searchPlaceholder: "ابحث عن منتج بالاسم...",
            },
            en: {
                mainTitle: "𝐏𝐑𝐎𝐃𝐔𝐂𝐓𝐒",
                searchPlaceholder: "Search for a product by name...",
            },
        };

        // Items per page
        const itemsPerPage = 9;
        let currentPage = 1;

        // Show first page on load
        document.addEventListener('DOMContentLoaded', () => {
            changePage(1); // Show first page

            // Add click event outside language menu to close it
            document.addEventListener('click', (e) => {
                const languageMenu = document.getElementById('languageMenu');
                const languageIcon = document.querySelector('.fa-globe');

                if (!languageMenu.contains(e.target) && e.target !== languageIcon && languageMenu.classList.contains('show')) {
                    languageMenu.classList.remove('show');
                }
            });
        });

        // Function to change page
        function changePage(page) {
            currentPage = page;
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const currentProducts = products.slice(start, end);

            const productsGrid = document.getElementById('products-grid');
            productsGrid.innerHTML = '';

            currentProducts.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.setAttribute('data-product-id', product.id);
                productCard.setAttribute('aria-label', `Product: ${product.name}`);
                productCard.innerHTML = `
                    <img src="/storage/${product.image}"
                         alt="${product.name}"
                         loading="lazy"
                         width="300"
                         height="200"
                         decoding="async">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p>${product.price}</p>
                `;
                productsGrid.appendChild(productCard);
            });

            // Add click event to product cards
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('click', () => {
                    const productId = card.getAttribute('data-product-id');
                    window.location.href = `/home/products/details/${productId}`;
                });
            });

            // Update pagination buttons
            updatePaginationButtons(page);
        }

        // Function to update pagination buttons
        function updatePaginationButtons(page) {
            const totalPages = Math.ceil(products.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            // Previous button
            if (page > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
                prevButton.onclick = () => changePage(page - 1);
                prevButton.setAttribute('aria-label', 'Previous page');
                paginationContainer.appendChild(prevButton);
            }

            // Page buttons
            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.onclick = () => changePage(i);
                button.setAttribute('aria-label', `Page ${i}`);
                if (i === page) {
                    button.classList.add('active');
                }
                paginationContainer.appendChild(button);
            }

            // Next button
            if (page < totalPages) {
                const nextButton = document.createElement('button');
                nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
                nextButton.onclick = () => changePage(page + 1);
                nextButton.setAttribute('aria-label', 'Next page');
                paginationContainer.appendChild(nextButton);
            }
        }

        // Function to show/hide language menu
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // Function to change language
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('mainTitle').textContent = data.mainTitle;
            document.getElementById('searchInput').placeholder = data.searchPlaceholder;
            toggleLanguageMenu();
        }

        // Function for customer service
        function redirectToCustomerService() {
            window.location.href = "/home/compliants";
        }

        // Search function
        function searchItem() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                window.location.href = `/home/products/search?keyword=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        }
    </script>
</body>
</html>
