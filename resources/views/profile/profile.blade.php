<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link rel="stylesheet" href="{{ asset('profileassets/css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-left">
            <h1 class="site-name">لمسات زخرفية</h1>
        </div>
        <div class="navbar-center">
            <form class="search-form">
                <input type="text" placeholder="ابحث هنا...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="navbar-right">
            <a href="#" class="nav-icon notification-icon" onclick="toggleNotifications()"><i
                    class="fa fa-bell"></i><span class="badge">3</span></a>
            <a href="#" class="nav-icon messages-icon" onclick="toggleMessages()"><i class="fa fa-envelope"></i><span
                    class="badge">5</span></a>
            <a href="#" class="nav-icon"><i class="fa fa-home"></i></a>
            <a href="#" class="nav-icon user-icon" onclick="toggleUserMenu()"><i class="fa fa-user"></i></a>

            <!-- قائمة الإشعارات -->
            <div class="notifications-dropdown" id="notificationsDropdown">
                <div class="notification-item">إشعار 1: تم إضافة منشور جديد</div>
                <div class="notification-item">إشعار 2: تمت الإعجاب بمنشورك</div>
                <div class="notification-item">إشعار 3: لديك تعليق جديد</div>

            </div>

            <!-- قائمة الرسائل -->
            <div class="messages-dropdown" id="messagesDropdown">
                <div class="message-item">رسالة 1: مرحبا، كيف حالك؟</div>
                <div class="message-item">رسالة 2: لديك طلب جديد</div>
                <div class="message-item">رسالة 3: شكراً لك على مساهمتك</div>
                <div class="message-item">رسالة 4: هل تريد الانضمام إلى المجموعة؟</div>
                <div class="message-item">رسالة 5: تم تحديث حسابك بنجاح</div>

            </div>

            <!-- قائمة المستخدم -->
            <div class="user-dropdown" id="userDropdown">
                <div class="user-info">الاسم: المستخدم</div>
                <div class="user-info">البريد الإلكتروني: user@example.com</div>

            </div>
        </div>
    </nav>


    <script>
    function toggleNotifications() {
        const dropdown = document.getElementById("notificationsDropdown");
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
    }

    function toggleUserMenu() {
        const userDropdown = document.getElementById("userDropdown");
        if (userDropdown.style.display === "none" || userDropdown.style.display === "") {
            userDropdown.style.display = "block";
        } else {
            userDropdown.style.display = "none";
        }
    }

    function toggleMessages() {
        const messagesDropdown = document.getElementById("messagesDropdown");
        if (messagesDropdown.style.display === "none" || messagesDropdown.style.display === "") {
            messagesDropdown.style.display = "block";
        } else {
            messagesDropdown.style.display = "none";
        }
    }
    </script>


    <div class="container">
        <div class="profile-header">
            <img src="{{asset('mainassets/img/abed.JPG')}}" alt="User Image" class="profile-image">
            <div class="profile-info">
                <h2>اسم المستخدم</h2>
                <p>وصف قصير عن المستخدم. يمكن أن يحتوي على معلومات عن الوظيفة أو الهوايات.</p>
            </div>
            <div class="profile-actions">
                <button><i class="fa fa-user-plus"></i> متابعة</button>
                <button><i class="fa fa-envelope"></i> <a
                        href="{{ url('conversations?receiver_id=').base64_encode(5) }}" class="massege-btn">
                        مراسلة</a></button>
                <button><i class="fa fa-pen"></i> كتابة منشور</button>
                <button><i class="fa fa-edit"></i> <a
                        href="{{route('profile.edit', ['profile' => auth()->user()->id])}}" class="follow-btn"> تعديل
                        الصفحة الشخصية </a></button>

            </div>
        </div>
        <div class="stats">
            <div class="stat-item">
                <h3>300</h3>
                <p><i class="fa fa-users"></i> المتابعين</p>
            </div>
            <div class="stat-item">
                <h3>45</h3>
                <p><i class="fa fa-file-alt"></i> المنشورات</p>
            </div>
            <div class="stat-item">
                <h3>120</h3>
                <p><i class="fa fa-thumbs-up"></i> الإعجابات</p>
            </div>
            <div class="stat-item">
                <h3>20</h3>
                <p><i class="fa fa-shopping-cart"></i> الطلبات</p>
            </div>
            <div class="stat-item">
                <h3>150</h3>
                <p><i class="fa fa-user-friends"></i> يتابع</p>
            </div>
        </div>
    </div>

    <div class="container" id="container2">
        <div class="section">
            <h2>القصة والأعمال <i class="fa fa-book"></i></h2>
            <p contenteditable=true>
                يعد هذا المستخدم من الأشخاص المميزين في مجاله. بدأ مشواره منذ سنوات طويلة، حيث عمل على تطوير
                نفسه واكتساب الخبرات في مختلف المجالات. من خلال أعماله المبتكرة، استطاع أن يجذب اهتمام العديد من
                المتابعين والعملاء. يركز دائمًا على الجودة والإبداع في كل ما يقدمه.
            </p>
        </div>
    </div>

    <div id="container5" class="container1">
        <div class="section1">
            <h2><i class="fa fa-trophy"></i> الأوسمة والإنجازات</h2>
            <ul contenteditable="true">
                <li>وسام الإبداع</li>
                <li>أفضل مصمم للعام</li>
                <li>شهادة احترافية في البرمجة</li>
            </ul>
        </div>
    </div>

    <div id="container7" class="container1">
        <div class="section1">
            <h2><i class="fa fa-share-alt"></i> السوشيال ميديا</h2>
            <p>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>

            </p>
        </div>
    </div>

    <div id="container6" class="container1">
        <div class="section1">
            <h2><i class="fa fa-star"></i> التقييمات</h2>
            <p>⭐⭐⭐⭐⭐ تقييم عام: ممتاز</p>
        </div>
    </div>

    <div class="container" id="container3">
        <div class="timeline">
            <h2>آخر المنشورات</h2>
            <div class="post">
                <h3>عنوان المنشور</h3>
                <p>محتوى المنشور يذهب هنا...</p>
                <div class="interactions">
                    <span><i class="fa fa-thumbs-up"></i> 10 إعجابات</span>
                    <span><i class="fa fa-comment"></i> 5 تعليقات</span>
                </div>
            </div>
            <div class="post">
                <h3>عنوان المنشور</h3>
                <p>محتوى المنشور يذهب هنا...</p>
                <div class="interactions">
                    <span><i class="fa fa-thumbs-up"></i> 8 إعجابات</span>
                    <span><i class="fa fa-comment"></i> 3 تعليقات</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="container4">
        <div class="gallery">
            <h2>معرض الصور</h2>
            <div class="gallery-grid">
                <img src="{{asset('mainassets/img/00228992aaee358292b2bbdf21b91ae4.jpg')}}" alt="صورة 1">
                <img src="{{asset('mainassets/img/1bc824873efc7693476b6ac886dd9ad9.jpg')}}" alt="صورة 1">
                <img src="{{asset('mainassets/img/f09a8c0b30fdbc59d57959c15c10fca6.jpg')}}" alt="صورة 1">
                <img src="{{asset('mainassets/img/e1f6c999fcab91e567948c8930d09f4f.jpg')}}" alt="صورة 1">
            </div>
        </div>
    </div>

</body>

</html>