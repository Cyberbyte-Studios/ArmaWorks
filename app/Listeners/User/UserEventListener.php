<?php
namespace ArmaWorks\Listeners\User;

use ArmaWorks\Events\User\UserLoggedInEvent;
use ArmaWorks\Events\User\UserRegisteredEvent;
use ArmaWorks\Models\BaseModel;

class UserEventListener
{

    public function __construct()
    {
    }


    /**
     * Handle user login events.
     * @param UserLoggedInEvent $event
     */
    public function onUserLogin(UserLoggedInEvent $event)
    {
    }

    /**
     * Handle user registered events.
     * @param UserRegisteredEvent $event
     */
    public function onUserRegistered(UserRegisteredEvent $event)
    {
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event)
    {
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            UserLoggedInEvent::class,
            'ArmaWorks\Listeners\User\UserEventListener@onUserLogin'
        );

        $events->listen(
            UserRegisteredEvent::class,
            'ArmaWorks\Listeners\User\UserEventListener@onUserRegistered'
        );

//        $events->listen(
//            'ArmaWorks\Events\UserLoggedOut',
//            'ArmaWorks\Listeners\UserEventListener@onUserLogout'
//        );
    }

}