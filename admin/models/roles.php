<?php
function role_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM role WHERE id=$id";
    mysqli_query($sql) or die(mysqli_error());
}