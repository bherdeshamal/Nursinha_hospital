@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Cough</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Cough</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Cough.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Cough</u></font></p>

                        </br>
                        </br>
                        </hr>

                        
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">A cough is a common reflex action that clears the throat of mucus or foreign irritants. Coughing to clear the throat is typically an infrequent action, although a number of conditions can cause more frequent bouts of coughing.
                            In general, a cough that lasts for less than three weeks is an acute cough.
                            A cough that lasts between 3 and 8 weeks, improving by the end of that period, is a subacute cough.
                            A persistent cough that lasts more than eight weeks is a chronic cough.
                            Most cough episodes will clear up, or at least significantly improve, within two weeks. If you cough up blood or have a “barking” cough, talk to your doctor. Any cough that hasn’t improved after a few weeks may be serious, and you should see a doctor. `</p>
                                </br>

                        <font size="5px" ; color="#C71585">What causes a cough?</font> 
                        <p style="text-align :justify; font-size:16px;">A cough can be caused by several conditions, both temporary and permanent.</p> 
                        </br>

                        </br>

                        <font size="5px" ; color="#C71585">Clearing the throat</font> 
                        
                <p style="text-align :justify; font-size:16px;">A cough is a standard way of clearing the throat. When your airways become clogged with mucus or foreign particles such as smoke or dust, a cough is a reflex reaction that attempts to clear the particles and make breathing easier.
                Usually, this type of coughing is relatively infrequent, but coughing will increase with exposure to irritants such as smoke.</p>
            </br>
                        <font size="5px" ; color="#C71585">Viruses and bacteria</font> 
                        
                <p style="text-align :justify; font-size:16px;">The most common cause of a cough is a respiratory tract infection, such as a cold or flu. Respiratory tract infections are usually caused by a virus and may last from a few days to a week. Infections caused by the flu may take a little longer to clear up and may sometimes require antibiotics.</p>
         
                </br>
                        <font size="5px" ; color="#C71585">Smoking</font> 
                        
                <p style="text-align :justify; font-size:16px;">Smoking is another common cause of coughing. A cough caused by smoking is almost always a chronic cough with a distinctive sound. It’s often known as “smoker’s cough.”</p>
         
                </br>
                        <font size="5px" ; color="#C71585">Asthma</font> 
                        
                <p style="text-align :justify; font-size:16px;">A common cause of coughing in young children is asthma. Typically, asthmatic coughing involves wheezing, making it easy to identify. Asthma exacerbations should receive treatment using an inhaler. It’s possible for children to grow out of asthma as they get older.</p>
         
                </br>
                        <font size="5px" ; color="#C71585">Emergency issues</font> 
                        
                <p style="text-align :justify; font-size:16px;">Most coughs will clear up, or at least significantly improve, within two weeks. If you have a cough that hasn’t improved in this amount of time, see a doctor, as it may be a symptom of a more serious problem.
If additional symptoms develop, such as a fever, chest pains, headaches, drowsiness, or confusion, contact your doctor as soon as possible.
Coughing up blood or having difficulty breathing require immediate emergency medical attention.</p>
         
                </br>

                
               
                 <p style="text-align :justify; font-size:16px;">Typically, medical care will involve your doctor looking down your throat, listening to your cough, and asking about any other symptoms.
If your cough is likely due to bacteria, your doctor will prescribe oral antibiotics. You’ll usually need to take the medication for a week to fully cure the cough. They may also prescribe either expectorant cough syrups, or cough suppressants that contain codeine.
If your doctor can’t find a cause for your cough, they may order additional tests. This could include a chest X-ray to assess whether your lungs are clear, along with blood and skin tests if they suspect an allergic response. In some cases, phlegm or mucus may be analyzed for signs of bacteria or tuberculosis.
It’s very rare for a cough to be the only symptom of heart problems, but a doctor may request an echocardiogram to ensure that your heart is functioning correctly and isn’t causing the cough.</p> 
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