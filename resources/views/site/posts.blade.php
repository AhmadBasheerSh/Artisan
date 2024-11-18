<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة منشورات</title>
    <link rel="stylesheet" href="{{ asset('siteasstes/css/posts.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    


</head>
<body>
    <!-- الشريط العلوي -->
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
                <div class="close-btn" onclick="toggleNotifications()">إغلاق</div>
            </div>

            <!-- قائمة الرسائل -->
            <div class="messages-dropdown" id="messagesDropdown">
                <div class="message-item">رسالة 1: مرحبا، كيف حالك؟</div>
                <div class="message-item">رسالة 2: لديك طلب جديد</div>
                <div class="message-item">رسالة 3: شكراً لك على مساهمتك</div>
                <div class="message-item">رسالة 4: هل تريد الانضمام إلى المجموعة؟</div>
                <div class="message-item">رسالة 5: تم تحديث حسابك بنجاح</div>
                <div class="close-btn" onclick="toggleMessages()">إغلاق</div>
            </div>

            <!-- قائمة المستخدم -->
            <div class="user-dropdown" id="userDropdown">
                <div class="user-info">الاسم: المستخدم</div>
                <div class="user-info">البريد الإلكتروني: user@example.com</div>
                <div class="close-btn" onclick="toggleUserMenu()">إغلاق</div>
            </div>
        </div>
    </nav>

    <!-- معرض الصور -->
    <div class="gallery">
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/c52bb25cf9e60cf6ecaa000b385afe88.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/a7a975e4dcdb1e564df406e02f04a0cd.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/6b42776ef1760bd7f2246b749d68b325.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/53fd0c5ecee81c18ad4ea8fa99905a9d.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/download.jpeg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/photo_2024-11-17_19-05-13.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/30278815c4bfb8e219f3f17da5e868e7.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/7532a665f8f58a2add8d130ada2f1eff.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/edb276076fdfdf90d443f3ade310acb1.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/6f5cebbfd673495c85824163559843e0.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/b82bb23d53376955c435d8e6104d8253.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{asset('mainassets/img/a8f0c32c25dbd2fdac1d83d6758de4d9.jpg')}}" alt="صورة 1">
            <div class="caption">
                <a href="#">اسم الناشر 1</a>
                <p>وصف للصورة 1</p>
            </div>
            <div class="actions">
                <a href="#" title="إعجاب"><i class="fa fa-thumbs-up"></i></a>
                <a href="#" title="تعليق"><i class="fa fa-comment"></i></a>
                <a href="#" title="حفظ المنشور"><i class="fa fa-bookmark"></i></a>
                <a href="#" title="مشاركة"><i class="fa fa-share"></i></a>
            </div>
        </div>
        <!-- تكرار العناصر الأخرى مع أيقونات الإجراءات أسفل كل صورة -->
    </div>


    <div class="post-section">
        <div class="post-item">
            <div class="post-header">
                <img src="{{asset('mainassets/img/abed.JPG')}}" alt="صورة الناشر" class="author-img">
                <a href="#" class="author-name">اسم الناشر</a>
            </div>
            <div class="post-content">
                <p>هذا هو المنشور الذي يكتبه الناشر، يمكنك وضع النصوص هنا.</p>
            </div>
            <div class="post-actions">
                <button class="like-btn">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="like-count">0</span>
                </button>
                <button class="comment-btn">
                    <i class="fa fa-comment"></i>
                    <span class="comment-count">0</span>
                </button>
                <button class="share-btn">
                    <i class="fa fa-share"></i>
                    مشاركة
                </button>
            </div>
            <div class="comments-section">
                <textarea placeholder="اكتب تعليقك هنا..." class="comment-box"></textarea>
                <button class="submit-comment">إرسال</button>
                <ul class="comments-list"></ul>
            </div>

        </div>
        <div class="post-item">
            <div class="post-header">
                <img src="{{asset('mainassets/img/abed.JPG')}}" alt="صورة الناشر" class="author-img">
                <a href="#" class="author-name">اسم الناشر</a>
            </div>
            <div class="post-content">
                <p>هذا هو المنشور الذي يكتبه الناشر، يمكنك وضع النصوص هنا.</p>
            </div>
            <div class="post-actions">
                <button class="like-btn">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="like-count">0</span>
                </button>
                <button class="comment-btn">
                    <i class="fa fa-comment"></i>
                    <span class="comment-count">0</span>
                </button>
                <button class="share-btn">
                    <i class="fa fa-share"></i>
                    مشاركة
                </button>
            </div>
            <div class="comments-section">
                <textarea placeholder="اكتب تعليقك هنا..." class="comment-box"></textarea>
                <button class="submit-comment">إرسال</button>
                <ul class="comments-list"></ul>
            </div>

        </div>
        <div class="post-item">
            <div class="post-header">
                <img src="{{asset('mainassets/img/abed.JPG')}}" alt="صورة الناشر" class="author-img">
                <a href="#" class="author-name">اسم الناشر</a>
            </div>
            <div class="post-content">
                <p>هذا هو المنشور الذي يكتبه الناشر، يمكنك وضع النصوص هنا.</p>
            </div>
            <div class="post-actions">
                <button class="like-btn">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="like-count">0</span>
                </button>
                <button class="comment-btn">
                    <i class="fa fa-comment"></i>
                    <span class="comment-count">0</span>
                </button>
                <button class="share-btn">
                    <i class="fa fa-share"></i>
                    مشاركة
                </button>
            </div>
            <div class="comments-section">
                <textarea placeholder="اكتب تعليقك هنا..." class="comment-box"></textarea>
                <button class="submit-comment">إرسال</button>
                <ul class="comments-list"></ul>
            </div>

        </div>
    </div>

    <button class="next-page-btn">الصفحة التالية</button>


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

        // تفاعل مع زر الإعجاب
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', () => {
                const countSpan = button.querySelector('.like-count');
                let count = parseInt(countSpan.textContent, 10);
                count++;
                countSpan.textContent = count;
            });
        });

        // تفاعل مع زر التعليق
        document.querySelectorAll('.submit-comment').forEach(button => {
            button.addEventListener('click', (e) => {
                const postItem = e.target.closest('.post-item');
                const commentBox = postItem.querySelector('.comment-box');
                const commentList = postItem.querySelector('.comments-list');
                const commentCountSpan = postItem.querySelector('.comment-count');

                if (commentBox.value.trim() !== '') {
                    const newComment = document.createElement('li');
                    newComment.textContent = commentBox.value;
                    commentList.appendChild(newComment);

                    // تحديث عدد التعليقات
                    let commentCount = parseInt(commentCountSpan.textContent, 10);
                    commentCount++;
                    commentCountSpan.textContent = commentCount;

                    // تفريغ خانة النص
                    commentBox.value = '';
                }
            });
        });

        // تفاعل مع زر المشاركة
        document.querySelectorAll('.share-btn').forEach(button => {
            button.addEventListener('click', () => {
                alert('تمت مشاركة المنشور!');
            });
        });

        // تفاعل مع زر الإعجاب
        // document.querySelectorAll('.like-btn').forEach(button => {
        //     button.addEventListener('click', () => {
        //         const countSpan = button.querySelector('.like-count');
        //         let count = parseInt(countSpan.textContent, 10);
        //         count++;
        //         countSpan.textContent = count;
        //     });
        // });


        // تفاعل مع زر المشاركة
        document.querySelectorAll('.share-btn').forEach(button => {
            button.addEventListener('click', () => {
                alert('تمت مشاركة المنشور!');
            });
        });
    </script>
</body>

</html>
