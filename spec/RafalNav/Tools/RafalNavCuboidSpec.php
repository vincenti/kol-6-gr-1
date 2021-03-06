<?php

namespace spec\RafalNav\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RafalNavCuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RafalNav\Tools\RafalNavCuboid');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(325)->getH()->shouldReturn(325);
    }
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(2)->setH(2)->field()->shouldReturn(20);
    }
}
