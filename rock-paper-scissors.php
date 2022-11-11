<?php
require_once "Element.php";
require_once "Game.php";
require_once  "Player.php";

$rock = new Element("Rock");
$paper = new Element("Paper");
$scissors = new Element("Scissors");
$spock = new Element("Spock");
$lizard = new Element("Lizard");



$rock->setBeats($scissors);
$rock->setBeats($lizard);
$paper->setBeats($rock);
$paper->setBeats($spock);
$scissors->setBeats($paper);
$scissors->setBeats($lizard);
$spock->setBeats($rock);
$spock->setBeats($scissors);
$lizard->setBeats($paper);
$lizard->setBeats($spock);


$elements = [
    $rock,
    $paper,
    $scissors,
    $spock,
    $lizard
];



$userName = (string) readline("Enter your name: ");

foreach ($elements as $key => $element){
    echo "$key {$element->getName()}" . PHP_EOL;
}
$userSelection = (int) readline("Enter element: ");
$selectedElement = $elements[$userSelection];

$computerName = "Computer";
$opponentElement = $elements[array_rand($elements)];

$player = new Player($userName, $selectedElement);
$computer = new Player($computerName, $opponentElement);

$game = new Game($player, $computer);
$winner = $game->getWinner();

echo $player->getName() . " selects: " . $player->getSelection()->getName()
    . " VS " . $computer->getName() . " selects: " . $computer->getSelection()->getName() . PHP_EOL;

if ($winner === null){
    echo "The game was a tie." . PHP_EOL;
    exit;
}

echo "Winner: " . $winner->getName();








