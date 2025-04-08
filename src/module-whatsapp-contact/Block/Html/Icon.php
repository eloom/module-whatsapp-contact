<?php
/**
* 
* WhatsApp Contact para Magento 2
* 
* @category     elOOm
* @package      Modulo WhatsApp Contact
* @copyright    Copyright (c) 2025 elOOm (https://eloom.com.br)
* @version      1.0.0
* @license      https://opensource.org/licenses/OSL-3.0
* @license      https://opensource.org/licenses/AFL-3.0
*
*/
declare(strict_types=1);

namespace Eloom\WhatsAppContact\Block\Html;

use Eloom\WhatsAppContact\Helper\Data as Helper;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Widget\Block\BlockInterface;

class Icon extends Template implements BlockInterface {

	private Helper $helper;

	public function __construct(Context $context,
	                            Helper  $helper,
	                            array   $data = []) {
		$this->helper = $helper;

		parent::__construct($context, $data);
	}

	public function isActive(): bool {
		return $this->helper->isActive();
	}

	public function getMobileNumber(): string {
		return $this->helper->getMobileNumber();
	}

	public function getButtonText(): string {
		return $this->helper->getButtonText();
	}

	public function getWelcomeMessage(): string {
		return $this->helper->getWelcomeMessage();
	}

	public function getPosition(): string {
		return $this->helper->getPosition();
	}

	public function getColor(): string {
		die('passou');
		return '#000';//$this->helper->getColor();
	}
}
