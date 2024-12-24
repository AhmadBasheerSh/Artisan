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
    @livewireStyles
</head>

<body>

    <div class="back-button">
        <button onclick="window.history.back()">
            <i class="fa fa-arrow-left"></i>
        </button>
    </div>

    <div class="post-container">

        {{-- صور المنشور --}}
        @include('site.post._images')

        {{-- post details --}}
        @include('site.post._details')

        <!-- التعليقات -->
        <div class="comments-section">

            @livewire('comments', ['post' => $post])

            {{-- اضافة وتعديل تعليق --}}
            @livewire('comment-form', ['post' => $post])

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

    @livewireScripts
</body>

</html>
