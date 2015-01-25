<?php

namespace Spec\Quickstart\AppBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class QuickstartAppBundleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Quickstart\AppBundle\QuickstartAppBundle');
    }
}
