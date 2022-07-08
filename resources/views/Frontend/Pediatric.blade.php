


@extends('Frontend.frontdesign')

@section('content')

<div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#DC143C"; size="28px">Pediatric Department</font></h2>
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Pediatric</li>
                    </ul>
                </div>
            </div>
</div>


<section class="our-service container-fluid">
        <div class="container">
           
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/pediatric/newborn.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>New Born & Infant Checkup</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/New-Born-Infant-Checkup">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/pediatric/childrenopd.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Children OPD</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Children-OPD">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/pediatric/vaccination.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Complete Vaccination</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Vaccination">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/pediatric/nebulizer.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Nebulisation</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Nebulization">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="{{asset('assets/images/pediatric/health.jpg')}}" alt="" width="340" height="280">

                            <div class="blog-single-det">

                                <h6>Health & Dietary Advice</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Health-Diet">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                                
                            <img src="{{asset('assets/images/pediatric/counseling.jpg')}}" alt="" width="340" height="280" >

                            <div class="blog-single-det">

                                <h6>Counselling of Parents</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Counselling">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                                
                            <img src="{{asset('assets/images/pediatric/growth.jpg')}}" alt="" width="340" height="280" >

                            <div class="blog-single-det">

                                <h6>Growth & Development Assessment</h6>

                                <a href="/Nrusinha-Hospital/Pediatric/Growth">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
</section>


     
     
@endsection