<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 style="text-align:center">Cycle Home Work</h1>
    <?php
//Task1
echo '<br><br><h2 style="text-align:center";>Task1</h2><br><br>';
echo 'A)<br><br>';

$star = '*';
$hintas = str_repeat($star, 400);
echo "<span style = \"word-break: break-word\">$hintas</span>";

echo '<br><br>B)<br>';
echo '<div style="text-align:center";>';
for($i = 0; $i < 400; $i++) {
    if($i%50 == 0) {
       echo '<br><br>';
    }
    echo $star;
}
echo '</div>';

//Task2
echo '<br><br><h2 style="text-align:center";>Task2</h2><br><br>';
$count = 0;
for($i = 0; $i < 300; $i++) {
    $random = rand(0, 300);
    if($random > 275){
        echo "<span style=\"color:red\"> $random</span>";
    } else {
        echo ' '.$random;
    }
    if($random > 150) {
        $count++;
    }
}
echo "<br><br>Skaičių, mažesniu nei 150 yra: $count";

//Task3
echo '<br><br><h2 style="text-align:center";>Task3</h2><br><br>';
$random = rand(3000, 4000);
echo "<br>Sugeneruotas skaičius: $random<br><br>Skaičiai kurie dalinasi is 77 be liekanos: <br>";
for($i = 0; $i < $random; $i++) {
    if($i < $random && $i > ($random - 78) && $i%77 == 0) {
        echo $i;
    }
    else if($i%77 == 0) {
        echo $i.', ';
    }
}
//Task4
echo '<br><br><h2 style="text-align:center";>Task4</h2><br>';

echo '<p style= "line-height: 0.8; text-align:center">';
for($i = 0; $i < 100 ;$i++) {
    if($i%10 == 0){
        echo '<br>';
        echo $star.' ';
    } else {
    echo $star.' ';
    }
}
echo '</p>';
//Task5
echo '<br><br><h2 style="text-align:center";>Task5</h2><br>';

echo '<p style= "line-height: 0.8; text-align:center">';
$laikinas = 0;
$eilesIlgis = 10; 
$laikinas2 = 9;
for($i = 0; $i < 100 ;$i++) {
    if($i%$eilesIlgis == 0){
        echo '<br>';
        if($i == $laikinas) { //is kaires i desine
            $laikinas += $eilesIlgis;
            $laikinas++;
            echo "<font color='red'>".$star.' '."</font>";
        }else if($i == $laikinas2) { //is desines i kaire
            $laikinas2 += $eilesIlgis;
            $laikinas2--;
            echo "<font color='red'>".$star.' '."</font>";
        } else {
       echo $star.' ';
       }
    } else {
        if($i == $laikinas) {
            $laikinas += $eilesIlgis;
            $laikinas++;
            echo "<font color='red'>".$star.' '."</font>";
        }
        else if($i == $laikinas2) {
            $laikinas2 += $eilesIlgis;
            $laikinas2--;
            echo "<font color='red'>".$star.' '."</font>";
        } else {
        echo $star.' ';
        }
    } 
}
echo '</p>';
//Task6
echo '<br><br><h2 style="text-align:center";>Task6</h2><br>';

echo '<br><br>Scenarijus A<br>';
$finish = false;
do{
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        $finish = true;
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
    }
}while(!$finish) ;
/*************************************/
echo '<br><br>Scenarijus B<br>';
$count = 0;
while($count < 3) {
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        $count++;
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
    }
}
/*************************************/
echo '<br><br>Scenarijus C<br>';
$newArr =[];
$end = false;
while(!$end) {
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        array_push($newArr, $coin);
        for ($i= 0; $i < count($newArr); $i++ ){
            for ($j = $i+1; $j < count($newArr) - 1; $j++){
                if($newArr[$j-1] == 'H' && $newArr[$j] == 'H' && $newArr[$j+1] == 'H'){
                    $end = true;
                    //break;
                }
            }
          }
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
        array_push($newArr, $coin);
    }
}

//Task7
echo '<br><br><h2 style="text-align:center";>Task7</h2><br>';

$Petras = 'Petras';
$Kazys = 'Kazys';
$PetroTaskai = 0;
$KazyoTaskai = 0;
$riba = false;
while(!$riba) {
if($PetroTaskai >= 222) {
    echo "***Žaidimo pabaiga*** <br>";
    echo "$Petras surinko $PetroTaskai tašku, $Kazys surinko $KazyoTaskai tašku. Žaidimą laimėjo: ".$Petras;
    $riba = true;
    } else if($KazyoTaskai >= 222) {
        echo "***Žaidimo pabaiga:*** <br>";
        echo "$Petras surinko $PetroTaskai tašku, $Kazys surinko $KazyoTaskai tašku. Žaidimą laimėjo:: ".$Kazys;
        $riba = true;
    } else {
        $KazyoPartija = rand(5, 25);
        $PetroPartija = rand(10, 20);
        if($PetroPartija > $KazyoPartija) {
            echo "$Petras surinko $PetroPartija tašku, $Kazys surinko $KazyoPartija tasku. Partija laimėjo: ".$Petras.'<br>';
        } else {
            echo "$Petras surinko $PetroPartija tašku, $Kazys surinko $KazyoPartija tasku. Partija laimėjo: ".$Kazys.'<br>';
        }
        $PetroTaskai += $PetroPartija;
        $KazyoTaskai += $KazyoPartija;
    }
}

