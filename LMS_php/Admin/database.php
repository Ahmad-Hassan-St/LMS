<?php

class Database
{
    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=lms", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            print("db connected");
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }

    
    function insertData($tableName, $data) {
        try {
            // Connect to the database
            $conn = new PDO("mysql:host=localhost;dbname=lms", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Build the query
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $query = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
            
            // Prepare and execute statement
            $stmt = $conn->prepare($query);
            $stmt->execute($data);
            
            // return the number of rows affected
            return $stmt->rowCount();
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }


    function selectData($tableName) {
        try {
            // Connect to the database     
            $conn = new PDO("mysql:host=localhost;dbname=lms", "root", "");

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Build the query
            $query = "SELECT * FROM $tableName";
            
            // Prepare and execute statement
            $stmt = $conn->prepare($query);
            $stmt->execute();
            
            // Fetch the data
            $data = $stmt->fetchAll();
            
            // Start the table
            echo "<table>";
            
            // Print the table headers
            echo "<tr>";
            foreach ($data[0] as $key => $value) {
                echo "<th>" . $key . "</th>";
            }
            echo "</tr>";
            
            // Print the data
            foreach ($data as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            
            // End the table
            echo "</table>";
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
    
    
}
?>