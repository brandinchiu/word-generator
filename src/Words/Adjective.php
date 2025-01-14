<?php

namespace ClaudioDekker\WordGenerator\Words;

class Adjective
{
    /**
     * The default list of adjectives.
     *
     * @var string[]
     */
    protected const DEFAULT_ADJECTIVES = [
        'aged', 'ancient', 'autumn', 'billowing', 'bitter', 'blue', 'bold', 'broken',
        'cold', 'cool', 'crimson', 'damp', 'dark', 'dawn', 'delicate', 'divine', 'dry',
        'empty', 'falling', 'floral', 'fragrant', 'frosty', 'green', 'hidden', 'hollow',
        'holy', 'icy', 'indigo', 'late', 'lingering', 'little', 'lively', 'long', 'misty',
        'morning', 'muddy', 'nameless', 'old', 'patient', 'polished', 'proud', 'purple',
        'quiet', 'red', 'resilient', 'restless', 'rough', 'shy', 'silent', 'small', 'snowy',
        'solitary', 'sparkling', 'spring', 'still', 'summer', 'twilight', 'wandering',
        'weathered', 'wild', 'winter', 'wispy', 'withered', 'young',
    ];

    /**
     * The currently configured adjectives.
     *
     * @var string[]
     */
    protected static $adjectives = [];

    /**
     * Get a random adjective.
     */
    public static function random(): string
    {
        if (empty(self::$adjectives)) {
            self::setWordList(self::DEFAULT_ADJECTIVES);
        }

        return self::$adjectives[array_rand(self::$adjectives)];
    }

    /**
     * Set the possible adjectives that can be returned.
     *
     * @param  string[]  $adjectives
     */
    public static function setWordList(array $adjectives = []): void
    {
        self::$adjectives = $adjectives;
    }
}
