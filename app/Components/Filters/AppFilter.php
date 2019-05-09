<?php 

namespace App\Components\Filters;

use Mini\Components\Filters\FilterInterface;
use Mini\Routing\Response;
use Mini\Routing\Request;

/**
 * Class AppFilter
 * @package App\Components\Filters
 */
class AppFilter implements FilterInterface
{
    /**
     * @param \Mini\Routing\Request $request
     * @param \Mini\Routing\Response $response
     * @return bool|mixed
     */
    function handle(Request $request, Response $response)
    {   
        return true;
    }
}
