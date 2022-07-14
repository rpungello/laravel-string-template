<?php

it('can format simple strings', function () {
    $data = [
        'value1' => 1,
        'value2' => 2,
        'value3' => 3,
    ];

    $format = '{value1} - {value2} - {value3}';

    expect(\Rpungello\LaravelStringTemplate\Facades\LaravelStringTemplate::format($format, $data))->toBe('1 - 2 - 3');
});

it('can format nested strings', function () {
    $data = [
        'a' => [
            'value1' => 1,
            'value2' => 2,
        ],
        'b' => [
            'value3' => 3,
            'value4' => 4,
            'value5' => [
                5,
                6,
            ],
        ],
        'c' => '7',
    ];

    $format = '{a.value1}:{a.value2} - {b.value3}:{b.value4}:{b.value5.0}:{b.value5.1} - {c}';

    expect(\Rpungello\LaravelStringTemplate\Facades\LaravelStringTemplate::format($format, $data))->toBe('1:2 - 3:4:5:6 - 7');
});
