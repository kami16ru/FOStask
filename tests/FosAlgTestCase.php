<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FosAlgTestCase extends TestCase
{
    protected array $expectedCall = [];

    protected array $explodedCall = [];

    protected array $expectedAnswer = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->expectedCall = [
            'ru' => [
                'caseLessArgs' => 'программирование гонки',
                'caseMinDif' => 'код гонки музыка игры природа экология код гонки',
                'caseMiddleDif' => 'код гонки музыка игры природа экология велосипед фотография код гонки музыка игры' .
                    'природа экология код гонки музыка игры природа код гонки музыка игры код гонки'
            ],
            'en' => [
                'caseLessArgs' => 'code cars',
                'caseMinDif' => 'code cars music games nature ecology code cars',
                'caseMiddleDif' => 'code cars music games nature ecology bicycle photography code cars music games' .
                    'nature ecology code cars music games nature code cars music games code cars'
            ]
        ];

        $this->explodedCall = [
            'ru' => [
                'caseLessArgs' => [
                    'программирование',
                    'гонки'
                ],
                'caseMinDif' => [
                    'код',
                    'гонки',
                    'музыка',
                    'игры',
                    'природа',
                    'экология',
                    'код',
                    'гонки'
                ],
                'caseMiddleDif' => [
                    'код',
                    'гонки',
                    'музыка',
                    'игры',
                    'природа',
                    'экология',
                    'велосипед',
                    'фотография',
                    'код',
                    'гонки',
                    'музыка',
                    'игры',
                    'природа',
                    'экология',
                    'код',
                    'гонки',
                    'музыка',
                    'игры',
                    'природа',
                    'код',
                    'гонки',
                    'музыка',
                    'игры',
                    'код',
                    'гонки'
                ]
            ],
            'en' => [
                'caseLessArgs' => [
                    'code',
                    'cars'
                ],
                'caseMinDif' => [
                    'code',
                    'cars',
                    'music',
                    'games',
                    'nature',
                    'ecology',
                    'code',
                    'cars'
                ],
                'caseMiddleDif' => [
                    'code',
                    'cars',
                    'music',
                    'games',
                    'nature',
                    'ecology',
                    'bicycle',
                    'photography',
                    'code',
                    'cars',
                    'music',
                    'games',
                    'nature',
                    'ecology',
                    'code',
                    'cars',
                    'music',
                    'games',
                    'nature',
                    'code',
                    'cars',
                    'music',
                    'games',
                    'code',
                    'cars'
                ]
            ]
        ];

        $this->expectedAnswer = [
            'ru' => [
                'caseLessArgs' => [
                    'программирование' => 1,
                    'гонки' => 1
                ],
                'caseMinDif' => [
                    'код' => 2,
                    'гонки' => 2,
                    'музыка' => 1,
                    'игры' => 1,
                    'природа' => 1
                ],
                'caseMiddleDif' => [
                    'код' => 5,
                    'гонки' => 5,
                    'музыка' => 4,
                    'игры' => 4,
                    'природа' => 3
                ]
            ],
            'en' => [
                'caseLessArgs' => [
                    'code' => 1,
                    'cars' => 1
                ],
                'caseMinDif' => [
                    'code' => 2,
                    'cars' => 2,
                    'music' => 1,
                    'games' => 1,
                    'nature' => 1,
                ],
                'caseMiddleDif' => [
                    'code' => 5,
                    'cars' => 5,
                    'music' => 4,
                    'games' => 4,
                    'nature' => 3
                ]
            ]
        ];
    }
}