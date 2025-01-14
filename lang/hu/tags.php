<?php

return [
    'children'      => [
        'actions'   => [
            'add'   => 'Új címke hozzáadása',
        ],
        'create'    => [
            'success'   => ':name cédulát hozzáadtuk az entitáshoz.',
            'title'     => 'Új címke hozzárendelése ehhez: :name',
        ],
    ],
    'create'        => [
        'title' => 'Új címke',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'children'  => 'Almezők',
    ],
    'helpers'       => [
        'nested_without'    => 'Minden céldulát megmutat, aminek nincs szülője. Klikkelj egy sorra, hogy lásd a gyermekcéduláit.',
    ],
    'hints'         => [
        'children'  => 'Ez a lista felsorol minden, a címkében és annak alcímkéiben közvetlenül szereplő entitást.',
        'tag'       => 'Minden címke, mely közvetlenül ezen címke alatt van.',
    ],
    'index'         => [],
    'placeholders'  => [
        'type'  => 'Legendák, háborúk, történelem, vallás, címertan',
    ],
    'show'          => [
        'tabs'  => [
            'children'  => 'Alcímkék',
        ],
    ],
    'tags'          => [],
];
