<?php

namespace JtM\Timer;

/**
 * Class Timer
 * @package Jtm\Timer
 */
class Timer
{
    private $timeStart;
    private $timeStop;

    private $memoryStart;
    private $memoryStop;

    public function start()
    {
        $this->timeStart = microtime(true);
        $this->memoryStart = memory_get_usage();
    }

    public function stop()
    {
        $this->timeStop = microtime(true);
        $this->memoryStop = memory_get_usage();
    }

    public function diffTime(): float
    {
        return $this->timeStop - $this->timeStart;
    }

    public function diffMemory(): int
    {
        return $this->memoryStop - $this->memoryStart;
    }
}
