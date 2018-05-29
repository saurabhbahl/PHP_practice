<?php 
   function Factorial($number){
       if ($number >= 1){
        return $number*factorial($number-1);
       } else{
        return 1;
       }
   }
 
   function Ref(&$number){
       ++$number;
   }
   function RefStr(&$str){
       $str='Welcome';
   }
   
   function Add(&$num){
       
       return ++$num;
   }
   
   function &Display($p){
       
       $N=5;
       return $p;
   }
   
   function marks(&$number){
      $m=&$number;                 
     if($m>=35){
       return "Pass With Marks ".$m;
     }
     if($m>30 && $m<35){
         $m = $m+5;
        return "Grace Marks(5) With Marks".$m;
     }
     if($m<=30){
        return "Fail With Marks".$m;
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
            <?php 
                if(isset($_GET['submit']))
                {
                    $number=$_GET['number'];
//                    echo Factorial($number).'<br>'; 
//                   
//                    echo "<h3>Pass By Ref :- Ref Variable</h3>";
//                    Ref($number).'';
//                    echo $number."<br>";
//                    
//                   echo  $a = 1;
//                    $b = &$a;
//                    $b = $b + 5;
//                    echo "b is equal to $b, and a is equal to $a <br>";
//                    $b = $b + 5;
//                    echo "b is equal to $b, and a is equal to $a";
//
//                    
//                     echo "<h3>Pass By Ref :- Ref String</h3>";
//                    $str="Hello";
//                    RefStr($str).'';
//                    echo $str;
//                    
//                   echo Add(Display(7));
                   
                   
                   echo marks($number);
                       
                   //}

                }  
                
                   
                
            ?>
        <form action="">
            <input type="number" name="number" />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
