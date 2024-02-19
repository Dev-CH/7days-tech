<?php

namespace Domain\Value;

use DateTimeImmutable;
use Symfony\Component\Validator\Constraints as Assert;

class TimeExplain
{
    /**
     * @Assert\NotBlank()
     * @Assert\Timezone()
     */
    private string $timezone;

    /**
     * @Assert\NotBlank()
     * @Assert\Date()
     */
    private string $date;

    protected function __construct(string $timezone, string $date)
    {
        $this->timezone = $timezone;
        $this->date = $date;
    }

    public static function withDefaults(): TimeExplain
    {
        return new TimeExplain('UTC', '2000-01-01');
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone(string $timezone): void
    {
        $this->timezone = $timezone;
    }
}