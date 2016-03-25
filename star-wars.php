<?php 

$pageTitle = "Star Wars Pops";

include("inc/header.php");

//Query the database for category
 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "poplist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 //Loop over data to display
 $sql = "SELECT * FROM pop_list WHERE Category=\"Star Wars\"";
$result = $conn->query($sql);
?>

<div>
<h3 id="pop_title">Marvel Comics Pops</h3>
  <ul id="pops">
<?php
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <li>
      <img width="500px" src="/<?php echo $row["Img"] ?>" alt="<?php echo $row["Name"] ?>">
      <p><?php echo $row["Category"] . " #" . $row["Number"] . " " . $row["Name"] ?></p>
      <p><?php echo "Current Price $" . $row["Price"] ?></p>
      <p><?php echo "Exclusivity: " . $row["Exclusive"] ?></p>
      
    </li>
    <?php }
} else {
    echo "0 results";
}
$conn->close();
?>
</ul>
</div>