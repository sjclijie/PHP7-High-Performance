<?php


declare( strict_types = 1 );

class Person
{

    public function age(int $age): float {
        return $age;
    }

    public function name(string $name): string {
        return $name;
    }

    public function isAlive(bool $alive): bool {
        return $alive;
    }
}

//echo (new Person)->age(3.3);
echo (new Person)->age(3);

//echo (new Person)->isAlive(true);
