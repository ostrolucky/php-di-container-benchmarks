<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Test\TestRunner;

class WebBenchmarkContext implements BenchmarkContextInterface
{
    /**
     * @var string
     */
    private $benchmarkUrl;

//    public function __construct(string $benchmarkUrl)
//    {
//        $this->benchmarkUrl = $benchmarkUrl;
//    }

    public function getTestOutput(int $number, string $container, int $iterations, string $testType): string
    {
        $testRunner = new TestRunner();
        try {
            $result = $testRunner->runTest($number, $container, $iterations, $testType);
        } catch (\Exception $exception) {
            return '';
        }

        return $result->toJson();
    }
}
