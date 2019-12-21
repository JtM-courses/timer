# Timer

## usage

```php
$timer = new \JtM\Timer\Timer();
$timer->start();
//...
$timer->stop();
var_dump($timer->diffMemory(), $timer->diffTime());
```