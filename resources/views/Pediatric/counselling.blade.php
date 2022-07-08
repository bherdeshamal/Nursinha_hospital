@extends('Frontend.frontdesign')

@section('content')


        <div class="page-nav row">
            <div class="container">
                <div class="row">
                    <h2><font color="#663399"; size="28px">Counselling of Parents</font></h2>
                   
                    <ul>
                        <li> <a href="/Nrusinha-Hospital"><i class="fas fa-home"></i>  <font size="4px">Home</font></a></li>
                        <li> <a href="/Nrusinha-Hospital/Pediatric"><i class="fas fa-angle-double-right"></i> <font size="4px"> Pediatric</font></a></li>
                        <li><i class="fas fa-angle-double-right"></i> <font size="4px">Counselling of Parents</font> </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <img src="{{asset('assets/images/pediatric/counseling.jpg')}}" alt="" height="500">
                        <p style="text-align:center; font-size:40px"><font color="purple"><u>Counselling of Parents</u></font></p>
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
                        <p style="text-align : justify; font-size:16px;">Parenting counseling is a type of service that aims to provide the necessary knowledge, tools, guidance, and most especially support to parents without bias or judgment. This way, they become more fully equipped to take care of their children.</p>
                        </br>
                        <p style="text-align : justify; font-size:16px;">Parenting counseling offers modalities or therapies that help parents gain a better understanding of their parenting style, face and eventually conquer their personal issues, and even restore the family, bringing back harmony and peace in the household.</p>
                </br>
                <font size="5px" ; color="#C71585">Who Should Undergo and Expected Results</font> </br>
                <p style="text-align :justify; font-size:16px;">Parenting counseling is recommended to all parents. However, it is more of a necessity for those who are:</p>
                </br>
                <p style="text-align :justify; font-size:16px;"><b>Experiencing marital issues : </b>Problems in the marriage such as finances and infidelity have a large impact on the marriage and children. Studies have shown that marital infidelity can result in low self-esteem and a feeling of abandonment in children. They may also develop skewed perceptions about love and marriage.</p> 
                </br>
                 <p style="text-align :justify; font-size:16px;"><b> Suffering from a health problem : </b> Health problems including mental health issues can prevent parents from being with their family, especially with their children, as often as they like.</p>
                 
                </br>
                 <p style="text-align :justify; font-size:16px;"><b>Dealing with children’s issues : </b>Children can also be a source of stress and problems for the parents, especially since teen behaviors change over time. In one of the recent studies, it is shown that parents are most concerned with teen substance abuse. But teens are most worried about mental health issues and bullying, which are often missed by their parents.</p> 
                    </br>
               

                    <a href="{{ URL::previous() }}" class="btn btn-success">   Back</a>     
            
                
            </div>
        </div>


      

  
@endsection