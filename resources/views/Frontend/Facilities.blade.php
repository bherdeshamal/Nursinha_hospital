


@extends('Frontend.frontdesign')

@section('content')

<div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#DC143C"; size="28px">Facilities of Nrusinha Hospital</font></h2>
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Video Gallery </li>
                        <li><i class="fas fa-angle-double-right"></i> Photo Gallery </li>
                    </ul>
                </div>
            </div>
</div>


<section class="our-service container-fluid">
        <div class="container">
        <h2><font color="Purple"; size="28px">Video Gallery</font></h2>
                   
            <div class="col-sm-12 blog-cont">
                  
                <div class="row no-margin">
                    </br>
                    </br>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <video width="320" height="240"controls  >
                             <source src="{{asset('assets/images/hospital/c.mp4')}}" type="video/mp4">
                             <source src="{{asset('assets/images/hospital/c.ogg')}}" type="video/ogg">
                            
                         </video>
                         <h3><font color="Brown";>What is Diabetes  </font><h3>
                        
                        
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <video width="320" height="240" controls>
                             <source src="{{asset('assets/images/hospital/a.mp4')}}" type="video/mp4">
                             <source src="{{asset('assets/images/hospital/a.ogg')}}" type="video/ogg">
                            
                         </video>
                        <h3><font color="Brown";>Types of Diabetes  </font><h3>
                        
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <video width="320" height="240" controls>
                             <source src="{{asset('assets/images/hospital/b.mp4')}}" type="video/mp4">
                             <source src="{{asset('assets/images/hospital/b.ogg')}}" type="video/ogg">
                            
                         </video>
                        
                         <h3><font color="Brown";>Risk Factor for Diabetes </font><h3>
                        
                        </div>
                    </div>
                </div>  
                </div>
            </div>
             <div class="container">
                    
                    <h2><font color="Purple"; size="28px">Photo Gallery</font></h2>
                    </br>
                    <div class="col-sm-12 blog-cont">
                  
                <div class="row no-margin">
                    </br>
                    </br>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">
                            	
                            <img  src="{{asset('assets/images/hospital/1.jpg')}}" >
</br></br>
                         <h4><font color="Brown";>Frontview</font><h4>
                        
                        
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                       <img src="{{asset('assets/images/hospital/1.jpeg')}}" alt="" width="340" height="280">
                        <h4><font color="Brown";>General Ward  </font><h4>
                        
                        </div>
                    </div>

                  

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/3.jpeg')}}"> <img src="{{asset('assets/images/hospital/3.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>ICU  </font><h3>
                        
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/2.jpeg')}}"> <img src="{{asset('assets/images/hospital/2.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Reception </font><h3>
                        
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/4.jpeg')}}"> <img src="{{asset('assets/images/hospital/4.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>General Ward </font><h3>
                        
                        
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/5.jpeg')}}">  <img src="{{asset('assets/images/hospital/5.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Nursinha Hospital </font><h3>
                        
                        
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/general.jpeg')}}">  <img src="{{asset('assets/images/hospital/general.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>General Ward </font><h3>
                        
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/ot.jpeg')}}"><img src="{{asset('assets/images/hospital/ot.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Operation Theatre</font><h3>
                        
                        
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/patient.jpeg')}}"><img src="{{asset('assets/images/hospital/patient.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Patient Survey </font><h3>
                        
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/reception.jpeg')}}"> <img src="{{asset('assets/images/hospital/reception.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Reception</font><h3>
                        
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                        <a href ="{{asset('assets/images/hospital/special.jpeg')}}"> <img src="{{asset('assets/images/hospital/special.jpeg')}}" alt="" width="340" height="280"></a>

                         <h3><font color="Brown";>Special Room </font><h3>
                        
                        
                        </div>
                    </div>
                    

                   
                </div>  
                </div>
              </div>

        
</section>


     
     
@endsection