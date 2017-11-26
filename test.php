<?php

require_once 'vendor/autoload.php';

$symfony = new \DiContainerBenchmarks\Container\Symfony\Resource\CompiledSingletonContainer();
$yaco = new \DiContainerBenchmarks\Container\Yaco\Resource\CompiledSingletonContainer();

// warmupz`
$symfony->get(\DiContainerBenchmarks\Fixture\Class10::class);
$yaco->get(\DiContainerBenchmarks\Fixture\Class10::class);


$time = microtime(true);
for ($i=0; $i <= 1000000;$i++) {
    $symfony->get(\DiContainerBenchmarks\Fixture\Class10::class);
}

echo 'Symfony finished in '.(microtime(true) - $time)."\n";

$time = microtime(true);
for ($i=0; $i <= 1000000;$i++) {
    $yaco->get(\DiContainerBenchmarks\Fixture\Class10::class);
}

echo 'Yaco finished in '.(microtime(true) - $time)."\n";