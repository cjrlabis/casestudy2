<?php
$conn = new mysqli('localhost','root','','covid');
$sql = "DELETE FROM details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "
    <!DOCTYPE html>
    <script>
    function redir()
    {
    alert('Data Successfully Deleted!   ');
    window.location.assign('index.php');
    }
    </script>
    <body onload='redir();'></body>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>