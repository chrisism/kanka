<?php

return [
    'create'        => [
        'title' => 'Nueva organización',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'members'   => 'Miembros',
    ],
    'helpers'       => [
        'descendants'       => 'Esta lista contiene todas las organizaciones que descienden de esta organización, no solo las que están directamente por debajo.',
        'nested_without'    => 'Mostrando todas las organizaciones sin ningún superior. Haz clic sobre una fila para mostrar sus descendientes.',
    ],
    'index'         => [],
    'members'       => [
        'actions'       => [
            'add'   => 'Añadir miembro',
        ],
        'create'        => [
            'success'   => 'Miembro añadido a la organización.',
            'title'     => 'Nuevo miembro de :name',
        ],
        'destroy'       => [
            'success'   => 'Miembro borrado de la organización.',
        ],
        'edit'          => [
            'success'   => 'Miembro de la organización actualizado.',
            'title'     => 'Actualizar miembro de :name',
        ],
        'fields'        => [
            'parent'    => 'Superior',
            'pinned'    => 'Fijada',
            'role'      => 'Rol',
            'status'    => 'Estatus de miembro',
        ],
        'helpers'       => [
            'all_members'   => 'Todos los personajes que son miembros de la organización y de los descendientes de esta.',
            'members'       => 'Todos los personajes que pertenecen a esta organización.',
            'pinned'        => 'Elige esta opción si el miembro debe mostrarse en la sección fijada de las entidades asociadas a esta.',
        ],
        'pinned'        => [
            'both'  => 'Ambos',
            'none'  => 'Ninguno',
        ],
        'placeholders'  => [
            'parent'    => 'Quién es el superior de este miembro',
            'role'      => 'Líder, Miembro, Maestro de Espías, Septón Supremo...',
        ],
        'status'        => [
            'active'    => 'Miembro activo',
            'inactive'  => 'Miembro inactivo',
            'unknown'   => 'Estatus desconocido',
        ],
    ],
    'organisations' => [],
    'placeholders'  => [
        'type'  => 'Culto, banda, Rebelión, Gremio...',
    ],
    'quests'        => [],
    'show'          => [],
];
