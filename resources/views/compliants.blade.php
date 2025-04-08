<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم شكوى</title>
    <link rel="icon" href="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" type="image/png">
    <!-- تحسينات تحميل الخطوط -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap"></noscript>
    <!-- تحسينات Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* التصميم العام مع ألوان الواجهة السابقة */
        :root {
            --primary-color: #8BC34A;
            --primary-dark: #689F38;
            --primary-light: #9CCC65;
            --secondary-color: #FFD700;
            --white: #FFFFFF;
            --black: #000000;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: url('/category.jpg') center/cover no-repeat fixed,
                        linear-gradient(60deg, rgba(139, 195, 74, 0.8) 0%, rgba(156, 204, 101, 0.8) 100%);
            background-blend-mode: overlay;
            color: var(--black);
            min-height: 100vh;
            line-height: 1.6;
        }

        /* الشريط العلوي */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            backdrop-filter: blur(5px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            height: 60px;
            width: auto;
            object-fit: contain;
            cursor: pointer;
            transition: transform 0.3s ease;
            filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.2));
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .center-text h1 {
            font-family: 'Times New Roman', serif;
            font-size: 1.5rem;
            color: var(--primary-dark);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        /* تنسيقات النموذج */
        .complaint-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .complaint-box {
            width: 100%;
            max-width: 600px;
            margin-bottom: 30px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            background: rgba(255, 255, 255, 0.95);
        }

        .thank-you-message {
            width: 100%;
            padding: 20px;
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            text-align: center;
            color: var(--white);
        }

        .thank-you-message h2 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: 400;
        }

        .complaint-form {
            width: 100%;
            padding: 25px;
        }

        .complaint-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: var(--primary-dark);
            font-size: 1rem;
        }

        .complaint-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid var(--primary-light);
            border-radius: var(--border-radius);
            font-size: 16px;
            height: 150px;
            resize: vertical;
            background-color: rgba(255, 255, 255, 0.8);
            transition: border-color 0.3s ease;
        }

        .complaint-form textarea:focus {
            outline: none;
            border-color: var(--primary-dark);
        }

        .complaint-form button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-color));
            border: none;
            border-radius: var(--border-radius);
            color: var(--white);
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }

        .complaint-form button:hover {
            background: linear-gradient(45deg, var(--primary-dark), var(--primary-light));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* معلومات التواصل */
        .contact-info {
            width: 100%;
            max-width: 600px;
            padding: 25px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
        }

        .contact-info h3 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .contact-info p {
            margin: 10px 0;
            font-size: 1rem;
            line-height: 1.6;
        }

        .contact-info p:nth-child(odd) {
            color: var(--primary-dark);
            font-weight: bold;
        }

        /* أيقونات اللغة */
        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
            position: relative;
        }

        .navbar-icons i {
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
            color: var(--primary-dark);
        }

        .navbar-icons i:hover {
            color: var(--primary-color);
        }

        /* قائمة اللغة */
        .language-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: var(--white);
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
            z-index: 1000;
            width: 150px;
        }

        .language-menu.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
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
            color: var(--primary-dark);
        }

        .language-menu ul li:hover {
            background-color: var(--primary-light);
            color: var(--white);
        }

        /* رسالة النجاح */
        .success-message {
            display: none;
            padding: 15px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: var(--border-radius);
        }

        /* تنسيقات للأجهزة المحمولة */
        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                padding: 10px;
            }

            .center-text h1 {
                font-size: 1.3rem;
                order: 1;
                width: 100%;
                text-align: center;
            }

            .logo {
                height: 50px;
            }

            .complaint-form,
            .contact-info,
            .thank-you-message {
                padding: 15px;
            }
        }

        /* تنسيقات للغة العربية */
        html[dir="rtl"] {
            direction: rtl;
        }

        html[dir="rtl"] .complaint-form textarea,
        html[dir="rtl"] .contact-info {
            text-align: right;
        }
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
                 height="60">
        </a>
        <div class="center-text">
            <h1 id="pageTitle">𝓟𝓐𝓡𝓐𝓓𝓘𝓢𝓔</h1>
        </div>
        <div class="navbar-icons">
            <i class="fas fa-globe" id="languageIcon" aria-label="Change language"></i>
            <div class="language-menu" id="languageMenu">
                <ul>
                    <li onclick="changeLanguage('ar')" aria-label="Arabic">العربية</li>
                    <li onclick="changeLanguage('en')" aria-label="English">English</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="complaint-container">
        <!-- نموذج تقديم الشكوى -->
        <div class="complaint-box">
            <div class="thank-you-message">
                <h2 id="formTitle">Thank you for sharing your opinion on developing our business.</h2>
            </div>
            <div class="complaint-form">
                <form id="complaintForm">
                    <label for="complaint" id="complaintLabel">𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓:</label>
                    <textarea id="complaint" name="content" rows="5" required aria-label="Complaint text area"></textarea>
                    <button type="submit" id="submitButton">𝐒𝐄𝐍𝐃 𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓</button>
                </form>
                <div class="success-message" id="successMessage"></div>
            </div>
        </div>

        <!-- معلومات التواصل -->
        <div class="contact-info">
            <h3 id="contactTitle">For direct contact</h3>
            <p id="mobileLabel">Mobile</p>
            <p>0933224056</p>

            <p id="salesHallLabel">Sales hall fixed number</p>
            <p>8811417</p>

            <p id="managementLabel">Management</p>
            <p>8845556</p>

            <p id="emailLabel">Email</p>
            <p>Paradise.int@outlook.com</p>
        </div>
    </div>

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                formTitle: "شكراً لمشاركتك رأيك في تطوير أعمالنا",
                complaintLabel: "الشكوى:",
                submitButton: "إرسال الشكوى",
                contactTitle: "للتواصل المباشر",
                mobileLabel: "الموبايل",
                salesHallLabel: "الرقم الثابت لصالة البيع",
                managementLabel: "الإدارة",
                emailLabel: "الإيميل",
                successMessage: "تم إرسال الشكوى بنجاح! شكراً لك"
            },
            en: {
                formTitle: "Thank you for sharing your opinion on developing our business.",
                complaintLabel: "Complaint:",
                submitButton: "Send Complaint",
                contactTitle: "For direct contact",
                mobileLabel: "Mobile",
                salesHallLabel: "Sales hall fixed number",
                managementLabel: "Management",
                emailLabel: "Email",
                successMessage: "Complaint submitted successfully! Thank you"
            },
        };

        // وظيفة لإظهار/إخفاء قائمة اللغة
        document.getElementById('languageIcon').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('languageMenu').classList.toggle('show');
        });

        // إغلاق القائمة عند النقر خارجها
        document.addEventListener('click', function(e) {
            const languageMenu = document.getElementById('languageMenu');
            const languageIcon = document.getElementById('languageIcon');

            if (!languageMenu.contains(e.target) && e.target !== languageIcon) {
                languageMenu.classList.remove('show');
            }
        });

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('formTitle').textContent = data.formTitle;
            document.getElementById('complaintLabel').textContent = data.complaintLabel;
            document.getElementById('submitButton').textContent = data.submitButton;
            document.getElementById('contactTitle').textContent = data.contactTitle;
            document.getElementById('mobileLabel').textContent = data.mobileLabel;
            document.getElementById('salesHallLabel').textContent = data.salesHallLabel;
            document.getElementById('managementLabel').textContent = data.managementLabel;
            document.getElementById('emailLabel').textContent = data.emailLabel;

            // تغيير اتجاه الصفحة للغة العربية
            if (lang === 'ar') {
                document.documentElement.dir = 'rtl';
                document.documentElement.lang = 'ar';
            } else {
                document.documentElement.dir = 'ltr';
                document.documentElement.lang = 'en';
            }

            document.getElementById('languageMenu').classList.remove('show');
        }

        // إرسال النموذج باستخدام AJAX
        document.getElementById('complaintForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = {
                content: form.content.value,
            };

            const submitButton = document.getElementById('submitButton');
            const originalButtonText = submitButton.textContent;

            // تغيير نص الزر أثناء الإرسال
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            fetch('/home/add-compliant', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify(formData),
            })
            .then(response => response.json())
            .then(data => {
                const successMessage = document.getElementById('successMessage');
                if (data.success) {
                    successMessage.textContent = languageData[document.documentElement.lang === 'ar' ? 'ar' : 'en'].successMessage;
                    successMessage.style.display = 'block';
                    successMessage.style.backgroundColor = '#4CAF50';
                    form.reset();

                    // إخفاء الرسالة بعد 5 ثواني
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                } else {
                    successMessage.textContent = data.message || 'Error submitting complaint';
                    successMessage.style.display = 'block';
                    successMessage.style.backgroundColor = '#f44336';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const successMessage = document.getElementById('successMessage');
                successMessage.textContent = 'Connection error. Please try again.';
                successMessage.style.display = 'block';
                successMessage.style.backgroundColor = '#f44336';
            })
            .finally(() => {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;
            });
        });
    </script>
</body>
</html>
