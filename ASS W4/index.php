<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1></h1>
    <?php
        require_once(__DIR__ . '/bank/ABA.php');
        require_once(__DIR__ . '/bank/pipay.php');
        require_once(__DIR__ . '/bank/WING.php');

        $paymentmethod = [
            new aba ("Item 1", 1, 5),
            new wing ("Item 2", 2, 3),
            new aba ("Item 3", 4, 1),
            new aba("Item 4", 5, 1),
            new pipay("Item 5", 6, 1),
            new aba("Item 6", 10,1),
            new wing("Item 7", 15, 1),
            new wing("Item 8", 2, 1) 
        ];
        echo '<h1>1. Number of sales by ABA method</h1>';
        displayaba($paymentmethod);

        echo '<h1>2. Number of sales by PiPay and Wing method</h1>';
        displayPPandWing($paymentmethod);

        echo '<h1>3. Display all sales ordering by biggest total amount</h1>';
        function displayAll($paymentmethod){
            echo '<table border = "2">';
            foreach ($paymentmethod as $payment) {
                echo '<tr>';
                    echo '<td>' .$payment->getItem() . '</td>';
                   // echo '<td>' .$payment->getQuantity() . '</td>';
                    //echo '<td>' .$payment->getPrice() . '</td>';
                    echo '<td>' . get_class($payment) . '</td>';
                    echo '<td>' . $payment->getTotal() . '</td>';
                echo '</tr>';    
            }
          
            echo '</table>';
        
        }
        $clonePaymentMethod = $paymentmethod;
        
        usort ($clonePaymentMethod, function ($item1, $item2)
        {
            return $item2->getTotal() <=> $item1 -> getTotal();
        });
        displayAll($clonePaymentMethod);

        
    ?>
    
</body>
</html>