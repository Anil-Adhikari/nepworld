 <!-- Header -->
   
    <header style="padding-top: 10%;">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 sliderImg" src="<?php echo \Yii::$app->request->BaseUrl; ?>/img/team/1.jpg" alt="First slide">

            <div class="captionHolder">
              <div class="carousel-caption d-none d-md-block ">
                  <h5>Heading 1</h5>
                  <p>This is description 1.</p>
                </div>
            </div>
            
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 sliderImg" src="<?php echo \Yii::$app->request->BaseUrl; ?>/img/team/2.jpg"  alt="Second slide">
            <div class="captionHolder">
               <div class="carousel-caption d-none d-md-block ">
                  <h5>Heading 2</h5>
                  <p>This is description 2.</p>
                </div>
            </div>
           
          </div>
        </div>
     <button type="button" class="btn btn-success btn-lg" style="position: absolute;margin-top: -230px;
       margin-left: 46%;" > Read More ...</button>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
    </div>

    </header>
<!-- service -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h4 class="section-heading">At Your Service</h4>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#"><i class="fa fa-3x fa-user-plus text-success mb-3 sr-icons"></i></a>
              <h5 class="mb-3">Sign Up</h5>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#"><i class="fa fa-3x fa-briefcase text-success mb-3 sr-icons"></i></a>
              <h5 class="mb-3">Business Profile</h5>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#"><i class="fa fa-3x fa-paper-plane text-success mb-3 sr-icons"></i></a>
              <h5 class="mb-3">Publish</h5>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#"><i class="fa fa-3x fa-globe text-success mb-3 sr-icons"></i></a>
              <h5 class="mb-3">With World</h5>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end service -->

    <!-- featured program -->
    <div class="business programs">
    <div id="featured">
        <p style="text-align: center;padding: 15px">
          <h4 class="animated  os-animation progH1 text-center" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">NepWorld Featured <span>Business</span></h4>
        </p>
        <hr>
        <div class="row" >
                    <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                              <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">                             
                                    <img src="img/team/2.jpg " width="100%">                         
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                    <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                                <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">
                                    <img src="img/team/1.jpg " class="img-responsive" width="100%">          
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                    <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                                <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">
                                    <img src="img/team/1.jpg " class="img-responsive" width="100%">          
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                    <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                                <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">
                                    <img src="img/team/2.jpg " class="img-responsive" width="100%">          
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                   <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                                <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">
                                    <img src="img/team/1.jpg " class="img-responsive" width="100%">          
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                    <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 animated  os-animation" data-os-animation="fadeInLeft"                     data-os-animation-delay="0.5s">
                        <div class="post">
                            <div class="prog-blocks">
                                <div class="mobileFeature">Featured</div>
                                <p>Namaste Resturant</p>
                                <div class="prog-img">
                                    <img src="img/team/2.jpg " class="img-responsive" width="100%">          
                                    <div class="cap-box">                                                      
                                        Lisbon, Portugal<br>
                                        (9812128789172)                                    
                                    </div>
                                   <div class="busiImg">
                                      <img src="img/custom/featured-ribbon.png" class="featured-ribbon">
                                    </div>
                                    <p style="font-size: 16px;"> This is the very short discription about a business. This information will display in the first page. </p>
                                    <div style="margin-top:0px; width:100%; text-align:right;"><a href="#"><button type="button" alt="view trip bt" class=" btn btn-success">Find More </button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div><!-- wrapper end -->
</div><!-- section-2 end -->
    <!-- featured program -->