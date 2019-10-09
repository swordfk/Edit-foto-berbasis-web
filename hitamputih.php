<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <style type="text/css">
            .container {
                width: 800px;
                margin: 0 auto;
            }
            .header {
                background-color:white;
                min-height: 50x;
                text-align: center;
            }
            .footer {
                background-color: lightseagreen;
                min-height: 50px;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
<body>
<?php
    $c=50;
    $asli=imagecreatefromjpeg("billiard.jpg");
    $lebar=imagesx($asli);
    $tinggi=imagesy($asli);

    $baru=imagecreatetruecolor($lebar, $tinggi);
    
    for ($x=0; $x<$lebar; $x++){
        for ($y=0; $y<$tinggi; $y++){
            $pixelaslli=imagecolorat($asli,$x,$y);
            $cols=imagecolorsforindex($asli, $pixelaslli);
            $r=$cols['red'];
            $g=$cols['green'];
            $b=$cols['blue'];

            $fs=($r+$g+$b)/3;

            if ($fs >= 127){$fs=255;}
            if ($fs < 0){$fs=0;}

            $warna=imagecolorallocate($baru, $fs,$fs,$fs);
            imagesetpixel($baru,$x,$y,$warna);
        }
    }

    imagejpeg($baru, "hasil.jpg", 75);
?>
    <div class="container">
        <div class="header">
            <h2>Pengolahan Citra Digital</h2>
        <div class="Logo">
            <img src="hasil.jpg" width="400" height="450">
        </div>
    </div>
</body>
</html>