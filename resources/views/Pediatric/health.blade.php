@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Health & Dietary Advice</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Pediatric"><i class="fas fa-angle-double-right"></i> <font size="4px"> Pediatric</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Health & Dietary Advice</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/pediatric/health.jpg')}}" alt="" height="500">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Health & Dietary Advice</u></font></p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                    <font size="6px" ; color="#EE82EE"><b>Pediatric Department</b></font> 
                    </br></br>
                    <ol>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Pediatric/New-Born-Infant-Checkup"><i class="fas fa-angle-double-right"></i> New Born & Infant Checkup</a></font> </li></br>
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
                        <p style="text-align : justify; font-size:16px;">Consuming a healthy diet throughout the life-course helps to prevent malnutrition in all its forms as well as a range of noncommunicable diseases (NCDs) and conditions. However, increased production of processed foods, rapid urbanization and changing lifestyles have led to a shift in dietary patterns. People are now consuming more foods high in energy, fats, free sugars and salt/sodium, and many people do not eat enough fruit, vegetables and other dietary fibre such as whole grains. The exact make-up of a diversified, balanced and healthy diet will vary depending on individual characteristics (e.g. age, gender, lifestyle and degree of physical activity), cultural context, locally available foods and dietary customs. However, the basic principles of what constitutes a healthy diet remain the same.</p>
                         </br>
                <font size="5px" ; color="#C71585">key facts</font> 
                <p style="text-align :justify; font-size:16px;">1. A healthy diet helps to protect against malnutrition in all its forms, as well as noncommunicable diseases (NCDs), including such as diabetes, heart disease, stroke and cancer.</p> 
                </br>
                <p style="text-align :justify; font-size:16px;">2. Unhealthy diet and lack of physical activity are leading global risks to health.</p>
                 
                </br>
                <p style="text-align :justify; font-size:16px;">3. Healthy dietary practices start early in life – breastfeeding fosters healthy growth and improves cognitive development, and may have longer term health benefits such as reducing the risk of becoming overweight or obese and developing NCDs later in life.</p> 
                    </br>
               
                    <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
            
            </div>
        </div>


      

  
@endsection