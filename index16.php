<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      
      $myArray = array('happy','angry','sad');
      
      echo $myArray[0]; 
      
      foreach($myArray as $value=>$last) {
          
          echo $value." ".$last."<br /> "; 
          
          }
      
     
      ?>
    </p>
  </body>
</html>
