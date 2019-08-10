<?php
    $welcome = 'Hi';
if (date("H") <= 12) {
    $welcome = 'Good morning';
} else if (date('H') >= 12 && date("H") <= 18) {
    $welcome = 'Good afternoon';
} else if(date('H') >= 18 && date("H") <= 23) {
    $welcome = 'Good evening';
}
?>