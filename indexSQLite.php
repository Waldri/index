<?php
$db = new SQLite3('database.db');

if (!$db) {
    die('Não foi possível conectar ao banco de dados.');
}
?>

<?php
$query = 'CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT, email TEXT)';
$db->exec($query);

$insertQuery = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
$db->exec($insertQuery);
?>

<?php
$selectQuery = "SELECT * FROM users";
$result = $db->query($selectQuery);

while ($row = $result->fetchArray()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Nome: " . $row['name'] . "<br>";
    echo "E-mail: " . $row['email'] . "<br><br>";
}
?>