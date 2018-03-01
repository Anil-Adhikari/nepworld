<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php $this->beginBody() ?>

 <body id="page-top">
    <div class="fixed topHeader">
            <div class="wrapper">
                <div class="sectionLeft fltLeft">

                    Need Help? Email us: &nbsp;<a href="#">info@nepworld.com </a>                </div><!-- sectionLeft end -->
                <div class="sectionRight fltRight">
                    <ul>
                      <li><a href="#" target="_blank"><img src="img/custom/facebook.png" alt=""></a>
                      </li>
                      <li><a href="#" target="_blank"><img src="img/custom/facebook.png" alt=""></a>
                      </li>
                      <li><a href="#" target="_blank"><img src="img/custom/facebook.png" alt=""></a>
                      </li>
              </ul>
                </div><!-- sectionRight end -->
                <div class="clear"></div>
            </div><!-- wrappar end -->
    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark lowNav" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">NepWorld</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     </div>
   <div class="clear"></div>

   

    <div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- flat footer -->
    <section id="contact" class="flat">
      <div class="container">
        <div class="row">
         
          <div class="col-md-4 col-sm-6 col-xs-6">
              <h4>Featured Business</h4>
              <ul>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
              </ul>
              <hr>
              <h4>Most Searched</h4>
              <ul>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
                  <li>Nepal Maya</li>
                  <li>Kathmandu Khaja</li>
                  <li>Kathmandu Khaja</li>
              </ul>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-6 hlp">
            <h4> Need Help ?</h4>
            <ul>
              <li><a href="#"><i class="fa fa-5x fa-comments text-primary mb-3 sr-icons"></i><span> <br>LIVE CHAT
                </span></a>
              </li>
              <li><a href="#"><i class="fa fa-5x fa-phone-square text-primary mb-3 sr-icons"></i><span><br> HELPLINE
                </span></a>
              </li>
              <li><a href="#"><i class="fa fa-5x fa-envelope text-primary mb-3 sr-icons"></i><span> <br>EMAIL
                </span></a>
              </li>
              <li><a href="#"><i class="fa fa-5x fa-users text-primary mb-3 sr-icons"></i><span><br> COMMUNITY
                </span></a>
              </li>
            </ul>
          </div>
          
           <div class="col-md-5 col-sm-12 col-xs-12">
            <h4> Client's Testomonial</h4>
            <div class="verticalLine">
                <img src="img/custom/administrator.png" class="img-responsive testomonial">
                <div class="testInfo">
                  <ul>
                    <li>John Kunwar</li>
                    <li>Manager</li>
                    <li>Lisbon, Portugal</li>
                  </ul>
                </div>
                <hr>
                <p style="padding: 10px;color: black;text-align: justify;"> This is test info.This is test info.This is test info.This is test info.
                  This is test info.This is test info.This is test info.This is test info.
                 <Br>
                  Thank you.
                </p>
                <div class="prog-img">
                  <img src="img/team/1.jpg " class="img-responsive" width="100%">
                  <div class="cap-box" style="height: 174px !important;">                                                      
                        Lisbon, Portugal<br>
                        (9812128789172) <br>
                        www.example.pt                                   
                  </div>
                </div>                
            </div>
            
          </div>
        </div>
        
      </div>
    </section>
    <!-- end flat footer -->


    <!-- Footer -->
    <footer>
      <div class="container topHeader">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; NepWorld 2018</span>
          </div>
          <div class="col-md-4">
            <p style="padding-top: 5px;">Developed by: <a href="http://itsahayatri.com/">Itsahayatri</a></p>
          </div>
          <div class="col-md-4 green">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
