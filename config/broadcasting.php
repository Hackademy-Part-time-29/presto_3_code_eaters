<?php
return [

    'default' => env('BROADCAST_DRIVER', 'pusher'), // Configura il driver di broadcasting predefinito come 'pusher'

    'connections' => [

        'pusher' => [ // Definisce la connessione 'pusher'
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'), // Ottiene la chiave dell'app Pusher dal file .env
            'secret' => env('PUSHER_APP_SECRET'), // Ottiene il segreto dell'app Pusher dal file .env
            'app_id' => env('PUSHER_APP_ID'), // Ottiene l'ID dell'app Pusher dal file .env
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'), // Ottiene il cluster Pusher dal file .env
                'useTLS' => true, // Abilita TLS per una connessione sicura
            ],
        ],

        // 'redis' => [ // Connessione per Redis (non necessaria in questo caso)
        //     'driver' => 'redis',
        //     'connection' => 'default',
        // ],

        // 'log' => [ // Connessione per registrare eventi nei log (utile per il debug)
        //     'driver' => 'log',
        // ],

        // 'null' => [ // Connessione "null" che non esegue nulla (può essere usata per disabilitare temporaneamente il broadcasting)
        //     'driver' => 'null',
        // ],

    ],

];
