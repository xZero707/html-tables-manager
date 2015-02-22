<?PHP
define("TBM_INIT", "table"); // Initiate tablesman class. Variable name will be equal to constant value - Must be defined before inclusion. However you are not forced to use this. 
require_once "tablesman.class.php";
// eg. $table=new tablesman;   // Use this in case that you are not willing to use init by constant
//

// Set some options
$table->setGlobalDelimiter("|");
$table->setOutput("variable"); // Direct or variable output. Direct will echo putput while variable saves it into output buffer-variable
// Create table
$table->create("test", "class");
$table->header("head #1|head #2|head #3");
$table->row("foo|bar|row #3");
$table->footer("foot #1|foot #2|foot #3");
$table->close();


print_r($table->output); // After using variable please use output_clear() to empty variable so it can be used for next instance