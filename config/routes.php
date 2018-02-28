<?php

return array(
    'news/([0-9]+)' => 'site/textNews/$1',
    'news' => 'site/news/$1',
    'partners' => 'partners/index/$1',
    'customers' => 'customers/index/$1',
    'faq' =>'faq/index',
    // Пользователь
    'login' => 'user/login',
    'register' => 'user/register',
    'edit' => 'user/edit',
    'profile' => 'user/profile',
    'user/logout' => 'user/logout',
    //Водитель
    'logPart' => 'drivers/login',
    'regPart' => 'drivers/register',
    'edPart' => 'drivers/edit',
    'edPartCar' => 'driver/editcar',
    'profPart' => 'drivers/profile',
    //выбор пользователь или партнер
    'distributor' => 'site/distributor',
    'distributorRegistr' => 'site/distributorRegistr',
    '' => 'site/index',
);

