<?php 

return [
    /**
     *
     */ 
    'filters'    => [
        'app' => App\Components\Filters\AppFilter::class,    
    ],

    /**
     *
     */
    'actions' => [
        'home' => [
            'class' => App\Components\Actions\Action::class,
            'listeners' => [
                 App\Components\Actions\Listeners\ActionListener::class
            ]
        ]   
    ]
];