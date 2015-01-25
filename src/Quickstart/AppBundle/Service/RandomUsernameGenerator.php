<?php
namespace Quickstart\AppBundle\Service;

/**
 * Class RandomUsernameGenerator
 * @package Quickstart\AppBundle\Service
 */
class RandomUsernameGenerator
{

    /**
     * @return string
     */
    public function getUsername()
    {
        return uniqid('', true);
    }
}
