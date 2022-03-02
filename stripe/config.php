<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JolOqSJLqlPOHNqfb6p8P8v0dWAvQrQJ3pxMtDefzOjOukSEoAweDzGKFr0rZhqJDaYeHZzCReyo30iCn7c9Jpg00YaCx8NJQ";

$secretKey="sk_test_51JolOqSJLqlPOHNqibMDyjpI0PlVu2XkbQzcETnYjMYuKWRci7t3tz95Zw7GnzcNJC9ZDv7ff9T9F2ZAqJPKpDKW00Hem5n0OR";

\Stripe\Stripe::setApiKey($secretKey);
?>