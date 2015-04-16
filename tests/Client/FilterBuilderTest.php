<?php

namespace Tests\Spinen\ConnectWise\Client;

use Tests\Spinen\ConnectWise\BaseTest;

class FilterBuilderTest extends BaseTest
{

    /**
     * @test
     */
    public function it_marks_test_as_not_done()
    {
        $this->markTestIncomplete();
    }

}
