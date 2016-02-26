<?php

class BasicTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTitle()
    {
        $this->visit('/')->see('Chris Kankiewicz');
    }

}
