<?php
if(!function_exists('changeFormate')){
    function changeFormate($date,$format){
      $formatedDate = date($format,strtotime($date));
      return $formatedDate;
    }
}
?>
