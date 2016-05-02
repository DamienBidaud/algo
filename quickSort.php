<?php

class sort{

  private $array;

  __constructor($array){
    $this->array = $array;
  }

  function partitionner($first, $end, $pivot){
      $aux = $this->array[$pivot];
      $this->array[$pivot] = $this->array[$end];
      $this->array[$end] = $aux;
      $j = $first;
      for ($i = $first; $i < $end; $i++){
          if($array[$i] <= $this->array[$end]){
              $aux = $this->array[$i];
              $this->array[$i] = $this->array[$j];
              $this->array[$j] = $aux;
              $j++;
          }
      }
      $aux = $this->array[$j];
      $this->array[$j] = $this->array[$end];
      $this->array[$end] = $aux;
      return $j;

  }

  function choice_pivot($first, $last){
      return rand($first, $last);
  }

  function sortSelect($first, $last){
      if($first < $last){
          $pivot = $this->choice_pivot($first, $last);
          $pivot = $this->partitionner( $first, $last, $pivot);
          $this->sortSelect($first, $pivot-1);
          $this->sortSelect( $pivot+1, $last);
      }
  }

}


?>
