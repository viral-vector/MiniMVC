<?php 

namespace App\Components\Actions\Listeners;

use Mini\Components\Actions\Action;
use Mini\Components\Actions\ActionListener as MiniActionListener;

/**
 * Class ActionListener
 * @package App\Components\Actions\Listeners
 */
class ActionListener implements MiniActionListener
{
    /**
     * @param \Mini\Components\Actions\Action $event
     * @return mixed|void
     */
    function handle(Action $event){}
}
