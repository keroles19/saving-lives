<?php

return [
    /**
     * User model class name.
     */
    'userModel' => env('USER_MODEL', 'App\Models\User'),

    /**
     * Configure Brandenburg to not register its migrations.
     */
    'ignoreMigrations' => false,
];
