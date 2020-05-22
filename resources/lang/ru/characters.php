<?php

return [
    'actions'       => [
        'add_appearance'    => 'Добавить внешность',
        'add_organisation'  => 'Добавить организацию',
        'add_personality'   => 'Добавить личность',
    ],
    'conversations' => [
        'description'   => 'Разговоры, в которых участвует персонаж.',
        'title'         => 'Разговоры персонажа :name',
    ],
    'create'        => [
        'description'   => 'Создание нового персонажа.',
        'success'       => 'Персонаж \':name\' создан.',
        'title'         => 'Новый персонаж',
    ],
    'destroy'       => [
        'success'   => 'Персонаж \':name\' удален.',
    ],
    'dice_rolls'    => [
        'description'   => 'Игральные кости, привязанные к персонажу.',
        'hint'          => 'Игральные кости могут быть привязаны к персонажу для игрового использования.',
        'title'         => 'Игральные кости персонажа :name',
    ],
    'edit'          => [
        'description'   => 'Редактирование персонажа.',
        'success'       => 'Персонаж \':name\' обновлен.',
        'title'         => 'Редактирование персонажа :name',
    ],
    'fields'        => [
        'age'                       => 'Возраст',
        'family'                    => 'Семья',
        'image'                     => 'Изображение',
        'is_dead'                   => 'Мертв(а)',
        'is_personality_visible'    => 'Показывать личность',
        'location'                  => 'Локация',
        'name'                      => 'Имя',
        'physical'                  => 'Физический',
        'race'                      => 'Раса',
        'relation'                  => 'Отношение',
        'sex'                       => 'Пол (гендер)',
        'title'                     => 'Титул',
        'traits'                    => 'Черты',
        'type'                      => 'Тип',
    ],
    'helpers'       => [
        'free'  => 'Куда делось поле "Свободен(а)"? Если оно было у этого персонажа, то теперь оно в новой вкладке Заметки!',
    ],
    'hints'         => [
        'hide_personality'          => 'Эта вкладка может быть скрыта для пользователей без роли "Админ" путем отключения опции "Показать персонажа" при редактировании персонажа.',
        'is_dead'                   => 'Этот персонаж мертв',
        'is_personality_visible'    => 'Вы можете скрыть раздел "Личность" от пользователей без роли "Админ".',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'Новый Случайный Персонаж',
        ],
        'add'           => 'Новый Персонаж',
        'description'   => 'Управление персонажами :name.',
        'header'        => 'Персонажи :name',
        'title'         => 'Персонажи',
    ],
    'items'         => [
        'description'   => 'Предметы, принадлежащие этому персонажу.',
        'hint'          => 'Предметы могут быть привязаны к персонажам и отображаться здесь.',
        'title'         => 'Предметы персонажа :name',
    ],
    'journals'      => [
        'description'   => 'Журналы, автором которых является этот персонаж.',
        'title'         => 'Журналы персонажа :name',
    ],
    'maps'          => [
        'description'   => 'Карта связей персонажа.',
        'title'         => 'Карта связей персонажа :name',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Добавить организацию',
        ],
        'create'        => [
            'description'   => 'Привяжите организацию к персонажу.',
            'success'       => 'Персонаж добавлен в организацию.',
            'title'         => 'Новая организация :name',
        ],
        'description'   => 'Организации, в которые входит этот персонаж.',
        'destroy'       => [
            'success'   => 'Организация персонажа удалена',
        ],
        'edit'          => [
            'description'   => 'Обновление организации персонажа.',
            'success'       => 'Организация персонажа обновлена.',
            'title'         => 'Обновление организации :name',
        ],
        'fields'        => [
            'organisation'  => 'Организация',
            'role'          => 'Роль',
        ],
        'hint'          => 'Персонажи могут быть частью нескольких организаций, показывая, на кого они работают или частью какого секретного общества являются.',
        'placeholders'  => [
            'organisation'  => 'Выберите организацию',
        ],
        'title'         => 'Организации персонажа :name',
    ],
    'placeholders'  => [
        'age'               => 'Возраст',
        'appearance_entry'  => 'Описание',
        'appearance_name'   => 'Волосы, глаза, кожа, рост',
        'family'            => 'Выберите персонажа',
        'image'             => 'Изображение',
        'location'          => 'Выберите локацию',
        'name'              => 'Имя',
        'personality_entry' => 'Детали',
        'personality_name'  => 'Достижения, поведение, страхи, принципы',
        'physical'          => 'Физический',
        'race'              => 'Раса',
        'sex'               => 'Пол (гендер)',
        'title'             => 'Титул',
        'traits'            => 'Черты',
        'type'              => 'NPC, Персонаж игрока, Божество',
    ],
    'quests'        => [
        'description'   => 'Квесты, частью которых является этот персонаж.',
        'helpers'       => [
            'quest_giver'   => 'Квесты, которые этот персонаж предлагает.',
            'quest_member'  => 'Квесты, членом которых является этот персонаж.',
        ],
        'title'         => 'Квесты персонажа :name',
    ],
    'sections'      => [
        'appearance'    => 'Внешность',
        'general'       => 'Основная информация',
        'personality'   => 'Личность',
    ],
    'show'          => [
        'description'   => 'Детальный вид персонажа.',
        'tabs'          => [
            'conversations' => 'Разговоры',
            'dice_rolls'    => 'Игральные кости',
            'items'         => 'Предметы',
            'journals'      => 'Журналы',
            'map'           => 'Карта связей',
            'organisations' => 'Организации',
            'personality'   => 'Личность',
            'quests'        => 'Квесты',
        ],
        'title'         => 'Персонаж :name',
    ],
    'warnings'      => [
        'personality_hidden'    => 'Вы не можете редактировать личность этого персонажа.',
    ],
];
