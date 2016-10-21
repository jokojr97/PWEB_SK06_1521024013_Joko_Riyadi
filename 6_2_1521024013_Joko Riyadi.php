<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 6_1 joko</title>
</head>
<body>
  
	<?php
    $d=13;
    $phi=3.14;
    $r=0.5*$d;
    $t=24;
    $s=15;
    $p=6;
    $l=8;


    function kelilingling(){
        global $d, $phi;
        $k=$d*$phi;
        echo "keliling = phi * diameter <br>";
        echo "$k = $phi x $d <br><br>";
    }

    function luasling(){
        global $r, $phi;
        $L=$r*$r*$phi;
        echo "luas = phi x r x r <br>";
        echo "$L = $phi x $r x $r<br><br>";
    }

    function volumebola(){
        global $r, $phi, $t;
        $v=0.33*4*$phi*$r*$r*$t;
        echo "volume = 4 x 1/3 x phi x r x r x t <br>";
        echo "$v = 4 x 1/3 x $phi x $r x $r x $t <br><br>";
    }

    function kelilingp(){
        global $s;
        $k=$s*4;
        echo "keliling = 4 x s<br>";
        echo "$k = 4 x $s <br><br>";
    }

    function luasp(){
        global $s;
        $L=$s*$s;
        echo "luas = s x s<br>";
        echo "$L = $s x $s <br><br>";
    }


    function volumekub(){
        global $s;
        $v=$s*$s*$s;
        echo "volume = s x s x s<br>";
        echo "$v = $s x $s x $s <br><br>";
    }

    function kelilingpp(){
        global $p, $l, $t;
        $k=2*($p+$l);
        echo "keliling = 2(p + l)<br>";
        echo "$k = 2($p + $l) <br><br>";
    }

    function luaspp(){
        global $p, $l, $t;
        $L=$p*$l;
        echo "luas = p x l<br>";
        echo "$L = $p x $l <br><br>";
    }

    function volumebal(){
        global $p, $l, $t;
        $v=$p*$l*$t;
        echo "volume = p x l x t<br>";
        echo "$v = $p x $l x $t <br><br>";
    }

    echo "<h1>lingkaran</h1>";
    echo "<b>d = $d <br> phi = $phi <br> r = $r <br> t = $t <br><br></b>";
	kelilingling();
    luasling();
    volumebola();
    echo "<hr>";
    echo "<h2>Persegi</h2>";
    echo "<b>s = $s <br><br></b>";
    kelilingp();
    luasp();
    volumekub();
    echo "<hr>";
    echo "<h3>persegi panjang</h3>";
    echo "<b>p = $p <br> l = $l <br> t = $t <br><br></b>";
    kelilingpp();
    luaspp();
    volumebal();
    echo "<hr>";

	?>

</body>
</html>