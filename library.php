<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/LogoSample_ByTailorBrands.jpg" type="image/x-icon">
    <title>JAPCOMICS | Officiel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id='preloder'>
        <div class='loader'></div>
    </div>

    <!-- Header Section Begin -->
    <header class='header'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-2'>
                    <div class='header__logo'>
                        <a style='color: rgb(255, 255, 255);' href='index.html'>
                            JAP<span style='color: red;'>COMICS</span>
                        </a>
                    </div>
                </div>
                <div class='col-lg-8'>
                    <div class='header__nav'>
                        <nav class='header__menu mobile-menu'>
                            <ul>
                                <li ><a href='../index.html'>Homepage</a></li>
                                <li><a>Browse <span class='arrow_carrot-down'></span></a>
                                    <ul class='dropdown'>
                                        
                                        <li><a href='./anime-details.html'>Popular</a></li>
                                        <li><a href='./anime-watching.html'>New</a></li>
                                        
                                        <li><a href='signup.html'>Library</a></li>
                                        
                                        
                                    </ul>
                                </li>
                                <li><a>Categories <span class='arrow_carrot-down'></span></a>
                                    <ul class='dropdown'>
                                        <li><a href='./categories/Action.html'>Action</a></li>
                                        <li><a href='./categories/Adventure.html'>Adventure</a></li>
                                        <li><a href='./categories/Comledy.html'>Comedy</a></li>
                                        <li><a href='./categories/Drama.html'>Drama</a></li>
                                        <li><a href='./categories/Fantasy.html'>Fantasy</a></li>
                                        <li><a href='./categories/Horror.html'>Horror</a></li>
                                        <li><a href='./categories/Romance.html'>Romance</a></li>
                                        <li><a href='./categories/Sci-Fi.html'>Sci-Fi</a></li>
                                        <li><a href='./categories/Sports.html'>Sports</a></li>
                                        <li><a href='./categories/Thriller.html'>Thriller</a></li>
                                        
                                        
                                    </ul>
                                </li>
                                
                                <li><a href='contact.html'>Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class='col-lg-2'>
                    <div class='header__right'>
                        <a href='#' class='search-switch'><span class='icon_search'></span></a>
                        <a href='login.html'><span class='icon_profile'></span></a>
                    </div>
                </div>
            </div>
            <div id='mobile-menu-wrap'></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class='breadcrumb-option'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='breadcrumb__links'>
                        <a href='index.html'><i class='fa fa-home'></i> Home</a>
                        <a>Categories</a>
                        <span>Action</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class='product-page spad'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <div class='product__page__content'>
                        <div class='product__page__title'>
                            <div class='row'>
                                <div class='col-lg-8 col-md-8 col-sm-6'>
                                    <div class='section-title'>
                                        <h4>Action</h4>
                                    </div>
                                </div>
                                <div class='col-lg-4 col-md-4 col-sm-6'>
                                    <div class='product__page__filter'>
                                        <p>Order by:</p>
                                        <select>
                                            <option value=''>A-Z</option>
                                            <option value=''>Price</option>
                                         
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        <?php
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=mangabooks','root','');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                          } catch (PDOException $e) {
                            echo "Erreur: " . $e->getMessage() . "<br/>";
                            die();
                          }
                          
                          $query = $pdo->query('SELECT * FROM books');
                          if ($query === false) {
                            var_dump($pdo->errorInfo());
                            die('Erreur SQL!!');
                          }
                          $Books = $query->fetchAll();
                        
                          foreach ($Books as $row => $value){
                            echo "<div class='row'>
                            <div class='col-lg-4 col-md-6 col-sm-6'>
                            <div class='product__item'>
                            <div class='product__item__pic set-bg' data-setbg='". $value['photo'] ."'>
                                <div class='ep'>" . $value['price'] . "TND </div>
                            </div>
                            <div class='product__item__text'>
                                <ul>
                                    <li>" . $value['genre'] . "</li>
                                    <li>" . $value['status'] . "</li>
                                </ul>
                            <h5><a href='#'>" . $value['name'] . "</a></h5>
                            </div></div></div></div>";
                          }
                        $pdo = null;
                          ?>
                        
                    </div>
                    
                </div>
                <div class='col-lg-4 col-md-6 col-sm-8'>
                    <div class='product__sidebar'>
                        <div class='product__sidebar__view'>
                            <div class='section-title'>
                                <h5>Top Action Seller</h5>
                            </div>
                            
                            <div class='filter__gallery'>
                                <div class='product__sidebar__view__item set-bg mix day years'
                                data-setbg='img/sidebar/tv-1.jpg'>
                                <div class='ep'>18</div>
                                <div class='view'><i class='fa fa-eye'></i> 9141</div>
                                <h5><a href='#'>Demon Slayer</a></h5>
                
            </div>
        </div>
    </div>
    
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class='footer'>
    <div class='page-up'>
        <a href='#' id='scrollToTopButton'><span class='arrow_carrot-up'></span></a>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-3'>
                <div class='footer__logo'>
                    <a style='color: rgb(255, 255, 255);' href='index.html'>
                        JAP<span style='color: red;'>COMICS</span>
                    </a>
                </div>
            </div>
            <div class='col-lg-6'>
                <div class='footer__nav'>
                    <ul>
                        <li class='active'><a href='index.html'>Homepage</a></li>
                        
                        <li><a href='#'>Library</a></li>
                       
                        <li><a href='contact.html'>Contacts</a></li>
                    </ul>
                </div>
            </div>
           
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class='search-model'>
    <div class='h-100 d-flex align-items-center justify-content-center'>
        <div class='search-close-switch'><i class='icon_close'></i></div>
        <form class='search-model-form'>
            <input type='text' id='search-input' placeholder='Search here.....'>
        </form>
    </div>
</div>
<!-- Search model end -->



<!-- Js Plugins -->
<script src='js/jquery-3.3.1.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/player.js'></script>
<script src='js/jquery.nice-select.min.js'></script>
<script src='js/mixitup.min.js'></script>
<script src='js/jquery.slicknav.js'></script>
<script src='js/owl.carousel.min.js'></script>
<script src='js/main.js'></script>
</body>

</html>