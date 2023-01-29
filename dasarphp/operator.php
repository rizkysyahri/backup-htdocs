<?php
    echo "<h4>Latihan Operator Pada PHP</h4>";

    $angka = 20;

    echo "Nilai Variabel Angka Adalah : ".$angka;
    echo "<br>";

    $angka++;
    echo "Variabel angka jika dilakukan increment adalah : ".$angka;
    echo "<br>";

    $angka--;
    $angka--;
    echo "Variabel angka jika dilakukan increment adalah : ".$angka;
    echo "<br>";

    if($angka > 10)
    {
        echo "Nilai di atas 10";
    }
    else
    {
        while($angka<=10)
        {
            $angka++;
        }
    }
    echo "<br>";
    echo "Variabel angka setelah dialkukan operasi increment loop adalah : ".$angka;
    echo "<br>";


    echo "mengulangi Tulisan 500 kali <br>";

    for($x=1;$x<=500;$x++)
    {
        echo $x.". Ini Adalah Kalimat ke - ".$x;
        echo "<br>";
    }
?>