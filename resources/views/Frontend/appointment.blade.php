<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

  </head>

    <body>
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
              
                    <div class="content">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
				          	<button type="button" class="close" data-dismiss="alert"></button>
              
                        {{ session('success') }}
                    </div>
                    @endif
                        <h1>Book Your Slot Now and Save your time</h1>
                        <p>After Successfully booking your slot you will get an email and we will send your details to the Doctor's team </p>
                        <h3>For Help Call : +91 8446668877</h3>
                        <h2>Click here <a href="mailto:aakash.bad@gmail.com" style="color:purple;"> Help Center </a> </h2>
                    </div>
                </div>
    
                <div class="col-sm-5">
               
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <div class="form-body">
                            <form id="basic-form" role="form" action="sendAppointment" method="post">
                            {{csrf_field()}}
                                
                            <div class="row form-row">
                              <input type="text" name="name" id="name" placeholder="Enter Full name" class="form-control">
                             
                            </div>
                            <div class="row form-row">
                              <input type="text" name="no" id="no" placeholder="Enter Mobile Number" class="form-control">
                              
                            </div>
                             <div class="row form-row">
                              <input type="text" name="email" id="email" placeholder="Enter Email Adreess" class="form-control">
                             
                            </div>
                           <div class="row form-row">
                              <input id="dat" name="dat" type="text" placeholder="Appointment Date" class="form-control">
                              
                            </div>
                            <div class="row form-row">
                              <select name="time" id="time" placeholder="Appointment Time" class="form-control" required>
                              <option >Select Time</option>
						                	<option value="11:00AM - 11:15AM">11:00AM - 11:15AM</option>
						                	<option value="11:15AM - 11:30AM">11:15AM - 11:30AM</option>
							              	<option value="11:30AM - 11:45PM">11:30AM - 11:45AM</option>
								            	<option value="11:45AM - 12:00PM">11:45AM - 12:00PM</option>
								          		<option value="12:00PM - 12:15PM">12:00PM - 12:15PM</option>
									        		<option value="12:15PM - 12:30PM">12:15PM - 12:30PM</option>
											      	<option value="12:30PM - 12:45PM">12:30PM - 12:45PM</option>
											    		<option value="12:45PM - 01:00PM">12:45PM - 01:00PM</option>
												  		<option value="01:00PM - 01:15PM">01:00PM - 01:15PM</option>
															<option value="01:15PM - 01:30PM">01:15PM - 01:30PM</option>
															<option value="01:30PM - 01:45PM">01:30PM - 01:45PM</option>
                              <option value="01:45PM - 02:00PM">01:45PM - 02:00PM</option>
															<option value="06:30PM - 06:45PM">06:30PM - 06:45PM</option>
															<option value="06:45PM - 07:00PM">06:45PM - 07:00PM</option>
															<option value="07:00PM - 07:15PM">07:00PM - 07:15PM</option>
															<option value="07:15PM - 07:30PM">07:15PM - 07:30PM</option>
                              <option value="07:30PM - 07:45PM">07:30PM - 07:45PM</option>
                              <option value="07:45PM - 08:00PM">07:45PM - 08:00PM</option>
                              <option value="08:00PM - 08:15PM">08:00PM - 08:15PM</option>
                              <option value="08:15PM - 08:30PM">08:15PM - 08:30PM</option>
                              <option value="08:30PM - 08:45PM">08:30PM - 08:45PM</option>
                              <option value="08:45PM - 09:00PM">08:45PM - 09:00PM</option>
					                	</select>
                          
                             </div>                            
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" name="area" id="area" placeholder="Enter Area" class="form-control">
                                  </div>
                                <div class="col-sm-6">
                                   <input type="text" name="city" id="city" placeholder="Enter City" class="form-control">
                                   
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" name="state" id="state" placeholder="Enter State" class="form-control">
                                   
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" name="code" id="code" placeholder="Postal Code" class="form-control">
                                   
                                </div>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment">
                               <input type="submit" name=submit value="Book Appointment">
                               </button>
                               
                            </div>
                          </form>
                          <script src="{{asset('assets/jquery_validation_rules/jquery.js')}}"></script>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="{{asset('assets1/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets1/js/bootstrap-datepicker.js')}}"></script> -->

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  </body>
</html>