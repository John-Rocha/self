<?php
namespace App;


class Team
{
    protected $players = [];
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
    }

    public function getPlayers()
    {
        return $this->players;
    }
}
