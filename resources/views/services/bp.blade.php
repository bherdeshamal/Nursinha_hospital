@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">High Blood Pressure</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">High Blood Pressure</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/High-Blood-Pressure.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>High Blood Pressure</u></font></p>

                        </br>
                        </br>
                        </hr>

                         
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">High blood pressure (hypertension) is a common condition in which the long-term force of the blood against your artery walls is high enough that it may eventually cause health problems, such as heart disease.

                                    Blood pressure is determined both by the amount of blood your heart pumps and the amount of resistance to blood flow in your arteries. The more blood your heart pumps and the narrower your arteries, the higher your blood pressure. A blood pressure reading is given in millimeters of mercury (mm Hg). It has two numbers.</p>
                                </br>
                                
                        <font size="5px" ; color="#C71585">Top number (systolic pressure).</font> 
                        <p style="text-align :justify; font-size:16px;">The first, or upper, number measures the pressure in your arteries when your heart beats./p> 
                        </br>
                        <font size="5px" ; color="#C71585">Bottom number (diastolic pressure).</font>
                        <p style="text-align :justify; font-size:16px;">The second, or lower, number measures the pressure in your arteries between beats.</p> 
                        </br>


            <font size="5px" ; color="#C71585">Symptoms</font> 
                        <p style="text-align :justify; font-size:16px;">Most people with high blood pressure have no signs or symptoms, even if blood pressure readings reach dangerously high levels.

                        A few people with high blood pressure may have headaches, shortness of breath or nosebleeds, but these signs and symptoms aren't specific and usually don't occur until high blood pressure has reached a severe or life-threatening stage</p> 
                        </br>

                       
            <font size="5px" ; color="#C71585">Causes</font> 
                        <p style="text-align :justify; font-size:16px;"><b>Primary (essential) hypertension : </b> For most adults, there's no identifiable cause of high blood pressure. This type of high blood pressure, called primary (essential) hypertension, tends to develop gradually over many years.</p> 
                       
                       
                  </br>

                         <p style="text-align :justify; font-size:16px;"> <b> Secondary hypertension : </b> Some people have high blood pressure caused by an underlying condition. This type of high blood pressure, called secondary hypertension, tends to appear suddenly and cause higher blood pressure than does primary hypertension. Various conditions and medications can lead to secondary hypertension, including:</p> 
                        <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Obstructive sleep apnea</li>
                         <li>&nbsp&nbsp&nbsp 2. Kidney disease</li>
                         <li>&nbsp&nbsp&nbsp 3. Adrenal gland tumors</li>
                         <li>&nbsp&nbsp&nbsp 4. Thyroid problems</li>
                         <li>&nbsp&nbsp&nbsp 5. Certain defects you're born with (congenital) in blood vessels</li>
                         <li>&nbsp&nbsp&nbsp 6. Illegal drugs, such as cocaine and amphetamines</li>
                         
                     </ul>
                    </ol> 
                  </br>

                  <font size="5px" ; color="#C71585">Risk factors</font> 
                        <p style="text-align :justify; font-size:16px;">High blood pressure has many risk factors, including:</p> 
                        <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Age</li>
                         <li>&nbsp&nbsp&nbsp 2. Race</li>
                         <li>&nbsp&nbsp&nbsp 3. Family history. </li>
                         <li>&nbsp&nbsp&nbsp 4. Being overweight or obese. </li>
                         <li>&nbsp&nbsp&nbsp 5. Not being physically active.</li>
                         <li>&nbsp&nbsp&nbsp 6. Stress</li>
                         
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