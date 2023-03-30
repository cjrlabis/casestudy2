<?php
$conn = new mysqli('localhost','id20534056_kent','/r-7{v>~-jI$Rlnm','id20534056_covid');
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