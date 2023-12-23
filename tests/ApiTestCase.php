<?php

namespace Tests;

use App\Http\Kernel;
use App\Http\Request;
use App\Http\Response;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class ApiTestCase extends BaseTestCase
{
    // public function bbb(string $d){
    //     return "ret ". $d;
    // }

    public function json(
        string $method = 'GET', 
        string $uri ="/", 
        array $data =[], 
        array $headers=[]
    ): Response
    {
        $content = json_encode($data);
        //dump($content);
        $server = array_merge([
            'CONTENT_TYPE' => 'application/json',
            'Accept' => 'application/json',
        ], $headers);

        //dump($server);

        // $request = Request::create(
        //     method: $method,
        //     uri: $uri,
        //     server: $server,
        //     content: $content
        // );

        $kernel = new Kernel();
        //$response = $kernel->handle($request);
        $response = $kernel->handle();

        return $response;



    }


}
