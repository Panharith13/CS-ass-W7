<?php
//FOR ABA
    function displayaba($paymentmethod)
    {
        echo '<table border = "2">';
        foreach($paymentmethod as $payment){
            if(get_class($payment) == 'aba'){
                echo '<tr>';
                    echo '<td>' . $payment->getItem() . '<td>';
                    echo '<td>' . get_class($payment) . '<td>';
                    echo '<td>' . $payment->getTotal() . '<td>';
                echo '<tr>';
            } 
        }
        echo '</table>';
    }
//FOR PIPAY AND WING
    function displayPPandWing($paymentmethod)
    {
        echo '<table border = "2">';

        foreach($paymentmethod as $payment){
            if(get_class($payment) == 'pipay' || get_class($payment) == 'wing'){
                echo '<tr>';
                    echo '<td>' . $payment->getItem() . '<td>';
                    echo '<td>' . get_class($payment) . '<td>';
                    echo '<td>' . $payment->getTotal() . '<td>';
                echo '<tr>';
            } 
        }
        echo '</table>';   
    }
?>