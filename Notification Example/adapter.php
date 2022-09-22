<?php

interface Notification
{
    public function send();
}

class Email implements Notification
{
    public function send()
    {
        echo "\nSending Email\n";
    }
}

class Sms implements Notification
{
    public function send()
    {
        echo "\n Sending Sms\n";
    }
}

class Firebase
{
    public function login()
    {
        echo "\nLogging into firebase \n";
    }

    public function pushNotification()
    {
        echo "\n Sending Push Notification \n";
    }
    public function logout(){
        echo "\n Logging out Firebase \n";

    }

}
class PushNotificationAdapter implements Notification {
    public function send()
    {
       $firebase = new Firebase();
       $firebase->login();
       $firebase->pushNotification();
       $firebase->logout();
    }
}

function sendNotification(Notification $notification)
{
    $notification->send();
}

sendNotification(new Email());
sendNotification(new Sms());
sendNotification(new PushNotificationAdapter());