<?php

namespace NWBY\Namebox;

use function PHPSTORM_META\map;

class Namebox
{
    public function __construct()
    {
    }

    public function generate()
    {
        $suffix = $this->getSuffix();
        $prefix = $this->getPrefix();
        $word = $this->getWord();

        $names = [
            $word . $suffix,
            $prefix . $word
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

    protected function getPrefix()
    {
        $prefixes = [
            'One',
            'Build',
            'Grey',
            'IQ',
            'Insp',
            'Moon',
            'Un',
            'White',
            'take',
            'light',
            'Peak',
            'Me',
            'at',
            'ren',
            'comp',
            'Mark',
            'down'
        ];

        return $prefixes[mt_rand(0, count($prefixes) - 1)];
    }

    protected function getWord()
    {
        $words = [
            'Build',
            'Only',
            'Heat',
            'Tech',
            'Gray',
            'Grey',
            'Open',
            'Start',
            'Central',
            'Innovate',
            'Spring',
            'New',
            'Sight',
            'Light',
            'House',
            'Bring',
            'Different',
            'Team',
            'Phone',
            'Reduce',
            'Stage',
            'Pack',
            'Code',
            'User',
            'Interface',
            'String',
            'Integer',
            'Block',
            'Chain',
            'Move',
            'Table',
            'Computer',
            'One',
            'Ten',
            'Blue',
            'Clue',
            'Black',
            'Technology',
            'Site',
            'Luxe',
            'Inspire',
            'Analytic',
            'Truth',
            'Matrix',
            'Peak',
            'Infinite',
        ];

        return $words[mt_rand(0, count($words) - 1)];
    }
}
