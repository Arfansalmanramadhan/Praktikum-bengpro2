<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link rel="stylesheet" href="css.css">
    <!-- <style>
        h2 {
            color: red;
        }
    </style> -->
</head>

<body bgcolor="aqua">

    <p>Selamat datang di webiste kami</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo id quas numquam quisquam doloribus impedit
        similique
        facere eum, animi eos exercitationem modi asperiores reiciendis, saepe commodi quae culpa, voluptas dolorem.</p>
    <h1 class="judul">ini hari Selasa</h1>
    <h1 id="judul">ini hari Selasa</h1>

    <h2>besok hari rabu</h2>
    <p align="center">HTML bukanlah bahasa pemroframan</p>
    <p align="rigth">HTML (Hypertext markup languang)</p>
    <p align="left">Aksik</p>

    <p><b>arfan</b></p>
    <p><i>Salman</i></p>
    <p><u>Ramadhan</u></p>
    <h1>ini Adalah hearding 1</h1>
    <h2>ini Adalah hearding 2</h2>
    <h3>ini Adalah hearding 3</h3>
    <h4>ini Adalah hearding 4</h4>
    <h5>ini Adalah hearding 5</h5>
    <h6>ini Adalah hearding 6</h6>
    <h4>ini Adalah bilangan berpanhkat <sup>2</sup></h4>
    <h4>O <sub>2</sub></h4>

    <h4>My Github</h4>
    <p><a href="https://github.com/Arfansalmanramadhan" target="_blank">MY Github</a></p>

    <h4>Berikut ini adalah list matkul d3tt</h4>
    <ol type="1">
        <li>Elektromagnetika</li>
        <li>BengPro</li>
        <li>Matematika 2</li>
    </ol>
    <ol type="i">
        <li>Elektromagnetika</li>
        <li>BengPro</li>
        <li>Matematika 2</li>
        <li>Matematika 1</li>
    </ol>
    <h4>Nama <sup>2</sup> Bahasa pemrograman</h4>
    <ul>
        <li>Javascipt</li>
        <li>PHP</li>
        <li>JAVA </li>
        <li>DLL </li>
    </ul>

    <table border="2" bgcolor="white" cellspacing="0" cellpadding="5" class="tabel1">
        <tr bgcolor="red" class="tabel3">
            <td rowspan="2" class="tabel2"><img src="ARFAN_TUGAS1_DONE.jpg" alt=" nilai Arfan" srcset=""
                    class="gambar1"></td>
            <td class="tabel2">kelas</td>
            <td class="tabel2">NIM</td>
            <td class="tabel2">NIM</td>
            <td class="tabel2">NIM</td>
        </tr>

        <tr class="tabel3">
            <td>Arfan</td>
            <td>46-03</td>
            <td>6705220003</td>
            <td>6705220003</td>
        </tr>
        <tr bgcolor="green">
            <td>lucky</td>
            <td>46-03</td>
            <td>6705220004</td>
            <td>46-03</td>
            <td>6705220004</td>
        </tr>

    </table>
    <p>ini Adalah gambar</p>
    <img src="ARFAN_TUGAS1_DONE.jpg" alt=" nilai Arfan" srcset="" class="gambar1">
    <?php
         echo "-------------------------------<br><br>";
         $tipedataintv = 2;
         $tipedatafloat = 2.5;
         $tipedataString = "Bengkel pemrograman";
         $tipedataboolean1 = true;
         $tipedataboolean2 = false;
         $iniVariabel = "55";

         echo gettype($tipedataintv), "<br>";
         echo gettype($tipedatafloat), "<br>";
         echo gettype($tipedataString), "<br>";
         echo gettype($tipedataboolean1), "<br>";
         echo gettype($tipedataboolean2), "<br>";
         echo gettype($iniVariabel), "<br>";
         
         echo "-------------------------------<br><br>";
         
         $nama = ["Arfan", "Salman", "Ramadhan", "APP"];
         $biota = [
            [
                "Nama" => "arfan Salman Ramadhan",
                "NIM" => "6705220003",
                "Email" => "arfan@gmai.com"
            ],
            [
                "Nama" => "Alan Salman Ramadhan",
                "NIM" => "6705220004",
                "Email" => "alan@gmai.com"
            ],
        ];

        echo $nama[0];
        echo "<br>";
        echo "Nama :";
        echo $biota[0]["Nama"];
        echo "<br>NIM";
        echo  $biota[0]["NIM"];
        echo "<br>e-mail";
        echo  $biota[0]["Email"];
        echo "<br><br>";

        echo "-------------------------------<br><br>";
        
        $a = 10;
        $b = 5;
        $c = $a+$b;
        $d = $a-$b;
        $e = $a*$b;
        $f = $a/$b;
        $g = $a%$b;

        echo "perjumlahan  $a + $b=$c<br>";
        echo "pengurangan  $a - $b=$d<br>";
        echo "perkalian  $a * $b=$e<br>";
        echo "pembagian  $a / $b=$f<br>";
        echo "modulus  $a % $b=$g<br>";

        echo $a+$b. "<br>";
        echo "-------------------------------<br><br>";
        
        if($a>$b):
            echo "$a>$b Pernyataan ini benar <br>";
            else :
                echo "$a<$b Pernyataan ini salah <br>";
            endif;


        echo "-------------------------------<br><br>";
        
        $x = "Arfan Salman";
        for ($i =1; $i<=5; $i++):
            echo $x, "<br>";
        endfor;
        echo "<br>";
        echo "-------------------------------<br><br>";
        $A = 12;
        switch ($A){
            case 0 ;
                echo "angka 0";
                break;
            case 1 ;
            echo "angka 1";
            break;
            case 2 ;
            echo "angka 2";
            break;
            case 3 ;
                echo "angka 3";
                break;
            case 4 ;
                echo "angka 4";
                break;
            case 5 ;
            echo "angka 5";
                break;
                case 6 ;
                echo "angka 6";
                break;
            case 7 ;
            echo "angka 7";
            break;
            case 8 ;
            echo "angka 8";
            break;
            case 9 ;
            echo "angka 9";
                break;
                case 10 ;
                echo "angka 10";
                break;
            case 3 ;
                echo "angka 3";
                break;
            }
            echo "-------------------------------<br><br>";
            $nilai = 50;
            if ($nilai>= 80):
                echo "nILAI A ";
            elseif  ($nilai>=70):
                echo "nilai B";
            elseif ($nilai>=60):
                echo "nilai C";
            else:
                echo "Nilai D";
            endif;

         ?>
         <form method="get" action="index.php">
            <label class="form1">
                Nama <br>
                <input type="text" name="username" class="form2">
            </label><br>
            <label class="form1">
                Habi <br>
                <input type="text" name="username" class="form2">
            </label>
         </form>
         <table border=1 width=100%>
            <tr>
                <td align=center>Nama</td>
                <td align=center>hobi</td>
            </tr>
            <tr>
                <td align=center>
                    <?php
                         echo $_GET['nama01'];
                    ?>
                </td>
                <td align=center>
                <?php
                         echo $_GET['hobi01'];
                    ?>
                </td>
            </tr>
         </table>
</body>

</html>