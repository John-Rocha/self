<?php
namespace App;


interface TeamBalancerInterface
{
    public function addPlayer(PlayerInterface $player);
    public function getBalancedTeams();
    public function balance();
}
