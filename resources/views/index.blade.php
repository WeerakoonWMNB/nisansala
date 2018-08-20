@extends('layouts.master')

@section('title')
	HOME
@endsection

@section('csslink')
<link rel='stylesheet' href='{{asset('/css/indexcss.css')}}'/>
@endsection

@section('content')
	<div class="row ">
		<div class="col-md-3 col-sm-3 d-none d-sm-block" id="NsMap">
      
			<iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d54605.238112221625!2d79.96037475104643!3d7.092090027746814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1snisansala+pre+school+gampaha!5e1!3m2!1sen!2slk!4v1499594487493" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen></iframe>
      
		</div>
		<div class="col-md-6 col-sm-6">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  				</ol>

  				<div class="carousel-inner">
    				<div class="carousel-item active">
  						<img class="img-fluid" src="/images/slider/1.jpg" alt="...">
  						<div class="carousel-caption d-none d-md-block">
    						<h3>...</h3>
    						<p>...</p>
  						</div>
					</div>
    				<div class="carousel-item">
  						<img class="img-fluid" src="/images/slider/2.jpg" alt="...">
  						<div class="carousel-caption d-none d-md-block">
    						<h3>...</h3>
    						<p>...</p>
  						</div>
					</div>
    				<div class="carousel-item">
  						<img class="img-fluid" src="/images/slider/3.jpg" alt="...">
  						<div class="carousel-caption d-none d-md-block">
    						<h3>...</h3>
    						<p>...</p>
  						</div>
					</div>
  				</div>
  					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
		</div>
		</div>
    <div class="col-md-3 col-sm-3 d-none d-sm-block" style="max-height: 300px; overflow-y: hidden;">
        <div id="contact">
                   <p><h5><b>Contact Us</b></h5></p><p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    &nbsp;Land Line: 033 2228408 <br>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    &nbsp;Mobile : +9471 3401521
                   </p>
                   <p><i class="fa fa-envelope"></i>
                   &nbsp Address: Nisansala Preschool,<br> &nbsp 244/A,Asgiriya,Gampaha.<br>
                   </p>
                  <p>
                    <i class="fa fa-edge" aria-hidden="true"></i>
                      &nbsp;e-mail: nisansalaecdc@gmail.com
                    </p>
                   <p>
                             <i style="font-size:16px;" class="fa fa-facebook-official"></i>
                 <a style="text-decoration:none; color:#333;" href="https://www.facebook.com/profile.php?id=100007675395470">&nbsp;Facebook: Nisansala ECDC FB Page</a>
                 <br> &nbsp;
                   </p>
        </div>
    </div>
	</div>
  <div class="row">
    
    <div class="col-md-6 order-sm-2">
      <div><br>
                    <center><h5>A word from the Principal</h5></center>
                    <center><img class="img-fluid" src="/images/principal.jpg" id="principal" width="175"><center>
                     
                     <p>
                     Mrs.R.A.I.H.Rajapaksha
                     </p>
                <!--body-->     
                    <p align="justify" id="principal-body">
                      &nbsp;&nbsp;&nbsp;&nbsp;For PreSchool and Basic education students those goals may be simply forging learning habits that will help make future academic journeys easier.Students have to develop their skills and talents to fullfill their goals.The basic platform for child is developing by the preschool.
                        <br><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;Our staff is ready to help little kids to sharpen their skills and talents.I am pleased to welcome you to the Nisansala family and I wish you well as you follow your educational and spiritual goals.
                    </p>
                     <p align="right" style="text-decoration: underline;
                    text-decoration-style:dotted;">Mrs.R.A.I.H.Rajapaksha</p>
                    <hr>
      </div>
  </div>
  
  <div class="col-md-3 order-sm-1">
      <div id="vision"><br>
          <center><h5> <b>VISION</b> </h5></center>
              <p align="justify"><b>
              Our Vision is to present virtuous, intelligent, nature loving children who are able to get through the future challenges, to the Nation.</b>
              </p>
      </div>
                  
                  <!--Mission-->
                  
      <div id="mission"><br>
          <center><h5> <b>MISSION</b> </h5></center>
              <p align="justify"><b>
              Our Mission is to train the children for a formal future the development of pre-childhood by letting the children to identify their hidden abilities and improve them and make a child with good physical health and a good nutrition.</b>
              </p>            
      </div> 
    </div>

    <div class="col-md-3 order-sm-3">
    <div id="news"><br>
                <center><h5> <b>NEWS</b> </h5></center>
                
                </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-3 col-sm-3 d-block d-sm-none" style="max-height: 300px; overflow-y: hidden;">
        <div id="contact">
                   <p><h5><b>Contact Us</b></h5></p><p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    &nbsp;Land Line: 033 2228408 <br>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    &nbsp;Mobile : +9471 3401521
                   </p>
                   <p><i class="fa fa-envelope"></i>
                   &nbsp Address: Nisansala Preschool,<br> &nbsp 244/A,Asgiriya,Gampaha.<br>
                   </p>
                  <p>
                    <i class="fa fa-edge" aria-hidden="true"></i>
                      &nbsp;e-mail: nisansalaecdc@gmail.com
                    </p>
                   <p>
                             <i style="font-size:16px;" class="fa fa-facebook-official"></i>
                 <a style="text-decoration:none; color:#333;" href="https://www.facebook.com/profile.php?id=100007675395470">&nbsp;Facebook: Nisansala ECDC FB Page</a>
                 <br> &nbsp;
                   </p>
        </div>
    </div>
  </div>
  <div class="row">
            <div class="col-md-12" >
     <center> Website is Designed and Developed by WeerakoonNB-SUSL Copyright © All Rights Reserved.</center>
       </div>
       </div> 
@endsection