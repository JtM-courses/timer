<?php

require __DIR__ . '/../vendor/autoload.php';

class Test
{
    public function a(int $count)
    {
        $data = [];
        for ($i = 0; $i < $count; $i++) {
            $data[] = rand();
        }
    }

    public function b(int $count)
    {
        $data = [];
        for ($i = 0; $i < $count; ++$i) {
            $data[] = rand();
        }
    }
}

$timer = new \JtM\Timer\Timer();
$test = new Test();
$count = 5000000;

$timer->start();
$test->a($count);
$timer->stop();
var_dump($timer->diffTime(), $timer->diffMemory());

$timer->start();
$test->b($count);
$timer->stop();
var_dump($timer->diffTime(), $timer->diffMemory());