@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Dizziness</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Dizziness</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Dizziness.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Dizziness</u></font></p>

                        </br>
                        </br>
                        </hr>

                         
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Dizziness is a term used to describe a range of sensations, such as feeling faint, woozy, weak or unsteady. Dizziness that creates the false sense that you or your surroundings are spinning or moving is called vertigo.

Dizziness is one of the more common reasons adults visit their doctors. Frequent dizzy spells or constant dizziness can significantly affect your life. But dizziness rarely signals a life-threatening condition.</p>
                                 </br>
                                
                                 <p style="text-align :justify; font-size:16px;">Treatment of dizziness depends on the cause and your symptoms. It's usually effective, but the problem may recur.</p> 
                        
</br>

            <font size="5px" ; color="#C71585">Symptoms</font> 
                        <p style="text-align :justify; font-size:16px;">People experiencing dizziness may describe it as any of a number of sensations, such as: A false sense of motion or spinning (vertigo),
                                Lightheadedness or feeling faint,
                                Unsteadiness or a loss of balance,
                                A feeling of floating, wooziness or heavy-headedness</p> 
                         </br>

                       
            <font size="5px" ; color="#C71585">When to see a doctor</font> 
                        <p style="text-align :justify; font-size:16px;">Generally, see your doctor if you experience any recurrent, sudden, severe, or prolonged and unexplained dizziness or vertigo.

                                Get emergency medical care if you experience new, severe dizziness or vertigo along with any of the following:</p> 
                       
                       
                  </br>
                  <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Sudden, severe headache</li>
                         <li>&nbsp&nbsp&nbsp 2. Chest pain</li>
                         <li>&nbsp&nbsp&nbsp 3. Difficulty breathing</li>
                         <li>&nbsp&nbsp&nbsp 4. Numbness or paralysis of arms or legs</li>
                         <li>&nbsp&nbsp&nbsp 5. Fainting</li>
                       
                     </ul>
                    </ol> 
                </br>
                  <font size="5px" ; color="#C71585">Causes</font> 
                         <p style="text-align :justify; font-size:16px;"> Dizziness has many possible causes, including inner ear disturbance, motion sickness and medication effects. Sometimes it's caused by an underlying health condition, such as poor circulation, infection or injury</p> 
                            </br>

                            <p style="text-align :justify; font-size:16px;">The way dizziness makes you feel and your triggers provide clues for possible causes. How long the dizziness lasts and any other symptoms you have also help pinpoint the cause.</p> 
                        </br>

                         <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Neurological conditions.</li>
                         <li>&nbsp&nbsp&nbsp 2. Medications</li>
                         <li>&nbsp&nbsp&nbsp 3. Anxiety disorders.</li>
                         <li>&nbsp&nbsp&nbsp 4. Low iron levels (anemia)</li>
                         <li>&nbsp&nbsp&nbsp 5. Carbon monoxide poisoning</li>
                       
                     </ul>
                    </ol> 
                  </br>

                  <font size="5px" ; color="#C71585">Risk factors</font> 
                        <p style="text-align :justify; font-size:16px;">Factors that may increase your risk of getting dizzy include:</p> 
                        <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Age</li>
                         <li>&nbsp&nbsp&nbsp 2. A past episode of dizziness.</li>
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