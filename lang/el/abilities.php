<?php

return [
    'abilities'     => [
        'title' => 'Απόγονες ικανότητες του :name',
    ],
    'create'        => [
        'title' => 'Νέα Ικανότητα',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'abilities' => 'Ικανότητα',
        'ability'   => 'Γονική Ικανότητα',
        'charges'   => 'Αριθμός χρήσης',
    ],
    'helpers'       => [],
    'index'         => [],
    'placeholders'  => [
        'charges'   => 'Πόσες φορές μπορώ να το κάνω αυτό. Δείτε τα χαρακτηριστικά με {Level}*{CHA}',
        'name'      => 'Μπάλα φωτιάς, Παρατηρητής, Πονηρή επίθεση',
        'type'      => 'Ξόρκια, Δυνάμεις, Επιθέσεις',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Ικανότητες',
        ],
    ],
];
