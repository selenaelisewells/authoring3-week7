<?php
    // include the file we just wrote - connect
     // like a JS import statement

    $result = array();

    function getAllUsers($conn) {
        $query = "SELECT * FROM profs";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result[0]));
    }

    function getSingleUser($conn, $target) {
        $query = "SELECT * FROM profs WHERE id=" . $target . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result[0]));
    }