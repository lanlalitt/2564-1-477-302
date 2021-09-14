<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <?php
        $txt1 = "I am";
        $age = 40;
        $txt2 = "year old.";
        $_txt1 = "";
        $chk = true;

        if ($chk) {
            //true
        } else {
            //false
        }
        echo $txt1 , $age , $txt2;
        echo "<div style='color:red'><h1> Hello World in PHP </h1></div> "without HTML!";
    ?>
    


    <?php
        $semester_fee = 16000;
        $g_discount = 0.5;
        $u_discount = 0.2;

        $fee_after_u_discount = $semester_fee * (1 - $u_discount);
        echo "Tuition fee after university discount (20%)" . $fee_after_u_discount . "Baht";

        $fee_after_g_discount = $fee_after_u_discount * ( 1 - ( $g_discount - $u_discount ));
        echo "<div> Tuition fee after government discount (30%) " . $fee_after_g_discount . "Baht </div>";

        $dicount = 0.2;

        $hello = " Hello \ " Monday \ "";
        echo " This is an example of sring: $hello "";
        echo "<br>";
        echo " This is an example of sring: ". $hello;

    ?>

</body>
</html>