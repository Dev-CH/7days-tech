<?php

namespace Adapter\Http\Dto;

use DateTimeImmutable;
use DateTimeZone;

class TimeExplainer
{
    private DateTimeImmutable $date;
    private DateTimeZone $timezone;

    public function __construct(DateTimeImmutable $date, DateTimeZone $timezone)
    {
        $this->date = $date;
        $this->timezone = $timezone;
    }

    public function timezoneName(): string
    {
        return $this->timezone->getName();
    }

    public function timezoneOffset(): string
    {
        $utc = new DateTimeImmutable('now', new DateTimeZone('UTC'));

        return sprintf('%+d', $this->timezone->getOffset($utc) / 60);
    }

    public function isLeapYear(): bool
    {
        return $this->date->format('L') === '1';
    }

    public function currentMonth(): string
    {
        return $this->date->format('F');
    }

    public function currentMonthLength(): string
    {
        return $this->date->format('t');
    }
}