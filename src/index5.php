<?php

$marks = 40;

if($marks > 60){

    $grade = "First division";

}
elseif($marks>= 45){
    $grade = "Second division";
}
elseif($marks>=33){
    $grade = "Third division";
}
else {
    $grade = "Fail";
}

echo "Student got $grade";

?>