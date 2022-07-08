@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Growth & Development Assesstment</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Pediatric"><i class="fas fa-angle-double-right"></i> <font size="4px"> Pediatric</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Growth & Development Assesstment</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/pediatric/growth.jpg')}}" alt="" height="500">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Growth & Development Assesstment</u></font></p>
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
                        <p style="text-align : justify; font-size:16px;">It is one of the best criteria for assessment of growth and a good indicator of health and nutritional status of child.</p>
                        </br>
                <font size="5px" ; color="#C71585">Weight</font> 
                <ol>
                </BR>    <li>1. Weight of the full term neonate at birth is 2.5 to 3.8 kg.</li>
</BR>  <li>2. There are about 10% loss of weight during first week of life, which regains by 10 days of age.</li>
</BR>    <li>3. Then, weight gain is about 25 to 30 gram per day for the first 3 months and 400 g per month till one year of age. </li>
</BR>     <li>4. After that, the weight gain follows an average pattern. The infants doubled their birth weight by 5 months of age, trebled by one year, four times by two years, 5 times by 3 years, six times by 5 years, 7 times by 7 years and 10 times by 10 years of age. Then weight increases rapidly during the puberty followed by gradual maturation to adult size. </li>
                    </BR>    
                </ol>  
                 </br>

                 <font size="5px" ; color="#C71585">Height Or Linear Growth Or Length</font>   </BR>  
                <ol> 
                </BR>    <li>1. Height refers to the measurement taken when the child stands upright. It occurs as a result of skeletal growth and it is a stable measurement of general growth. Maximum rate of growth in length occurs before birth.</li>
                </BR>     <li>2. Maximum rate of growth in length occurs before birth.</li>
                </BR>     <li>3. When height is measured in supine(lying) position, it is called length.</li>
                </BR>      <li>4. Special length can be measured such as sitting height. </li>
                   
                </ol>  
                 </br>

                 <font size="5px" ; color="#C71585">Height</font>   </BR>  
                <ol type="1"> 
                </BR>     <li>1. It refers to the measurement taken when the child stands upright.</li>
                </BR>     <li>2. Remove the shoes, make the child stand as straight as possible, head in midline looking straight. Child stands with the back to the wall with shoulders, buttocks and heel touching the wall.</li>
                    
                </ol>  
                 </br>

                 <font size="5px" ; color="#C71585">Head Circumference</font>   </BR>  
                <ol> <p style="text-align :justify; font-size:16px;">
                </BR>   <li>1. It is measured by using a tape that does not stretch. Measure the head circumference until the child is 3 years of age and in any age when the head size is questionable. The maximal circumference of the head is measured by placing the tape measure over the eyebrows or supraorbital ridges and pinna of the ear anteriorly and over the occipital prominence posteriorly.</li>
                </BR>     <li>2. Newborn’s head circumference (33-35 cm) is larger than the chest circumfernec by 2-3cm.</li>
                </BR>    <li>3. Head and chest circumferneces exceeds head circumference by 5-7cm. </li>
                    </p>
                </ol>  
                 </br>
                 <font size="5px" ; color="#C71585">Chest Circumference</font> 
                 </BR>    <ol> <p style="text-align :justify; font-size:16px;">
                 </BR>      <li>It is measured at the level of nipple line at midrespiration. Place the tape measure at right angles to the vertebral column. Newborn’s chest circumference is 31-33cm.</li>
                      </p>
                </ol>  
                 </br>
                </br>

                <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
            
            </div>
        </div>


      

  
@endsection