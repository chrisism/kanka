<?php

return [
    'account'       => [
        'actions'           => [
            'social'            => 'Перейти на вход Kanka',
            'update_email'      => 'Обновить электронную почту',
            'update_password'   => 'Обновить пароль',
        ],
        'email'             => 'Смена электронной почты',
        'email_success'     => 'Электронная почта обновлена.',
        'password'          => 'Смена пароля',
        'password_success'  => 'Пароль обновлен.',
        'social'            => [
            'error'     => 'Этот аккаунт уже использует вход Kanka.',
            'helper'    => 'Сейчас вход в ваш аккаунт управляется :provider. Вы можете перейти на стандартный вход Kanka, создав пароль.',
            'success'   => 'Теперь ваш аккаунт использует вход Kanka.',
            'title'     => 'Вход Kanka',
        ],
        'title'             => 'Аккаунт',
    ],
    'api'           => [
        'helper'    => 'Добро пожаловать в Kanka API. Сгенерируйте личный маркер доступа, чтобы использовать его в API запросах для сбора информации о кампаниях, в которых вы состоите.',
        'link'      => 'Читать документацию API',
        'title'     => 'API',
    ],
    'apps'          => [
        'actions'   => [
            'connect'   => 'Подключить',
            'remove'    => 'Удалить',
        ],
        'benefits'  => 'Kanka предоставляет интеграцию со сторонними сервисами. В будущем планируется больше интеграций.',
        'discord'   => [
            'errors'    => [
                'add'   => 'При подключении вашего Discord аккаунта к Kanka произошла ошибка. Пожалуйста, попробуйте снова.',
            ],
            'success'   => [
                'add'       => 'Ваш Discord аккаунт подключен.',
                'remove'    => 'Ваш Discord аккаунт отключен.',
            ],
            'text'      => 'Получите доступ к ролям вашей подписки автоматически.',
        ],
        'title'     => 'Интеграция',
    ],
    'boost'         => [
        'available_boosts'  => 'Свободные усилители: :amount из :max',
        'benefits'          => [
            'headers'   => [
                'boosted'       => 'Преимущества усиленных кампаний',
                'superboosted'  => 'Преимущества супер-усиленных кампаний',
            ],
            'more'      => [
                'boosted'       => 'Все функции усиленных кампаний',
                'superboosted'  => 'Все функции супер-усиленных кампаний',
            ],
            'third'     => 'Чтобы усилить кампанию, перейдите на ее страницу и нажмите на кнопку :boost_button над кнопкой :edit_button.',
        ],
        'buttons'           => [
            'boost'         => 'Усилить',
            'superboost'    => 'Супер-усилить',
            'tooltips'      => [
                'boost'         => 'Усиление кампании использует :amount усилитель.',
                'superboost'    => 'Супер-усиление кампании использует :amount усилителя.',
            ],
            'unboost'       => 'Снять усилители',
        ],
        'campaigns'         => 'Усиленные кампании: :count из :max',
        'exceptions'        => [
            'already_boosted'       => 'Кампания :name уже усилена.',
            'exhausted_boosts'      => 'У вас закончились усилители. Вы можете снять усилитель с одной из кампаний, и усилить другую.',
            'exhausted_superboosts' => 'У вас закончились усилители. Вам нужно 3 усилителя, чтобы супер-усилить кампанию.',
        ],
        'modals'            => [
            'more'  => [
                'action'    => 'Получить усилители',
                'body'      => 'Больше усилителей можно получить, повысив ваш уровень подписки, или сняв их с других кампаний. Отмена усиления не удаляет созданную при усилении информацию, а лишь скрывает ее пока кампанию снова не усилят.',
                'title'     => 'Как получить больше усилителей',
            ],
        ],
        'success'           => [
            'boost'         => 'Кампания :name усилена.',
            'delete'        => 'Усилители сняты с кампании :name.',
            'superboost'    => 'Кампания :name супер-усилена.',
        ],
        'title'             => 'Усиление',
        'unboost'           => [
            'title' => 'Снятие усилителей с кампании',
        ],
    ],
    'countries'     => [
        'austria'       => 'Австрия',
        'belgium'       => 'Бельгия',
        'france'        => 'Франция',
        'germany'       => 'Германия',
        'italy'         => 'Италия',
        'netherlands'   => 'Нидерланды',
        'spain'         => 'Испания',
    ],
    'invoices'      => [
        'actions'   => [
            'download'  => 'Скачать PDF',
            'view_all'  => 'Показать все',
        ],
        'empty'     => 'У вас нет счетов.',
        'fields'    => [
            'amount'    => 'Сумма',
            'date'      => 'Дата',
            'invoice'   => 'Счет',
            'status'    => 'Статус',
        ],
        'header'    => 'Ниже список ваших последних 24 счетов, которые можно скачать.',
        'status'    => [
            'paid'      => 'Оплачен',
            'pending'   => 'Не оплачен',
        ],
        'title'     => 'Счета',
    ],
    'layout'        => [
        'success'   => 'Оформление обновлено.',
        'title'     => 'Оформление',
    ],
    'marketplace'   => [],
    'menu'          => [
        'account'               => 'Аккаунт',
        'api'                   => 'API',
        'apps'                  => 'Приложения',
        'billing'               => 'Способ оплаты',
        'invoices'              => 'Счета',
        'other'                 => 'Другое',
        'patreon'               => 'Patreon',
        'payment_options'       => 'Способы оплаты',
        'personal_settings'     => 'Персональные настройки',
        'profile'               => 'Профиль',
        'settings'              => 'Настройки',
        'subscription'          => 'Подписка',
        'subscription_status'   => 'Статус подписки',
    ],
    'patreon'       => [
        'deprecated'    => 'Устаревшая функция - если вы хотите поддержать Kanka, пожалуйста сделайте это с помощью меню ":subscription". Ссылка на Patreon до сих пор активна для наших Patron-ов, подключивших свои аккаунты до нашего ухода с Patreon.',
        'pledge'        => 'Уровень: :name',
        'remove'        => [
            'button'    => 'Отключить Patreon аккаунт',
            'success'   => 'Ваш Patreon аккаунт отключен.',
            'text'      => 'При отключении вашего Patreon аккаунта Kanka будут удалены ваши бонусы, имя в Зале Славы, усилители кампаний и другие функции, получаемые через поддержку Kanka. Ничего из того, чтобы было создано в усиленной кампании не пропадет (например изображения заголовков объектов). Оформив подписку заново, вы получите доступ ко всем этим данным, и снова сможете усиливать ваши кампании.',
            'title'     => 'Отключение вашего Patreon аккаунта Kanka',
        ],
        'title'         => 'Patreon',
    ],
    'profile'       => [
        'actions'   => [
            'update_profile'    => 'Обновить профиль',
        ],
        'avatar'    => 'Изображение профиля',
        'success'   => 'Профиль обновлен.',
        'title'     => 'Личный профиль',
    ],
    'subscription'  => [
        'actions'               => [
            'cancel_sub'        => 'Отменить подписку',
            'subscribe'         => 'Подписаться',
            'update_currency'   => 'Сохранить предпочитаемую валюту',
        ],
        'billing'               => [
            'helper'    => 'Информация о вашей оплате обрабатывается и надежно сохраняется с помощью :stripe. Этот способ оплаты будет использоваться для всех ваших подписок.',
            'saved'     => 'Сохраненный способ оплаты',
            'title'     => 'Редактирование способа оплаты',
        ],
        'cancel'                => [
            'text'  => 'Жаль, что вы уходите! После отмены ваша подписка останется активной до следующего периода оплаты, после которого вы потеряете ваши усилители кампаний и другие преимущества, которые дает поддержка Kanka. Можете заполнить следующую форму, чтобы сообщить нам, что мы можем сделать лучше, или, что привело вас к этому решению.',
        ],
        'cancelled'             => 'Ваша подписка отменена. Вы можете обновить подписку, как только закончится ваша нынешняя подписка.',
        'change'                => [
            'text'  => [
                'monthly'   => 'Вы подписываетесь на уровень :tier, стоимостью :amount в месяц.',
                'yearly'    => 'Вы подписываетесь на уровень :tier, стоимостью :amount в год.',
            ],
            'title' => 'Изменение уровня подписки',
        ],
        'coupon'                => [
            'check'         => 'Проверить промокод',
            'invalid'       => 'Недействительный промокод.',
            'label'         => 'Промокод',
            'percent_off'   => 'Вы получите скидку :percent% на вашу первую годовую подписку!',
        ],
        'currencies'            => [
            'eur'   => 'EUR',
            'usd'   => 'USD',
        ],
        'currency'              => [
            'title' => 'Изменение предпочитаемой валюты оплаты',
        ],
        'errors'                => [
            'callback'      => 'Наш платежный провайдер сообщил нам об ошибке. Пожалуйста, попробуйте еще раз и свяжитесь с нами, если проблема повторится.',
            'subscribed'    => 'Не удалось обработать вашу подписку. Stripe предоставил следующее пояснение.',
        ],
        'fields'                => [
            'active_since'      => 'Активна с',
            'active_until'      => 'Активна до',
            'billing'           => 'Оплата',
            'currency'          => 'Валюта оплаты',
            'payment_method'    => 'Способ оплаты',
            'plan'              => 'Текущий план',
            'reason'            => 'Причина',
        ],
        'helpers'               => [
            'alternatives'          => 'Оплатите свою подписку с помощью :method. Этот способ оплаты не будет автоматически обновляться по окончанию вашей подписки. Метод :method доступен только для евро.',
            'alternatives_warning'  => 'Повышение вашего уровня подписки при данном способе оплаты невозможно. Пожалуйста, оформите новую подписку, когда закончится текущая.',
            'alternatives_yearly'   => 'Из-за ограничений, связанных с повторяющимися оплатами, метод :method доступен только для годовых подписок.',
        ],
        'manage_subscription'   => 'Управление подпиской',
        'payment_method'        => [
            'actions'       => [
                'add_new'           => 'Добавить способ оплаты',
                'change'            => 'Изменить способ оплаты',
                'save'              => 'Сохранить способ оплаты',
                'show_alternatives' => 'Альтернативные способы оплаты',
            ],
            'add_one'       => 'У вас нет сохраненного способа оплаты.',
            'alternatives'  => 'Вы можете оплатить подписку с помощью альтернативных способов оплаты. При этом подписка будет оплачена один раз и не будет автоматически обновляться каждый месяц.',
            'card'          => 'Карта',
            'card_name'     => 'Имя на карте',
            'country'       => 'Страна проживания',
            'ending'        => 'Заканчивается на',
            'helper'        => 'Эта карта будет использоваться для всех ваших подписок.',
            'new_card'      => 'Добавить новый способ оплаты.',
            'saved'         => ':brand заканчивается на :last4',
        ],
        'placeholders'          => [
            'reason'    => 'Если хотите, можете рассказать нам, почему вы перестаете поддерживать Kanka. Отсутствует ли необходимая функция? Изменилась ли ваша финансовая ситуация?',
        ],
        'plans'                 => [
            'cost_monthly'  => ':currency :amount выплачивается ежемесячно',
            'cost_yearly'   => ':currency :amount выплачивается ежегодно',
        ],
        'sub_status'            => 'Информация о подписке',
        'subscription'          => [
            'actions'   => [
                'downgrading'       => 'Свяжитесь с нами для понижения уровня',
                'rollback'          => 'Перейти на Kobold',
                'subscribe'         => 'Перейти на месячный :tier',
                'subscribe_annual'  => 'Перейти на годовой :tier',
            ],
        ],
        'success'               => [
            'alternative'   => 'Ваша оплата зарегистрирована. Вы получите уведомление, как только она будет обработана и ваша подписка будет активирована.',
            'callback'      => 'Ваша подписка успешно оформлена. Ваш аккаунт будет обновлен, как только наш платежный провайдер сообщит нам об оплате (это может занять несколько минут).',
            'cancel'        => 'Ваша подписка отменена. Она будет активной до окончания вашего текущего периода оплаты.',
            'currency'      => 'Настройки вашей предпочитаемой валюты обновлены.',
            'subscribed'    => 'Ваша подписка успешно оформлена. Не забудьте подписаться на рассылку голосований, чтобы быть в курсе, когда начнется голосование. Вы можете изменить настройки рассылки на странице вашего профиля.',
        ],
        'tiers'                 => 'Уровни подписки',
        'trial_period'          => 'Годовые подписки можно отменять в течение 14 дней. Свяжитесь с нами через :email, если вы хотите отменить вашу годовую подписку и получить деньги назад.',
        'upgrade_downgrade'     => [
            'button'    => 'Информация о повышении и понижении уровня',
            'cancel'    => [
                'bullets'   => [
                    'bonuses'   => 'Ваши бонусы останутся доступными до окончания периода подписки.',
                    'boosts'    => 'То же самое происходит с усиленными кампаниями. При окончании усиления функции усиления становятся невидимыми, но не удаляются из кампании.',
                    'kobold'    => 'Чтобы отменить подписку, перейдите на уровень Kobold.',
                ],
                'title'     => 'При отмене подписки',
            ],
            'downgrade' => [
                'bullets'   => [
                    'end'   => 'Ваш текущий уровень будет активен до окончания текущего периода оплаты, после чего вы будете понижены до вашего нового уровня.',
                ],
                'title'     => 'При понижении уровня',
            ],
            'upgrade'   => [
                'bullets'   => [
                    'immediate' => 'Ваша подписка будет незамедлительно оплачена, и вы получите доступ к вашему новому уровню.',
                    'prorate'   => 'Вы платите только разницу между вашими старым и новым уровнями.',
                ],
                'title'     => 'При повышении уровня',
            ],
        ],
        'warnings'              => [
            'incomplete'    => 'Не удалось совершить оплату с помощью вашей карты. Пожалуйста обновите информацию вашей кредитной карты, и мы попробуем совершить оплату снова в течение нескольких дней. Если ошибка произойдет снова, ваша подписка будет отменена.',
            'patreon'       => 'Ваш аккаунт подключен к Patreon. Пожалуйста, отключите ваш аккаунт в настройках :patreon перед переходом на подписку Kanka.',
        ],
    ],
];
