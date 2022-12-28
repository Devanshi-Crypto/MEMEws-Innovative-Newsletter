<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "signup";
$con = mysqli_connect($server, $user, $password, $db);
if($con){
    ?>
    <script type="text/javascript">
        alert("Connection established");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Connection failed");
    </script>
    <?php
}
?>