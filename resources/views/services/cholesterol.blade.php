@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">High Cholesterol</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">High Cholesterol</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Cholesterol.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>High Cholesterol</u></font></p>

                        </br>
                        </br>
                        </hr>

                         
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Cholesterol is a waxy substance found in your blood. Your body needs cholesterol to build healthy cells, but high levels of cholesterol can increase your risk of heart disease.

                                With high cholesterol, you can develop fatty deposits in your blood vessels. Eventually, these deposits grow, making it difficult for enough blood to flow through your arteries. Sometimes, those deposits can break suddenly and form a clot that causes a heart attack or stroke.

                                High cholesterol can be inherited, but it's often the result of unhealthy lifestyle choices, which make it preventable and treatable. A healthy diet, regular exercise and sometimes medication can help reduce high cholesterol.</p>
                                 </br>
                                
                    


            <font size="5px" ; color="#C71585">Symptoms</font> 
                        <p style="text-align :justify; font-size:16px;">High cholesterol has no symptoms. A blood test is the only way to detect if you have it.</p> 
                        </br>

                       
            <font size="5px" ; color="#C71585">When to see a doctor</font> 
                        <p style="text-align :justify; font-size:16px;">According to the National Heart, Lung, and Blood Institute (NHLBI), a person's first cholesterol screening should occur between the ages of 9 and 11, and then be repeated every five years after that.

The NHLBI recommends that cholesterol screenings occur every one to two years for men ages 45 to 65 and for women ages 55 to 65. People over 65 should receive cholesterol tests annually.

If your test results aren't within desirable ranges, your doctor might recommend more-frequent measurements. Your doctor might also suggest more-frequent tests if you have a family history of high cholesterol, heart disease or other risk factors, such as diabetes or high blood pressure/p> 
                       
                       
                  </br>
                  <font size="5px" ; color="#C71585">Causes</font> 
                         <p style="text-align :justify; font-size:16px;"> Cholesterol is carried through your blood, attached to proteins. This combination of proteins and cholesterol is called a lipoprotein. There are different types of cholesterol, based on what the lipoprotein carries. They are:</p> 
                            </br>

                            <p style="text-align :justify; font-size:16px;"><b>Low-density lipoprotein (LDL).</b> LDL, the "bad" cholesterol, transports cholesterol particles throughout your body. LDL cholesterol builds up in the walls of your arteries, making them hard and narrow.</p> 
                        </br>

                        <p style="text-align :justify; font-size:16px;"><b>High-density lipoprotein (HDL).</b> HDL, the "good" cholesterol, picks up excess cholesterol and takes it back to your liver.</p> 
                        </br>

                        <p style="text-align :justify; font-size:16px;">A lipid profile also typically measures triglycerides, a type of fat in the blood. Having a high triglyceride level also can increase your risk of heart disease.

Factors you can control — such as inactivity, obesity and an unhealthy diet — contribute to harmful cholesterol and triglyceride levels. Factors beyond your control might play a role, too. For example, your genetic makeup might make it more difficult for your body to remove LDL cholesterol from your blood or break it down in the liver.</p> 
                        </br>

                        <p style="text-align :justify; font-size:16px;">Medical conditions that can cause unhealthy cholesterol levels include:</p> 
                        </br>

                        
                         <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Chronic kidney disease</li>
                         <li>&nbsp&nbsp&nbsp 2. Diabetes</li>
                         <li>&nbsp&nbsp&nbsp 3. HIV/AIDS</li>
                         <li>&nbsp&nbsp&nbsp 4. Hypothyroidism</li>
                         <li>&nbsp&nbsp&nbsp 5. Lupus</li>
                       
                     </ul>
                    </ol> 
                  </br>

                  <font size="5px" ; color="#C71585">Risk factors</font> 
                        <p style="text-align :justify; font-size:16px;">Factors that can increase your risk of unhealthy cholesterol levels include:</p> 
                        <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Poor diet.</li>
                         <li>&nbsp&nbsp&nbsp 2. Obesity</li>
                         <li>&nbsp&nbsp&nbsp 3. Lack of exercise. </li>
                         <li>&nbsp&nbsp&nbsp 4. Smoking </li>
                         <li>&nbsp&nbsp&nbsp 5. Alcohol.</li>
                         <li>&nbsp&nbsp&nbsp 6. Age</li>
                         
                     </ul>
                    </ol> 
                  </br>
               
                </br>

                
                        </br>
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