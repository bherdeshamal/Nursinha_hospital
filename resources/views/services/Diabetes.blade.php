@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Diabetes</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Services"><i class="fas fa-angle-double-right"></i> <font size="4px"> Services</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Diabetes</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/facilities/Diabetes.jpg')}}" alt="" height="510">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Diabetes</u></font></p>

                        </br>
                        </br>
                        </hr>

                        
                        <font size="5px" ; color="#C71585">Overview</font> 
                                <p style="text-align : justify; font-size:16px;">Diabetes is a disease that occurs when your blood glucose, also called blood sugar, is too high. Blood glucose is your main source of energy and comes from the food you eat. Insulin, a hormone made by the pancreas, helps glucose from food get into your cells to be used for energy. Sometimes your body doesn’t make enough—or any—insulin or doesn’t use insulin well. Glucose then stays in your blood and doesn’t reach your cells. Over time, having too much glucose in your blood can cause health problems. Although diabetes has no cure, you can take steps to manage your diabetes and stay healthy. Sometimes people call diabetes “a touch of sugar” or “borderline diabetes.” These terms suggest that someone doesn’t really have diabetes or has a less serious case, but every case of diabetes is serious.</p>
                                </br>
                               
                        <font size="5px" ; color="#C71585">What are the different types of diabetes?</font> 
                        <p style="text-align :justify; font-size:16px;"><b>Type 1</b>
If you have type 1 diabetes, your body does not make insulin. Your immune system attacks and destroys the cells in your pancreas that make insulin. Type 1 diabetes is usually diagnosed in children and young adults, although it can appear at any age. People with type 1 diabetes need to take insulin every day to stay alive.</p> 
                        </br>

                        
                <p style="text-align :justify; font-size:16px;"><b>Type 2 diabetes</b>
If you have type 2 diabetes, your body does not make or use insulin well. You can develop type 2 diabetes at any age, even during childhood. However, this type of diabetes occurs most often in middle-aged and older people. Type 2 is the most common type of diabetes.</p>
            </br>
              
                
                <font size="5px" ; color="#C71585">How common is diabetes?</font> 
                 <p style="text-align :justify; font-size:16px;">As of 2015, 30.3 million people in the United States, or 9.4 percent of the population, had diabetes. More than 1 in 4 of them didn’t know they had the disease. Diabetes affects 1 in 4 people over the age of 65. About 90-95 percent of cases in adults are type 2 diabetes.1</p> 
                    </br> 
                
                    <font size="5px" ; color="#C71585">Who is more likely to develop type 2 diabetes?</font> 
                 <p style="text-align :justify; font-size:16px;">You are more likely to develop type 2 diabetes if you are age 45 or older, have a family history of diabetes, or are overweight. Physical inactivity, race, and certain health problems such as high blood pressure also affect your chance of developing type 2 diabetes. You are also more likely to develop type 2 diabetes if you have prediabetes or had gestational diabetes when you were pregnant. Learn more about risk factors for type 2 diabetes.</p> 
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