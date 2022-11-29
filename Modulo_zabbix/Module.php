<?php declare(strict_types = 1);
 
namespace Modules\Indicadores;
 
use APP;
use CController as CAction;
 
class Module extends \Core\CModule {
	/**
	 * Initialize module.
	 */
	public function init(): void {
		// Initialize main menu (CMenu class instance).
		APP::Component()->get('menu.main')
			->findOrAdd(_('Services'))
				->getSubmenu()
					->add((new \CMenuItem(_('Indicadores de Calidad')))
						->setAction('indicadores.view')
                                        );
	}
 
	/**
	 * Event handler, triggered before executing the action.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onBeforeAction(CAction $action): void {
	}
 
	/**
	 * Event handler, triggered on application exit.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onTerminate(CAction $action): void {
	}
}
?>
