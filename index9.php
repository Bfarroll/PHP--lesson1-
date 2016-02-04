<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        
        class Bicycle extends Vehicle {
            
            public function honk() {
                
                return "Beep beep!";
                
                }
            }
         
        $bicycle = new bicycle(); 
        echo $bicycle->honk(); 
        
        ?>
    </p>
  </body>
</html>
