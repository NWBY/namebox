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

    public function generateFive()
    {
        $names = [];

        for ($i = 0; $i < 5; $i++) {
            if ($i % 2 == 0) {
                $prefix = $this->getPrefix();
                $word = $this->getWord();
                $names[] = $prefix . $word;
            } else {
                $suffix = $this->getSuffix();
                $word = $this->getWord();
                $names[] = $word . $suffix;
            }
        }

        return $names;
    }

    public function getTen()
    {
        $names = [];

        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $prefix = $this->getPrefix();
                $word = $this->getWord();
                $names[] = $prefix . $word;
            } else {
                $suffix = $this->getSuffix();
                $word = $this->getWord();
                $names[] = $word . $suffix;
            }
        }

        return $names;
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
            'rian',
            'ian',
            'place',
            'ply',
            'Uni',
            'Code',
            'Spl',
            'Ply',
            'Suf'
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
            'down',
            'Ply',
            'Veni',
            'Ale',
            'Force',
            'Tor',
            'Zor',
            'Speed',
            'X',
            'x'
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
            'Force',
            'Katen',
            'Keen',
            'Till',
            'Key',
            'Air',
            'Red',
            'Pyth',
            'Runner',
            'Channel',
            'Ten',
            'Direct'
        ];

        return $words[mt_rand(0, count($words) - 1)];
    }
}
