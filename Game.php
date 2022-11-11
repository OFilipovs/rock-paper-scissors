<?php

class Game
{
    private Player $attacker;
    private Player $defender;
    public function __construct(Player $attacker, Player $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function getWinner(): ?Player
    {
        if ($this->attacker->getSelection()->getName() === $this->defender->getSelection()->getName()){
            return null;
        }

        if  (in_array($this->defender->getSelection(), $this->attacker->getSelection()->getBeats())){
            return $this->attacker;
        }

        return $this->defender;
    }


}