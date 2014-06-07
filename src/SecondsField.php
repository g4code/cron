<?php

namespace G4\Cron;

use DateTime;
use Cron\AbstractField;

/**
 * Minutes field.  Allows: * , / -
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class SecondsField extends AbstractField
{
    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy(DateTime $date, $value)
    {
        return $this->isSatisfied($date->format('s'), $value);
    }

    /**
     * {@inheritdoc}
     */
    public function increment(DateTime $date, $invert = false)
    {
        if ($invert) {
            $date->modify('-1 second');
        } else {
            $date->modify('+1 second');
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value)
    {
        return (bool) preg_match('/[\*,\/\-0-9]+/', $value);
    }
}
