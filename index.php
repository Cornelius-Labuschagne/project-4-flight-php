<?php
require 'flight/Flight.php';

function calculate($file, $year, $month, $day, $cover){
    $DELIM = "/";
    $dob = $year."-".$month."-".$day;
    $c_amount = $cover;
    $premium_rate = 0 ;

    // concatenating into custom format to re-use previous code
    $custom_date =$day."/".$month."/".$year;
    //exploding string
    $custom_date = explode("/", $custom_date);
    //calculating the age of the client
    $age = (date("md", date("U", mktime(0, 0, 0, $custom_date[0], $custom_date[1], $custom_date[2]))) > date("md") ? ((date("Y") - $custom_date[2]) - 1) : (date("Y") - $custom_date[2]));

    // calculating the premium for 7500 cover range
    if( $cover  == 7500 && $age >= 18 && $age <= 34 ){
        $premium_rate = 55;
    }
    if( $cover  == 7500 && $age >= 35 && $age <= 39 ){
        $premium_rate = 61;
    }
    if( $cover  == 7500 && $age >= 40 && $age <= 44 ){
        $premium_rate = 72;
    }
    if( $cover  == 7500 && $age >= 45 && $age <= 49 ){
        $premium_rate = 77;
    }
    if( $cover  == 7500 && $age >= 50 && $age <= 54 ){
        $premium_rate = 83;
    }
    if( $cover  == 7500 && $age >= 55 && $age <= 59 ){
        $premium_rate = 88;
    }
    if( $cover  == 7500 && $age >= 60 && $age <= 64 ){
        $premium_rate = 94;
    }

    // calculating the premium for 10000 cover range
    if( $cover  == 10000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 66;
    }
    if( $cover  == 10000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 72;
    }
    if( $cover  == 10000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 77;
    }
    if( $cover  == 10000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 83;
    }
    if( $cover  == 10000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 88;
    }
    if( $cover  == 10000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 94;
    }
    if( $cover  == 10000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 99;
    }

    // calculating the premium for 15000 cover range
    if( $cover  == 15000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 77;
    }
    if( $cover  == 15000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 83;
    }
    if( $cover  == 15000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 94;
    }
    if( $cover  == 15000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 99;
    }
    if( $cover  == 15000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 110;
    }
    if( $cover  == 15000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 127;
    }
    if( $cover  == 15000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 149;
    }

    // calculating the premium for 20000 cover range
    if( $cover  == 20000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 88;
    }
    if( $cover  == 20000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 121;
    }
    if( $cover  == 20000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 127;
    }
    if( $cover  == 20000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 138;
    }
    if( $cover  == 20000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 149;
    }
    if( $cover  == 20000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 154;
    }
    if( $cover  == 20000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 165;
    }

    // calculating the premium for 25000 cover range
    if( $cover  == 25000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 99;
    }
    if( $cover  == 25000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 138;
    }
    if( $cover  == 25000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 149;
    }
    if( $cover  == 25000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 154;
    }
    if( $cover  == 25000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 165;
    }
    if( $cover  == 25000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 176;
    }
    if( $cover  == 25000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 204;
    }

    // calculating the premium for 30000 cover range
    if( $cover  == 30000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 121;
    }
    if( $cover  == 30000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 143;
    }
    if( $cover  == 30000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 154;
    }
    if( $cover  == 30000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 165;
    }
    if( $cover  == 30000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 176;
    }
    if( $cover  == 30000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 187;
    }
    if( $cover  == 30000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 220;
    }

    // calculating the premium for 40000 cover range
    if( $cover  == 40000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 171;
    }
    if( $cover  == 40000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 187;
    }
    if( $cover  == 40000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 198;
    }
    if( $cover  == 40000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 226;
    }
    if( $cover  == 40000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 259;
    }
    if( $cover  == 40000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 275;
    }
    if( $cover  == 40000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 308;
    }

    // calculating the premium for 50000 cover range
    if( $cover  == 50000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 187;
    }
    if( $cover  == 50000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 226;
    }
    if( $cover  == 50000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 253;
    }
    if( $cover  == 50000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 259;
    }
    if( $cover  == 50000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 275;
    }
    if( $cover  == 50000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 319;
    }
    if( $cover  == 50000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 374;
    }

    // calculating the premium for 75000 cover range
    if( $cover  == 75000 && $age >= 18 && $age <= 34 ){
        $premium_rate = 274;
    }
    if( $cover  == 75000 && $age >= 35 && $age <= 39 ){
        $premium_rate = 330;
    }
    if( $cover  == 75000 && $age >= 40 && $age <= 44 ){
        $premium_rate = 352;
    }
    if( $cover  == 75000 && $age >= 45 && $age <= 49 ){
        $premium_rate = 374;
    }
    if( $cover  == 75000 && $age >= 50 && $age <= 54 ){
        $premium_rate = 403;
    }
    if( $cover  == 75000 && $age >= 55 && $age <= 59 ){
        $premium_rate = 466;
    }
    if( $cover  == 75000 && $age >= 60 && $age <= 64 ){
        $premium_rate = 550;
    }

    Flight::json(array("input" => array(
        "dob" => $dob,
        "cover" => $c_amount
    ),
    "output" => array(
        "premium" => $premium_rate
    )));
}

Flight::route('GET (/@file(/@year(/@month(/@day(/@cover)))))', 'calculate');

Flight::start();

