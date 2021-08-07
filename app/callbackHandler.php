<?php


namespace app;


class callbackHandler extends \lib\CallbackHandler
{
    function process($callback, $state = null)
    {
        $this->api->edit_message_text($callback['from']['id'],$callback['message']['message_id'],"Hello world new");
        $this->api->answer_callback_query($callback['id'],"Biron text",true);
    }

}