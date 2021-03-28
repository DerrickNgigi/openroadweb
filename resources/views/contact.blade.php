@extends('layout.app')
@section('title')
<title>Contact Us</title>
@endsection
@section('content')
            <!-- Content Mid part -->
            <div class="page-content">
        
                <!-- Inner Banner -->
                <div class="mt-bnr-inr overlay-wraper" style="background-image:url(images/banner/about-banner.jpg);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="mt-bnr-inr-entry">
                            <h1 class="text-white">Contact 2</h1>
                            <!-- Breadcrumb -->                            
                            <ul class="mt-breadcrumb breadcrumb-style-1">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li>Contact 2</li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
    
                <div class="section-full p-t80 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Google Map Block --> 
                                <div class="equal-col m-b30">
                                    <div class="gmap-outline">
                                        <div id="gmap_canvas" class="google-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" bg-gray-light p-a30">
                                    <div class="section-head">
                                       <h2>Contact Form </h2>
                                       <div class="mt-separator-outer m-b30">
                                           <div class="mt-separator bg-primary"></div>
                                       </div>
                                   </div>                        
                                    <div class="mt-box">
                                        <form class="cons-contact-form contact-style-2" method="post" action="form-handler.php">
                                            <div class="row">
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                
                                                </div>
                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="message" rows="6" class="form-control Message" required placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-12 text-right">
                                                    <button name="submit" type="submit" value="Submit" class="site-button-secondry  m-r15">Submit</button>
                                                    <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset </button>
                                                </div>
                
                                            </div>
                                        </form>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full p-tb80">
                    <div class="container">
                        <div class="section-head">
                           <h2>Contact Detail </h2>
                           <div class="mt-separator-outer m-b30">
                               <div class="mt-separator bg-primary"></div>
                           </div>
                       </div>
                        <div class="row equal-wraper">
                        
                            <div class="col-md-4 col-sm-6 m-b30">
                            
                                <div class="mt-icon-box-wraper bx-style-2 m-l20 m-b30 p-a30 left bg-white">
                                    <div class="mt-icon-box-xs bg-primary m-b20">
                                        <span class="icon-cell text-white"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <div class="icon-content p-l20">
                                        <h4 class="mt-tilte text-primary">Phone</h4>
                                        <p>+29 876 542 2010</p>
                                    </div>
                                </div>                        
                            
                                
                            </div>
                            
                            <div class="col-md-4 col-sm-6 m-b30">
    
                                <div class="mt-icon-box-wraper bx-style-2 m-l20 m-b30 p-a30 left bg-white">
                                    <div class="mt-icon-box-xs bg-primary m-b20">
                                        <span class="icon-cell text-white"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="icon-content p-l20">
                                        <h4 class="mt-tilte text-primary">Email</h4>
                                        <p>demo@gmail.com</p>
                                    </div>
                                </div>                          
                                
                            </div>
                            
                            <div class="col-md-4 col-sm-12 m-b30">
                            
                                <div class="mt-icon-box-wraper bx-style-2 m-l20 m-b30 p-a30 left bg-white">
                                    <div class="mt-icon-box-xs bg-primary m-b20">
                                        <span class="icon-cell text-white"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <div class="icon-content p-l20">
                                        <h4 class="mt-tilte text-primary">Address</h4>
                                        <p>450 W 21d Steet New York, NY</p>
                                    </div>
                                </div> 
                                
                            </div>
                    
                        </div>
                    </div>
                </div>
                
           </div>
            
          
@endsection