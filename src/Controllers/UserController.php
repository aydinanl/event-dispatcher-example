<?php

namespace Controllers;

use Events\UserRegisteredEvent;
use Models\User;

class UserController{
    public function register()
    {
        global $dispatcher;
        $user = new User();
        $user->name = 'Aydın';
        $user->age = 23;

        $event = new UserRegisteredEvent($user);
        $dispatcher->dispatch(UserRegisteredEvent::NAME, $event);
    }
}