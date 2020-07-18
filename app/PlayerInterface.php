<?php
namespace App;


interface PlayerInterface
{
    public function getId();
    public function setId($id);

    public function getExperience();
    public function setExperience($experience);
}
