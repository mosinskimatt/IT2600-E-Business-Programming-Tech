<!DOCTYPE html>
<html>
<head>
<title>Investment Calculator</title>
<style>
    td, th { text-align: right }
    td {padding:4px; width: 110px; }
    tr:nth-child(even) {background-color: #e5e5e5; }
    tr {border-bottom:1px solid #cccccc; }
    .year {width:30px;}
    p{align:center;}
</style>
</head>
<body>
    <h1>Simple Investment Calculator</h1>
    <?php
    setlocale(LC_MONETARY,"en_US");
    // TODO: Study the following example reading in the value for the initial amount. Use this example to read in the other values in the next steps.
    $newamount = $_POST['amount'];
    $investedamount = $_POST['amount'];

    // TODO: Read in the "rate" from the post. Assign it to $rate. 
    $rate = $_POST['rate'];


    // TODO: Read in the number of years "years". Create a new variable and assign the "years" value to it.
    $years = $_POST['years'];
    // TODO: Read in "extra" from the post. Create a new variable and assign the "extra" value to it.
    $extra = $_POST['extra'];
    // TODO: Read in "addamount" from the post. Create a new variable and assign the "addamount" value to it.
    $add = $_POST['addamount']
    ?>
    <h3>Investment Details</h3>
    <?php
    // TODO: Display the values that you read in from above: amount, rate, years, addamount, and extra.
    echo "Invested Amount: $".$newamount."<br>";
    echo "Rate: ".$rate."%"."<br>";
    echo "Years: ".$years."<br>"; 
    echo "Extra amount added at the end of each year: $".$extra;
    

    ?>
    <h3>Annual Schedule</h3>
    <table >
        <tr>
            <th>Year</th>
            <th>Start Amount</th>
            <th>Interest</th>
            <th>End Amount</th>
            <?php if($add =="Yes"){?>
        <th>Extra</th>
        <?php
        }
        ?>

        <?php if($add =="Yes"){?>
        <th>Final Amount</th>
        <?php
        }
        ?>
        </tr>
    
    <?php
    
    // TODO: modify the loop, so it only loops for the number of years invested.
    $totalInterest = 0.00; 
    
    for ($x=0; $x<$years; $x++) {
        $startamount = $newamount;
        $interest = $startamount * ($rate/100);
        $endamount = $startamount + $interest;
        
        // TODO: if "addamount" is equal to "Yes", add the amount from "extra" to $newamount.
        if($add == "Yes")
        {$finalamount = $endamount + $extra;
            $newamount = $finalamount;}
        else
        {$newamount = $newamount + $interest;}

        $totalInterest += $interest;
    ?>
    <tr>
        <td class="year"><?php echo ($x+1); ?>
        <td><?php printf ( "$%.02f" , $startamount ); ?></td>
        <td><?php printf ( "$%.02f" , $interest ); ?></td>
        <td><?php printf ( "$%.02f" , $endamount ); ?></td>
        <!-- TODO: if "addamount is equal to "Yes", display two additional columns: the extra amount and the $newamount after adding the extra. -->
        <?php if($add =="Yes"){?>
            <td><?php printf ("$%.02f" , $extra );?></td>
        <?php
        }
        ?>
        <?php if($add =="Yes"){?>
            <td><?php printf ("$%.02f" , $finalamount );?></td>
        <?php
        }
        ?>
    
    <?php 
}   
   
    // TODO: For 2 extra credit points: Add a summary that includes amount invested, total interest earned, total extra amount added, and the final amount.
    
    echo "If you invest $".number_format($newamount,2)." for ".$years." at a rate of ".$rate."% per year, <br>
    You will earn $".number_format($totalInterest,2)." in interest.<br> 
    If you add an extra $".$extra." at the end of each year, the total extra amount you would have added is $".$extra*$years.". <br>
    At the end of the investment period, your initial investment will now total$".number_format($endamount,2)."<br>".
    "The Schedule is as follows:"; 
       
    ?>

</body>
</html>