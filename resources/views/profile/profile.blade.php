<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link rel="stylesheet" href="{{ asset('profileassets/css/profile.css') }}">
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

    <div class="profile-container">
        <!-- Header Section -->
        <div class="profile-header">
            <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="Profile Picture" class="profile-picture">
            <div class="profile-info">
                <h1 class="profile-name">Ahmad Basheer</h1>
                <p class="profile-bio"><i class="fa-sharp fa-solid fa-tags"></i>Designer | Photographer | Traveler</p>
                <p class="profile-bio"><i class="fa-sharp fa-solid fa-envelope"></i>ahmadb@gmail.com</p>
                <p class="profile-bio"><i class="fa-sharp fa-solid fa-building"></i>Gaza, palestine</p>
                <p class="profile-bio"><i class="fa-sharp fa-solid fa-calendar"></i>15/8/2001</p>
            </div>
            <div class="buttons">
                <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                <a href="{{ url('conversations?receiver_id=').base64_encode(3) }}" class="massege-btn"><i class="fa-sharp fa-solid fa-paper-plane"></i>  مراسلة</a>
                <button class="post-btn"><i class="fa-sharp fa-solid fa-pen"></i>  كتابة منشور</button>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="profile-stats">

            <div id="openFollowersModal" class="stat-item">
                <i class="stat-icon fa-sharp fa-solid fa-user-friends" style="color: blue;"></i>
                <strong>250</strong>
                <span>متابع</span>
            </div>
            <div id="followersModal" class="modal">
                <div class="modal-content">
                    <span id="closeFollowersModal" class="close-button">&times;</span>
                    <h2>المتابعون (25)</h2>
                    <ul class="followers-list">
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <!-- أضف المزيد من المتابعين حسب الحاجة -->
                    </ul>
                </div>
            </div>


            <div id="openFollowsModal" class="stat-item">
                <i class="stat-icon fa-sharp fa-solid fa-eye" style="color: #00bcd4;"></i>
                <strong>150</strong>
                <span>يتابع</span>
            </div>
            <div id="followsModal" class="modal">
                <div class="modal-content">
                    <span id="closeFollowsModal" class="close-button">&times;</span>
                    <h2>تتابع (63)</h2>
                    <ul class="followers-list">
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <div class="follow-item">
                            <div class="user-info">
                                <img src="{{ asset('mainassets/img/ahmad.jpg') }}" alt="User Image" class="user-image">
                                <div class="user-details">
                                    <p class="username">اسم المستخدم</p>
                                    <p class="num-followers">15 متابع</p>
                                </div>
                            </div>
                            <button class="follow-btn"><i class="fa-sharp fa-solid fa-user-plus"></i>        متابعة  </button>
                        </div>
                        <!-- أضف المزيد من المتابعين حسب الحاجة -->
                    </ul>
                </div>
            </div>


            <div class="stat-item">
                <i class="stat-icon fa-sharp fa-solid fa-heart" style="color: red;"></i>
                <strong>150</strong>
                <span>اعجاب</span>
            </div>
            <div class="stat-item">
                <i class="stat-icon fa-sharp fa-solid fa-file-alt" style="color: #ff9800;"></i>
                <strong>320</strong>
                <span>منشور</span>
            </div>
            <div class="stat-item">
                <i class="stat-icon fa-sharp fa-solid fa-shopping-bag" style="color: #ff6600;"></i>
                <strong>3</strong>
                <span>الطلبات</span>
            </div>
        </div>

        <div class="profile-story">
            <h2><i class="fa-sharp fa-solid fa-book" style="color: green"></i>  القصة وأعمالي</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cum omnis, laudantium quas mollitia, neque praesentium facere quis, repellat harum quidem asperiores? Laboriosam alias nulla quibusdam impedit ratione aut. Perspiciatis nostrum consequuntur quo reprehenderit ad provident cum deserunt? Totam libero eos nesciunt quasi praesentium, quaerat reiciendis. Ipsa vel commodi natus sapiente omnis repudiandae voluptatem reiciendis blanditiis. Laboriosam similique perspiciatis modi nostrum mollitia. Accusamus alias quos sapiente deleniti maxime aliquid officiis numquam natus totam dignissimos ipsum odio, voluptatem sed porro? Rem in nesciunt dolores numquam recusandae temporibus fugiat. Atque sit omnis enim? Vero minima voluptatibus dolor nulla perspiciatis accusamus aspernatur deserunt ab eaque quis fuga consequuntur, esse error id accusantium autem numquam facilis adipisci sequi quia assumenda debitis officia. Reiciendis optio quos quo error. Nulla iusto recusandae animi provident voluptates? Nam magnam nobis consequatur fugiat voluptatibus labore minima quibusdam cupiditate veritatis explicabo velit, eaque quae ipsam veniam consequuntur. Dolorem, dolor voluptas?</p>
        </div>
        <!-- Image Grid Section -->
        <div class="image-grid">
            <h2>المنشورات</h2>
            <div class="grid-item"><img src="{{ asset('mainassets/img/d1.jpg') }}" alt="Pin Image"></div>
            <div class="grid-item"><img src="{{ asset('mainassets/img/d1.jpg') }}" alt="Pin Image"></div>
            <div class="grid-item"><img src="{{ asset('mainassets/img/d1.jpg') }}" alt="Pin Image"></div>
            <div class="grid-item"><img src="image4.jpg" alt="Pin Image"></div>
            <div class="grid-item"><img src="image5.jpg" alt="Pin Image"></div>
            <div class="grid-item"><img src="image6.jpg" alt="Pin Image"></div>
        </div>
    </div>

    <script src="{{ asset('profileassets/js/profile.js') }}"></script>
</body>
</html>
