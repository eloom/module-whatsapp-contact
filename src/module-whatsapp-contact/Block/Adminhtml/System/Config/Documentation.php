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

namespace Eloom\WhatsAppContact\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Documentation extends Field {
	
	protected function _getElementHtml(AbstractElement $element) {
		return '<a href="https://docs.eloom.tech/whatsapp/" target="_blank">' . __('Documentation') . '</a>';
	}
}
