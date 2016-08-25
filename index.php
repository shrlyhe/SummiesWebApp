<?php header('Location:/index.html'); ?>


<?php
    $db = mysqli_connect('localhost','root','may121996','summies');
?>
<html>
    <body>
          <?php
                $query = "SELECT * FROM `summiesOrders`;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                      // Display your datas on the page
                }
          ?>
    </body>
</html>

















