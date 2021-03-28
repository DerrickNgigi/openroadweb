@extends('layout.app')
@section('title')
    <title>About</title>
@endsection
@section('content')
     <!-- CONTENT START -->
     <div class="page-content">
        
        <!-- Inner Banner -->
        <div class="mt-bnr-inr overlay-wraper" style="background-image:url(images/banner/about-banner.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="mt-bnr-inr-entry">
                    <h1 class="text-white">About</h1>
                    <!-- Breadcrumb -->                            
                    <ul class="mt-breadcrumb breadcrumb-style-1">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>About</li>
                    </ul>
                    
                </div>
            </div>
        </div>
        
        <!-- Our Mission -->
        <div class="section-full  p-t87 p-b50">
            <div class="container">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-box m-b30">
                                <div class="mt-thum-bx mt-img-effect">
                                    <img src="images/gallery/pic4.jpg" alt="">
                                </div>
                            </div>                                                               
                        </div> 
                                                     
                        <div class="col-md-6">
                            <div class="mt-box">
                                <span class="text-primary display-block title-second text-uppercase font-20 font-weight-600 display-block m-b15">What we do</span>
                                <h2 class="m-t0">Our mision is best in The Transport!</h2>
                                <p><strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                 type and scrambled it to make a type specimen book.</strong></p>
                                <a href="#" class="site-button">Read more</a>
                            </div>
                        </div>
                    </div>
                
            </div>
       </div>     
      
         <!-- Why Choose us -->
        <div class="section-full bg-gray p-t80  p-b50">
            <div class="container">
                   
                    <div class="row">
                        <div class="col-md-6">
                             <!-- TITLE START-->
                            <div class="section-head text-left">
                                <h2>Why Choose us</h2>
                                <div class="mt-separator-outer">
                                    <div class="mt-separator bg-primary"></div>
                                </div>                        
                            </div>
                            <!-- TITLE END-->                            
                            <div class="section-content m-b30">
                                <div class="mt-box">
                                    <div class="mt-info bg-white text-left p-a20 m-b30">
                                        <h4>Fast Worldwide delivery</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet odio id lectus tristique luctus. Morbi id sodales orcit.</p>
                                        <a href="#" class="text-primary font-weight-600">Read More</a>
                                     </div>
                                </div>
                                <div class="mt-box m-b30">
                                    <div class="mt-info bg-white text-left p-a20">
                                        <h4>Safety & Compliance</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet odio id lectus tristique luctus. Morbi id sodales orcit.</p>
                                        <a href="#" class="text-primary font-weight-600">Read More</a>
                                     </div>
                                </div>                                    
                            </div>                               
                        </div>                        
                        <div class="col-md-6">
                             <!-- TITLE START-->
                            <div class="section-head text-left">
                                <h2>Our Skills</h2>
                                <div class="mt-separator-outer">
                                    <div class="mt-separator bg-primary"></div>
                                </div>                        
                            </div>
                            <!-- TITLE END-->                             
                            <div class="section-content  clearfix ">
                                <div class="p-b30">
                                    <div class="mt-box">
                                        <h2 class="m-t0"><span class="text-primary"> 25 years</span> of experience in Logistics services</h2>
                                    </div>                                    
                                    <span class="progressText text-black"><B>Ground Transport</B></span>
                                    <div class="progress mt-probar-1  m-b30 m-t10">
                                        <div class="progress-bar bg-primary " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="85%"></span>
                                        </div>
                                    </div>
                                    
                                    <span class="progressText text-black"><B>Cargo</B></span>
                                    <div class="progress mt-probar-1 m-b30 m-t10">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="10" aria-valuemax="100">
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="78%"></span>
                                        </div>
                                    </div>
        
                                    <span class="progressText text-black"><B>Logistic Services</B></span>
                                    <div class="progress mt-probar-1 m-b30 m-t10">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="65%"></span>
                                        </div>
                                    </div>
                                    
                                    <span class="progressText text-black"><B>Warehousing</B></span>
                                    <div class="progress mt-probar-1 m-b30 m-t10">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="40%"></span>
                                        </div>
                                    </div>
                            
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                
            </div>
        </div>
                    
         <!-- Our Services -->
        <div class="section-full bg-change-section overlay-wraper p-t80 p-b50">
            <div class="overlay-main bg-secondry opacity-09"></div>
            <div class="bg-changer">
                <div  class=" section-bg active" style="background-image:url(images/background/bg1.jpg)"></div>
                <div  class="section-bg" style="background-image:url(images/background/bg2.jpg)"></div>
                <div  class="section-bg" style="background-image:url(images/background/bg3.jpg)"></div> 
                <div  class="section-bg" style="background-image:url(images/background/bg4.jpg)"></div>
                <div  class="section-bg" style="background-image:url(images/background/bg5.jpg)"></div> 
                <div  class="section-bg" style="background-image:url(images/background/bg6.jpg)"></div>                     
            </div>
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center text-white">
                    <h2 data-title="Services">Our Services </h2>
                    <div class="mt-separator-outer">
                        <div class="mt-separator bg-primary"></div>
                    </div>                        
                </div>
                <!-- TITLE END-->
                <div class="section-content">                
                       <div class="row">
                   <div>	
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-transport-4"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Cargo Transportation</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="mt-icon-box-wraper  center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary  hover-shadow">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-truck"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Ground Shipping</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  m-b30">
                            <div class="mt-icon-box-wraper center p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow ">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-airplane"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Air Freight</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow ">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-ship-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Ocean Freight</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6   m-b30">
                            <div class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-forklift-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Packaging & Storage</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  m-b30">
                            <div class="mt-icon-box-wraper center p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                    <span class="icon-cell  text-primary"><i class="flaticon-transport-6"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15 text-primary">Road Freight</h4>
                                    <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                </div>
                            </div>
                        </div>                                            
                    </div>
                </div>
                </div>
            </div>
        </div>
         
        <!-- Our Team -->
        <div class="section-full text-center mt-our-team bg-gray p-t80 p-b50">
            <div class="container">
            
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <h2 data-title="Team">Best team</h2>
                    <div class="mt-separator-outer">
                        <div class="mt-separator bg-primary"></div>
                    </div>                        
                </div>
                <!-- TITLE END-->
                
                <div class="section-content">
                    <div class="row">
                    
                        <!-- Block 1 -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc  m-b30">
                            <div class="mt-team-seven ">
                                <div class="mt-team-media mt-img-effect off-color bg-white">
                                    <a href="javascript:void(0);"><img src="images/our-team5/p1.png" class="" alt=""></a>
                                </div>
                                <div class="mt-team-info text-center p-a30 bg-white">
                                    <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">Susan Black</a></h4>
                                    <p>SEO Founder</p>
                                    <div class="social-share-btn-content team-one-show-hide">
                                        <ul class="social-icons social-square">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Block 2 -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                            <div class="mt-team-seven ">
                                <div class="mt-team-media mt-img-effect off-color bg-white">
                                    <a href="javascript:void(0);"><img src="images/our-team5/p2.png" alt=""></a>
                                </div>
                                <div class="mt-team-info text-center p-a30 bg-white">
                                    <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">Joe Johnson </a></h4>
                                    <p>Co-Founder</p>
                                    <div class="social-share-btn-content team-one-show-hide">
                                        <ul class="social-icons social-square">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <!-- Block 3 -->
                        <div class="col-md-4 col-sm-12 col-xs-12 col-xs-100pc m-b30">
                            <div class="mt-team-seven ">
                                <div class="mt-team-media mt-img-effect off-color bg-white">
                                    <a href="javascript:void(0);"><img src="images/our-team5/p3.png" alt=""></a>
                                </div>
                                <div class="mt-team-info text-center p-a30 bg-white">
                                    <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">May Horton</a></h4>
                                    <p>Marketer</p>
                                    <div class="social-share-btn-content team-one-show-hide">
                                        <ul class="social-icons social-square">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            
            </div>
        </div>

  
         <!--Video Section -->
        <div class="section-full  about-video p-t130 p-b80 overlay-wraper" data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg7.jpg);">
            <div class="overlay-main bg-secondry  opacity-09"></div>
            <div class="container text-center ">
                <a href="https://player.vimeo.com/video/66491481" class="mfp-video play-now">
                    <i class="icon fa fa-play"></i>
                    <span class="ripple"></span>
                </a>
                 <div class="text-white help-section">   
                    <h2 class="m-b30">Quality never goes out of style.</h2>
                    <h4 class="m-b30"><strong>We take pride in serving our customers safely. We are hear to help you out.</strong></h4>
                    <a href="#" class="site-button">Contact Us</a>
                </div>
            </div>
        </div>
@endsection