document.addEventListener("DOMContentLoaded", function() {
    // التعامل مع زر الإعجاب
    document.querySelectorAll(".like-button").forEach(button => {
        button.addEventListener("click", function() {
            let likeCount = button.querySelector(".like-count");
            let count = parseInt(likeCount.textContent, 10);
            likeCount.textContent = count + 1; // زيادة عدد الإعجابات
        });
    });

    // التعامل مع زر الرد
    document.querySelectorAll(".reply-button").forEach(button => {
        button.addEventListener("click", function() {
            const commentDiv = button.closest(".comment-content");
            let replyInput = commentDiv.querySelector(".reply-input");

            // إذا لم يكن هناك حقل رد موجود، قم بإنشائه
            if (!replyInput) {
                replyInput = document.createElement("textarea");
                replyInput.className = "reply-input";
                replyInput.placeholder = "اكتب ردك هنا...";

                let submitReplyButton = document.createElement("button");
                submitReplyButton.textContent = "إرسال الرد";
                submitReplyButton.className = "submit-reply-button";

                commentDiv.querySelector(".replies").appendChild(replyInput);
                commentDiv.querySelector(".replies").appendChild(submitReplyButton);

                // إرسال الرد
                submitReplyButton.addEventListener("click", function() {
                    let replyText = replyInput.value.trim();
                    if (replyText) {
                        let replyDiv = document.createElement("div");
                        replyDiv.className = "reply";
                        replyDiv.innerHTML = `<span class="username">اسم المستخدم</span>: ${replyText}`;
                        commentDiv.querySelector(".replies").appendChild(replyDiv);
                        replyInput.remove();
                        submitReplyButton.remove();
                    }
                });
            }
        });
    });
});
