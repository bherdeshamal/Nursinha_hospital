@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">About Nrusinha Hospital</font></h2>
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i> <font size="4px"> Home</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px"> About Us</font></li>
                    </ul>
                </div>
            </div>
        </div>
    
    <div class="about-us">
        <div class="row">
            <div class="col-md-6 join-us-content">

                <div class="bkgloq">
                    <div class="row content-title">
                        <font size=6><b><i><marquee><font color="purple">WELCOME TO NRUSINHA HOSPITAL CARDIO-DIABETIC CENTER </font></marquee></i></b></font>

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
            <img src="{{asset('assets/images/facilities/group.jpg')}}" alt="" height="500">
           </div>
        </div>
    </div>

    <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <img src="{{asset('assets/images/team/t4.jpg')}}" alt="" height="400">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <h1><font color="blue">Vission of Nursinha Hospital</font></h2>
                        </br>
                        <ol>
                            <li><i class="fas fa-angle-double-right"></i> Quality is at the Core of Our Mission.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Top-quality healthcare and patient safety are central to everything we do at Nursinha.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Integrity.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Excellence.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Caring.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Safety.</li>
                        </ol>
                    </div>
                </div>

            </div>
    </div>

    <div class="about-us">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-8 col-sm-12">
                        <h1><font color="blue">Mission of Nursinha Hospital</font></h2>
                        </br>
                        </br>
                        <ol>
                            <li><i class="fas fa-angle-double-right"></i> Quality is at the Core of Our Mission.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Top-quality healthcare and patient safety are central to everything we do at Nursinha.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Our mission is to “promote, restore and maintain the health of all the people we serve”.</li></br>
                            <li><i class="fas fa-angle-double-right"></i> Nursinha is committed to provide superior healthcare services in a comprehensive
                             manner to every  individual with an emphasis on quality, service excellence, empathy and respect.”</li>
                        </ol>
                    </div>

                    <div class="col-md-4 col-sm-12">
                    <img src="{{asset('assets/images/team/t1.jpg')}}" alt="" height="380">
                    </div>
                </div>

            </div>
   </div>
@endsection