<?php

namespace App\Models;

final class AgeCount 
{

    private $male0_10;
    private $male11_20;
    private $male21_30;
    private $male31_40;
    private $male41_50;
    private $male51_60;
    private $male61_70;
    private $male71_80;
    private $male81_90;
    private $male91;

    private $female0_10;
    private $female11_20;
    private $female21_30;
    private $female31_40;
    private $female41_50;
    private $female51_60;
    private $female61_70;
    private $female71_80;
    private $female81_90;
    private $female91;

    private $other0_10;
    private $other11_20;
    private $other21_30;
    private $other31_40;
    private $other41_50;
    private $other51_60;
    private $other61_70;
    private $other71_80;
    private $other81_90;
    private $other91;

    public function __construct()
    {
    }

    public function getMale010(): ?int
    {
        return $this->male0_10;
    }

    public function setMale010(?int $male0_10): self
    {
        $this->male0_10 = $male0_10 + 1;

        return $this;
    }

    public function getMale1120(): ?int
    {
        return $this->male11_20;
    }

    public function setMale1120(?int $male11_20): self
    {
        $this->male11_20 = $male11_20 + 1;

        return $this;
    }

    public function getMale2130(): ?int
    {
        return $this->male21_30;
    }

    public function setMale2130(?int $male21_30): self
    {
        $this->male21_30 = $male21_30 + 1;

        return $this;
    }

    public function getMale3140(): ?int
    {
        return $this->male31_40;
    }

    public function setMale3140(?int $male31_40): self
    {
        $this->male31_40 = $male31_40 + 1;

        return $this;
    }

    public function getMale4150(): ?int
    {
        return $this->male41_50;
    }

    public function setMale4150(?int $male41_50): self
    {
        $this->male41_50 = $male41_50 + 1;

        return $this;
    }

    public function getMale5160(): ?int
    {
        return $this->male51_60;
    }

    public function setMale5160(?int $male51_60): self
    {
        $this->male51_60 = $male51_60 + 1;

        return $this;
    }

    public function getMale6170(): ?int
    {
        return $this->male61_70;
    }

    public function setMale6170(?int $male61_70): self
    {
        $this->male61_70 = $male61_70 + 1;

        return $this;
    }

    public function getMale7180(): ?int
    {
        return $this->male71_80;
    }

    public function setMale7180(?int $male71_80): self
    {
        $this->male71_80 = $male71_80 + 1;

        return $this;
    }

    public function getMale8190(): ?int
    {
        return $this->male81_90;
    }

    public function setMale8190(?int $male81_90): self
    {
        $this->male81_90 = $male81_90 + 1;

        return $this;
    }
    public function getMale91(): ?int
    {
        return $this->male91;
    }

    public function setMale91(?int $male91): self
    {
        $this->male91 = $male91 + 1;

        return $this;
    }





    public function getFemale010(): ?int
    {
        return $this->female0_10;
    }

    public function setFemale010(?int $female0_10): self
    {
        $this->female0_10 = $female0_10 + 1;

        return $this;
    }

    public function getFemale1120(): ?int
    {
        return $this->female11_20;
    }

    public function setFemale1120(?int $female11_20): self
    {
        $this->female11_20 = $female11_20 + 1;

        return $this;
    }

    public function getFemale2130(): ?int
    {
        return $this->female21_30;
    }

    public function setFemale2130(?int $female21_30): self
    {
        $this->female21_30 = $female21_30 + 1;

        return $this;
    }

    public function getFemale3140(): ?int
    {
        return $this->female31_40;
    }

    public function setFemale3140(?int $female31_40): self
    {
        $this->female31_40 = $female31_40 + 1;

        return $this;
    }

    public function getFemale4150(): ?int
    {
        return $this->female41_50;
    }

    public function setFemale4150(?int $female41_50): self
    {
        $this->female41_50 = $female41_50 + 1;

        return $this;
    }

    public function getFemale5160(): ?int
    {
        return $this->female51_60;
    }

    public function setFemale5160(?int $female51_60): self
    {
        $this->female51_60 = $female51_60 + 1;

        return $this;
    }

    public function getFemale6170(): ?int
    {
        return $this->female61_70;
    }

    public function setFemale6170(?int $female61_70): self
    {
        $this->female61_70 = $female61_70 + 1;

        return $this;
    }

    public function getFemale7180(): ?int
    {
        return $this->female71_80;
    }

    public function setFemale7180(?int $female71_80): self
    {
        $this->female71_80 = $female71_80 + 1;

        return $this;
    }

    public function getFemale8190(): ?int
    {
        return $this->female81_90;
    }

    public function setFemale8190(?int $female81_90): self
    {
        $this->female81_90 = $female81_90 + 1;

        return $this;
    }

    public function getFemale91(): ?int
    {
        return $this->female91;
    }

    public function setFemale91(?int $female91): self
    {
        $this->female91 = $female91 + 1;

        return $this;
    }






    public function getOther010(): ?int
    {
        return $this->other0_10;
    }

    public function setOther010(?int $other0_10): self
    {
        $this->other0_10 = $other0_10 + 1;

        return $this;
    }

    public function getOther1120(): ?int
    {
        return $this->other11_20;
    }

    public function setOther1120(?int $other11_20): self
    {
        $this->other11_20 = $other11_20 + 1;

        return $this;
    }

    public function getOther2130(): ?int
    {
        return $this->other21_30;
    }

    public function setOther2130(?int $other21_30): self
    {
        $this->other21_30 = $other21_30 + 1;

        return $this;
    }

    public function getOther3140(): ?int
    {
        return $this->other31_40;
    }

    public function setOther3140(?int $other31_40): self
    {
        $this->other31_40 = $other31_40 + 1;

        return $this;
    }

    public function getOther4150(): ?int
    {
        return $this->other41_50;
    }

    public function setOther4150(?int $other41_50): self
    {
        $this->other41_50 = $other41_50 + 1;

        return $this;
    }

    public function getOther5160(): ?int
    {
        return $this->other51_60;
    }

    public function setOther5160(?int $other51_60): self
    {
        $this->other51_60 = $other51_60 + 1;

        return $this;
    }

    public function getOther6170(): ?int
    {
        return $this->other61_70;
    }

    public function setOther6170(?int $other61_70): self
    {
        $this->other61_70 = $other61_70 + 1;

        return $this;
    }

    public function getOther7180(): ?int
    {
        return $this->other71_80;
    }

    public function setOther7180(?int $other71_80): self
    {
        $this->other71_80 = $other71_80 + 1;

        return $this;
    }

    public function getOther8190(): ?int
    {
        return $this->other81_90;
    }

    public function setOther8190(?int $other81_90): self
    {
        $this->other81_90 = $other81_90 + 1;

        return $this;
    }
    public function getOther91(): ?int
    {
        return $this->other91;
    }

    public function setOther91(?int $other91): self
    {
        $this->other91 = $other91 + 1;

        return $this;
    }
}
