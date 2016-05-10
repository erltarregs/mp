
  <?php
  include("connect.php");
  $result=mysqli_query($db,"SELECT * FROM entries"); 
  while($row = $result->fetch_assoc()){
    echo "<hr><p>";
    echo "<br>".$row['ownername']."";
    echo "<br>".$row['post_details']."";
    echo "<br>";
    echo "<br>".$row['date_added']."";
    echo "</p>";
  }
  ?>
