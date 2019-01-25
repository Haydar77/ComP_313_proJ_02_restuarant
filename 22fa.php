<?php

use google\appengine\api\mail\Message;

try {
    $message = new Message();
    $message->setSender('from@example.com');
    $message->addTo('to@example.com');
    $message->setSubject('Example email');
    $message->setTextBody('Hello, world!');
    //$message->addAttachment('image.jpg', $image_data, $image_content_id);
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}

?>