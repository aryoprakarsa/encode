
<?php
function encode($input) {
    $array = str_split($input);
    $result = [];
    $total = 1;

    for($i = 0; $i < sizeof($array); $i++){
        if ($array[$i] != $array[$i+1]) {
            $total < 2 ? array_push($result,$array[$i]) : array_push($result, $total.$array[$i]);
            $total=0;
   			}
    		$total++;
    };

    return implode("",$result);
}

   echo encode("aaaabc");

?>
  
   