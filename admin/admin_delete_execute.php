<?php
/**
 * User: Aysen
 * Date: 28/06/2016
 * Time: 2:07 PM
 */
include('../bootstrap.php');
if (isset($_GET['id'])) {
    try {
        $id = $_GET["id"];

        $db = Database::getDB();
        $query = "DELETE FROM administrators WHERE id = :id ";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id);
        $stm->execute();
    } catch (PDOException $e) {

        echo $sql . "<br>" . $e->getMessage();
    }

    header('Location: /admin/index.php');
    exit();
}


