<?php
// Database connection settings
$host = 'localhost';  // Change if needed
$dbname = 'login'; // Your database name
$username = 'root'; // Default username for XAMPP/MAMP
$password = ''; // Default password for XAMPP/MAMP (leave empty)

if(isset($_POST['login'])){
    $id=$_POST['id'];
    $password=$_POST['password'];

    function is_unique($value, $table, $field) {
        global $_db;
        $stm = $_db->prepare("SELECT COUNT(*) FROM $table WHERE $field = ?");
        $stm->execute([$value]);
        return $stm->fetchColumn() == 0;
    }
    
    
    function is_exists($value, $table, $field) {
        global $_db;
        $stm = $_db->prepare("SELECT COUNT(*) FROM $table WHERE $field = ?");
        $stm->execute([$value]);
        return $stm->fetchColumn() > 0;
    }
}
?>
