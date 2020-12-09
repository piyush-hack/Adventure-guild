<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<style>

    #comments{
        float: left;width: 50vw;
    }
    
    
</style>

<body>
<div >
<div id="comments">

<?php 
    $con = mysqli_connect('localhost','root','','registered_adventerer');

    $sql = "SELECT *
    FROM register
    WHERE commentno = (SELECT MAX(commentno) FROM register)";
    $run = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($run);
    $maxno = $result['commentno'];
    $count = 0;
    while($count <= $maxno){
        $query = "SELECT *
        FROM register
        WHERE commentno = $maxno";
        $run = mysqli_query($con, $query);
        $result = mysqli_fetch_array($run);
        if($result == TRUE){?><div style="width: 25vw;float: left;"><p><?php
        
        echo $result['id'];
        echo $result['username']. "...............";
            echo $result['request2'];
            
            
        ?></p>
        <p>
            <form method="post" style="float: left;">
                <input type = "text" name = "id" value="<?php echo $result['id'];  ?>" style="display: none;float: left;">
                 <input type="text" name="reply" style="float: left;">
                <input type="submit" value ="reply" style="float: left;">
            </form>
        </p></div>
        <?php
        if(isset($_POST['reply'])){
            $inputid = $_POST['id'];
            $reply = $_POST['reply'];
            $query = "UPDATE register SET
            admincomment = '$reply'
            WHERE id='$inputid'";

            $run = mysqli_query($con, $query);
        }

    }
    $maxno--;
    }?>
    
    </div>

    <div id="" style="float: right;">
    
   <?php

    $sql = "SELECT *
    FROM requestboard
    WHERE commentno = (SELECT MAX(commentno) FROM requestboard)";
    $run = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($run);
    $maxno = $result['commentno'];
    $count = 0;
    while($count <= $maxno){
        $query = "SELECT *
        FROM requestboard
        WHERE commentno = $maxno";
        $run = mysqli_query($con, $query);
        $result = mysqli_fetch_array($run);
        if($result == TRUE){?><p><?php
        echo $result['id'];
        echo $result['username']. "...............";
            echo $result['request2'];
            
            
        ?></p>
        <p>
            <form method="post">
                <input type = "text" name = "cid" value="<?php echo $result['id'];  ?>" style="display: none;">
                 <input type="text" name="creply">
                <input type="submit" value ="reply">
            </form>
        </p>
        <?php
        if(isset($_POST['creply'])){
            $inputid = $_POST['cid'];
            $reply = $_POST['creply'];
            $query = "UPDATE requestboard SET
            admincomment = '$reply'
            WHERE id='$inputid'";

            $run = mysqli_query($con, $query);
        }

    }
    $maxno--;
    }

?>
    
</div>    
    


</body>
</html>