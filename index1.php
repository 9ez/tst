<?php
echo '<style>img[alt="www.000webhost.com"]{display:none;}</style>'
?>
<?php
  if(extension_loaded('sockets')) echo "WebSockets OK";
  else echo "WebSockets UNAVAILABLE";
?>
<?php
$mysqli = new mysqli("localhost", "id8876592_izzi", "5jtug7h6y", "id8876592_test");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
}

$res = $mysqli->query("SELECT id FROM test ORDER BY id ASC");

echo "Обратный порядок...\n";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['id'] . "\n";
}

echo "Исходный порядок строк...\n";
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
}
?>

<?php
 echo'<div>TEST</div>';
 phpinfo();
 ?>
 <?php
die();
exit();
?>
