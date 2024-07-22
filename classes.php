<?php

declare(strict_types=1);

class SuperHero
{
  public function __construct(
    // Promoted Properties -> PHP 8s
    private string $name,
    public array $powers,
    public string $planet
  ) {
    $this->powers = $powers;
    $this->planet = $planet;
  }

  public function attack()
  {
    return "¡$this->name attack with his powers!";
  }

  public function show_all()
  {
    return get_object_vars($this);
  }

  public function description()
  {
    $powers = implode(", ", $this->powers);
    return "$this->name is a superhero from $this->planet and has the next powers: $powers";
  }

  public static function random()
  {
    $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
    $powers = [
      ["Superstrength", "Flying", "Laser beam"],
      ["Superstrength", "Super agility", "Spider webs"],
      ["Regeneration", "Superstrength", "Adamantium clows"],
      ["Superstrength", "Flying", "Laser beam"],
      ["Superstrength", "Super agility", "Size changing"],
    ];
    $planets = ["Asgard", "HulkWorld", "Krypton", "Earth"];

    $name = $names[array_rand($names)];
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    // echo "The chosen superhero is $name, comes from $planet and has the next powers: " .
    //   implode(", ", $power) .
    //   ".";
    return new self($name, $power, $planet);
  }
}

// $hero = new SuperHero(
//   "1",
//   ["super strength, super red underwear and laser eyes"],
//   "Krypton"
// );
// echo $hero->description();

// var_dump($hero->show_all());

// Static
$hero = SuperHero::random(); // Static Method
echo $hero->description();

// Instance
// $hero = new SuperHero(
//   "Superman",
//   ["Superstrength", "Flying", "Laser eyes"],
//   "Krypton"
// );
// $hero->description(); // -> Public Method
