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

    function keliling(){
        global $d, $phi;
        $k=$d*$phi;
        echo "keliling = phi * diameter <br>";
        echo "$k = $phi x $d <br><br>";
    }

    function luas(){
        global $r, $phi;
        $l=$r*$r*$phi;
        echo "luas = phi x r x r <br>";
        echo "$l = $phi x $r x $r<br><br>";
    }

    function volume(){
        global $r, $phi, $t;
        $v=0.33*4*$phi*$r*$r*$t;
        echo "volume = 4 x 1/3 x phi x r x r x t <br>";
        echo "$v = 4 x 1/3 x $phi x $r x $r x $t <br><br>";
    }

	keliling();
    luas();
    volume();
	?>

</body>
</html>