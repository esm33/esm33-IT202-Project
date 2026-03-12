<?php
// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu

require_once('database.php');
class skincare
{
   public $skincareID;
   public $skincareCode;
   public $skincareName;
   public $skincareDescription;
   public $skincareBrand;
   public $skincareDosage;
   public $skincaretypeID;
   public $skincareBuyingPrice;
   public $skincareSellingPrice;
   
   function __construct(
        $skincareID,
        $skincareCode,
        $skincareName,
        $skincareDescription,
        $skincareBrand,
        $skincareDosage,
        $skincaretypeID,
        $skincareBuyingPrice,
        $skincareSellingPrice
       ) {
       $this->skincareID = $skincareID;
       $this->skincareCode = $skincareCode;
       $this->skincareName = $skincareName;
    $this->skincareDescription = $skincareDescription;  
    $this->skincareBrand = $skincareBrand;
       $this->skincareDosage = $skincareDosage;
       $this->skincaretypeID = $skincaretypeID;
       $this->skincareBuyingPrice = $skincareBuyingPrice;
       $this->skincareSellingPrice = $skincareSellingPrice;
   }
   static function findSkincare($skincareID)
   {
       $db = getDB();
       $query = "SELECT * FROM skincare WHERE skincare_id = $skincareID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $skincare = new skincare(
               $row['skincare_id'],
               $row['skincare_code'],
               $row['skincare_name'],
               $row['skincare_description'],
               $row['skincare_brand'],
               $row['skincare_dosage_form'],
               $row['skincare_type_id'],
               $row['skincare_buy_price'],
               $row['skincare_sell_price']
           );
           $db->close();
           return $skincare;
       } else {
           $db->close();
           return NULL;
       }
   }
   function __toString()
   {
       $output = "<h2>Skincare Product : $this->skincareID</h2>" .
           "<h2>Name: $this->skincareName</h2>\n";
       "<h2>SkincareType ID: $this->skincaretypeID at $this->skincareBuyingPrice</h2>\n";
       return $output;
   }
   function saveSkincare()
   {
       $db = getDB();
       $query = "INSERT INTO skincare (skincare_id, skincare_code, skincare_name, skincare_description, skincare_brand, skincare_dosage_form, skincare_type_id, skincare_buy_price, skincare_sell_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssssidd",
           $this->skincareID,     // integer data type
        $this->skincareCode,   // string data type
           $this->skincareName,   // string data type
              $this->skincareDescription, // string data type
                $this->skincareBrand, // string data type
              $this->skincareDosage, // string data type
           $this->skincaretypeID, // integer data type
           $this->skincareBuyingPrice,   // double data type
           $this->skincareSellingPrice   // double data type
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }


  static function getSkincare()
   {
       $db = getDB();
       $query = "SELECT * FROM skincare";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $skincare_products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $skincare = new skincare(
                   $row['skincare_id'],
                   $row['skincare_code'],
                   $row['skincare_name'],
                   $row['skincare_description'],
                   $row['skincare_brand'],
                   $row['skincare_dosage_form'],
                   $row['skincare_type_id'],
                   $row['skincare_buy_price'],
                   $row['skincare_sell_price']
               );
               array_push($skincare_products, $skincare);
           }
           $db->close();
           return $skincare_products;
       } else {
           $db->close();
           return NULL;
       }
   }

   function removeSkincare()
   {
       $db = getDB();
       $query = "DELETE FROM skincare WHERE skincare_id = $this->skincareID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

   function updateSkincare()
   {
       $db = getDB();
       $query = "UPDATE skincare SET skincare_name= ?, skincare_code= ?, skincare_description= ?, skincare_brand= ?, skincare_dosage_form= ?, skincare_type_id= ?, skincare_buy_price= ?, skincare_sell_price= ? WHERE skincare_id = $this->skincareID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssssidd",
           $this->skincareName,
              $this->skincareCode,
                  $this->skincareDescription,
                 $this->skincareBrand,
                  $this->skincareDosage,
           $this->skincaretypeID,
           $this->skincareBuyingPrice,
           $this->skincareSellingPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }














}
?>