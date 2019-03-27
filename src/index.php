<?php
require __DIR__ . '/../vendor/autoload.php';

use Controllers\UserController;
use Listeners\UserListener;
use Events\UserRegisteredEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

$listener = new UserListener();
$dispatcher = new EventDispatcher();

//Set function directly to dispatcher
//$dispatcher
//    ->addListener(
//        UserRegisteredEvent::NAME,
//
//        function(Event $event) {
//            $user = $event->getUser();
//            echo $user->name . "\r\n";
//        });

$dispatcher
    ->addListener(UserRegisteredEvent::NAME, array($listener, 'onUserRegistrationAction'));

//Usage Scenario
$controller = new UserController();
$controller->register();