<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Merchant Details
    |--------------------------------------------------------------------------
    |
    | This is the merchant details that will be used to generate the QR code
    | for the merchant.
    |
    */

    'name' => env('COMPANY_NAME', 'FitDiva'),
    'phone' => env('COMPANY_PHONE', '+62 888-888-8888'),
    'email' => env('COMPANY_EMAIL', 'admin@fitdiva.com'),
    'address' => env('COMPANY_ADDRESS', 'Jalan 123, Jakarta, Indonesia'),
];
