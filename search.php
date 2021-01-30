<?php
    $conn = new mysqli('localhost', 'root', '', 'live');
    if($conn->connect_error) die("Connect failed");
    $key = '';
    if(isset($_POST['name'])) $key = $_POST['name'];
    $rs = $conn->query("SELECT name, price FROM inventory WHERE name LIKE '%" . $key . "%'");
    if(!$rs) die("Failed to get data");
    else {
        if($rs->num_rows > 0){
            while($row = $rs->fetch_assoc()){
?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['price']; ?></td>
        </tr>
<?php
            }
        } else echo "<tr><td colspan='2' style='text-align: center;'>No result.</td></tr>";
    }
?>