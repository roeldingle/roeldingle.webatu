<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $aData['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/libs/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/libs/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/libs/queryLoader.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
   
    
    <script type="text/javascript">
        var Data = '<?php echo json_encode($aData); ?>';
    </script>
    
  </head>
  <body class="body-preload">
   <!--wrap -->
    <div id="wrap">
    
        <!-- container -->
        <div class="container">
    
            <!--header-->
            <div class="row-fluid" id="header">
                <a href="javascript:location.reload();">
                    <div class="span12">
                        <h1><?php echo $aData['title']; ?><small class="g-font-2">Web Developer</small></h1>
                    </div>
                </a>
            </div> <!--/header-->
            
             <!--content head-->
            <div class="row-fluid" >
                <div class="span9" id="content">
                     <div class="lead" id="real-content" >

                      <!--index-->
                      <div class="contents-menu" id="index-menu" >
                        <p>&nbsp;&nbsp;&nbsp;Hi there !
                        I'm <a href="javascript:void(0);" class="menu-nav" title="profile" >Roel M. Dingle</a>,</p>
                        <p>a <strong>Filipino</strong> Web Developer </p>
                        <p>based in <strong>Manila</strong> .</p>
                        <p>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="menu-nav" title="works" >I create</a> dynamic and highly efficient <strong>Websites</strong> and Web Based <strong>Systems</strong>.</p>
                        <br />
                        <p>&nbsp;&nbsp;&nbsp;Happy to <a href="javascript:void(0);" class="menu-nav" title="services">help</a> or <strong>assist</strong>.</p>
                      </div>

                      <!--profile-->
                      <div class="contents-menu" id="profile-menu">
                        <p><a href="#">About Me</a></p>
                          <?php foreach($aData['profile'] as $profile){ ?>
                          <hr />
                          <div class="row-fluid" >
                            <div class="span2" style="text-align:right;" >
                              <img src="images/<?php echo $profile['image']; ?>" class="img-polaroid">
                            </div>
                            <div class="span10" >
                              <h1><strong><?php echo $profile['label']; ?></strong></h1>
                              <p style="font-size:14px"><?php echo $profile['content']; ?>
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          <div class="span10 back"><a href="javascript:void(0);" class="menu-nav" title="index" > <h2>&#171;Back</h2></a></div>
                        </div>

                        <!--works-->
                        <div class="contents-menu" id="works-menu">
                          <p><a href="#">My Works</a></p>

                          <?php foreach($aData['works'] as $works){ ?>
                          <hr />
                          <div class="row-fluid" >
                            <div class="span12" >
                              <h2><strong><?php echo $works['title']; ?></strong></h2>
                            </div>
                          </div>
                          <div class="row-fluid" >
                            <div class="span6" >
                              <span style="font-size:14px;">
                                &nbsp;&nbsp;<?php echo $works['desc']; ?>
                              </span>
                              <p style="font-size:14px;"><a href="<?php echo $works['git']; ?>" target="_blank">See source</a></p>
                            </div>

                            <div class="span6" style="text-align:right;" >
                              <div class="row-fluid" >
                                <ul class="thumbnails">
                                        <li class="span6">
                                          <a class="mylightbox" href="images/my_work/<?php echo $works['image1']['src']; ?>" >
                                          <div class="thumbnail">
                                           <img src="images/my_work/<?php echo $works['image1']['src']; ?>">
                                            <div class="caption">
                                              <h3><?php echo $works['image1']['label']; ?></h3>
                                            </div>
                                          </div>
                                          </a>
                                        </li>
                                        <li class="span6">
                                          <a class="mylightbox" href="images/my_work/<?php echo $works['image2']['src']; ?>" >
                                          <div class="thumbnail">
                                            <img src="images/my_work/<?php echo $works['image2']['src']; ?>">
                                            <div class="caption">
                                              <h3><?php echo $works['image2']['label']; ?></h3></p>
                                            </div>
                                          </div>
                                          </a>
                                        </li>
                                      </ul>
                              </div>
                            </div>
                          </div>
                          <?php } ?>

                          <div class="span10 back"><a href="javascript:void(0);" class="menu-nav" title="index" > <h2>&#171;Back</h2></a></div>
                        </div>


                        <!--services-->
                        <div class="contents-menu" id="services-menu">
                          <p><a href="#">Services</a></p>
                          <hr />
                          <div style="text-align:center;">
                          <p><strong>Web based system</strong></p>
                          <p><strong>Personal websites</strong></p>
                          <p><strong>Business sites</strong></p>
                          <p><strong>School Thesis</strong></p>
                          </div>
                          <div class="span10 back"><a href="javascript:void(0);" class="menu-nav" title="index" > <h2>&#171;Back</h2></a></div>

                        </div>




                    </div>
                </div>
                <div class="span3" style="border:4px dashed #cacaca;padding:2%;font-size:22px;">
                
                    <!--loop skills-->
                     <?php foreach($aData['skills'] as $skills){ ?>
                        <p><img src="images/icon_checked.png"  />
                            <a href="#">
                            <?php echo $skills;?>
                            </a>
                        </p>
                    <?php } ?>


                </div>
               
            </div> <!--/content head-->
            
            
        </div> <!-- /container -->
        <div id="push"></div>
        
        <div class="container" id="footer">
    
        <div class="row-fluid " >
            <div class="span2">  
                <img src="images/me.jpg" class="img-circle img-polaroid"   />
            </div>
            <div class="span10" style="text-align:left;font-size:20px;" >
                <p><a href="#" >Let's get in touch</a></p><br />
                
                <!--loop social-->
                 <?php foreach($aData['social'] as $social){ ?>
                    <a href="<?php echo $social['link'];?>" target="_blank" class="web-icons" >
                        <img src="<?php echo $social['image'];?>" class="img-rounded" />
                    </a>
                    
                 <?php } ?>
                
            </div>
            
            
        
        </div>

        <div class="row-fluid ">
            <div   style="text-align:right"> 
               <small>Copyright <abbr title="Copyright">&#169;</abbr>
                <?php echo date("Y")." ".$aData['title']; ?>
            </small> 
            </div>
        </div>
       
    </div> <!-- /wrap -->
  </body>

  <script  src="js/libs/jquery/jquery.min.js"></script>
  <script src="js/libs/jquery.queryloader2.js" type="text/javascript"></script>
  <script  src="js/_index.js"></script>
  

</html>