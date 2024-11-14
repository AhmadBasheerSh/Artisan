<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Clone | Korsat X Parmaga</title>

    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('conversationassets/style.css') }}">
</head>

<body>
    <div class="container">
        <!-- ========= left side ========== -->
        <div class="left-side">
            <div class="header">
                <div class="user-imgBx">
                    <img src="{{ asset('conversationassets/imgs/img0.jpg') }}" alt="">
                </div>

                <ul class="nav-icons">
                    <li>
                        <ion-icon name="scan-circle-outline"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="chatbox"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="ellipsis-vertical"></ion-icon>
                    </li>
                </ul>
            </div>

            <div class="search-chat">
                <input type="text" placeholder="Search or start new chat">
                <ion-icon name="search-outline"></ion-icon>
            </div>

            <div class="chat-list">
                <div class="chat active">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img1.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Muhammed Ali</h4>
                            <span class="time">10:57</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                How to Make WhatsApp clone using html and css only
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img2.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Ahmed Samy</h4>
                            <span class="time">09:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num unread">1</b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img3.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Emad Sameer</h4>
                            <span class="time">09:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube also i found you on facebook
                            </p>
                            <b class="num unread">3</b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">conversationassets
                        <img src="{{ asset('conversationassets/imgs/img4.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Mazen Ashraf</h4>
                            <span class="time">09:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num unread">2</b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img5.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Amr Shaheen</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img6.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Moaaz Ahmed</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <!-- repeat last three 2X -->
                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img4.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Mazen Ashraf</h4>
                            <span class="time">09:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img5.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Amr Shaheen</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img6.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Moaaz Ahmed</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img4.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Mazen Ashraf</h4>
                            <span class="time">09:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img5.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Amr Shaheen</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="imgBx">
                        <img src="{{ asset('conversationassets/imgs/img6.jpg') }}" alt="">
                    </div>

                    <div class="details">
                        <div class="head">
                            <h4 class="name">Moaaz Ahmed</h4>
                            <span class="time">05:25</span>
                        </div>

                        <div class="msgs">
                            <p class="msg">
                                Hi, i found you on youtube
                            </p>
                            <b class="num"></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========= right side ========== -->
        <div class="right-side">
            <div class="header">
                <div class="user-details">
                    <div class="user-imgBx">
                        <img src="{{ asset('conversation/imgs/img1.jpg') }}" alt="">
                    </div>

                    <h4>Muhammed Ali <br>
                        <span>Online</span>
                    </h4>
                </div>

                <ul class="nav-icons">
                    <li>
                        <ion-icon name="search-outline"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="ellipsis-vertical"></ion-icon>
                    </li>
                </ul>
            </div>

            <div class="chatBx">
                <div class="msg msg-me">
                    <p>Hi <br> <span>12:15</span></p>
                </div>
                <div class="msg msg-frnd">
                    <p>Hello <br> <span>12:15</span></p>
                </div>

                <!-- repeat 8X  -->
                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora. <br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> <span>12:15</span></p>
                </div>

                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt error, similique voluptatem
                        mollitia illo totam? <br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptate ipsam blanditiis! <br>
                        <span>12:15</span>
                    </p>
                </div>

                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat modi praesentium
                        exercitationem reiciendis repudiandae velit eum harum maxime voluptatum.<br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, accusamus recusandae iusto
                        inventore esse quae. <br>
                        <span>12:15</span>
                    </p>
                </div>

                <div class="msg msg-me">
                    <p>Ok <br> <span>12:15</span></p>
                </div>
                <div class="msg msg-frnd">
                    <p>Thank You <br> <span>12:15</span></p>
                </div>

                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora. <br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> <span>12:15</span></p>
                </div>

                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt error, similique voluptatem
                        mollitia illo totam? <br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptate ipsam blanditiis! <br>
                        <span>12:15</span>
                    </p>
                </div>

                <div class="msg msg-me">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat modi praesentium
                        exercitationem reiciendis repudiandae velit eum harum maxime voluptatum.<br>
                        <span>12:15</span>
                    </p>
                </div>
                <div class="msg msg-frnd">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, accusamus recusandae iusto
                        inventore esse quae. <br>
                        <span>12:15</span>
                    </p>
                </div>
            </div>

            <div class="chat-input">
                <ion-icon name="happy-outline"></ion-icon>
                <ion-icon name="attach-outline"></ion-icon>
                <input type="text" placeholder="Type a messsage">
                <ion-icon name="mic-outline"></ion-icon>
            </div>
        </div>
    </div>


    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
