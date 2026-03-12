<?php
// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu


require_once('database.php');
class skincaretype
{
   public $skincareTypeID;
   public $skincareTypeCode;
   public $skincareTypeName;
   public $skincareShelfNumber;


   function __construct($skincareTypeID, $skincareTypeCode, $skincareTypeName, $skincareShelfNumber)
   {
       $this->skincareTypeID = $skincareTypeID;
       $this->skincareTypeCode = $skincareTypeCode;
       $this->skincareTypeName = $skincareTypeName;
       $this->skincareShelfNumber = $skincareShelfNumber;
   }
   function __toString()
   {
       $output = "<h2>$this->skincareTypeID - $this->skincareTypeCode, $this->skincareTypeName, Shelf: $this->skincareShelfNumber</h2>\n";
       return $output;
   }
   static function findSkincareType($skincareTypeID)
   {
       $db = getDB();
       $query = "SELECT * FROM skincare_types WHERE skincare_type_id = $skincareTypeID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $skincareType = new skincaretype(
               $row['skincare_type_id'],
               $row['skincare_type_code'],
               $row['skincare_type_name'],
               $row['skincare_shelfnumber']
           );
           $db->close();
           return $skincareType;
       } else {
           $db->close();
           return NULL;
       }
   }
   function saveSkincareType()
   {
       $db = getDB();
       $query = "INSERT INTO skincare_types (skincare_type_id, skincare_type_code, skincare_type_name, skincare_shelfnumber) VALUES (?, ?, ?, ?)"; //this line is difference from prof's example

       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->skincareTypeID,
           $this->skincareTypeCode,
           $this->skincareTypeName,
           $this->skincareShelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

    static function getSkincareTypes()
   {
       $db = getDB();
       $query = "SELECT * FROM skincare_types";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $skincareTypes = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $skincareType = new skincaretype(
                   $row['skincare_type_id'],
                   $row['skincare_type_code'],
                   $row['skincare_type_name'],
                   $row['skincare_shelfnumber']
               );
               array_push($skincareTypes, $skincareType);
               unset($skincareType);
           }
           $db->close();
           return $skincareTypes;
       } else {
           $db->close();
           return NULL;
       }
   }

    function removeSkincareType()
   {
       $db = getDB();
       $query = "DELETE FROM skincare_types WHERE skincare_type_id = $this->skincareTypeID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

   function updateSkincareType()
   {
       $db = getDB();
       $query = "UPDATE skincare_types SET skincare_type_code = ?, " .
           "skincare_type_name = ?, " .
           "skincare_shelfnumber = ? " .
           "WHERE skincare_type_id = $this->skincareTypeID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "ssi",
           $this->skincareTypeCode,
           $this->skincareTypeName,
           $this->skincareShelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }


























}
?>