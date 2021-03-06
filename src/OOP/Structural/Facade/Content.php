<?php

namespace OOP\Structural\Facade;

class Content implements Component
{
    protected $content = 'Main content'.PHP_EOL;

    public function addContent(string $content): Component
    {
        $this->content .= $content.PHP_EOL;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
