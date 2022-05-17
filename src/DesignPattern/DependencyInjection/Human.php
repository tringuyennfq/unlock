<?php

namespace Tringuyen\Unlock\DesignPattern\DependencyInjection;

class Human implements HumanInterface
{
    protected Personality $personality;

    public function __construct(Personality $personality)
    {
        $this->personality = $personality;
    }

    /**
     * @return string
     */
    public function getPersonality(): string
    {
        return $this->personality->getPersonality();
    }

    /**
     * @param Personality $personality
     * @return void
     */
    public function setPersonality(Personality $personality)
    {
        $this->personality = $personality;
    }
}
