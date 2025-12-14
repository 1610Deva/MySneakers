<?php

return [
    /**
     * Your Midtrans Server Key
     * from https://dashboard.midtrans.com/settings/config_info
     */
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    
    /**
     * Your Midtrans Client Key
     * from https://dashboard.midtrans.com/settings/config_info
     */
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    
    /**
     * Set to true for production environment
     * Set to false for sandbox/development
     */
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    
    /**
     * Enable sanitization for request data
     */
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    
    /**
     * Enable 3D Secure authentication
     */
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];