<?php

namespace App\Message;

/**
 * Sending messages to Message Broker
 */
class NewHealthdata
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
