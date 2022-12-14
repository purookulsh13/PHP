<?php
class Timer
{
    private $startTime = null;

    public function __construct($showSeconds = true)
    {
        $this->startTime = microtime(true);
        echo 'Working - please wait...' . PHP_EOL;
    }

    public function __destruct()
    {
        $endTime = microtime(true);
        $time = $endTime - $this->startTime;

        $hours = (int)($time / 60 / 60);
        $minutes = (int)($time / 60) - $hours * 60;
        $seconds = (int)$time - $hours * 60 * 60 - $minutes * 60;
        $timeShow = ($hours == 0 ? "00" : $hours) . ":" . ($minutes == 0 ? "00" : ($minutes < 10 ? "0" . $minutes : $minutes)) . ":" . ($seconds == 0 ? "00" : ($seconds < 10 ? "0" . $seconds : $seconds));

        echo 'Job finished in ' . $timeShow . PHP_EOL;
    }
}

$t = new Timer(); // echoes "Working, please wait.."

// unset($t); 

?>