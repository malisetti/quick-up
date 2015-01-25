<?php

namespace Quickstart\AppBundle\Service;

/**
 * Class Version
 * @package Quickstart\AppBundle\Service
 */
class Version
{

    /**
     * @var string
     */
    private $version;

    /**
     * @param string $version
     */
    public function __construct($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function current()
    {
        return file_get_contents($this->version);
    }
}
