<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['userId']) || $_SESSION['userId'] == '') {
        header("Location: ./login.php");
    }
?>

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
        <header class="masthead" style="background-image: url('assets/img/2021021513333676253_1613363616.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>MyList</h1>
                          <span class="subheading">Don't eat before you take a picture</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <!-- 내가 쓴 코드 -->
                    <?php
                        $conn = mysqli_connect("localhost", "root", "111111", "opentutorials"); // localhost -> 내 컴퓨터
                        $sql = "SELECT * FROM jjim";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="post-preview">
                                <a href="<?php echo $row["link"]?>">
                                    <h2 class="post-title"><?php echo $row["name"]; ?></h2>
                                    <h3 class="post-subtitle"><?php echo $row["description"]; ?></h3>
                                </a>
                                <p class="post-meta">
                                    <form action="./list-delete.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                        <input type="submit" value="Delete" style="background-color:transparent;">
                                    </form>
                                </p>
                            </div>
                            <hr class="my-4" />
                        <?php
                            }
                        } else {
                        ?>
                            <div class="post-preview">
                                <h2 class="post-title"><?php echo "아직 찜한 리스트가 없습니다."; ?></h2>
                                <hr class="my-4" />
                            </div>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    <!-- <div class="post-preview">
                    <form action="./iolist.php" method="post">
                        <a href="post.html">
                            <h2 class="post-title">1. 아우스밀</h2>
                            <input type="hidden" name="sname" value="아우스밀">
                            <h3 class="post-subtitle">광주광역시 동구 동명로25번길 4-1</h3>
                            <input type="hidden" name="address" value="광주광역시 동구 동명로25번길 4-1">
                        </a>
                        <p class="post-meta">
                            Add to My
                            <input type="submit" value="List" style="background-color:transparent;">
                        </p>
                    </form>
                    </div> -->
                    <!-- Divider -->
                    <!-- Pager-->
                    <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> -->
                </div>
            </div>
        </div>
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
