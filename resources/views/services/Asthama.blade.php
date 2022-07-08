@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Asthma</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Asthma</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Asthama.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Asthma</u></font></p>

                        </br>
                        </br>
                        </hr>

                        
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Asthma is a condition in which your airways narrow and swells and produce extra mucus. This can make breathing difficult and trigger coughing, wheezing and shortness of breath.
                                    For some people, asthma is a minor nuisance. For others, it can be a major problem that interferes with daily activities and may lead to a life-threatening asthma attack.
                                    Asthma can't be cured, but its symptoms can be controlled. Because asthma often changes over time, it's important that you work with your doctor to track your signs and symptoms and adjust treatment as needed.</p>
                                </br>
                               
                        <font size="5px" ; color="#C71585">Asthma Symptoms</font> 
                        <p style="text-align :justify; font-size:16px;">Asthma symptoms vary from person to person. You may have infrequent asthma attacks, have symptoms only at certain times — such as when exercising — or have symptoms all the time.</p> 
                        </br>
                        <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Shortness of breath</li>
                         <li>&nbsp&nbsp&nbsp 2. Chest tightness or pain</li>
                         <li>&nbsp&nbsp&nbsp 3. Trouble sleeping caused by shortness of breath, coughing or wheezing</li>
                         <li>&nbsp&nbsp&nbsp 4. A whistling or wheezing sound when exhaling (wheezing is a common sign of asthma in children)</li>
                         <li>&nbsp&nbsp&nbsp 5. Coughing or wheezing attacks that are worsened by a respiratory virus, such as a cold or the flu</li>
                        
                     </ul>

                 </ol>
                </br>

                <font size="5px" ; color="#C71585">Asthma triggers</font> 
</br>
                        
                <p style="text-align :justify; font-size:16px;">Exposure to various irritants and substances that trigger allergies (allergens) can trigger signs and symptoms of asthma. Asthma triggers are different from person to person and can include:</p>
            </br>
                <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Airborne substances, such as pollen, dust mites, mold spores, pet dander or particles of cockroach waste</li>
                         <li>&nbsp&nbsp&nbsp 2. Respiratory infections, such as the common cold</li>
                         <li>&nbsp&nbsp&nbsp 3. Physical activity (exercise-induced asthma)</li>
                         <li>&nbsp&nbsp&nbsp 4. Cold air</li>
                         <li>&nbsp&nbsp&nbsp 5. Air pollutants and irritants, such as smoke</li>
                         <li>&nbsp&nbsp&nbsp 6. Certain medications, including beta blockers, aspirin, ibuprofen (Advil, Motrin IB, others) and naproxen (Aleve)</li>
                         <li>&nbsp&nbsp&nbsp 7. Strong emotions and stress</li>
                         <li>&nbsp&nbsp&nbsp 8. Sulfites and preservatives added to some types of foods and beverages, including shrimp, dried fruit, processed potatoes, beer and wine</li>
                     </ul>

                 </ol>
                </br>

                
                </br> </br>
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