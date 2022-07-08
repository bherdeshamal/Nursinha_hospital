@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Children Vaccination</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Pediatric"><i class="fas fa-angle-double-right"></i> <font size="4px"> Pediatric</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Children Vaccination</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/pediatric/vaccination.jpg')}}" alt="" height="500">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Children Vaccination</u></font></p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                    <font size="6px" ; color="#EE82EE"><b>Pediatric Department</b></font> 
                    </br></br>
                    <ol>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/New-Born-Infant-Checkup"><i class="fas fa-angle-double-right"></i> New Born & Infant Checkup</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Children-OPD"><i class="fas fa-angle-double-right"></i> Children OPD</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Vaccination" ><i class="fas fa-angle-double-right"></i> Children Vaccination</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Nebulization" ><i class="fas fa-angle-double-right"></i> Nebulisation</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Health-Diet"><i class="fas fa-angle-double-right"></i> Health & Dietary Advice</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Counselling"><i class="fas fa-angle-double-right"></i> Counselling of Parents</a></font> </li></br>
                        <li><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/Growth"><i class="fas fa-angle-double-right"></i> Growth & Development Assessment</a></font> </li></br>
                    </ol>
                    </div>
                </div></br>
                <hr>

                <font size="5px" ; color="#C71585">Overview</font> 
                        <p style="text-align : justify; font-size:16px;">Vaccine-preventable diseases, such as measles, mumps, and whooping cough, are still a threat. They continue to infect U.S. children, resulting in hospitalizations and deaths every year.</p>
                        </br>
                        <p style="text-align : justify; font-size:16px;">Vaccination is safe and effective. All vaccines undergo long and careful review by scientists, doctors, and the federal government to make sure they are safe.</p>
                </br>
                <p style="text-align : justify; font-size:16px;">Vaccination protects others you care about, including family members, friends, and grandparents.</p>
                        </br>
                        <p style="text-align : justify; font-size:16px;">If children aren’t vaccinated, they can spread disease to other children who are too young to be vaccinated or to people with weakened immune systems, such as transplant recipients and people with cancer. This could result in long-term complications and even death for these vulnerable people.</p>
                </br>
                <p style="text-align : justify; font-size:16px;">We all have a public health commitment to our communities to protect each other and each other’s children by vaccinating our own family members.</p>
                        </br>
                       

                        <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
            
            </div>
        </div>


      

  
@endsection