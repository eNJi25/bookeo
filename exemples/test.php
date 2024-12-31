<?php

// spl fait office d'autoload
spl_autoload_register();

use Modules\Forum\Message;

// en mettant un alias on peut utiliser aussi ce namespace
use Modules\Chat\Message as MessageChat;

$messageForum = new Message();

$messageChat = new MessageChat();