<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;


abstract class ApiTestCase extends BaseTestCase
{
    public function json(string $method = 'GET', string $uri ="/", array $data =[], array $headers=[]): object
    {
        return new class{
            public function getStatus():int 
            {
                return 200;
            }

            public function getBody():string
            {
                return '{"id":1,"title":"Clean Code: A Handbook of Agile Software Craftsmanship","year_published":2008,"author":{"id":1,"name":"Robert C. Martin","bio":"This is an author"}}';
            }
        };
    }


}