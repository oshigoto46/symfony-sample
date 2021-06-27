<?php

class MyLogger
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function mainControl()
    {
        $this->logger->info(var_export('In my lib',true));
    }
}

?>