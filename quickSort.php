<?php


function partitionner($array,$first, $end, $pivot){
    $aux = $array[$pivot];
    $array[$pivot] = $array[$end];
    $array[$end] = $aux;
    $j = $first;
    for ($i = $first; $i < $end; $i++){
        if($array[$i] <= $array[$end]){
            $aux = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $aux;
            $j++;
        }
    }
    $aux = $array[$j];
    $array[$j] = $array[$end];
    $array[$end] = $aux;
    return $j;

}

function choice_pivot($first, $last){
    return rand($first, $last);
}

function sortSelect($array, $first, $last){
    if($first < $last){
        $pivot = $this->choice_pivot($first, $last);
        $pivot = $this->partitionner( $first, $last, $pivot);
        $this->sortSelect($array,$first, $pivot-1);
        $this->sortSelect($array, $pivot+1, $last);
    }
}


?>
