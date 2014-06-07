<?php

namespace G4\Cron;

use InvalidArgumentException;

use G4\Cron\SecondsField;

use Cron\MinutesField;
use Cron\HoursField;
use Cron\DayOfMonthField;
use Cron\MonthField;
use Cron\DayOfWeekField;
use Cron\YearField;

class FieldFactory extends \Cron\FieldFactory
{
    public function getField($position)
    {
        if (!isset($this->fields[$position])) {
            switch ($position) {
                case 0:
                    $this->fields[$position] = new SecondsField();
                    break;
                case 1:
                    $this->fields[$position] = new MinutesField();
                    break;
                case 2:
                    $this->fields[$position] = new HoursField();
                    break;
                case 3:
                    $this->fields[$position] = new DayOfMonthField();
                    break;
                case 4:
                    $this->fields[$position] = new MonthField();
                    break;
                case 5:
                    $this->fields[$position] = new DayOfWeekField();
                    break;
                case 6:
                    $this->fields[$position] = new YearField();
                    break;
                default:
                    throw new InvalidArgumentException($position . ' is not a valid position');
            }
        }

        return $this->fields[$position];
    }
}
