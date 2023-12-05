<?php
$question = 'Was ist ein gültiger Variablenname in PHP?';
$answers = [
    '$txt_user_1',
    '$TxtUser1',
    'txt_user_1',
    '$txt.user.1'
];
$correct = [ 0, 1 ]; // possible bug!

/*
step2 (ignorieren - inhalt folgt am 6.12.):
$questions = [
    $question = 'Was ist ein gültiger Variablenname in PHP?',
    $answers = [
        '$txt_user_1' => true,
        '$TxtUser1' => true,
        'txt_user_1' => false,
        '$txt.user.1' => false
    ],
    ...
]
*/
