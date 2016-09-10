<?php

class LinkTest extends TestCase
{
    public function test_home_links()
    {
        $this->visit('/')->click('Chris Kankiewicz')->seePageIs('/');
        $this->visit('/')->click('Home')->seePageIs('/');
        $this->visit('/')->click('Blog')->seePageIs('/blog');
    }
}
