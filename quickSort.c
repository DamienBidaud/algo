int partitionner(int* array, int first, int end, int pivot){
  int aux = array[pivot];
  array[pivot] = array[end];
  array[end] = aux;
  int j = first;
  for(int i = first, i < end; i++){
    if(array[i] <= array[end]){
      aux = array[i];
      array[i] = array[j];
      array[j] = aux;
      j++
    }
  }
  aux = array[j];
  array[j] = array[end];
  array[end] = aux;
  return j;
}

int choice_pivot(int first, int last){
  return (last - first) * (rand() / RAND_MAX) + first;
}

void quick_sort(int* array, int first, int last){
  int pivot = 0;
  if(first < last){
    pivot = choice_pivot(first, last);
    partitionner(array, first, last, pivot);
    sortSelect(array, first, pivot-1);
    sortSelect(array, pivot+1, last);
  }
}
