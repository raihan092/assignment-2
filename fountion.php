 <?php
 //task 1
 function agecal ($age) {
     if ($age >=50);
     return " You are {$age} years old, you are old ";
 }
echo agecal (35);
?>
<br>
<?php
//task 2
function area ($type, $length, $width=null){
    if ($type== 'r'){
        $area= ($length*$width);
        return "area of this rectengular is = {$area}";
    }
    else if ($type=='y'){
        $area=($length*$length);
        return "area of this square = {$area}";
    }
    else if ($type=='z'){
        $area=(.5*$length*$width);
        return "area of this triangle is ={$area} ";
    }
    else if ($type== 'o'){
        $area= (3.1416*($length*$length));
        return "area of this circle is ={$area} ";
    }
}
echo area ('o', 100);
?>
<br>


<?php
//task 5
function heading ($txt,$type,$font='impact',$size='50px',$color='#adadad'){
    return "<{$type} style=\" color:{$color}; font-family:{$font}; font-size:{$size};\">{$txt}</{$type}<br>";
}
echo heading ('we are developer', 'h3');
?>
<br>

<?php
//task 6
function bmi ($height, $weight){
$bmi=$weight/($height*$height);
return $bmi;
}

if ($bmi<= 18.5){
    $output="under weight";
} else if ($bmi>18.5 and $bmi<=24.9){
    $output="normal Weight";
} elseif ($bmi>24.9 and $bmi<=29.9){
    $output="over weight";
} elseif ($bmi>=30){
    $output="Very Over weight";
}
echo "your BMI value is". $bmi . "and you are: {$output}";
echo "(25,75)";
?>
<?php
//task 8
function color ($color, $txt){
    if ($color=='red'){
        return "<h2 style=\"color: #F01717\";>". $txt . "</h2>";
    } elseif ($color== 'green'){
        return "<h2 style=\"color: #1ADB81\";>". $txt . "</h2>";
    } elseif ($color== 'blue'){
        return "<h3 style=\"color: #250FB2\";>". $txt . "</h3>";
    } elseif ($color== 'yellow'){
        return "<h3 style=\"color: #DDF50C\";>". $txt . "</h3>";
    } elseif ($color=='Violet'){
        return "<h3 style=\"color: #D60CF5\";>". $txt . "</h3>";
    }
}
echo color ('red','Bangladesh is a nice country');
?>
<?php
 //task 7
 function currency($amount, $type){
     if($type=='dollar'){
         $bdt=$amount*86.61;
         return "{$amount}USD = {$bdt} TK ";
     }
    else if ($type=='canadian dollar'){
        $bdt=$amount*67.58;
        return "{$amount} canadian dollar = {$bdt} TK ";
    }
    else if ($type== 'pound'){
        $bdt=$amount*113.22;
        return "{$amount} Pound sterling = {$bdt} TK ";
    }
 }
echo currency (600, 'pound');
?>
<br>
<?php 
//task 11
function image($src, $w='auto',$h='auto'){
    echo "<img src=\"{$src}\" alt=\"\">";
}
image ('recent.jpeg')
?>