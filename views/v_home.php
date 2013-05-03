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
    
    <?php $aData = json_encode($aData,true); ?>
    <script type="text/javascript">
        var Data = '<?php echo $aData; ?>';
    </script>
    
  </head>
  <body>
  
  </body>

  <script data-main="js/application/bootstrap" src="js/libs/require/require.js"></script>
  
</html>
