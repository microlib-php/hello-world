<?php


namespace app;


class startHandler extends \lib\TextHandler
{
    function process($message, $state = null)
    {
        $markup = $this->api->callback_keyboard(['text','text 2'],['data','data 2'],2);
        $this->api->send_message($message['from']['id'],"Hello world!",$markup);
    }
}