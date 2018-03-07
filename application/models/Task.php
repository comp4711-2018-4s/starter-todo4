<?php
/**
 * Created by PhpStorm.
 * User: Lel
 * Date: 2018-03-07
 * Time: 11:16 AM
 */

class Task extends Entity
{
    public $id;
    public $task;
    public $priority;
    public $size;
    public $group;
    public $deadline;
    public $status;
    public $flag;

    // ID has to be set
    public function setId($value)
    {
        if (empty($value))
            throw new Exception('An Id must have a value');
    }

    // Name has to be set and cannot be longer than 64 characters
    public function setTask($value)
    {
        if (empty($value))
            throw new Exception('A Name cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A Name cannot be longer than 64 characters');
    }

    // Priority has to be non-zero, set, numeric and less than 4
    public function setPriority($value)
    {
        if (empty($value))
            throw new Exception('A Priority cannot be empty');
        if (!is_numeric($value))
            throw new Exception('A Priority can only be numeric');
        if ($value < 0 || $value >= 4)
            throw new Exception('A Priority can only be an integer 1, 2 or 3');
    }

    // Size has to be non-zero, set, numeric and less than 4
    public function setSize($value)
    {
        if (empty($value))
            throw new Exception('A Size cannot be empty');
        if (!is_numeric($value))
            throw new Exception('A Size can only be numeric');
        if ($value < 0 || $value >= 4)
            throw new Exception('A Size can only be an integer 1, 2 or 3');
    }

    // Group has to be non-zero, set, numeric and less than 5
    public function setGroup($value)
    {
        if (!is_numeric($value))
            throw new Exception('A Group can only be numeric');
        if ($value < 0 || $value >= 5)
            throw new Exception('A Group can only be an integer from 1-4');
    }

    // Deadline has to be numeric and a valid date
    public function setDeadline($value)
    {
        if (!is_numeric($value))
            throw new Exception('A Deadline can only be numeric');
        if (!$this->validateDate($value, 'Ymd'))
            throw new Exception('A Deadline has to be in the format YYYYMMDD');
    }

    // Status has to be non-zero and either 1 or 2
    public function setStatus($value)
    {
        if (!is_numeric($value))
            throw new Exception('A Status can only be numeric');
        if ($value < 0 || $value >= 3)
            throw new Exception('A Group can only be an integer of either 1 or 2');
    }

    // Flag has to be 1 or null
    public function setFlag($value)
    {
        if (!is_numeric($value))
            throw new Exception('A Flag can only be numeric');
        if ($value != 1)
            throw new Exception('A Flag can only be 1');
    }

    // Checks if date is valid
    private function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}