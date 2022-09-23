<?php
include "Notification.php";
class Email implements Notification
{
    public function send()
    {
        echo "\nSending Email\n";
    }
}