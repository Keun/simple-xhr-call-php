<?php 
    require_once('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post" id="selectform">
        <select name="evenementen" id="change_evenementen">
            <?php 
            $result = $conn->query("SELECT a_nummer, a_naam FROM activiteiten;") ;  
            if ($result != false) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['a_nummer'];?>"><?= $row['a_naam'];?></option>
                    <?php
                }
                $result->free();
            }?>
        </select>
        <div id="input_number">
            Selecteer eerst een evenement
            <!-- <input type="number" name="" id="" min="1" max=""> -->
        </div>
        
    </form>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
    $conn->close();
?>