<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم شكوى</title>
    <!-- Preload أهم الموارد -->
    <link rel="preload" href="https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" as="image">

    <!-- تحسين تحميل الخطوط -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* CSS مضغوط ومحسن */
        body{margin:0;font-family:'Lato',sans-serif;background:url('https://www.transparenttextures.com/patterns/honeycomb.png'),linear-gradient(60deg,rgba(255,193,7,1)0%,rgba(255,235,59,1)100%);color:#000}.navbar{display:flex;justify-content:space-between;align-items:center;padding:1.25rem 2.5rem;background-color:rgba(255,255,255,.8);box-shadow:0 2px 5px rgba(0,0,0,.1)}.navbar h1{font-family:'Times New Roman',serif;font-size:1.75rem;font-weight:700;margin:0}.complaint-form{max-width:37.5rem;margin:3.125rem auto;padding:1.25rem;background:rgba(255,255,255,.9);border-radius:.9375rem;box-shadow:0 .625rem 1.25rem rgba(0,0,0,.1)}.complaint-form h2{text-align:center;margin-bottom:1.25rem}.complaint-form label{display:block;margin-bottom:.625rem;font-weight:700}.complaint-form textarea{width:100%;padding:.625rem;margin-bottom:1.25rem;border:1px solid #ccc;border-radius:.3125rem;font-size:1rem;height:9.375rem;resize:vertical}.complaint-form button{width:100%;padding:.9375rem;background:linear-gradient(45deg,#FF6B6B,#FF8E8E);border:none;border-radius:.3125rem;color:#fff;font-size:1.125rem;cursor:pointer;transition:background .3s ease}.complaint-form button:hover{background:linear-gradient(45deg,#FF8E8E,#FF6B6B)}.logo{height:3.75rem;margin-left:auto;cursor:pointer}.navbar-icons{display:flex;gap:.9375rem;align-items:center}.navbar-icons i{font-size:1.5rem;cursor:pointer;transition:color .3s ease}.navbar-icons i:hover{color:#FFD700}.language-menu{display:none;position:absolute;top:4.375rem;right:2.5rem;background-color:#FFEB3B;box-shadow:0 2px 10px rgba(0,0,0,.1);border-radius:.3125rem;overflow:hidden;z-index:1000}.language-menu.show{display:block}.language-menu ul{list-style:none;padding:0;margin:0}.language-menu ul li{padding:.625rem 1.25rem;cursor:pointer;transition:background-color .3s ease}.language-menu ul li:hover{background-color:#FFD700}.center-text{flex:1;text-align:center}@media (max-width:768px){.navbar{padding:1rem}.complaint-form{margin:1.25rem auto;padding:1rem}}
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo" width="60" height="60" loading="lazy">
        </a>
        <div class="center-text">
            <h1 id="pageTitle">𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()" aria-label="Change language"></i>
        </div>
    </div>

    <!-- قائمة اللغة -->
    <div class="language-menu" id="languageMenu">
        <ul>
            <li onclick="changeLanguage('ar')">العربية</li>
            <li onclick="changeLanguage('en')">English</li>
        </ul>
    </div>

    <!-- نموذج تقديم الشكوى -->
    <div class="complaint-form">
        <h2 id="formTitle">Thank you for sharing your opinion on developing our business.</h2>
        <form id="complaintForm">
            <label for="complaint" id="complaintLabel">𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓:</label>
            <textarea id="complaint" name="content" rows="5" required aria-label="Complaint content"></textarea>
            <button type="submit" id="submitButton">𝐒𝐄𝐍𝐃 𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓</button>
        </form>
    </div>

    <!-- JS مضغوط ومعالج -->
    <script>
        const languageData={ar:{formTitle:"شكراً لمشاركتك رأيك في تطوير أعمالنا",complaintLabel:"الشكوى:",submitButton:"إرسال الشكوى"},en:{formTitle:"Thank you for sharing your opinion on developing our business.",complaintLabel:"Complaint:",submitButton:"Send Complaint"}};function toggleLanguageMenu(){document.getElementById("languageMenu").classList.toggle("show")}function changeLanguage(e){const t=languageData[e];document.getElementById("formTitle").textContent=t.formTitle,document.getElementById("complaintLabel").textContent=t.complaintLabel,document.getElementById("submitButton").textContent=t.submitButton,toggleLanguageMenu()}document.getElementById("complaintForm").addEventListener("submit",function(e){e.preventDefault();const t={content:document.getElementById("complaint").value};fetch("/home/add-compliant",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content},body:JSON.stringify(t)}).then(e=>e.json()).then(e=>{e.success?(alert("تم إرسال الشكوى بنجاح!"),document.getElementById("complaintForm").reset()):alert("حدث خطأ أثناء إرسال الشكوى. يرجى المحاولة مرة أخرى.")}).catch(e=>{console.error("Error:",e),alert("حدث خطأ أثناء إرسال الشكوى. يرجى المحاولة مرة أخرى.")})});

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
