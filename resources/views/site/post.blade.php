<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منشور</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('siteasstes/css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('emojionearea/emojionearea.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <div class="back-button">
        <button onclick="window.history.back()">
          <i class="fa fa-arrow-left"></i>
        </button>
    </div>

    <div class="post-container">
        <div id="postCarousel" class="carousel slide post-image" data-bs-ride="carousel">
            <!-- نص العدد في الزاوية العلوية اليسرى -->
            <div class="carousel-counter">
                <span id="currentSlide">1</span> / <span id="totalSlides">3</span>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" class="d-block w-100" alt="Post Image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('mainassets/img/img3.jpg') }}" class="d-block w-100" alt="Post Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('mainassets/img/pexels-begmurganc-7838063.jpg') }}" class="d-block w-100" alt="Post Image 3">
                </div>
            </div>
            <!-- عناصر التحكم -->
            <button class="carousel-control-prev" type="button" data-bs-target="#postCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#postCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="post-details">
            <div class="author-info">
                <div class="author-info">
                    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="Author">
                    <div class="author-details">
                        <span class="author-name">Author Name</span>
                        <small class="post-time">منذ 9 سنوات</small>
                    </div>
                </div>
                <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus">
                    </i>        متابعة  </button>
        </div>
        <h2>عنوان المنشور</h2>
        <p class="post-description">Description of the post goes here.</p>
            <div class="post-actions">
                <div class="like-button">
                    <i class="fa fa-heart" style="color: red;"></i> <!-- أيقونة القلب -->
                    <span class="like-count">125</span> <!-- عدد الإعجابات -->
                </div>
                <button class="action-btn save-btn">
                    <i class="fa fa-bookmark"></i>
                </button>
                <button class="action-btn share-btn">
                    <i class="fa fa-share"></i>
                </button>
            </div>

        </div>
        <div class="comments-section">
          <h3>التعليقات (2)</h3>

          <!-- مثال على تعليق -->
          <div class="comment">
            <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
            <div class="comment-content">
                <div class="author-details">
                    <span class="author-name">Author Name</span>
                    <small class="post-time">منذ 3 دقائق</small>
                </div>
                <p class="comment-text">هذا هو نص التعليق.</p>
                <div class="comment-actions">
                    <button class="like-button">
                        <i class="fa fa-heart"></i> 3
                    </button>
                    <button class="reply-button">
                        <i class="fa fa-reply"></i> رد
                    </button>
                    <button class="toggle-replies-button" onclick="toggleReplies(this)">
                        عرض الردود (1)
                    </button>
                </div>

                <!-- قسم الردود -->
                <div class="replies" style="display: none;">
                    <!-- سيتم إضافة الردود هنا -->
                    <div class="reply">
                        <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
                        <div class="comment-content">
                            <div class="author-details">
                                <span class="re-author-name">Author Name</span>
                                <small class="post-time">منذ 3 دقائق</small>
                            </div>
                            <p class="reply-text">هذا هو نص التعليق.</p>
                            <div class="comment-actions">
                                <button class="like-button">
                                    <i class="fa fa-heart"></i> 1
                                </button>
                                <button class="reply-button">
                                    <i class="fa fa-reply"></i> رد
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="add-comment-section">
                    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar"> <!-- صورة المستخدم -->
                    <input type="text" class="comment-input emojionearea" placeholder="اكتب تعليق...">
                    <button class="send-comment-button">
                        <i class="fa fa-paper-plane"></i> <!-- أيقونة الإرسال -->
                    </button>
            </div>
        </div>

      </div>

      <div class="posts-container">
            <div class="related-posts">
                <h3>منشورات مشابهة</h3>

                <div class="related-post">
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
                </div>
            </div>
      </div>

    <script src="{{ asset('emojionearea/emojionearea.min.js') }}"></script>
    <script src="{{ asset('siteasstes/js/post.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".emojionearea").emojioneArea();
        });
    </script>
</body>
</html>
