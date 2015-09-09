<?PHP

define("TBM_INIT", "table"); // Initiate tablesman class. Variable name will be equal to constant value - Must be defined before inclusion. However you are not forced to use this. 
require_once "tablesman.class.php";
// eg. $table=new tablesman;   // Use this in case that you are not willing to use init by constant
//
// Set some options

$table->setOutput("array"); // Direct or array output. Direct will echo putput while variable saves it into output buffer-variable

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

/** By end this example has created array with all the code which is ready to be outputed **/



/**
 * IN this example we will output ready code as we go (execute command) by setting setOutput to direct
 */
$table->setOutput("direct"); // In this example we will use direct which means that output is echoed immediately after call
// Set input arrays
$headers = array("head #1", "head #2", "head #3");
$rows[0] = array("foo", "bar", "column #1"); // We used $rows[int] so it  will minimize code mess if we have multiple rows
$rows[1] = array("foo", "bar", "column #2"); // We used $rows[int] so it  will minimize code mess if we have multiple rows
$footers = array("foot #1", "foot #2", "foot #3");

// Create table with data above
$table->create("test", "class"); // Create HTML table with class = test
$table->header($headers);
foreach ($rows as $row) { // Initialize var $rows[] we set before, get each row we set and call row creation with it's contents array. 
    $table->row($row);
}
$table->footer($footers);
$table->close();