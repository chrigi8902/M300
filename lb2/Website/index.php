<!DOCTYPE html><html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-1" data-rv-view="17" style="background-image: url(assets/images/bg5.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6 col-sm-offset-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">
                        <?php    
                        echo file_get_contents( "marketprice.txt" );

                        ?> 

                        </h1>
                        <p class="mbr-hero__subtext">
                        <form>
                        <label for="stock">Stock</label><br>
                        <input type="text" id="stock" name="stock"><br>
                        <input type="submit">
                        </form>    
                        
                        <br> <?php echo htmlspecialchars($_POST['name']); ?></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-danger animated fadeInUp delay" href="https://mobirise.com">DOWNLOAD NOW</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" href="https://mobirise.com">LEARN MORE</a></div>
                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#next"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>


  <section class="engine"><a href="https://mobirise.info">Mobirise</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  

?>

</body>
</html>