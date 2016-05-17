
<!DOCTYPE html>
<html>
    <head>
        <title> Home </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
        <script type="text/javascript" src="js/api.js"></script>
    </head>
    <body>
        <?php
            function odjava()
            {
                session_destroy();
                header('location:index.php');
            }
            function profil()
            {
                header('location:profil.php');
            }
            if(isset($_GET["odj"]))
            {
               odjava();
            }
            /*if(isset($_GET['profil']))
            {
                profil();
            }*/
        ?>
        
        <div>
            <div class="nav-container-top f-nav">
               <div class="logo">
                    <img class="logo_img" src="assets/logo.png"/>
                    <a href="mpage.php" class="logo_text">TheMovieDatabase</a>
                </div>
                <div id="wrap">
                  <form id="form_search" action="" autocomplete="off">
                     <input id="search" class="search2" onkeyup="getSearchedItem()" name="search" type="text" placeholder="Vnesite naslov filma..">
                      <input id="search_submit" class="search_submit" value="Rechercher" type="submit">
                  </form>
                  <div id="movie_search_list"></div>
                </div>
               
                <div class="nav">
                    <ul>
                        <li><a href="mpage.php" class="links">DOMOV</a></li>
                        <li><a href="mpage.php?odj=true" class="links">ODJAVA</a></li>
                        <li><a href="local_movies.php" class="links">LOCAL DB</a></li>
                    </ul>
                    <!--Clear floating div -->
                    <div class="clear"></div> 
                </div>
            </div>
        </div>
        <div class="background_movies" id="background_image_movies"> </div>
        <div class="okvir2">
            <div class="Main">
                <div id="category" class="movie_category">
                    <a class="custom_header_top">Popularni Filmi
                    </a>
                    <hr class="header-line"></hr>
                </div>
                <div id="first_five" class="elements_five_div"></div>
                <div id="elements" class="elements_div"></div>
            </div>
            <div id="pages" class="pages">
            </div>
        </div>
        
    </body>
    <footer>
        <a class="zan">@ŽanPangršič</a>
        <a class="logedOn">Pozdravljen: <?php echo $user;?></a>
    </footer>
</html>