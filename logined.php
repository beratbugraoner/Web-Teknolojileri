<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Berat ÖNER</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
>
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body background="images/background.jpg" >


    <header class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
       
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand pad0" href="#">
        <img src="images/navbar.jpg" alt="Berat ÖNER" title="Berat ÖNER" width="50px" height="50px" class="img-circle">
        </a>
        </div>
      <span class="logo-yani-yazisi text-info hidden-xs">
      <strong>Berat ÖNER </strong>
      
      </span>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" id="hakkimda" href="hakkimda.html">Hakkımda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="özgecmis" href="özgecmis.html">Özgeçmiş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="sehrim" href="sehrim.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="mirasımız" href="mirasımız.html">Mirasımız</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="iletisim" href="iletisim.html">İletişim</a>
        </li class="nav-item">
      </ul>
     
      <ul class="nav navbar-nav navbar-right ">
	    <li><a href="#">
		  <img width="25px" height="25px"  src="images/tr.png" title="TÜRKÇE" >
		
		  </a></li>
        <li><a href="#">
		 <img src="images/en.png" width="25px" height="25px" title="TÜRKÇE">
		  </a></li>
	  </ul>
     
        
      
        
      
     
       
     </div>
      </div>
      </header>
      

        

        <?php
        if(@$_POST["submit"])
        $md5sifre = md5($_POST["password"]);
        {
        
        
          if ($_POST["email"] == "b191210066@sakarya.edu.tr" && $md5sifre =="827ccb0eea8a706c4c34a16891f84e7b")
          {
            echo" <center> <h2> Giriş yaptınız b191210066! </h2> <br> " ;
            echo" <center>  <h2> HOŞGELDİNİZ! </h2> ";
             return true;
          }
          else
          {
         
          header("Location:login.html");
          
          return true;
          }
            
        
        
        }
        
        ?>
      
    
  

      
      <div class="footer">
        <div>
            <a href="https://www.facebook.com/berat.oner.5/" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a  href="https://www.instagram.com/bugraaoner/?hl=tr " target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/beratbugra2" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
         </div>
     </div>

    
     <script src="vegas/vegas.min.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
