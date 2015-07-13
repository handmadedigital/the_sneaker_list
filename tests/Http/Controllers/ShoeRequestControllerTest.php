<?php

class ShoeRequestControllerTest extends TestCase
{
    public function test_shoe_request_form()
    {
        $this->visit('/shoe-request')
            ->select('reebok', 'brand')
            ->type('super shoes', 'model')
            ->select('10', 'size')
            ->press('Lets Get Looking!');
    }
}