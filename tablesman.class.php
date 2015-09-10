<?PHP

/**
 *  ~ Tables Manager v1.0.4.29 ~
 * Made for easier manipulation with messy HTML tables
 * 
 * @version 1.0.4.29
 * @since 1.0.4.29 Not backwards compatible
 * @license https://github.com/xZero707/PHP-Tables-Manager/blob/master/LICENSE <Apache License version 2.0>
 * @author xZero707 <https://github.com/xZero707/>
 * @website https://www.elite7hackers.net/
 */
class tablesman {

    public $generator = "\n> Generated by Tables Manager\n> Version: 1.0.4.29\n> Author: xZero707 <https://github.com/xZero707>\n> https://www.elite7hackers.net/\n";
    public $outputDirect = false;
    protected $linesArr = array();
    public $output = array();
    public $isNewInst = true;
    protected $tableOpt = array();
    protected $EOL = PHP_EOL;

    function __construct()
    {
        $this->setGeneratedBy($this->generator);
    }

    public function setGeneratedBy($val)
    {
        if ($val) {
            $this->generator = $this->EOL . "<!-- {$val} -->" . $this->EOL;
        } else {
            $this->generator = '';
        }
    }

    public function setOptions($opt)
    {
        if (is_array($opt)) {
            $this->tableOpt = $opt;
        }
        return false;
    }

    public function setOption($opt, $val, $check = false)
    {
        if (!isset($this->tableOpt[$opt])) {
            $this->tableOpt[$opt] = $val;
        } else if ($this->tableOpt[$opt] !== $val && !$check) {
            $this->tableOpt[$opt] = $val;
        }
    }

    public function setOpt($opt, $val, $check = false)
    {
        $this->setOption($opt, $val, $check);
    }

    private function checkOpt($opt)
    {
        return ((isset($this->tableOpt[$opt])) ? true : false);
    }

    private function readOpt($opt)
    {
        return ((isset($this->tableOpt[$opt])) ? $this->tableOpt[$opt] : '');
    }

    private function NewLineOpt()
    {
        if ($this->readOpt("NEW_LINE") === false) {
            $this->EOL = '';
        }
    }

    public function create()
    {
        $identifier = '';
        if ($this->checkOpt('class') || $this->checkOpt('id')) {
            if ($this->checkOpt('class')) {
                $identifier .= " class='" . $this->readOpt("class") . "'";
            }
            if ($this->checkOpt("id")) {
                $identifier .= " id='" . $this->readOpt("id") . "'";
            }
        }
        $code = (($this->checkOpt('CODE')) ? ' ' . $this->readOpt('CODE') : '');
        $this->NewLineOpt();
        $this->FlushOutput("{$this->generator}<table{$identifier}{$code}>" . $this->EOL);
    }

    public function header($headers, $code = NULL)
    {
        if (!is_array($headers)) {
            return false;
        }
        $this->linesArr[] = "<tr{$code}>";
        foreach ($headers as $header) {
            $this->linesArr[] = "<th>{$header}</th>";
        }
        $this->linesArr[] = "</tr>" . $this->EOL;
        $this->FlushOutput(implode("\n", $this->linesArr));
    }

    public function row($columns, $code = NULL)
    {
        if (!is_array($columns)) {
            return false;
        }
        $this->linesArr[] = " <tr$code>";
        foreach ($columns as $column) {
            $this->linesArr[] = "<td>$column</td>";
        }
        $this->linesArr[] = "</tr>" . $this->EOL;
        $this->FlushOutput(implode($this->EOL, $this->linesArr));
    }

    public function footer($columns, $code = NULL)
    {
        if (!is_array($columns)) {
            return false;
        }

        $this->linesArr[] = "<tfoot>{$this->EOL}<tr $code>";
        foreach ($columns as $column) {
            $this->linesArr[] = "<td>$column</td>";
        }
        $this->linesArr[] = "</tr>{$this->EOL}</tfoot>";
        $this->FlushOutput(implode($this->EOL, $this->linesArr));
    }

    public function close()
    {
        $this->FlushOutput($this->EOL . "</table>{$this->generator}");
        $this->isNewInst = true;
        $this->linesArr = array();
    }

    private function FlushOutput($out)
    {
        if (!$this->readOpt('DIRECT') === true) {
            if ($this->isNewInst) {
                $this->output = array(); // Reset output buffer if run in new instance
                $this->isNewInst = false; // Set to false so there will be no more buffer resets until new instance
                $this->EOL = PHP_EOL;
                $this->tableOpt = array();
            }
            $this->linesArr = array();
            $this->output[] = $out;
        } else {
            $this->linesArr = array();
            echo $out;
        }
    }

}

if (defined("TBM_INIT")) {
    ${TBM_INIT} = new tablesman; // Create instance tablesman
}