<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة منشورات</title>
    <link rel="stylesheet" href="{{ asset('siteasstes/css/posts.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-left">
            <h1 class="site-name">لمسات زخرفية</h1>
        </div>
        <div class="navbar-center">
            <form class="search-form">
                <input type="text" placeholder="ابحث..." class="search-input">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="navbar-right">
            <a href="#" class="nav-icon"><i class="fa fa-bell"></i><span class="badge">3</span></a>
            <a href="#" class="nav-icon"><i class="fa fa-envelope"></i><span class="badge">5</span></a>
            <a href="#" class="nav-icon"><i class="fa fa-home"></i></a>
            <a href="#" class="nav-icon"><i class="fa fa-user"></i></a>
        </div>
    </nav>

    <!-- قسم المنشورات -->
    <div class="posts-container">
        <div class="post">
            <img src="{{ asset('mainassets/img/d1.jpg') }}" alt="Post Image" class="post_img">
            <div class="content">
                <div class="user-info">
                    <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                    <div class="user-details">
                        <p class="username">اسم المستخدم</p>
                        <p class="post-date">2024-11-04</p>
                    </div>
                </div>
                <p>هذا هو وصف قصير للمنشور الأول.</p>
            </div>
        </div>
        <div class="post">
            <img src="{{ asset('mainassets/img/d2.jpg') }}" alt="Post Image" class="post_img">
            <div class="content">
                <div class="user-info">
                    <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                    <div class="user-details">
                        <p class="username">اسم المستخدم</p>
                        <p class="post-date">2024-11-04</p>
                    </div>
                </div>
                <p>هذا هو وصف قصير للمنشور الأول.</p>
            </div>
        </div>
        <div class="post">
            <img src="{{ asset('mainassets/img/pexels-aboodi-12984939.jpg') }}" alt="Post Image" class="post_img">
            <div class="content">
                <div class="user-info">
                    <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                    <div class="user-details">
                        <p class="username">اسم المستخدم</p>
                        <p class="post-date">2024-11-04</p>
                    </div>
                </div>
                <p>هذا هو وصف قصير للمنشور الأول.</p>
            </div>
        </div>
        <div class="post">
            <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="Post Image" class="post_img">
            <div class="content">
                <div class="user-info">
                    <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                    <div class="user-details">
                        <p class="username">اسم المستخدم</p>
                        <p class="post-date">2024-11-04</p>
                    </div>
                </div>
                <p>هذا هو وصف قصير للمنشور الأول.</p>
            </div>
        </div>
        <div class="post">
            <img src="https://via.placeholder.com/250x200" alt="Post Image">
            <div class="content">
                <h3>عنوان المنشور 2</h3>
                <p>هذا هو وصف قصير للمنشور الثاني.</p>
            </div>
        </div>
        <div class="post">
            <img src="https://via.placeholder.com/250x200" alt="Post Image">
            <div class="content">
                <h3>عنوان المنشور 3</h3>
                <p>هذا هو وصف قصير للمنشور الثالث.</p>
            </div>
        </div>
        <div class="post">
            <img src="https://via.placeholder.com/250x200" alt="Post Image">
            <div class="content">
                <h3>عنوان المنشور 4</h3>
                <p>هذا هو وصف قصير للمنشور الرابع.</p>
            </div>
        </div>
        <div class="post">
            <img src="https://via.placeholder.com/250x200" alt="Post Image">
            <div class="content">
                <h3>عنوان المنشور 5</h3>
                <p>هذا هو وصف قصير للمنشور الخامس.</p>
            </div>
        </div>
        <div class="post">
            <img src="https://via.placeholder.com/250x200" alt="Post Image">
            <div class="content">
                <h3>عنوان المنشور 6</h3>
                <p>هذا هو وصف قصير للمنشور السادس.</p>
            </div>
        </div>
    </div>

</body>
</html>
