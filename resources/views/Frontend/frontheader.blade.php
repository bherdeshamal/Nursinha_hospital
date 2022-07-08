<header class="container-fluid">
        <div class="container">
            <div class="row top-row">
                <div class="col-md-4 logo">
                    <img src="{{asset('assets/images/hospital/log.png')}}" alt="" width="400" height="70" >
                  
                    <a data-toggle="collapse" data-target="#menu-jk" href="#menu-jk"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div class="col-md-8 navse">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block cinfo">
                            <!-- <div class="cdetl">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="detail">
                                    <b>Location</b>
                                    <p>Rose Street, Toranto</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="detail">
                                    <b>Email</b>
                                    <p>aakash.bad@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="detail">
                                    <b>Call Us</b>
                                    <p>+91 8446668877</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="menu-jk" class="nav-sectionmk  row">
                <ul>
                    <li><a href="{{asset('Nrusinha-Hospital')}}">Home</a></li>
                    <li><a href="{{asset('Nrusinha-Hospital/About-Us')}}">About US</a></li>
                    <li><a href="{{asset('Nrusinha-Hospital/Our-Team')}}">Our Team</a></li>
                    <li><a href="{{asset('Nrusinha-Hospital/Pediatric')}}">Pediatric</a></li>
                    <li><a href="{{asset('Nrusinha-Hospital/Services')}}">Services</a></li>
                    <li><a href="{{asset('Nrusinha-Hospital/Facilities')}}">  Facilities</a></li>

                    <li><a href="{{asset('Nrusinha-Hospital/Contact')}}">Contact Us</a></li>
                    <li class="aply">
                        <!-- <button onclick="window.location.href='http://127.0.0.1:8000/Nrusinha-Hospital/Appointment';" class="btn btn-sm btn-light">Book Appointment</button> -->
                        <input type=button onClick="parent.open('http://127.0.0.1:8000/Nrusinha-Hospital/Appointment')" class="btn btn-sm btn-light" value='Book Appointment' >
                    </li>
                </ul>
            </div>
        </div>
    </header>
