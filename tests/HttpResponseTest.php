<?php

class HttpResponseTest extends TestCase
{
    public function test_root_response()
    {
        $this->get('/');
        $this->assertResponseStatus(200);
    }

    public function test_blog_response()
    {
        $this->get('/blog');
        $this->assertResponseStatus(200);
    }

    public function test_login_response()
    {
        $this->get('/login');
        $this->assertResponseStatus(200);
    }

    public function test_404_response()
    {
        $this->get('/404');
        $this->assertResponseStatus(404);
    }
}
