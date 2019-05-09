<?php 

namespace App\Controllers;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    function __construct()
    { 
         
    }

    /**
     * @param \Mini\Routing\Response $response
     * @return string
     */
    function home(\Mini\Routing\Response $response)
    {   
        return 'Welcome to Mini Framework! Home World: ' . json_encode(['min' => 'is_great ']);
    }

    /**
     * @param \Mini\Routing\Response $response
     * @param $id
     * @throws \Mini\Exceptions\MResponseException
     */
    function hello(\Mini\Routing\Response $response, $id)
    {  
        return $response->download(mini_path('storage', 'sample.txt'), 'mini.rtf');
        // return $response->json(['min' => 'is great: ' . $id]);
 
        // return "<div><h1>Welcome to Mini Framework! Hello World: {$id} </h1></div>";
        // return 'Welcome to Mini Framework! Hello World: ' . json_encode(['min' => 'is_great ' . $id]);
    }

    /**
     * @param \Mini\Routing\Response $response
     * @return string
     */
    function about(\Mini\Routing\Response $response)
    {   
        return 'Welcome to Mini Framework! About World: ' . json_encode(['min' => 'is_great ']);
    }
}
