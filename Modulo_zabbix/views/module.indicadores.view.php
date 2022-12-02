<?php declare(strict_types = 1);

require_once './include/config.inc.php';

$page['title'] = _('Indicadores de Calidad');

require_once './include/page_header.php';

// Aquí va el código para conectarse a la API

$data['hosts'] = API::Host()->get([
	'output' => ['name', 'hostid']
]);


echo (new CView('agent.indicadores.list.php', $data))->getOutput();


require_once './include/page_footer.php';
