<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم شكوى</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300:400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
    <style>
        /* التصميم العام */
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: url('https://www.transparenttextures.com/patterns/honeycomb.png'),
                        linear-gradient(60deg, rgba(255, 193, 7, 1) 0%, rgba(255, 235, 59, 1) 100%);
            color: black;
        }

        /* الشريط العلوي */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        /* تنسيقات النموذج */
        .complaint-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .complaint-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .complaint-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .complaint-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            height: 150px;
            resize: vertical;
        }

        .complaint-form button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #FF6B6B, #FF8E8E);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .complaint-form button:hover {
            background: linear-gradient(45deg, #FF8E8E, #FF6B6B);
        }

        /* تنسيقات اللوغو */
        .logo {
            height: 60px;
            margin-left: auto;
            cursor: pointer;
        }

        /* أيقونات اللغة */
        .navbar-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar-icons i {
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .navbar-icons i:hover {
            color: #FFD700;
        }

        /* قائمة اللغة */
        .language-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 40px;
            background-color: #FFEB3B;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
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
            transition: background-color 0.3s ease;
        }

        .language-menu ul li:hover {
            background-color: #FFD700;
        }
    </style>
</head>
<body>
    <!-- الشريط العلوي -->
    <div class="navbar">
        <a href="{{ route('home') }}">
            <img src="/logo/hd_ed0eba713c8e77833d7901ab53956d88_67dd76321b474 (1).png" alt="Logo" class="logo">
        </a>
        <div class="center-text">
            <h1 id="pageTitle">𝓐𝓛_𝓕𝓘𝓡𝓓𝓐𝓦𝓐𝓢 </h1>
        </div>
        <!-- أيقونات اللغة -->
        <div class="navbar-icons">
            <i class="fas fa-globe" onclick="toggleLanguageMenu()"></i>
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
        <h2 id="formTitle"> Thank you for sharing your opinion on developing our business. </h2>
        <form id="complaintForm">
            <label for="complaint">𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓:</label>
            <textarea id="complaint" name="content" rows="5" required></textarea>
            <button type="submit">𝐒𝐄𝐍𝐃 𝐂𝐎𝐌𝐏𝐋𝐈𝐀𝐍𝐓</button>
        </form>
    </div>

    <script>
        // بيانات اللغة
        const languageData = {
            ar: {
                formTitle: "شكراً لمشاركتك رأيك في تطوير أعمالنا",
                complaintLabel: "الشكوى:",
                submitButton: "إرسال الشكوى",
            },
            en: {
                formTitle: "Thank you for sharing your opinion on developing our business.",
                complaintLabel: "Complaint:",
                submitButton: "Send Complaint",
            },
        };

        // وظيفة لإظهار/إخفاء قائمة اللغة
        function toggleLanguageMenu() {
            const languageMenu = document.getElementById('languageMenu');
            languageMenu.classList.toggle('show');
        }

        // وظيفة لتغيير اللغة
        function changeLanguage(lang) {
            const data = languageData[lang];
            document.getElementById('formTitle').textContent = data.formTitle;
            document.querySelector('label[for="complaint"]').textContent = data.complaintLabel;
            document.querySelector('#complaintForm button').textContent = data.submitButton;
            toggleLanguageMenu(); // إخفاء القائمة بعد التغيير
        }

        // إرسال النموذج باستخدام AJAX
        document.getElementById('complaintForm').addEventListener('submit', function (e) {
            e.preventDefault(); // منع إعادة تحميل الصفحة

            // جمع البيانات من النموذج
            const formData = {
                content: document.getElementById('complaint').value,
            };

            // إرسال البيانات إلى الخادم
            fetch('/home/add-compliant', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify(formData),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('تم إرسال الشكوى بنجاح!');
                    document.getElementById('complaintForm').reset(); // إعادة تعيين النموذج
                } else {
                    alert('حدث خطأ أثناء إرسال الشكوى. يرجى المحاولة مرة أخرى.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('حدث خطأ أثناء إرسال الشكوى. يرجى المحاولة مرة أخرى.');
            });
        });
    </script>
</body>
</html>