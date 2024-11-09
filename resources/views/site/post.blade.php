<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منشور</title>
    <link rel="stylesheet" href="{{ asset('siteasstes/css/post.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <div class="back-button">
        <button onclick="window.history.back()">
          <i class="fa fa-arrow-left"></i>
        </button>
    </div>

    <div class="post-container">
        <div class="post-image">
          <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="Post Image">
        </div>
        <div class="post-details">
          <h2>Post Title</h2>
          <div class="author-info">
            <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="Author">
            <span>Author Name</span>
            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
        </div>
          <div class="post-actions">
            <div>
                <i class="fa fa-heart" style="color: red;"></i> <!-- أيقونة القلب -->
                <span class="like-count">125</span> <!-- عدد الإعجابات -->
            </div>
            <button>Save</button>
            <button>Share</button>
          </div>
          <p class="post-description">Description of the post goes here.</p>
        </div>
        <div class="comments-section">
          <h3>التعليقات</h3>

          <!-- مثال على تعليق -->
            <div class="comment">
                <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
                <div class="comment-content">
                    <span class="username">Ahmad Basheer</span>
                    <span class="comment-time">منذ 5 دقائق</span>
                    <p class="comment-text">هذا هو نص التعليق.</p>
                </div>
            </div>
            <div class="comment">
                <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
                <div class="comment-content">
                    <span class="username">Ahmad Basheer</span>
                    <span class="comment-time">منذ 5 دقائق</span>
                    <p class="comment-text">هذا هو نص التعليق.</p>
                </div>
            </div>
            <div class="comment">
                <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar">
                <div class="comment-content">
                    <span class="username">Ahmad Basheer</span>
                    <span class="comment-time">منذ 5 دقائق</span>
                    <p class="comment-text">هذا هو نص التعليق.</p>
                </div>
            </div>
          {{-- <div class="comment">
            <span>User</span>
            <p>This is a comment.</p>
          </div> --}}

            <div class="add-comment-section">
                    <img src="{{ asset('mainassets/img/main_1.jpeg') }}" alt="User Avatar" class="user-avatar"> <!-- صورة المستخدم -->
                    <input type="text" class="comment-input" placeholder="اكتب تعليق..." />
                    <button class="send-comment-button">
                        <i class="fa fa-paper-plane"></i> <!-- أيقونة الإرسال -->
                    </button>
            </div>
        </div>

      </div>

      <div class="posts-container">
            <div class="related-posts">
                <h3>منشورات مشابهة</h3>
                <!-- Add related posts here -->
            </div>
      </div>

</body>
</html>
