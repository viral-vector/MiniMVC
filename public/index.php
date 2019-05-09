<?php

/**
 * Composer loader
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Init mini
 */
$mini = ( new Mini\Mini(realpath(__DIR__.'/../'), []) )
                ->register(mini_boot('app', 'Components/components.php'))  // register filters & Actions
                ->routes([
                    mini_boot('app', 'routes.php')
                ]);

/**
 * Run Application
 */
$mini->run();