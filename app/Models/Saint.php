<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saint extends Model
{
    use HasFactory;
    private $name;
    private $birth_place;
    private $blessing_date;
    private $miracles_number;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getBirth_place()
    {
        return $this->birth_place;
    }
    public function setBirth_place($birth_place)
    {
        $this->birth_place = $birth_place;
    }
    public function getBlessing_date()
    {
        return $this->blessing_date;
    }
    public function setBlessing_date($blessing_date)
    {
        $this->blessing_date = $blessing_date;
    }
    public function getMiracles_number()
    {
        return $this->miracles_number;
    }
    public function setMiracles_number($miracles_number)
    {
        $this->miracles_number = $miracles_number;
    }
}
