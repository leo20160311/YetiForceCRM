<?php

/**
 * Chat Modal View Class.
 *
 * @package   View
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 * @author    Arkadiusz Adach <a.adach@yetiforce.com>
 */
class Chat_Modal_View extends \App\Controller\Modal
{
	/**
	 * {@inheritdoc}
	 */
	public $dangerBtn;

	/**
	 * {@inheritdoc}
	 */
	public $successBtn;

	/**
	 * {@inheritdoc}
	 */
	public $modalSize = 'modal-fullscreen';

	/**
	 * {@inheritdoc}
	 */
	public $modalIcon = 'fas fa-comments fa-fw';

	/**
	 * {@inheritdoc}
	 */
	public function checkPermission(\App\Request $request)
	{
		if (!\App\Privilege::isPermitted($request->getModule())) {
			throw new \App\Exceptions\NoPermitted('ERR_NOT_ACCESSIBLE', 406);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function process(\App\Request $request)
	{
		$viewer = $this->getViewer($request);
		$viewer->view('Modal.tpl', $request->getModule());
	}
}
