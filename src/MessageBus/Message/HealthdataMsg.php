<?php

namespace App\MessageBus\Message;

/**
 * Sending messages to Message Broker. This class is responsible for
 * payload.
 */
class HealthdataMsg
{
    /**
     * Message payload. Very important
     * @var string
     */
    private string $content;


    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function __toString()
    {
        return $this->content;
    }
}
