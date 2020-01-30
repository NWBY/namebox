<?php

namespace NWBY\Namebox;

use Faker\Factory as Faker;

class Namebox
{
    public function __construct()
    {
        $faker = Faker::create();
        $this->faker = $faker;
    }

    public function generate()
    {
        $suffix = $this->getSuffix();
        $word = $this->getWord();
        $business = $this->getBusiness();

        $names = [
            $word . $suffix,
            $business . $suffix
        ];

        return $names[mt_rand(0, count($names) - 1)];
    }

    protected function getSuffix()
    {
        $suffixes = [
            'ly',
            'r',
            'be',
            'er',
            's',
            'es',
            'top',
            'up',
            'Up',
            'ty',
            'TECH',
            'ry',
            'thing',
            'tech',
            'AI',
            'gen',
        ];

        return $suffixes[mt_rand(0, count($suffixes) - 1)];
    }

    protected function getWord()
    {
        return $this->faker->word;
    }

    protected function getBusiness()
    {
        return $this->faker->company;
    }
}
