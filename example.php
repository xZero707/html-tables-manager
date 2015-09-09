<?PHP

define("TBM_INIT", "table"); // Initiate tablesman class. Variable name will be equal to constant value - Must be defined before inclusion. However you are not forced to use this. 
require_once "tablesman.class.php";
// eg. $table=new tablesman;   // Use this in case that you are not willing to use init by constant
//
// Set some options

$table->setDirectOutput(true); // We want to output table code right away with echo, without this set, an array will be populated instead

$headers = array("head #1", "head #2", "head #3");
$rows[] = array("foo", "bar", "column #1");
$rows[] = array("foo", "bar", "column #2");
$footers = array("foot #1", "foot #2", "foot #3");

// Create table with data above
$table->create("test", "class"); // Create HTML table with class = test
$table->header($headers);
foreach ($rows as $row) { // Initialize var $rows[] we set before, get each row we set and call row creation with it's contents array. 
    $table->row($row);
}
$table->footer($footers);
$table->close();

/** By this point, code is already sent to browser **/


