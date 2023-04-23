<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['userId']) || $_SESSION['userId'] == '') {
        header("Location: ./login.php");
    }
?>

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
        <header class="masthead" style="background-image: url('assets/img/201602171355-Reissue-dessert-anguk-02.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Dessert</h1>
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
                    <div>
                        <form action="myLogin/search_result.php" method="get">
                            <select name="catgo">
                                <option value="name">이름</option>
                                <option value="description">장소</option>
                            </select>
                            <input type="text" name="search" size="40"/> <button>Search</button>
                        </form>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <!-- Pager-->
                    </div>
                    <div class="post-preview">
                    <form action="./iolist.php" method="post">
                        <a href="https://www.instagram.com/aus_mehl/?hl=ko">
                            <h2 class="post-title">1. 아우스밀</h2>
                            <input type="hidden" name="sname" value="아우스밀">
                            <h3 class="post-subtitle">광주광역시 동구 동명로25번길 4-1</h3>
                            <input type="hidden" name="address" value="광주광역시 동구 동명로25번길 4-1">
                            <input type="hidden" name="link" value="https://www.instagram.com/aus_mehl/?hl=ko">
                        </a>
                        <p class="post-meta">
                            Add to My
                            <input type="submit" value="List" style="background-color:transparent;">
                        </p>
                        <!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1640505583108" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1640505583108",
		"key" : "28kzq",
		"mapWidth" : "640",
		"mapHeight" : "360"
	}).render();
</script>
                    </form>
                    </div>
                    <!-- Divider -->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                    <form action="./iolist.php" method="post">
                        <a href="https://www.instagram.com/thecoboc_24/">
                            <h2 class="post-title">2. 더커볶</h2>
                            <input type="hidden" name="sname" value="더커볶">
                            <h3 class="post-subtitle">광주광역시 서구 치평동 1202-2</h3>
                            <input type="hidden" name="address" value="광주광역시 서구 치평동 1202-2">
                            <input type="hidden" name="link" value="https://www.instagram.com/thecoboc_24/">
                        </a>
                        <p class="post-meta">
                            Add to My
                            <input type="submit" value="List" style="background-color:transparent;">
                        </p>
                        <!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1640506464797" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1640506464797",
		"key" : "28kzr",
		"mapWidth" : "640",
		"mapHeight" : "360"
	}).render();
</script>
                    </form>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                    <form action="./iolist.php" method="post">
                        <a href="https://www.instagram.com/onhwa_cafe/?hl=ko">
                            <h2 class="post-title">3. 카페온화</h2>
                            <input type="hidden" name="sname" value="카페온화">
                            <h3 class="post-subtitle">광주광역시 동구 동계천로 151-31</h3>
                            <input type="hidden" name="address" value="광주광역시 동구 동계천로 151-31">
                            <input type="hidden" name="link" value="https://www.instagram.com/onhwa_cafe/?hl=ko">
                        </a>
                        <p class="post-meta">
                            Add to My
                            <input type="submit" value="List" style="background-color:transparent;">
                        </p>
                        <!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1640506527431" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1640506527431",
		"key" : "28kzs",
		"mapWidth" : "640",
		"mapHeight" : "360"
	}).render();
</script>
                    </form>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                    <form action="./iolist.php" method="post">
                        <a href="https://gramho.com/explore-hashtag/%EC%B9%B4%ED%8E%98%EC%BD%94%EB%B0%9C%ED%8A%B8">
                            <h2 class="post-title">4. 코발트</h2>
                            <input type="hidden" name="sname" value="코발트">
                            <h3 class="post-subtitle">광주광역시 동구 동명동 73-18</h3>
                            <input type="hidden" name="address" value="광주광역시 동구 동명동 73-18">
                            <input type="hidden" name="link" value="https://gramho.com/explore-hashtag/%EC%B9%B4%ED%8E%98%EC%BD%94%EB%B0%9C%ED%8A%B8">
                        </a>
                        <p class="post-meta">
                            Add to My
                            <input type="submit" value="List" style="background-color:transparent;">
                        </p>
                        <!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1640506580075" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1640506580075",
		"key" : "28kzu",
		"mapWidth" : "640",
		"mapHeight" : "360"
	}).render();
</script>
                    </form>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
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
