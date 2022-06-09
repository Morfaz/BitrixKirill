<?php


use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Страница 1')
    ->addTab('О компании')
    ->addOption('EMAIL', [
        'TITLE'   => 'Email компании',
        'DEFAULT' => 'about@example.com',
        'WIDTH'   => '400',
    ])
    ->addOption('OFFICE', [
        'TITLE'   => 'Адрес офиса',
        'DEFAULT' => 'Адрес офиса',
        'WIDTH'   => '600',
        'HEIGHT'  => '100',
    ])
    ->addOption('TEL', [
        'TITLE'   => 'Номер телефона',
        'DEFAULT' => '+7 (999) 123-45-67',
        'WIDTH'   => '400',
        'HEIGHT'  => '20',
    ])
    ->addTab('Общие')
    ->addOption('SELECT1', [
        'TITLE'   => 'Значение из списка',
        'DEFAULT' => 'var2',
        'OPTIONS' => [
            'var1' => 'Вариант 1',
            'var2' => 'Вариант 2',
            'var3' => 'Вариант 3',
            'var4' => 'Вариант 4',
        ],
    ])
    ->addPage('Страница 2')
    ->addTab('Таб 1')
    ->addOption('EMAIL_OFFICE_1', [
        'TITLE'   => 'Email офиса 1',
        'DEFAULT' => 'about1@example.com',
        'WIDTH'   => '400',
    ])
    ->addTab('Таб 2')
    ->addOption('EMAIL_OFFICE_2', [
        'TITLE'   => 'Email офиса 2',
        'DEFAULT' => 'about2@example.com',
        'WIDTH'   => '400',
    ])

    ->addPage('Мессенджеры')
    ->addTab('Facebook')
    ->addOption('Facebook', [
        'TITLE'   => 'Ссылка на Facebook',
        'DEFAULT' => 'https://www.facebook.com',
        'WIDTH'   => '400',
    ])
    ->addTab('YouTube')
    ->addOption('YouTube', [
        'TITLE'   => 'Ссылка на YouTube',
        'DEFAULT' => 'https://www.youtube.com',
        'WIDTH'   => '400',
    ])

    ->addTab('Instagram')
    ->addOption('Instagram', [
        'TITLE'   => 'Ссылка на Instagram',
        'DEFAULT' => 'https://www.instagram.com',
        'WIDTH'   => '400',
    ])

    ->addTab('Telegram')
    ->addOption('Telegram', [
        'TITLE'   => 'Ссылка на Telegram',
        'DEFAULT' => 'https://web.telegram.org',
        'WIDTH'   => '400',
    ])
    ->addTab('Вконтакте')
    ->addOption('Vk', [
        'TITLE'   => 'Ссылка на Вконтакте',
        'DEFAULT' => 'https://vk.com',
        'WIDTH'   => '400',
    ])

?>
