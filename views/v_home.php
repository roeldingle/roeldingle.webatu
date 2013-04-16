<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $aData['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/libs/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/libs/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  </head>
  <body>
  
    <!--wrap -->
    <div id="wrap">
    
        <!-- container -->
        <div class="container">
    
            <!--header-->
            <div class="row-fluid" id="header">
                <div class="span12">
                    <h1><?php echo $aData['title']; ?><small class="g-font-2">Web Developer</small></h1>
                </div>
            </div> <!--/header-->
            
             <!--content head-->
            <div class="row-fluid" id="content">
                <div class="span9">
                     <div class="lead"  >
                        <p>&nbsp;&nbsp;&nbsp;Hi there !
                        I'm <a href="#">Roel M. Dingle</a>,</p>
                        <p>a <strong>Filipino</strong> Web Developer </p>
                        <p>based in <strong>Manila</strong> .</p>
                        <p>&nbsp;&nbsp;&nbsp;<a href="#">I create</a> dynamic and highly efficient <strong>Websites</strong> and Web Based <strong>Systems</strong>.</p>
                        <br />
                        <p>&nbsp;&nbsp;&nbsp;Happy to <a href="">help</a> or <strong>assist</strong>.</p>
                    </div>
                </div>
                <div class="span3" style="border:4px dashed #cacaca;padding:2%;font-size:22px;">
                    
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">Html/Css</a></p>
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">JS/JQuery</a></p>
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">PHP/MySql</a></p>
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">Linux</a></p>
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">CMS</a></p>
                    <p><img src="images/icon_checked.png" class="img-circle" /> <a href="#">Version Control</a></p>
                  
                </div>
               
            </div> <!--/content head-->
            
            
        </div> <!-- /container -->
        
        <div id="push"></div>
        
    </div> <!-- /wrap -->
    
   
    
    <div class="container" id="footer" >
    
    <div class="row-fluid ">
        <div class=" span2" >
            <img src="images/me.jpg" class="img-circle"  />
        </div>
        <div class=" span3" style="text-align:left" >
            <p style="font-size:16px"><span class="icon icon-user"></span> 0910-3629974</p>
            <p style="font-size:16px"><span class="icon icon-envelope"></span> roel_dingle@yahoo.com</p>
        </div>
          
          
       <div class=" span7" >
           <a href="#" class="g-font-2" style="font-size:30px">Connect with me @</a>
           <img src="images/social/fb.png" style="width:50px;height:50px" />
           <img src="images/social/twitter.png" style="width:50px;height:50px" />
           <img src="images/social/gplus.png" style="width:50px;height:50px" />
           <img src="images/social/linked.png" style="width:50px;height:50px" />
      </div>
   </div>
   </div>
    
    
  </body>
</html>
