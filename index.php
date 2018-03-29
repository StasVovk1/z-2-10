<?php 
    $mass = [1,2,3,4,5,6,7,8,9,0,10];
    echo 'Исходные данные: '.json_encode($mass);

    $min = $max = $mass[0];   

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] < $min){     
            $min = $mass[$i];
        }
        if($mass[$i] > $max){
           $max = $mass[$i];
        }
    }

    for ($i = 0; $i < counts($mass); $i++){
        if ($i % 2 != 0){     
            $mass[$i] = $min;
        }
        if($i % 2 == 0){
            $mass[$i] = $max;
        }
    }

    echo '<br>Ответ: '.json_encode($mass);
    echo '<br>Max: '.$max;
    echo '<br>Max: '.$min;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>