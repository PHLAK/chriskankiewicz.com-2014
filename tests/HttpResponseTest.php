<?php

class HttpResponseTest extends TestCase
{

    public function testRootResponse() {
        $this->get('/');
        $this->assertResponseStatus(200);
    }

    public function testBlogResponse() {
        $this->get('/blog');
        $this->assertResponseStatus(200);
    }

    public function testLoginResponse() {
        $this->get('/auth/login');
        $this->assertResponseStatus(200);
    }

    public function test404Response() {
        $this->get('/404');
        $this->assertResponseStatus(404);
    }

}
