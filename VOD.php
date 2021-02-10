<?php


class VOD
{
    private array $film = [
        "The fifth element",
        "Usual Suspects",
        "The Bourne Identity",
        "Benjamin Gates",
        "John Wick"
    ];

    private float $price;
    private static int $abo;

    public function __construct(string $name){
        $this->$name = $name;
    }

    /**
     * @return array|string[]
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm($film): void
    {
        $this->film = $film;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public static function getTotalAbo(): int
    {
        return self::$abo;
    }

    /**
     * @param int $abo
     */
    public static function setTotalAbo(int $abo): void
    {
        self::$abo++;
    }
}