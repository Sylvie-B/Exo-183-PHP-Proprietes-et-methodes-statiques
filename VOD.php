<?php


class VOD
{
    private static int $aboClasse = 0;

    private int $aboObject;
    private float $price;
    private string $name;
    private array $film = [
        "The fifth element",
        "Usual Suspects",
        "The Bourne Identity",
        "Benjamin Gates",
        "John Wick"
    ];

    public function __construct(string $name){
        $this->name = $name;
        $this->aboObject = 0;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
    public function getObjectAbo(): int
    {
        return $this->aboObject;
    }

    /**
     * @param int $abo
     */
    public function addAbo(int $abo): void
    {
        $this->aboObject += $abo;
        self::$aboClasse += $abo;
    }

    public static function getClasseAbo() {
        return self::$aboClasse;
    }
}
