<?PHP

define("TBM_INIT", "table"); // Initiate tablesman class. Variable name will be equal to constant value - Must be defined before inclusion. However you are not forced to use this. 
require_once "tablesman.class.php";
// eg. $table=new tablesman;   // Use this in case that you are not willing to use init by constant
//
// Set some options
$table->setGlobalDelimiter("|");
$table->setOutput("array"); // Direct or array output. Direct will echo putput while variable saves it into output buffer-variable
// Create table
$table->create("test", "class");
$table->header("head #1|head #2|head #3");
$table->row("foo|bar|column #1");
$table->footer("foot #1|foot #2|foot #3");
$table->close();
print_r($table->output); // Since 1.0.4.23 there is no need for output_clean - it is done automatically

// NEW! Since 1.0.4.23 there is added support for arrays as input. In that case, delimiter is not required. Example:
// Set some options
$table->setOutput("direct"); // In this example we will use direct which means that output is echoed immediately after call
// Set input arrays
$headers = array("head #1", "head #2", "head #3");
$rows[0] = array("foo", "bar", "column #1"); // We used $rows[int] so it  will minimize code mess if we have multiple rows
$rows[1] = array("foo", "bar", "column #2"); // We used $rows[int] so it  will minimize code mess if we have multiple rows
$footers = array("foot #1", "foot #2", "foot #3");

// Create table
$table->create("test", "class");
$table->header($headers);
foreach ($rows as $row) { // Initialize var $rows[int] we set before, get each row we set and call row creation with it's contents array. 
    $table->row($row);
}
$table->footer($footers);
$table->close();