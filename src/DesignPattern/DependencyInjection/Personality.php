<?php

namespace Tringuyen\Unlock\DesignPattern\DependencyInjection;

class Personality
{
    protected string $personality;

    public function __construct(string $personality)
    {
        $this->personality = $personality;
    }

    /**
     * @return string
     */
    public function getPersonality(): string
    {
        return $this->personality;
    }
}
