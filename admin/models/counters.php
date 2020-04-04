<?php
function counter_delete($couid) {
    $couid = intval($couid);
    $sql = "DELETE FROM user_online WHERE session=$couid";
    mysqli_query($sql) or die(mysqli_error());
}