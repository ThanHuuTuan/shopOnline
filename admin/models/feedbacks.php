<?php
function feedback_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM feedback WHERE id=$id";
    mysqli_query($sql) or die(
        i_error());
}