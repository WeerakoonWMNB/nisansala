<header>
	<style type="text/css">
nav{
  box-shadow: 1px 5px 10px #ccccb3;
}
.navbar .collapse .navbar-nav li a{
  color: #8a8a5c;
  font-size: 100%;
  font-weight: bold;
  font-family: "Tangerine", serif;

}
.navbar .collapse .navbar-nav li a:hover{
  color: #009933;
  font-size: 105%;
  font-weight: bold;
  font-family: "Tangerine", serif;
}
.navbar .collapse .navbar-nav li a:active{
  color: #cccc00;
  font-size: 130%;
  font-weight: bold;
}
.slider{
  width: 100%;
  overflow: hidden;
}
.img-fluid{
  border-radius: 5px;
} 
  </style>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 255, 255, 0.3)" >
  <a class="navbar-brand" href="{!! url('/'); !!}" style="font-family: 'Tangerine', serif;color: #009933;">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">

      <li class="nav-item ">
        <a class="nav-link" href="{!! url('/online_application'); !!}"> Online Application  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/gallery'); !!}">Gallery </a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/aboutus'); !!}">About US </a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/contactus'); !!}">Contact US </a>
      </li> 
    </ul>
  </div>
</nav>

</header>