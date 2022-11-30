<?php 

    $a = [10,20,20,10,10,30,50,10,20];

    sort($a);
    $counter = 0;
    $new_a = array_count_values($a);
    foreach ($new_a as $value) {
        $counter = $counter + (floor($value / 2));
    }

    echo "<br>hasil nomor 1 bagian a : " . $counter; 

    $b = [6,5,2,3,5,2,2,1,1,5,1,3,3,3,5];

    sort($b);
    $counter_b = 0;
    $new_b = array_count_values($b);
    foreach ($new_b as $value) {
        $counter_b = $counter_b + (floor($value / 2));
    }

    echo "<br>hasil nomor 1 bagian b : " . $counter_b; 


    $c = [1,1,3,1,2,1,3,3,3,3];

    sort($c);
    $counter_c = 0;
    $new_c = array_count_values($c);
    foreach ($new_c as $value) {
        $counter_c = $counter_c + (floor($value / 2));
    }

    echo "<br>hasil nomor 1 bagian c : " . $counter_c;

    $d = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan";
    if (preg_match_all("/[^a-zA-Z]+/", $d, $matches)) {

        $n = 0;

        foreach ($matches[0] as $val) {
            if ($val == " ") {
                $n += 1;
            }
        }

        print "<br>hasil nomor 2 bagian a : " . $n;
    }
    $e = "Berapa u(mur minimal[ untuk !mengurus ktp?";

    if (preg_match_all("/[^a-zA-Z]+/", $e, $matches)) {

        $n_e = 0;

        foreach ($matches[0] as $val) {
            if ($val == " ") {
                $n_e += 1;
            }
        }

        print "<br>hasil nomor 2 bagian b : " . $n_e;
    }
    $f = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";

    if (preg_match_all("/[^a-zA-Z]+/", $f, $matches)) {
        $n_f = 0;

        foreach ($matches[0] as $val) {
            if ($val == " ") {
                $n_f += 1;
            }
        }

        print "<br>hasil nomor 2 bagian c : " . $n_f;
    }


?>