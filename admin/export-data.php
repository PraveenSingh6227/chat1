<?php
/***** EDIT BELOW LINES *****/
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "primeimm_prime_ur"; // MySQL Username
$DB_Password = "^tPXn]=&?V;("; // MySQL Password
$DB_DBName = "primeimm_prime_chat_db"; // MySQL Database Name
$DB_TBLName = "register"; // MySQL Table Name

$xls_filename = date('dmyhis').'.xls'; // Define Excel (.xls) file name
 
/***** DO NOT EDIT BELOW LINES *****/
// Create MySQL connection
$sql = "SELECT reg_id as 'Customer ID', email as 'Mobile Number', dateTime as 'Date' from $DB_TBLName order by id desc";
$Connect = @mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName) or die(mysqli_connect_error());
// Select database
//$Db = @mysqli_select_db($DB_DBName, $Connect) or die("Failed to select database:<br /><br />");
// Execute query
$result = @mysqli_query($Connect,$sql);
 
// Header info settings
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
 
/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
/*
for ($i = 0; $i<mysqli_num_rows($result); $i++) {
  echo mysqli_fetch_field($result, $i) . "\t";
}
*/
echo "Customer ID". "\t"."Mobile Number". "\t"."Date";
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysqli_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysqli_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
}
?>