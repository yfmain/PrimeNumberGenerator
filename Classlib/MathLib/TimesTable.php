<?php
namespace DevSpace\MathLib;

use DevSpace\Interfaces\MathLib\ITimesTable;

class TimesTable implements ITimesTable
{
    public function getTable(array $input)
    {
        if (!$this->isValid($input)) return array();

        return array($input[0] => $input);
    }
    
    private function isValid(array $input)
    {
        foreach ($input as $item) {
            if (!is_numeric($item)) return false;
        }
        return true;
    }
}