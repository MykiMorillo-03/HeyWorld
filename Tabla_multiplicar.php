

<?php
    for($colum = 1; $colum <= 7; $colum++){
        echo nl2br("\t $colum");
    }
    for($fila = 2; $fila <= 7; $fila++){
        echo nl2br("\n $fila");
        for($colum = 2; $colum <= 7; $colum++){
            $resul = nl2br("\t" . $colum * $fila);
            
            echo nl2br("\t $resul");
        }    
    }
?>