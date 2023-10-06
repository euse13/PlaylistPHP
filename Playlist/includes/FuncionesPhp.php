<?php

require_once 'funcionesBB.php';

function getAllSongs(){
    
    $conn = openConnectionDB("notabase");
    
    $sql = "SELECT * FROM songs";
    
    $result = $conn->query($sql);
    
    if ($result) {
        $songs = $result->fetch_all(MYSQLI_ASSOC);
        closeConnection($conn);
        return $songs;
    } else {
        // Manejar el error si la consulta falla
        closeConnection($conn);
        return false;
    }
}