//Task8
echo '<br><br><h2 style="text-align:center";>Task8</h2><br>';

echo '<pre style= "line-height: 0.8; text-align:center">';
$star = '*';
$totalRows = 21;
$centerPoint = ceil($totalRows / 2) ;
$totalStarInRow = 1;
for($i = 1; $i <= $totalRows; $i++) {
    for($a = 1; $a <= $totalStarInRow; $a++) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        echo "<font color='rgb($r, $g, $b)'>$star</font>";
       if($a < $totalStarInRow) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
            echo "<font color='rgb($r, $g, $b)'>$star</font>";
        }
    }
    echo '<br>';
    if($i < $centerPoint) {
        $totalStarInRow += 1;
    } else {
        $totalStarInRow -= 1;
    }
}
echo '</pre>';
//Task9
echo '<br><br><h2 style="text-align:center";>Task7</h2><br>';

$tStart = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$tEnd = microtime(true);
$tRez = $tEnd - $tStart;
echo "Dvigubu kabučių rezultatas: $tRez sec.<br>";
echo "Dvigubu kabučių rezultatas suapvalintas iki 4 skaičių po kablelio: ".round($tRez, 4).' sec.<br>';
echo '<br><br>';
$tStart2 = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$tEnd2 = microtime(true);
$tRez2 = $tEnd2 - $tStart2;
echo "Viengubu kabučiu rezultatas: $tRez2 sec.<br>";
echo "Viengubu kabučių rezultatas suapvalintas iki 4 skaičių po kablelio: ".round($tRez2, 4).' sec.<br>';


//Task10
echo '<br><br><h2 style="text-align:center";>Task10</h2><br>';
$vinis = 850;
$riba = ($vinis * 5);
$kiekIkalta = 0;
$smugiuKiekis = 0;
while($kiekIkalta <= $riba) {
    $mazasSmugis = rand(5, 20);
    $kiekIkalta += $mazasSmugis;
    $smugiuKiekis++;
}
echo "<br>Scenarijus A) Kad įkalti penkias vinis po 8.5cm reikės $smugiuKiekis mažu smūgiu<br><br>";

$kiekIkalta2 = 0;
$smugiuKiekis2 = 0;
while($kiekIkalta2 <= $riba) {
    $random = rand(0, 1);
    if($random == 0) {
        $didelisSmugis = rand(20, 30);
    } else {
        $didelisSmugis = 0;
    }
    $kiekIkalta2 += $didelisSmugis;
    $smugiuKiekis2++;
}
echo "<br>Scenarijus B) Kad įkalti penkias vinis po 8.5cm reikės $smugiuKiekis2 dideliu smūgiu<br><br>";

//Task11
echo '<br><br><h2 style="text-align:center;";>Task11</h2><br>';
$tusciasStr = "";
for($i = 0; $i < 50; $i++) {
    $randomSk = rand(1, 200);
    $flag = true;
        while($flag) { 
            if(str_contains($tusciasStr, $randomSk)) { 
                $randomSk = rand(1, 200);
        } else {
        $tusciasStr .= $randomSk;
        $flag = false;
        }
    }
    if ($i !== 49) {
        $tusciasStr .= ' ';  
    }
}
//Uzpildytas stringas
echo "<span style = \"word-break: break-word\">$tusciasStr</span><br><br>";

$sveikuSkaiciuStr ="";
$arr = explode(" ", $tusciasStr);
$length = count($arr);
for($i = 0; $i < $length; $i++) {
    $arSimple = true;
    for($x = 2; $x < $arr[$i] - 1; $x++) {
        if($arr[$i]%$x === 0) {
            $arSimple = false;
            break;
        }
    }
    if($arSimple) {
        if($i == $length - 1) {
            $sveikuSkaiciuStr .= $arr[$i];
        } else {
        $sveikuSkaiciuStr .= $arr[$i].' ';
        }
    }
    /*    // funkcija kuri patikrina ar skaicius yra paprastas. Grazina 2 jei paprastas, 1 jei gal paprastas, 0 jei sudetinis.
    $arPaprastas = gmp_prob_prime($arr[$i], 10);
    if($arPaprastas == 2) {
        if($i == $length - 1) {
            $sveikuSkaiciuStr .= $arr[$i];
        } else {
        $sveikuSkaiciuStr.= $arr[$i].' ';
        }
    }
*/
}
echo "<br><br>Paprastu skaiciu stringas: $sveikuSkaiciuStr<br><br>";
$arr2 = explode(" ", $sveikuSkaiciuStr);
$length2 = count($arr2); 
for($i = 0; $i <$length2; $i++) {
    for($j = 0; $j < $length2; $j++) {
        if($arr2[$j] > $arr2[$i]) {
            $temp = $arr2[$i];
            $arr2[$i] = $arr2[$j];
            $arr2[$j] = $temp;
        }
    }
}
print_r("Surusiotas paprastu skaiciu stringas:".implode (' ', $arr2));
?>
</body>
</html>