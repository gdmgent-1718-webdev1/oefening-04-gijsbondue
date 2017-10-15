
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>oefening 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php

    function welkWaardeType($var)
    {
      $string = "<p>De waarde is ".gettype($var).".</p> ";
      print $string;
    };

    $array =[1,2,3]; 

    welkWaardeType("test");
    welkWaardeType(true);
    welkWaardeType(10.3);        
    welkWaardeType(12);
    welkWaardeType($array); ?>
  </body>
</html>
