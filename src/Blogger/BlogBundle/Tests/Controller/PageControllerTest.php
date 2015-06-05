<?php

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/About');
    }

    public function testMain()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/main');
    }

}
