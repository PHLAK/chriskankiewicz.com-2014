<?php

class HttpResponseTest extends TestCase
{

    public function testRootResponse() {
        $this->assertEquals(200, $this->getStatusCode('/'));
    }

    public function test404Response() {
        $this->assertEquals(404, $this->getStatusCode('/404'));
    }

}
