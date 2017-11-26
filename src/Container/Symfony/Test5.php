<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

class Test5 extends AbstractSymfonyTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(\DiContainerBenchmarks\Fixture\Class10::class);
    }
}
