@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Backache</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Backache</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Backache.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Backache</u></font></p>

                        </br>
                        </br>
                        </hr>

                        
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Back pain is a common reason for absence from work and doctor visits. Although back pain may be painful and uncomfortable, it is not usually serious.
                                Even though back pain can affect people of any age, it is significantly more common among adults aged between 35 and 55 years. Experts say that back pain is associated with the way our bones, muscles and ligaments in our backs work and connect together.
                                Pain in the lower back may be linked to the bony lumbar spine, discs between the vertebrae, ligaments around the spine and discs, spinal cord and nerves, lower back muscles, abdomen and pelvic internal organs, and the skin around the lumbar area. Pain in the upper back may be due to disorders of the aorta, tumors in the chest, and spine inflammation.
                                </p>
                                </br>
                              
                        <font size="5px" ; color="#C71585">Contents of this article:</font> 
                        <ol>
                            <ul>
                            <li>&nbsp&nbsp&nbsp 1. Causes of back pain</li>
                            <li>&nbsp&nbsp&nbsp 2. Signs and symptoms</li>
                            <li>&nbsp&nbsp&nbsp 3. Diagnosis</li>
                            <li>&nbsp&nbsp&nbsp 4. Treatments</li>
                            <li>&nbsp&nbsp&nbsp 5. Preventing back pain</li>
                            </ul>
                        </ol>
                        <p style="text-align :justify; font-size:16px;">You will also see introductions at the end of some sections to any recent developments that have been covered by MNT's news stories. Also, look out for links to information about related conditions.</p> 
                        </br>

                        <font size="5px" ; color="#C71585">Causes of back pain</font>    
                <p style="text-align :justify; font-size:16px;">The human back is composed of a complex structure of muscles, ligaments, tendons, disks and bones - the segments of our spine are cushioned with cartilage-like pads called disks. Problems with any of these components can lead to back pain. In some cases of back pain, its cause is never found.</p>
           
                                </br>

                <font size="5px" ; color="#C71585">Strain -</font>    
                <p style="text-align :justify; font-size:16px;">Strain the most common causes of back pain are: Strained muscles, Strained ligaments, A muscle spasm</p>
                </br>

                <font size="5px" ; color="#C71585">Structural problems</font>    
                <p style="text-align :justify; font-size:16px;"> The following structural problems may also result in back pain:</p>
                </br>
                <ol>
                            <ul>
                            <li>&nbsp&nbsp&nbsp 1. Ruptured disks</li>
                            <li>&nbsp&nbsp&nbsp 2. Bulging disks</li>
                            <li>&nbsp&nbsp&nbsp 3. Sciatica </li>
                            <li>&nbsp&nbsp&nbsp 4. Arthritis </li>
                            <li>&nbsp&nbsp&nbsp 5. Abnormal curvature of the spine</li>
                            </ul>
                        </ol>

                <font size="5px" ; color="#C71585">Signs and symptoms</font>    
                <p style="text-align :justify; font-size:16px;">A symptom is something that the patient feels and reports, while a sign is something other people, such as the doctor detect. For example, pain may be a symptom while a rash may be a sign.
                    The main symptom of back pain is, as the name suggests, an ache or pain anywhere on the back, and sometimes all the way down to the buttocks and legs. Some back issues can cause pain in other parts of the body, depending on the nerves affected.
                    In most cases, signs and symptoms clear up on their own within a short period.
                    If any of the following signs or symptoms accompanies a back pain, people should see their doctor:</p>

           
           
            </br>
                <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Weight loss</li>
                         <li>&nbsp&nbsp&nbsp 2. Elevated body temperature (fever)</li>
                         <li>&nbsp&nbsp&nbsp 3. Inflammation (swelling) on the back</li>
                         <li>&nbsp&nbsp&nbsp 4. Persistent back pain - lying down or resting does not help</li>
                         <li>&nbsp&nbsp&nbsp 5. Pain down the legs</li>
                         <li>&nbsp&nbsp&nbsp 6. Pain reaches below the knees</li>
                         <li>&nbsp&nbsp&nbsp 7. A recent injury, blow or trauma to your back</li>
                         <li>&nbsp&nbsp&nbsp 8. Urinary incontinence - you pee unintentionally (even small amounts)</li>
                     </ul>

                 </ol>
                </br>

                 <p style="text-align :justify; font-size:16px;">According to the British National Health Service (NHS), the following groups of people should seek medical advice if they experience back pain:</p> 
                    </br>
                
                    <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. People aged less than 20 and more than 55 years</li>
                         <li>&nbsp&nbsp&nbsp 2. Patients who have been taking steroids for a few months</li>
                         <li>&nbsp&nbsp&nbsp 3. Drug abusers</li>
                         <li>&nbsp&nbsp&nbsp 4. Patients with cancer</li>
                         <li>&nbsp&nbsp&nbsp 5. Patients who have had cancer</li>
                         <li>&nbsp&nbsp&nbsp 6. Patients with depressed immune systems</li>
                     </ul>

                 </ol>
                
                </br></br>
                <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
                    </div>

                    
                    <div class="col-md-1 col-sm-12">
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <font size="6px" ; color="#EE82EE"><b>Our Services</b></font> 
                        </br></br>
                        <ol>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Acidity"><i class="fas fa-angle-right"></i> Acidity</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Allergy"><i class="fas fa-angle-right"></i> Allergy</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Anemia"><i class="fas fa-angle-right"></i> Anemia</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Asthma"><i class="fas fa-angle-right"></i> Asthma</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Backache"><i class="fas fa-angle-right"></i> Backache</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/BloodTest"><i class="fas fa-angle-right"></i> Blood Test</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Cough"><i class="fas fa-angle-right"></i> Cough</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Heart-Disease"><i class="fas fa-angle-right"></i> Chest Pain</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Chickenpox"><i class="fas fa-angle-right"></i> ChickenPox</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/High-Blood-Pressure"><i class="fas fa-angle-right"></i> High Blood Pressure</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/High-Cholesterol"><i class="fas fa-angle-right"></i> High Cholesterol</a></font> </li></br>
                        <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Dengue"><i class="fas fa-angle-right"></i> Dengue</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Diabetes"><i class="fas fa-angle-right"></i> Diabetes</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Diet"><i class="fas fa-angle-right"></i> Diet</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Dizziness"><i class="fas fa-angle-right"></i> Dizziness</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/ECG"><i class="fas fa-angle-right"></i> ECG</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Gastric-problems"><i class="fas fa-angle-right"></i> Gastric Problems</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Heart-Disease"><i class="fas fa-angle-right"></i> Heart Diseases</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Itching"><i class="fas fa-angle-right"></i> Itching</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Joint-pain"><i class="fas fa-angle-right"></i> Joint Pain</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Kidney-problems"><i class="fas fa-angle-right"></i> Kidney Diseases</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Migraine"><i class="fas fa-angle-right"></i> Migraine</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Nebulisation"><i class="fas fa-angle-right"></i> Nebulisation</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Obesity"><i class="fas fa-angle-right"></i> Obesity</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/TuberCulosis"><i class="fas fa-angle-right"></i> TB</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Throat-pain"><i class="fas fa-angle-right"></i> Throat Pain</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Thyroid-Disease"><i class="fas fa-angle-right"></i> Thyroid Disease</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Urine-issues"><i class="fas fa-angle-right"></i> Urine Issues</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Viral-fever"><i class="fas fa-angle-right"></i> Viral Fever</a></font> </li></br>
                       <li class="active"><font size="4px"><a href="/Nrusinha-Hospital/Services/Weight-loss"><i class="fas fa-angle-right"></i> Weight Loss</a></font> </li></br>
                       </ol>
                    </div>
                </div>   
            </div>
        </div>


      

  
@endsection