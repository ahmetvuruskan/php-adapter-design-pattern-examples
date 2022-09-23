<?php
include "Email.php";
include "Sms.php";
include "PushNotificationAdapter.php";
function sendNotification(Notification $notification)
{
    $notification->send();
}

sendNotification(new Email());
sendNotification(new Sms());
sendNotification(new PushNotificationAdapter());