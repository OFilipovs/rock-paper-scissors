<?php

class Element
{
    private string $name;
    private array $beats;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setBeats(Element $element): void
    {
        $this->beats [] = $element;
    }

    public function getBeats(): array
    {
        return $this->beats;
    }
}