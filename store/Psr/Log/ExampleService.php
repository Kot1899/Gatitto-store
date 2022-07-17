<?php

use Psr\Log\LoggerInterface;

class ExampleService
{
    private $logger;

    public function __construct (LoggerInterface $loger)
    {
        $this->logger;
    }

    public function SomeAction()
    {
        $this->logger->debug ('Message from ExampleService');
    }
}