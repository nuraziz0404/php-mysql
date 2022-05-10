<?php
require "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nur Aziz</title>
   <style>
      table,
      thead,
      thead,
      td {
         border: 1px solid black;
      }

      td {
         padding: 5px;
      }
   </style>
</head>

<body>
   <table>
      <thead>
         <td>ID</td>
         <td>Name</td>
         <td>Position</td>
         <td>Office</td>
         <td>Age</td>
         <td>Start Date</td>
      </thead>
      <tbody>
         <?php
         $sql = "select * from sales";
         if ($result = $conn->query($sql)) {
            while ($res = $result->fetch_object()) {
               echo "<tr>";
               echo "<td>" . $res->id . "</td>";
               echo "<td>" . $res->name . "</td>";
               echo "<td>" . $res->position . "</td>";
               echo "<td>" . $res->office . "</td>";
               echo "<td>" . $res->age . "</td>";
               echo "<td>" . $res->start_date . "</td>";
               echo "</tr>";
            }
            // $result->free_result();
         }

         $mysqli->close();
         ?>
      </tbody>
   </table>
</body>

</html>