<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

class Test4 extends AbstractSymfonyTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get(\DiContainerBenchmarks\Fixture\Class100::class);
    }
}
