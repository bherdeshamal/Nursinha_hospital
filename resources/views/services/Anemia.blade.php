@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Anemia</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Anemia</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Anemia.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Anemia</u></font></p>

                        </br>
                        </br>
                        </hr>

                        
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Anemia is a condition that develops when your blood lacks enough healthy red blood cells or hemoglobin. Hemoglobin is the main part of red blood cells and binds oxygen. If you have too few or abnormal red blood cells, or your hemoglobin is abnormal or low, the cells in your body will not get enough oxygen. Symptoms of anemia -- like fatigue -- occur because organs aren't getting what they need to function properly.</p>
                                </br>
                                <p style="text-align : justify; font-size:16px;">Anemia is the most common blood condition in the U.S. It affects about 3.5 million Americans. Women, young children, and people with chronic diseases are at increased risk of anemia. Important factors to remember are:</p>
                       
                                </br>
                                <p style="text-align : justify; font-size:16px;">Certain forms of anemia are hereditary and infants may be affected by the time of birth. Women in the childbearing years are particularly susceptible to iron-deficiency anemia because of the blood loss from menstruation and the increased blood supply demands during pregnancy. Older adults also may have a greater risk of developing anemia because of poor diet and other medical conditions. There are many types of anemia. All are very different in their causes and treatments. Iron-deficiency anemia, the most common type, is very treatable with diet changes and iron supplements. Some forms of anemia -- like the mild anemia that develops during pregnancy -- are even considered normal. However, some types of anemia may present lifelong health problems.</p>
                                </br>
                               
                        <font size="5px" ; color="#C71585">What Causes Anemia?</font> 
                        <p style="text-align :justify; font-size:16px;">There are more than 400 types of anemia, which are divided into three groups:</p> 
                        </br>
                        <ol>
                            <ul>
                                <li>&nbsp&nbsp&nbsp 1. Anemia caused by blood loss</li>
                                <li>&nbsp&nbsp&nbsp 2. Anemia caused by decreased or faulty red blood cell production</li>
                                <li>&nbsp&nbsp&nbsp 3. Anemia caused by destruction of red blood cells</li>
                                
                            </ul>
                        </ol>
                          </br>

                         <p style="text-align :justify; font-size:16px;">Red blood cells can be lost through bleeding, which often can occur slowly over a long period of time, and can go undetected. This kind of chronic bleeding commonly results from the following:</p> 
                            </br>
                          
                         <ol>
                            <ul>
                                <li>&nbsp&nbsp&nbsp 1. Anemia caused by blood lossGastrointestinal conditions such as ulcers, hemorrhoids, gastritis (inflammation of the stomach), and cancer</li>
                                <li>&nbsp&nbsp&nbsp 2. Use of nonsteroidal anti-inflammatory drugs (NSAIDs) such as aspirin or ibuprofen, which can cause ulcers and gastritis</li>
                                <li>&nbsp&nbsp&nbsp 3. Menstruation and childbirth in women, especially if menstrual bleeding is excessive and if there are multiple pregnancies</li>
                               
                            </ul>
                         </ol>
                        </br>

                        <font size="5px" ; color="#C71585">Sickle cell anemia</font> 
                        <p style="text-align :justify; font-size:16px;">Sickle cell anemia is an inherited disorder that, in the U.S. affects mainly African-Americans and Hispanic Americans. Red blood cells become crescent-shaped because of a genetic defect. They break down rapidly, so oxygen does not get to the body's organs, causing anemia. The crescent-shaped red blood cells can also get stuck in tiny blood vessels, causing pain.

                        </p> 
                        </br>
                        
                        <font size="5px" ; color="#C71585">Iron-deficiency anemia</font> 
                        <p style="text-align :justify; font-size:16px;">Iron-deficiency anemia occurs because of a lack of the mineral iron in the body. Bone marrow in the center of the bone needs iron to make hemoglobin, the part of the red blood cell that transports oxygen to the body's organs. Without adequate iron, the body cannot produce enough hemoglobin for red blood cells. The result is iron-deficiency anemia. </p> 

                        </br>

                        <font size="5px" ; color="#C71585">Vitamin-deficiency anemia </font> 
                        <p style="text-align :justify; font-size:16px;">Vitamin-deficiency anemia may occur when vitamin B12 and folate are deficient. These two vitamins are needed to make red blood cells. Conditions leading to anemia caused by vitamin deficiency include:During early pregnancy, sufficient folic acid can help prevent the fetus from developing neural tube defects such as spina bifida.</p> 

                        </br>

                        <font size="5px" ; color="#C71585">Bone marrow and stem cell problems</font> 
                        <p style="text-align :justify; font-size:16px;">
                                    Bone marrow and stem cell problems may prevent the body from producing enough red blood cells. Some of the stem cells found in bone marrow develop into red blood cells. If stem cells are too few, defective, or replaced by other cells such as metastatic cancer cells, anemia may result.</p> 

                        </br>

                        <font size="5px" ; color="#C71585">Anemia associated with other conditions</font> 
                        <p style="text-align :justify; font-size:16px;">Anemia associated with other conditions usually occurs when there are too few hormones necessary for red blood cell production./p> 
                        </br>
                        <ol>

                        <li> &nbsp &nbsp &nbsp 1. Advanced kidney disease</li>

                        <li> &nbsp &nbsp &nbsp 2. Hypothyroidism</li>

                        <li> &nbsp &nbsp &nbsp 3. Other chronic diseases, such as cancer, infection, lupus, diabetes, and rheumatoid arthritis</li>

                        <li> &nbsp &nbsp &nbsp 4. Old age</li>
                        </ol>

                        </br>

                                <font size="5px" ; color="#C71585">Anemia Caused by Destruction of Red Blood Cells</font> 
                                <p style="text-align :justify; font-size:16px;">When red blood cells are fragile and cannot withstand the routine stress of the circulatory system, they may rupture prematurely, causing hemolytic anemia. Hemolytic anemia can be present at birth or develop later. Sometimes there is no known cause. Known causes of hemolytic anemia may include:</p> 
                                </br>
                        <ol>

                            <li> &nbsp &nbsp &nbsp 1. Inherited conditions, such as sickle cell anemia and thalassemia</li>

                            <li> &nbsp &nbsp &nbsp 2. Stressors such as infections, drugs, snake or spider venom, or certain foods</li>

                            <li> &nbsp &nbsp &nbsp 3. Toxins from advanced liver or kidney disease.</li>

                            <li> &nbsp &nbsp &nbsp 4. Inappropriate attack by the immune system (called hemolytic disease of the newborn when it occurs in the fetus of a pregnant woman)</li>
                            </ol>
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
</br>
</hr>
                </div>   
            </div>
        </div>


      

  
@endsection