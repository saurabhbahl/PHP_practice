<?php 
   function Factorial($number){
       if ($number >= 1){
        return $number*factorial($number-1);
       } else{
        return 1;
       }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Pass By Value :- Primary number</h3>
        <b>
            <?php 
                if(isset($_GET['submit']))
                {
                    $number=$_GET['number'];
                    echo Factorial($number).'<br>';    
                }  
            ?>
        </b>
        <form action="">
            <input type="number" name="number" />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
