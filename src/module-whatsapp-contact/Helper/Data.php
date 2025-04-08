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

namespace Eloom\WhatsAppContact\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

	const XML_PATH_ACTIVE = 'eloom_whatsapp_contact/general/active';
	const XML_PATH_MOBILE_NUMBER = 'eloom_whatsapp_contact/general/mobile_number';
	const XML_PATH_BUTTON_TEXT = 'eloom_whatsapp_contact/general/button_text';
	const XML_PATH_WELCOME_MESSAGE = 'eloom_whatsapp_contact/general/welcome_message';
	const XML_PATH_POSITION = 'eloom_whatsapp_contact/general/position';
	const XML_PATH_COLOR = 'eloom_whatsapp_contact/general/color';
	protected $storeId;

	private $storeManager;

	public function __construct(Context               $context,
	                            ScopeConfigInterface  $scopeConfig,
	                            StoreManagerInterface $storeManager) {
		$this->scopeConfig = $scopeConfig;
		$this->storeManager = $storeManager;
		$this->storeId = $storeManager->getStore()->getId();

		parent::__construct($context);
	}

	public function isActive(): bool {
		return (boolean)$this->scopeConfig->getValue(self::XML_PATH_ACTIVE, ScopeInterface::SCOPE_STORE, $this->storeId);
	}

	public function getMobileNumber(): string {
		return $this->scopeConfig->getValue(self::XML_PATH_MOBILE_NUMBER, ScopeInterface::SCOPE_STORE, $this->storeId);
	}

	public function getButtonText(): string {
		return $this->scopeConfig->getValue(self::XML_PATH_BUTTON_TEXT, ScopeInterface::SCOPE_STORE, $this->storeId);
	}

	public function getWelcomeMessage(): string {
		return $this->scopeConfig->getValue(self::XML_PATH_WELCOME_MESSAGE, ScopeInterface::SCOPE_STORE, $this->storeId);
	}

	public function getPosition(): string {
		return $this->scopeConfig->getValue(self::XML_PATH_POSITION, ScopeInterface::SCOPE_STORE, $this->storeId);
	}

	public function getColor(): string {
		return $this->scopeConfig->getValue(self::XML_PATH_COLOR, ScopeInterface::SCOPE_STORE, $this->storeId);
	}
}
