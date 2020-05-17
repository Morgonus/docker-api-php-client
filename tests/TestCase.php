<?php

namespace Docker\Tests;

use Docker\Docker;
use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    /** @var Docker $docker */
    private static $docker;

    /**
     * @return Docker
     */
    public static function getDocker()
    {
        if (null === self::$docker) {
            self::$docker = new Docker();
        }

        return self::$docker;
    }
}
