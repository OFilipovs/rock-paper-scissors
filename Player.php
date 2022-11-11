<?php

class Player
{
    private Element $selection;
    private string $name;

    public function __construct(string $name, Element $selection)
    {
        $this->selection = $selection;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSelection(): Element
    {
        return $this->selection;
    }
}