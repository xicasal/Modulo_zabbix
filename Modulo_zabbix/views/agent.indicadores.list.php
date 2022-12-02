<?php

$widget = (new CWidget())->setTitle(_('Indicadores de Calidad'));

//Create Table
$url = (new CUrl('zabbix.php'))->setArgument('action', 'indicadores.view')->getUrl();

$widget->show();
