<?php
include 'travel-data-classes.php';

asort($countries);

// we will display the filtered array
$filtered = array();

// first see if we should filter the countries
if (isset($_GET['country'])) {
    
    // loop thru each image in dataset and see if its country matches request
    foreach ($images as $img) {
        if ($img['country'] == $_GET['country']) {
            // we have a match so add that image to filtered array
            $filtered[$img['id']] = $img;
        }
    }

}
else {
    // no filter was specified so show all images in dataset
    $filtered = $images;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 13</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />

</head>

<body>
    <?php include 'header.inc.php'; ?>
    


    <!-- Page Content -->
    <main class="container">
     
                                    
        <div class="btn-group countryButtons" role="group" aria-label="...">
          <a role="button" class="btn btn-default" href="list.php">All</a>
          <?php foreach ($countries as $key => $value) { ?> 
              <a href="#" role="button" class="btn btn-default"> <?php echo $value; ?></a>
          <?php } ?>     
        </div>                
           
        

		<ul class="caption-style-2">
          <?php foreach ($filtered as $img) { ?>
			<li>
			    
			    <?php echo $img; ?> 

			</li>        
          <?php } ?>
       </ul>       

      
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
        

    </footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>