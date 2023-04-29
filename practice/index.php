
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat delectus voluptate labore rerum, voluptatum possimus. Porro consequuntur qui fugit error rerum veritatis optio magni, sint quae rem impedit obcaecati?
    </p>
    <?php
    echo "<br><br>Hellooooooo";
    echo "<br><h1> Varialbles</h1>";
    $v=3;
    echo "<br>the value of v is: ";

    echo "<br><h1>Operators</h1>";

    echo "<br><h2>Arithmetic Operators</h2>";
    echo "<br> +: ";
    echo $v+$v;

    echo "<br> -: ";
    echo $v-$v;

    echo "<br> *: ";
    echo $v*$v;
    
    echo "<br> /: ";
    echo $v/$v;

    echo "<br><h2>Assignment Operators</h2>";
    $new =$v;  
    echo"<br>the value of new : ";
    echo $v;
    echo"<br>the value of new+: ";
    echo $v+=5;
    echo"<br>the value of new-: ";
    echo $v-=2;
    echo"<br>the value of new *: ";
    echo $v*=6;
    echo"<br>the value of new /: ";
    echo $v/=2;
    
    echo "<br>" ;
    echo var_dump($v);
    
    echo "<br><h2>comparison Operators</h2>";    
    echo "<br>The value of v is: ";
    echo $v;
    echo "<br>The result of v==v is: ";
    echo var_dump($v==$v);
    echo "<br>The result of v!=v is: ";
    echo var_dump($v!=$v);
    echo "<br>The result of v<=v is: ";
    echo var_dump($v<=$v);
    echo "<br>The result of v>=v is: ";
    echo var_dump($v>=$v);
    echo "<br>The result of v<v is: ";
    echo var_dump($v<$v);
    echo "<br>The result of v>v is: ";
    echo var_dump($v>$v);
    
    echo "<br><h2>increment/Decrement Operators</h2>";  
    echo "<br>The value of v is: ";
    echo $v;
    echo "<br>The result of v++ is: ";
    echo $v++;
    echo "<br>The result of v-- is: ";
    echo $v--;
    echo "<br>The result of ++v is: ";
    echo ++$v;
    echo "<br>The result of --v is: ";
    echo --$v;
    
    echo "<br><h2>Logical Operators</h2>";
    echo "<br>The value of v is: ";
    echo $v;
    echo "<br>The result of and (&&) is: ";
    $v=(TRUE and FALSE);
    echo var_dump($v);
    echo "<br>The result of or (||) is: ";
    $v=(TRUE or FALSE);
    echo var_dump($v);
    echo "<br>The result of xor (^) is: ";
    $v=(TRUE xor FALSE);
    echo var_dump($v);
    echo "<br>The result of not (!) is: ";
    $v=(TRUE != FALSE);
    echo var_dump($v);

    echo "<br><h2>constant</h2>";
    define('p',3.14);
    $r=20;
    $result=p*$r*$r;
    echo "<br>The area is: ". $result;

    echo "<br><h2>if else condition</h2>";
    if($r==21)
    {
        echo "<br>The value is 21";
    }
    else if($r<21)
    {
        echo "<br>The value is less";
    }
    else
    {
        echo "<br>The value is grater";
        
    }
    
    echo "<br><h2>Arrays</h2>";
    $a=array(1,2,3,4,5);
    echo "The 3rd Element is: ". $a[3];

    echo "<br><h2>Loops</h2>";
    echo "<br><h4>for Loop</h4>";
    for($i=0;$i<count($a);$i++)
    {
        echo "<br>The element of ";
        echo $i ."is: ";
        echo $a[$i];
    }

    echo "<br><h4>while Loop</h4>";
    $i=0;
    while($i<count($a))
    {
        echo "<br>The element of ";
        echo $i ."is: ";
        echo $a[$i];
        $i++;
    }

    echo "<br><h4>do while Loop</h4>";
    $i=0;
    do
    {
        echo "<br>The element of ";
        echo $i ."is: ";
        echo $a[$i];
        $i++;
    }while($i<count($a));
    
    echo "<br><h4>foreach Loop</h4>";
    foreach($a as $re)
    {
        echo "<br>The element is: ";
        echo $re;
    }

    
    echo "<br><h2>functions</h2>";
    
    function sum($x,$y)
    {
        echo "<br>The sum of two value is: ". $x+$y;
    }
    sum(12,13);
    
    echo "<br><h2>String</h2>";
    $s="This is vs code. This is my code. This is my project.";
    echo $s;
    echo "<br>The string length: ". strlen($s);
    echo "<br>The string total word: ". str_word_count($s);
    echo "<br>The reverse string is: ". strrev($s);
    echo "<br>The string search is: ". strpos($s, "is");
    echo "<br>The string replace is: ". str_replace("is","at",$s);

    // echo $gen;
    ?>
<!-- 
<form action="index.php" method="post">
    <br><label for="">gender</label>
    <input type="radio" name="g" id="male">male
    <input type="radio" name="g" id="female">female
    
    <br>
    <input type="submit" value="submit">
</form> -->
<!--?php
    // echo "<br>The Gender Result is: ";
    
    // echo $_REQUEST['g'];
//   $gen= $_REQUEST['g'];
//   echo $gen;
    ?-->
    <!-- <br><br><br> -->
</body>
</html>

