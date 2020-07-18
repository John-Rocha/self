<?php
namespace App;


class TeamBalancerMinMax implements TeamBalancerInterface
{
    protected $players = [];
    protected $teams = [];

    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
    }

    public function getBalancedTeams()
    {
        return $this->teams;
    }

    public function balance ()
    {
        usort($this->players, function ($player1, $player2) {
            return $player1->getExperience() < $player2->getExperience();
        });

        $totalTeams = count($this->players) / 2;

        foreach(range(1, $totalTeams) as $teamId) {
            $strong = array_shift($this->players);
            $weak = array_pop($this->players);

            $team = new Team($teamId);
            $team->addPlayer($strong);
            $team->addPlayer($weak);
            $this->teams[] = $team;
        }

        return $this->getBalancedTeams();
    }
}
