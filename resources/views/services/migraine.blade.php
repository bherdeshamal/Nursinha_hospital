@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Migraine</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Migraine</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Migraine.jpg')}}" alt="" height=510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Migraine</u></font></p>

                        </br>
                        </br>
                        </hr>

                         
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">A migraine is a headache that can cause severe throbbing pain or a pulsing sensation, usually on one side of the head. It's often accompanied by nausea, vomiting, and extreme sensitivity to light and sound. Migraine attacks can last for hours to days, and the pain can be so severe that it interferes with your daily activities.</p>
                                 </br>
                                 <p style="text-align : justify; font-size:16px;">For some people, a warning symptom known as an aura occurs before or with the headache. An aura can include visual disturbances, such as flashes of light or blind spots, or other disturbances, such as tingling on one side of the face or in an arm or leg and difficulty speaking.

Medications can help prevent some migraines and make them less painful. The right medicines, combined with self-help remedies and lifestyle changes, might help.</p>
                                 </br>
                             
            <font size="5px" ; color="#C71585">Symptoms </font> 
</br>
            <p style="text-align :justify; font-size:16px;"> Migraines, which affect children and teenagers as well as adults, can progress through four stages: prodrome, aura, attack and post-drome. Not everyone who has migraines goes through all stages.</p>
                </br> 
                <p style="text-align :justify; font-size:16px;"><b> 1) Prodrome </b>One or two days before a migraine, you might notice subtle changes that warn of an upcoming migraine, including:</p>
          <ol> 
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Constipation</li>
                         <li>&nbsp&nbsp&nbsp 2. Mood changes, from depression to euphoria</li>
                         <li>&nbsp&nbsp&nbsp 3. Food cravings</li>
                         <li>&nbsp&nbsp&nbsp 4. Neck stiffness</li>
                         <li>&nbsp&nbsp&nbsp 5. Increased urination</li>
                         <li>&nbsp&nbsp&nbsp 6. Fluid retention</li>
                     </ul>
                    </ol>    
                    <p style="text-align :justify; font-size:16px;"><b> 2) Aura </b>For some people, an aura might occur before or during migraines. Auras are reversible symptoms of the nervous system. They're usually visual but can also include other disturbances. Each symptom usually begins gradually, builds up over several minutes and can last up to 60 minutes.</p>
          <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Visual phenomena, such as seeing various shapes, bright spots or flashes of light</li>
                         <li>&nbsp&nbsp&nbsp 2. Vision loss</li>
                         <li>&nbsp&nbsp&nbsp 3. Pins and needles sensations in an arm or leg</li>
                         <li>&nbsp&nbsp&nbsp 4. Weakness or numbness in the face or one side of the body</li>
                         
                     </ul>
                    </ol>
                    <p style="text-align :justify; font-size:16px;"><b> 3) Attack </b>A migraine usually lasts from 4 to 72 hours if untreated. How often migraines occur varies from person to person. Migraines might occur rarely or strike several times a month.</p>
          <ol>
                     <ul>
                         <li>&nbsp&nbsp&nbsp 1. Pain usually on one side of your head, but often on both sides</li>
                         <li>&nbsp&nbsp&nbsp 2. Pain that throbs or pulses</li>
                         <li>&nbsp&nbsp&nbsp 3. Sensitivity to light, sound, and sometimes smell and touch</li>
                         <li>&nbsp&nbsp&nbsp 4. Nausea and vomiting</li>
                         
                     </ul>
                    </ol>
                    <p style="text-align :justify; font-size:16px;"><b> 4) Post-drome </b>After a migraine attack, you might feel drained, confused and washed out for up to a day. Some people report feeling elated. Sudden head movement might bring on the pain again briefly.</p>
</br>

                  <font size="5px" ; color="#C71585">Causes</font> 
                        </br>
                        <p style="text-align :justify; font-size:16px;"> Though migraine causes aren't fully understood, genetics and environmental factors appear to play a role.

Changes in the brainstem and its interactions with the trigeminal nerve, a major pain pathway, might be involved. So might imbalances in brain chemicals — including serotonin, which helps regulate pain in your nervous system.</p>
            
                            
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