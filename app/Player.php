<?php
namespace App;


class Player implements PlayerInterface {
    protected $experience = 0;
    protected $id;

    public function __construct($id, $experience)
    {
        $this->id = $id;
        $this->experience = $experience;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }
}
