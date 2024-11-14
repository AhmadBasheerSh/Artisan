// document.addEventListener("DOMContentLoaded", function() {
//     // التعامل مع زر الإعجاب
//     document.querySelectorAll(".like-button").forEach(button => {
//         button.addEventListener("click", function() {
//             let likeCount = button.querySelector(".like-count");
//             let count = parseInt(likeCount.textContent, 10);
//             likeCount.textContent = count + 1; // زيادة عدد الإعجابات
//         });
//     });

    // التعامل مع زر الرد
//     document.querySelectorAll(".reply-button").forEach(button => {
//         button.addEventListener("click", function() {
//             const commentDiv = button.closest(".comment-content");
//             let replyInput = commentDiv.querySelector(".reply-input");

//             // إذا لم يكن هناك حقل رد موجود، قم بإنشائه
//             if (!replyInput) {
//                 replyInput = document.createElement("textarea");
//                 replyInput.className = "reply-input";
//                 replyInput.placeholder = "اكتب ردك هنا...";

//                 let submitReplyButton = document.createElement("button");
//                 submitReplyButton.textContent = "إرسال الرد";
//                 submitReplyButton.className = "submit-reply-button";

//                 commentDiv.querySelector(".replies").appendChild(replyInput);
//                 commentDiv.querySelector(".replies").appendChild(submitReplyButton);

//                 // إرسال الرد
//                 submitReplyButton.addEventListener("click", function() {
//                     let replyText = replyInput.value.trim();
//                     if (replyText) {
//                         let replyDiv = document.createElement("div");
//                         replyDiv.className = "reply";
//                         replyDiv.innerHTML = `<span class="username">اسم المستخدم</span>: ${replyText}`;
//                         commentDiv.querySelector(".replies").appendChild(replyDiv);
//                         replyInput.remove();
//                         submitReplyButton.remove();
//                     }
//                 });
//             }
//         });
//     });
// });


document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('postCarousel');
    const totalSlides = document.querySelectorAll('.carousel-item').length;
    const totalSlidesElement = document.getElementById('totalSlides');
    const currentSlideElement = document.getElementById('currentSlide');

    totalSlidesElement.textContent = totalSlides;

    // تحديث الرقم عند التبديل بين الصور
    carousel.addEventListener('slide.bs.carousel', function (event) {
        const currentSlide = event.to + 1;  // +1 لأن الفهرس يبدأ من 0
        currentSlideElement.textContent = currentSlide;
    });
});

function toggleReplies(button) {
    const replies = button.closest('.comment-content').querySelector('.replies');
    if (replies.style.display === 'none' || replies.style.display === '') {
        replies.style.display = 'block';
        button.textContent = 'إخفاء الردود';
    } else {
        replies.style.display = 'none';
        button.textContent = 'عرض الردود (1)';
    }
}
