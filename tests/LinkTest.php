<?php

class LinkTest extends TestCase
{

    public function testHomeLink() {
        $this->visit('/')->click('Chris Kankiewicz')->seePageIs('/');
    }

}
