<?php
include "Notification.php";
class Sms implements Notification
{
    public function send()
    {
        echo "\n Sending Sms\n";
        return true;
    }
}