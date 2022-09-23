<?php
include "Firebase.php";
class PushNotificationAdapter implements Notification {
    public function send()
    {
        $firebase = new Firebase();
        $firebase->login();
        $firebase->pushNotification();
        $firebase->logout();
        return true;
    }
}