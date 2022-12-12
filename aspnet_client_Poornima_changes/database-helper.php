<?php include('database-config.php');

function insert($table, $data)
{
   global $db;
   $fields = "";
   $values = "";
   foreach ($data as $field => $value) {
      $fields .= $field . ", ";
      $values .= "'" . mysqli_real_escape_string($db, $value) . "', ";
   }
   $fields = rtrim($fields, ", ");
   $values = rtrim($values, ", ");
   $sql = "INSERT INTO $table($fields) VALUES($values)";
   $result = mysqli_query($db, $sql);
   return mysqli_insert_id($db);
}

function update($table, $data, $where)
{
   global $db;
   $values = "";
   foreach ($data as $field => $value) {
      $value = mysqli_real_escape_string($db, $value);
      $values .= "$field = '$value', ";
   }
   $values = rtrim($values, ", ");
   $sql = "UPDATE $table SET $values WHERE $where";
   $result = mysqli_query($db, $sql);
}

function fetchData($table, $where = false, $limit = false, $offset = false)
{
   global $db;
   $where_string = "";
   $limit_string = "";
   if ($where)
      $where_string = "WHERE $where";
   if ($limit) {
      if ($offset)
         $limit_string = "LIMIT $offset,$limit";
      else
         $limit_string = "LIMIT $limit";
   }
   $sql = "SELECT * FROM $table $where_string $limit_string";
   $result = mysqli_query($db, $sql);
   $data = array();
   while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
   }
   return $data;
}

function deleteData($table, $where)
{
   global $db;
   $sql = "DELETE FROM $table WHERE $where";
   mysqli_query($db, $sql);
}
