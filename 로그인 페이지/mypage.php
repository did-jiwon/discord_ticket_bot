<!-- <!DOCTYPE html>
<html>
    <head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
    <body>
        <div class="container">
            <div class="row m-5 justify-content-center">
                <div class="col-md-6">
					<a href="./member-edit.php">정보수정</a>
                    <a href="./logout.php">로그아웃</a>
					<a href="./member-leave.php">회원탈퇴</a>
				</div>
            </div>
        </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dessert Blog</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="http://127.0.0.1/로그인 페이지/member.php">Dessert Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1/로그인 페이지/member.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1/로그인 페이지/mypage.php">MyPage</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1/로그인 페이지/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/201602171355-Reissue-dessert-anguk-01.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>MyPage</h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <!-- <div class="content-section-heading text-center">
                    <h2 class="mb-5">My Page</h2>
                </div> -->
                <div class="row gx-0">
                    <hr class="my-4" />
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="http://127.0.0.1/%EB%A1%9C%EA%B7%B8%EC%9D%B8%20%ED%8E%98%EC%9D%B4%EC%A7%80/mylist.php">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">MyList</div>
                                    <p class="mb-0">You can see the list you like!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="http://127.0.0.1/%EB%A1%9C%EA%B7%B8%EC%9D%B8%20%ED%8E%98%EC%9D%B4%EC%A7%80/logout.php">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Logout</div>
                                    <p class="mb-0">Are you sure you want to log out?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="http://127.0.0.1/%EB%A1%9C%EA%B7%B8%EC%9D%B8%20%ED%8E%98%EC%9D%B4%EC%A7%80/member-leave.php">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Delete Account</div>
                                    <p class="mb-0">You'd better think again.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="http://127.0.0.1/%EB%A1%9C%EA%B7%B8%EC%9D%B8%20%ED%8E%98%EC%9D%B4%EC%A7%80/member-edit.php">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Modify Information</div>
                                    <p class="mb-0">You can modify the member information.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <hr class="my-4" />
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Enjoy Your Dessert</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
