@extends('Layout.master')    
@section('title')
Contact Page || Nbinfants&toddlers
@endsection

@section('content')

<body id="home" class="wide">

            @include('Layout.header')

              <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Contact</span> 
                                <span class="italic-font">Us</span>
                            </span>
                        </h2>
                        <h3 class="sub-title">Get In Touch</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  > <span class="blue-color">Contact Us</span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- Contact Us  Start -->
            <section id="contact-us" class="contactus-wrap"> 
                <div class="theme-container container">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.00758342084!2d-73.9780035!3d40.70563080000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1406353391765" style="border:0; frameborder:0;"></iframe>
                    </div>
                    <div class="row space-40">
                        <div class="col-md-7 col-sm-6">
                            <div class="title-wrap space-bottom-25">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Contact</span> 
                                        <span class="italic-font">Form</span>
                                    </span>
                                </h2>
                            </div>
                            <div class="contact-form">
                                <form class="contact-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control requerd" placeholder="Name *" >                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control requerd" placeholder="Email *" >                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control requerd" placeholder="Subject" >                                       
                                    </div>
                                    <div class="form-group">
                                        <textarea  class="form-control" rows="13" cols="10"  placeholder="Massage Text"  ></textarea>
                                    </div>
                                    <div class="form-group submit-contact">
                                        <button class="blue-btn btn" type="submit">Send</button>     
                                        <p> <span class="pink-color"> * </span> required field</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  col-md-offset-1 ">
                            <div class="title-wrap space-bottom-25">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Contact</span> 
                                        <span class="italic-font">Details</span>
                                    </span>
                                </h2>
                            </div>                        
                            <div class="contact-details">
                                <ul>
                                    <li> 
                                        <i class="fa fa-map-marker blue-color"></i> 
                                        <div class="details">
                                            <span><strong class="blue-color"> Address: </strong></span> 
                                            <span>121 charmont road Tooting broadway Sw17 9ab</span>
                                        </div>
                                    </li>                                       
                                    <li> 
                                        <i class="fa fa-phone pink-color"></i> 
                                        <div class="details">
                                            <span><strong class="pink-color"> Phone: </strong></span> 
                                            <span> +4407946301282</span> 
                                        </div>
                                    </li>
                                    <li> 
                                        <i class="fa fa-envelope green-color"></i> 
                                        <div class="details">
                                            <span><strong class="green-color"> Mail: </strong></span> 
                                            <a href="#"> <span> nb.infant&kiddies@gmail.com </span> </a>
                                        </div>
                                    </li>
                                    <li> 
                                        <i class="fa  fa-globe golden-color"></i> 
                                        <div class="details">
                                            <span><strong class="golden-color"> Website & Social: </strong></span> 
                                            <a href="#"> <span> www.nbinfantstoddlers.co.uk </span> </a>

                                            <ul class="social-icon">
                                                <li> <a href="#"> <i class="fa fa-facebook-square"></i> </a> </li>
                                                <li> <a href="#"> <i class="fa fa-twitter-square"></i>  </a></li>
                                                <li> <a href="#"> <i class="fa fa-pinterest-square"></i>  </a> </li>
                                                <li> <a href="#"> <i class="fa fa-google-plus-square"></i>  </a> </li>                                            
                                            </ul>

                                        </div>
                                    </li>                                            
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Contact Us  Ends -->

            <!-- Newsletter  Start -->
            <section id="news-latter" class="space-40 light-bg cart-newslatter"> 
                <div class="container theme-container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 space-25">
                            <div class="title-wrap space-bottom-25">                                    
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Newsletter </span> 
                                        <span class="italic-font">Sign Up</span>
                                    </span>
                                </h2> 
                            </div>
                            <div class="newsletter-form">
                                <form class="newsletter">                                       
                                    <div class="form-group col-sm-8 no-padding">                                     
                                        <label class="sr-only">Enter Child Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your e-mail">
                                    </div>
                                    <div class="form-group col-sm-3 no-padding">
                                        <button type="submit" class="blue-btn submit-btn btn">Submit</button>
                                    </div>                                        
                                </form>
                                <p class="col-sm-9 no-padding">Caption Caption Caption Caption Caption Caption Caption Caption Caption Caption Caption Caption Caption Caption</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 space-25">
                            <div class="title-wrap space-bottom-25"> 
                                <h2 class="section-title">
                                    <i class="fa fa-truck green-color"></i>
                                    <span>
                                        <span class="funky-font green-tag">Free </span> 
                                        <span class="italic-font">Shipping</span>
                                    </span>
                                </h2> 
                            </div>

                            <div class="text-widget">
                                <p>For standard oders over 100 USD. Caption Caption Caption Caption Caption Caption Caption Caption.</p>
                                <a class="green-color title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 space-25">
                            <div class="title-wrap space-bottom-25"> 
                                <h2 class="section-title">
                                    <i class="fa fa-reply pink-color"></i>
                                    <span>
                                        <span class="funky-font pink-tag">free </span> 
                                        <span class="italic-font">Returns</span>
                                    </span>
                                </h2> 
                            </div>
                            <div class="text-widget">
                                <p>For standard oders over in 30 dsys. Caption Caption Caption Caption Caption Caption Caption Caption</p>
                                <a class="pink-color title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Newsletter  Ends -->

        @endsection