<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeme.edu.vn";

$connect = new mysqli($servername,$username,$password,$dbname);
if($connect-> connect_error){
    die("Failed: ".$connect-> connect_error);
}

$sql = "SELECT * FROM article" ;
$result = $connect ->query($sql);

?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Article_content</th>
        <th>Status</th>
    </tr>
    <?php
    if($result->num_rows >0){
        //Fetches one row from a result-set and returns it as an enumerated array
        while($row = mysqli_fetch_row($result)){
            ?>
            <tr>
                <?php
                foreach($row as  $low){?>
                    <td> <?php echo $low?></td>
                <?php }
                ?>
            </tr>
    <?php
        }
    }else{
        echo "0 Result";
    }
    ?>
    </thead>
</table>

</body>
</html>