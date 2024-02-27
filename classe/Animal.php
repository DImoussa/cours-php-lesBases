<?php

class Animal
{

    private string $name;
    private string $sex;
    private int $age;
    private int $weight;
    private string $color;
    private string $texture;

    /**
     * POUR LE CONSTRUCTEUR MAIS IL Y EN A PAS
     * @param string $name Le nom
     * @param string $sex Le sex
     * @param int $age L'age
     * @param int $weight
     * @param string $color
     * @param string $texture
     */

    //pas de constructeur sinon il y'a une erreur

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Animal
    {
        $this->name = $name;
        return $this;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): Animal
    {
        $this->sex = $sex;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): Animal
    {
        $this->age = $age;
        return $this;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): Animal
    {
        $this->weight = $weight;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): Animal
    {
        $this->color = $color;
        return $this;
    }

    public function getTexture(): string
    {
        return $this->texture;
    }

    public function setTexture(string $texture): Animal
    {
        $this->texture = $texture;
        return $this;
    }



}
