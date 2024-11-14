<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>انشاء منشور جديد</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('siteasstes/css/createPost.css') }}">
    <link rel="stylesheet" href="{{ asset('emojionearea/emojionearea.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <div class="back-button">
        <button onclick="window.history.back()">
          <i class="fa fa-arrow-left"></i>
        </button>
    </div>

    <div class="createpost-container">
        <h2>إنشاء منشور جديد</h2>
        <div class="createpost-content">
            <!-- قسم رفع الصور -->
            <div class="upload-section">
                <label for="post-image" class="upload-label">
                    <!-- يمكنك استخدام صورة مخصصة أو أيقونة هنا -->
                    <img src="{{ asset("mainassets/img/upload.png") }}" alt="رفع الصور" class="upload-icon">
                </label>
                <input type="file" id="post-image" multiple style="display: none;">
            </div>

            <!-- قسم التفاصيل -->
            <div class="details-section">
                <label for="post-title">العنوان:</label>
                <input class="emojionearea" type="text" id="post-title" placeholder="أدخل عنوان المنشور">

                <label for="post-description">الوصف:</label>
                <textarea class="emojionearea" id="post-description" placeholder="أدخل وصف المنشور"></textarea>

                <label for="post-category">الأقسام:</label>
                <select id="post-category">
                    <option value="category1">القسم 1</option>
                    <option value="category2">القسم 2</option>
                    <option value="category3">القسم 3</option>
                    <!-- أضف المزيد من الأقسام حسب الحاجة -->
                </select>
            </div>
        </div>
        <div class="button-container">
            <button class="send-btn"><i class="fa fa-paper-plane">
            </i>         نشر  </button>
        </div>
    </div>

    <script src="{{ asset('emojionearea/emojionearea.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".emojionearea").emojioneArea();
        });
    </script>
</body>

</html>