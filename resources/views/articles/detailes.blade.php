<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- Inline critical CSS -->
    <style>
        :root{--primary-color:#8BC34A;--primary-dark:#689F38;--primary-light:#9CCC65;--white:#FFFFFF;--black:#000000;--shadow:0 2px 10px rgba(0,0,0,0.1);--border-radius:15px;--content-width:1200px;--logo-size:70px}*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Lato',sans-serif;background:url("{{ asset('/detaeils.jpg') }}") center/cover no-repeat fixed,linear-gradient(60deg,rgba(139,195,74,0.3) 0%,rgba(205,220,57,0.3) 100%);background-blend-mode:overlay;min-height:100vh;color:var(--black);display:flex;flex-direction:column}.navbar{display:flex;justify-content:space-between;align-items:center;padding:15px 30px;background-color:rgba(255,255,255,0.95);box-shadow:var(--shadow);backdrop-filter:blur(5px);position:sticky;top:0;z-index:100;height:100px}.navbar h1{font-family:'Times New Roman',serif;font-size:28px;font-weight:bold;margin:0;color:var(--primary-dark);text-shadow:1px 1px 2px rgba(0,0,0,0.1)}.search-bar{flex:1;margin:0 20px;display:flex;justify-content:center;min-width:200px;max-width:500px}.search-bar input{width:100%;padding:10px 15px;font-size:16px;border:1px solid #ccc;border-radius:var(--border-radius);outline:none;transition:box-shadow 0.3s ease}.search-bar input:focus{box-shadow:0 0 0 2px var(--primary-dark)}.search-bar button{padding:10px 15px;font-size:16px;background-color:var(--primary-dark);color:var(--white);border:none;border-radius:var(--border-radius);cursor:pointer;margin-left:10px;transition:all 0.3s ease}.search-bar button:hover{background-color:var(--primary-color);transform:translateY(-2px)}.navbar-icons{display:flex;gap:15px;align-items:center}.navbar-icons i{font-size:24px;cursor:pointer;transition:all 0.3s ease;color:var(--primary-dark)}.navbar-icons i:hover{color:var(--primary-color);transform:scale(1.1)}.language-menu{display:none;position:absolute;top:100px;right:30px;background-color:var(--primary-color);box-shadow:var(--shadow);border-radius:var(--border-radius);overflow:hidden;z-index:1000;width:150px;animation:fadeIn 0.3s ease}@keyframes fadeIn{from{opacity:0;transform:translateY(-10px)}to{opacity:1;transform:translateY(0)}}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:10px 20px;cursor:pointer;transition:all 0.3s ease;color:var(--white)}.language-menu ul li:hover{background-color:var(--primary-dark)}.content{flex:1;padding:20px;text-align:center;background-color:rgba(255,255,255,0.85);border-radius:var(--border-radius);margin:20px auto;width:calc(100% - 40px);max-width:var(--content-width);box-shadow:var(--shadow);backdrop-filter:blur(8px);min-height:calc(100vh - 160px)}.content h1{font-size:48px;margin-bottom:20px;font-family:'Times New Roman',serif;color:var(--primary-dark)}.title-box{background:rgba(255,255,255,0.9);padding:20px;border-radius:var(--border-radius);box-shadow:var(--shadow);margin-bottom:20px}.content-box{background:rgba(255,255,255,0.9);padding:30px;border-radius:var(--border-radius);box-shadow:var(--shadow);text-align:left;max-width:800px;margin:0 auto}.article-content h1,.article-content h2,.article-content h3{color:var(--primary-dark);margin-top:20px;margin-bottom:10px}.article-content p{margin-bottom:15px;line-height:1.6;font-size:18px}.article-content ul,.article-content ol{margin-bottom:15px;padding-left:20px}.article-content img{max-width:100%;height:auto;border-radius:var(--border-radius);margin:15px 0;box-shadow:var(--shadow)}.article-content a{color:var(--primary-dark);text-decoration:none;transition:color 0.3s ease}.article-content a:hover{color:var(--primary-color);text-decoration:underline}.image-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:15px;margin-top:20px}.image-grid img{width:100%;height:200px;object-fit:cover;border-radius:var(--border-radius);transition:transform 0.3s ease;box-shadow:var(--shadow)}.image-grid img:hover{transform:scale(1.03)}.logo{height:var(--logo-size);width:var(--logo-size);object-fit:contain;cursor:pointer;filter:drop-shadow(1px 1px 2px rgba(0,0,0,0.2));transition:transform 0.3s ease}.logo:hover{transform:scale(1.05)}.flying-bee{position:fixed;width:40px;height:40px;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FFC107"/><circle cx="30" cy="50" r="20" fill="%23333"/><circle cx="70" cy="50" r="25" fill="%23333"/><path d="M20,50 Q50,30 80,50 Q50,70 20,50" fill="%23FFEB3B"/><path d="M40,20 L40,30 M60,20 L60,30 M40,70 L40,80 M60,70 L60,80" stroke="%23333" stroke-width="3"/></svg>');background-size:contain;z-index:-1;animation:flyAround 20s linear infinite;content-visibility:auto}@keyframes flyAround{0%{transform:translate(0,0) rotate(0deg)}25%{transform:translate(200px,150px) rotate(90deg)}50%{transform:translate(400px,0) rotate(180deg)}75%{transform:translate(200px,-150px) rotate(270deg)}100%{transform:translate(0,0) rotate(360deg)}}.pollen{position:fixed;width:15px;height:15px;background:radial-gradient(circle,#FFEB3B 30%,transparent 70%);border-radius:50%;z-index:-1;animation:floatPollen 8s ease-in-out infinite;content-visibility:auto}@keyframes floatPollen{0%,100%{transform:translateY(0) rotate(0deg);opacity:0.8}50%{transform:translateY(-30px) rotate(180deg);opacity:0.3}}@media (max-width:768px){.navbar{flex-direction:column;height:auto;padding:15px;gap:15px}.search-bar{width:100%;margin:10px 0}.content h1{font-size:36px}.image-grid{grid-template-columns:1fr}.language-menu{top:auto;right:15px}}@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}html{scroll-behavior:auto}}
    </style>

    <!-- Load non-critical CSS asynchronously -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
</head>
<body>
    <!-- Nature effects - reduced initial count -->
    <div class="flying-bee" style="top:15%; left:10%; animation-delay:0s;"></div>
    <div class="pollen" style="top:20%; left:30%; animation-delay:0.5s;"></div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}" aria-label="Home">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png"
                 alt="Logo"
                 class="logo"
                 loading="eager"
                 width="70"
                 height="70">
        </a>
        <div class="center-text">
            <h1>𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
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
        <!-- Title box -->
        <div class="title-box">
            <h1 id="articleTitle">{{ $article->title }}</h1>
        </div>

        <!-- Content box -->
        <div class="content-box">
            <!-- Article content as HTML -->
            <div id="articleText" class="article-content">{!! $article->text !!}</div>

            <!-- Images grid with lazy loading -->
            @if (isset($article->images) && count($article->images) > 0)
                <div class="image-grid">
                    @foreach ($article->images as $image)
                        <img src="{{ asset('placeholder.jpg') }}"
                             data-src="{{ asset($image->image_path) }}"
                             alt="Article Image"
                             loading="lazy"
                             width="250"
                             height="200"
                             class="lazy">
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <!-- Deferred JavaScript -->
    <script>
        // Minimal essential functionality
        function toggleLanguageMenu() {
            document.getElementById('languageMenu').classList.toggle('show');
        }

        function closeLanguageMenu(e) {
            const languageMenu = document.getElementById('languageMenu');
            const languageIcon = document.querySelector('.fa-globe');

            if (!languageMenu.contains(e.target) && e.target !== languageIcon &&
                languageMenu.classList.contains('show')) {
                languageMenu.classList.remove('show');
            }
        }

        // Event delegation for better performance
        document.addEventListener('click', function(e) {
            if (e.target.matches('.fa-globe')) {
                toggleLanguageMenu();
            } else {
                closeLanguageMenu(e);
            }

            if (e.target.matches('.fa-headset')) {
                window.location.href = "/home/compliants";
            }

            if (e.target.matches('.language-menu ul li')) {
                const lang = e.target.getAttribute('onclick').match(/'([^']+)'/)[1];
                changeLanguage(lang);
            }
        });

        // Load the rest of the JavaScript after page load
        window.addEventListener('load', function() {
            // Language data
            const languageData = {
                ar: {
                    articleTitle: "{{ $article->title }}",
                    articleText: `{!! $article->text !!}`,
                },
                en: {
                    articleTitle: "{{ $article->title }}",
                    articleText: `{!! $article->text !!}`,
                },
            };

            // Change language function
            function changeLanguage(lang) {
                const data = languageData[lang];
                document.getElementById('articleTitle').textContent = data.articleTitle;
                document.getElementById('articleText').innerHTML = data.articleText;
                toggleLanguageMenu();
            }

            // Lazy loading for images with IntersectionObserver
            if ('IntersectionObserver' in window) {
                const lazyImages = document.querySelectorAll('.lazy');
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            observer.unobserve(img);
                        }
                    });
                });

                lazyImages.forEach(img => imageObserver.observe(img));
            }

            // Load additional nature effects if reduced motion is not preferred
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                const natureContainer = document.body;

                // Add bees
                for (let i = 0; i < 2; i++) {
                    const bee = document.createElement('div');
                    bee.className = 'flying-bee';
                    bee.style.top = Math.random() * 80 + 10 + '%';
                    bee.style.left = Math.random() * 80 + 10 + '%';
                    bee.style.animationDelay = Math.random() * 5 + 's';
                    bee.style.animationDuration = 15 + Math.random() * 20 + 's';
                    natureContainer.appendChild(bee);
                }

                // Add pollen
                for (let i = 0; i < 3; i++) {
                    const pollen = document.createElement('div');
                    pollen.className = 'pollen';
                    pollen.style.top = Math.random() * 80 + 10 + '%';
                    pollen.style.left = Math.random() * 80 + 10 + '%';
                    pollen.style.animationDelay = Math.random() * 5 + 's';
                    pollen.style.width = 10 + Math.random() * 10 + 'px';
                    pollen.style.height = pollen.style.width;
                    natureContainer.appendChild(pollen);
                }
            }
        }, { once: true });
    </script>
</body>
</html>
