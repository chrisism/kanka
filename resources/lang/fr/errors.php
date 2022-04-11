<?php

return [
    '403'       => [
        'body'  => 'Tu n\'as pas accès à cette page!',
        'title' => 'Accès refusé.',
    ],
    '403-form'  => [
        'help'  => 'Ceci peut être dû à la session qui n\'est plus active. Prière de se reconnecter dans une autre fenêtre avant de ressayer d\'enregistrer.',
    ],
    '404'       => [
        'body'  => 'Désolé, la page demandée ne peut être trouvée.',
        'title' => 'Page Inconnue',
    ],
    '500'       => [
        'body'  => [
            '1' => 'Oups, quelque chose s\'est mal passé.',
            '2' => 'Un rapport avec l\'erreur rencontrée nous a été envoyé, mais quelques fois ça aide si nous avons plus de détails.',
        ],
        'title' => 'Erreur',
    ],
    '503'       => [
        'body'  => [
            '1' => 'Kanka est actuellement en maintenance, ce qui d\'habitude signifie qu\'une mise à jour est en cours!',
            '2' => 'Désolé pour le dérangement. Tout reviendra à la normale dans quelques minutes.',
        ],
        'json'  => 'Kanka est actuellement en maintenance. Prière de ressayer dans quelques minutes.',
        'title' => 'Maintenance',
    ],
    '503-form'  => [
        'body'  => 'Problème lors de le l\'enregistrement des données, ce qui est généralement causé par l\'un des deux scénarios suivants. Prière d\'ouvrir Kanka dans une :link. Si l\'application est en maintenance, il est préférable de sauvegarder les données dans une autre application et de réessayer lorsque Kanka est de retour. Si le message "Checking your browser" apparaît, la sauvegarde peut être essayée à nouveau.',
        'link'  => 'nouvelle fenêtre',
        'title' => 'Erreur inattendue.',
    ],
    'footer'    => 'Si tu as besoin d\'aide, contacte-nous a hello@kanka.io ou sur le :discord.',
];
