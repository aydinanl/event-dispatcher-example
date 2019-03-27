<?php

namespace Listeners;

use Events\UserRegisteredEvent;

class UserListener
{
    public function onUserRegistrationAction(UserRegisteredEvent $event)
    {
        $user = $event->getUser();
        echo $user->name . '<br>';
        echo $user->age . '<br>';
        echo 'UserRegistrationAction Triggered.';
    }
}