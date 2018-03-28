<?php
//快速排序
//取第一个数,其他数与他进行比较.比他大的方右边数组,比他小的放左边数组.递归处理.进行合并;
function quick_sort($array){
  if(count($array)<=1) return $array;
  $key=$array[0];
  $left_arr=array();
  $right_arr=array();
  if($i=1;$i<count($array);$i++){
    if($array[$i]<=$key){
      $left_arr[]=$array[$i];
    }else{
      $right_arr[]=$array[$i];
    }
  }
  $left_arr=quick_sort($left_arr);
  $right_arr=quick_sort($right_arr);
  return array_merge($left_arr,array[$key],$right_arr);
}
