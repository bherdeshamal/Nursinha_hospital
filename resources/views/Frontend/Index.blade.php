

@extends('Frontend.frontdesign')

@section('content')
                  
 <!-- ################# Slider Starts Here#######################--->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
           
            <div class="item">
                <div class="slider-img"><img src="{{asset('assets/images/slider/slider-2.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs"><font size="5">We care about your health more than you do!</font></p>
                                <a href="#" class="btn btn-primary hidden-xs">Schedule A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="{{asset('assets/images/slider/slider-3.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Meet our Physicians</h1>
                                <p class="slider-text hidden-xs">Our Physicians are highly skilled to meet your unique needs.</p>
                                <a href="/Nrusinha-Hospital/Our-Team" class="btn btn-primary hidden-xs">Meet Physicians</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="{{asset('assets/images/hospital/11.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--*************** Key Features Starts Here ***************-->

    <div id="features" class="features container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Key Features of our Hospital</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptatem, inventore</p>
            </div>
            <div class="ker-featur-row row">
                <div data-aos="fade-right" data-aos-duration="1500" class="col-md-4 featurecol feature-left">
                    <div class="single-feature">

                        <div class="detail">
                            <h6>100% Safety</h6>
                            <p style="text-align:justify;"><b>An injury today could mean no work tomorrow.</b>
                            "We assure you the safety of your love ones. Safety first is safety always."</p>
                            
                        </div>
                        <div class="icon">
                            <i class="far fa-bell"></i>
                        </div>


                    </div>
                    <div class="single-feature">

                        <div class="detail">
                            <h6>Friendly Doctors</h6>
                            <p style="text-align:justify;"><b>Medicine cure disease, but only doctors can cure patients. </b>
                                we offers freindly and co-operative environment as we belive in patients is our first priority </p>
                        </div>
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 featur-image">
                    <img src="assets/images/boct.jpg" alt="">
                </div>
                <div data-aos="fade-left" data-aos-duration="1500" class="col-md-4 featurecol feature-right">

                    <div class="single-feature">
                        <div class="icon">
                            <i class="far fa-images"></i>
                        </div>
                        <div class="detail">
                            <h6>Clean Environment</h6>
                            <p style="text-align:justify;">We beleive in <b>"cleaning and organizing is a practise not a project".</b>
                                We provide all sanitization n cleanliness aspects for you</p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fab fa-audible"></i>
                        </div>
                        <div class="detail">
                            <h6>Emergency Services</h6>
                            <p style="text-align:justify;">We think its our duty to give treatment to our patients on time.
                                As <b>"To be prepared is a half the victory" on someone's life.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--*************** Our Services Starts Here ***************-->


    <section class="our-service container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Our Services</h2>
                <p>We provide various type of medical services like : All Blood Investigation, ECG, Radiology - X-Ray, Echocardiography, SPO2, Nebulization, Health Checkup & Packages.
            </p> </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/facilities/Allergy.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Allergy</h6>

                                <a href="/Nrusinha-Hospital/Services/Allergy">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/facilities/Asthama.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Asthama</h6>

                                <a href="/Nrusinha-Hospital/Services/Asthma">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/facilities/bloodtest.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Blood Test</h6>

                                <a href="/Nrusinha-Hospital/Services/BloodTest">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/facilities/diet.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>General Health Checkup</h6>

                                <a href="/Nrusinha-Hospital/Services/Diet">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/facilities/diabetes.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Diabetes</h6>

                                <a href="/Nrusinha-Hospital/Services/Diabetes">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                                
                            <img src="{{asset('assets/images/facilities/Heart-diseases.jpg')}}" alt="" width="340" height="280" >

                            <div class="blog-single-det">

                                <h6>Heart Disease</h6>

                                <a href="/Nrusinha-Hospital/Services/Heart-Disease">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!--*************** About Us Starts Here ***************-->

    <div class="about-us">
        <div class="row">
            <div class="col-md-6 join-us-content">

                <div class="bkgloq">
                    <div class="row content-title">
                        <h1>About Nrusinha Hospital </h1>

                    </div>

                    <p style="text-align:justify;">
                    Nrusinha Hospital Cardio Diabetic Center has been advancing and updating its infrastructure and facilities to match the time. We are more than just a quality healthcare provider. Equipped with state-of-the-art facilities and eminent consultants, we have played a major role in scripting the medical landscape of the area and are regarded as one of the best hospitals in central pune.
                    </p>
            </br>
            <ol>
		    <li style="text-align:left;">We strive in providing our patients with utmost care and affection.</li><br>
		    <li style="text-align:left;">Our 24×7 service ensures that all our patients are given personnel attention. </li></br>
            <li style="text-align:left;">Well Trained Nursing Staff with 5-6 Years of Experiance.</li></br>
            <li style="text-align:left;">We have a well equiped pharmacy to ensure we meet all the medicinal need of our patients. </li>
	
        </ol></div>

            </div>
            <div class="col-md-6 no-padding">
                <img src="{{asset('assets/images/facilities/nrusinha.jpg')}}" alt="" width="556" height="490">
            </div>
        </div>
    </div>

    <!--  *************************Our Team Start Here ************************** -->

    <div class="our-team">
        <div class="container">

           
            <div class="session-title row">
                <h2>Our Team</h2>
                <p>Our 24×7 service ensures that all our patients are given personnel attention </p>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-8">
                    <div class="card-1 team-member">
                        <img src="{{asset('assets/images/hospital/dada.jpeg')}}" alt="Team Member 1" width="300" height="400">

                        <p><b>Dr. Aakash R. Badgujar</b> <br> MBBS, MD-Medicine</p>
                       
                    </div>
                </div>

                
                <div class="col-md-4 col-sm-8">
                    <div class="card-1 team-member">
                        <img src="{{asset('assets/images/team/t3.jpg')}}" alt="Team Member 1" width="300" height="400">

                        <p><b>Dr. Rohini A. Badgujar</b> <br> MBBS, Dch, Pediatrician & Neonatologist</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-8">
                    <div class="card-1 team-member">
                        <img src="{{asset('assets/images/team/t4.jpg')}}" alt="Team Member 1" width="300" height="400">

                        <p><b>Dr. Tanzeem Shaikh</b> <br> Assistant Doctor</p>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ######## Our Team End ####### -->
    
    
    <!--*************** Our Blog Starts Here ***************-->
                     
    <div id="blog" class="container-fluid blog">
        <div class="container">
             <div class="session-title">
                <h2>TESTIMONIALS</h2>
                <p>We always care for your smile. Feel free to express your opinion about us</p>
                   </div>
                <div class="blog-row row">
                    <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                             <p style="text-align:justify;"> "Doctors are very friendly and very professional.
                                They explained the problem well and asked to work on the fitness first and 
                                quickly discovered the problem." </p>
                                </br>     
                                <h4>Amol Deshmukh</h4>
                                
                                <span>March 9, 2017</span>

                        </div>
                       
                    </div>
                     <div class="col-lg-4 col-md-6">
                       <div class="blog-col">
                         <p style="text-align:justify;">"Doctor listens very patiently the problem faced by patients and clearly 
                             explains the cause and prescribe the medicine to prevent or control them."</p>
                        </br>
                        <h4>Amar Mujumdar</h4>
                        <span>August 9, 2018</span>
                    
                        </div>
                       
                    </div>
                     <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                           
                          <p style="text-align:justify;">
                             
						"Dr. Akash Badgujar is great. He guided me so well that I'm very thankful to him.
                         I would highly recommend him to anyone who needs a good doctor."
						
                         </p>
                        </br>
                        <h4>Vikrant Rekhawa   </h4>


                        <span>June 9, 2019</span> 
                        </div>
                       
                    </div>
                     
            </div>
        </div>
        
    </div>  
    
        <!-- ################# Footer Starts Here#######################--->


   
     
@endsection