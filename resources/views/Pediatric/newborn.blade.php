@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">New Born & Infant Checkup</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Pediatric"><i class="fas fa-angle-double-right"></i> <font size="4px"> Pediatric</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">New Born & Infant Checkup</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/pediatric/newborn.jpg')}}" alt="" height="500">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>New Born & Infant Checkup</u></font></p>
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
                        <p style="text-align : justify; font-size:16px;">Even babies who are perfectly healthy to go to the doctor a lot. That’s because the first two years are a crucial time in baby’s growth and development, and your doctor will want to keep close tabs on your baby’s progress. Some pediatricians’ schedules will vary slightly, but the American Academy of Pediatrics (AAP) recommends babies get checkups at birth, 3 to 5 days after birth and then at 1, 2, 4, 6, 9, 12, 15, 18 and 24 months. Here’s what will likely happen at each of them.</p>
                        </br>
                        <p style="text-align : justify; font-size:16px;"> Every Appointment, Starting At Birth a pediatrician should examine the baby in the hospital within 24 hours of birth. “We do a full exam, looking for normal body function. We look for basic newborn reflexes, skin tone, alertness, and hip stability,” says Anita Chandra-Puri, MD, a pediatrician at Northwestern Memorial Physicians Group in Chicago and a spokeswoman for the AAP. This is to make sure that the baby is looking healthy and responding well. Here’s what else to expect during the first checkup — and each one thereafter too:</p>
                </br>
                <font size="5px" ; color="#C71585">Taking measurements</font> 
                <p style="text-align :justify; font-size:16px;">The doctor will always measure a baby’s length (which later will be referred to like his height), weight and head circumference. These measurements will be recorded on a growth chart, so you’ll be able to see how baby compares to other infants his age to make sure there are no signs of problems.</p> 
                </br>
                <font size="5px" ; color="#C71585">Developmental surveillance</font> 
                <p style="text-align :justify; font-size:16px;">At most visits, the doctor will also gauge whether a baby’s development is on track. They’ll make observations of your child’s behaviors, ask you about baby’s milestones (like sitting up and rolling over) typical to his age at the time and ask you if you have any concerns.</p>
                 
                </br>
                <font size="5px" ; color="#C71585">Psychosocial/Behavioral assessment</font> 
                <p style="text-align :justify; font-size:16px;">Some of the questions the doctor will ask will be about baby’s behavior, and they’ll also observe the child’s actions and reactions. This helps rule out psychological or behavioral issues.</p> 
                    </br>
               
                <font size="5px" ; color="#C71585">Physical exam</font> 
                <p style="text-align :justify; font-size:16px;">Baby will get a head-to-toe exam from the doctor at each visit too — ears, eyes, mouth, skin, heart and lungs, abdomen, hips and legs, and genitalia will all get examined to be sure they look healthy. In the beginning, the doctor will check the soft spots on a baby’s head (fontanels), which typically disappear within 12 to 18 months when the skull bones fuse together. They’ll also check the shape of baby’s head to make sure it’s rounding out nicely.</p> 
                </br>


                <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
            
            </div>
        </div>


      

  
@endsection