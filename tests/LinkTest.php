<?php

class LinkTest extends TestCase
{

    public function testHomeLink() {
        $this->visit('/')->click('Chris Kankiewicz')->seePageIs('/');
        $this->visit('/')->click('Home')->seePageIs('/');
        $this->visit('/')->click('Blog')->seePageIs('/blog');
    }

}
