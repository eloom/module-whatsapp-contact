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

namespace Eloom\WhatsAppContact\Model\Config\Source;

/**
 * @api
 * @since 100.0.2
 */
class Color implements \Magento\Framework\Option\ArrayInterface {
	/**
	 * Options getter
	 *
	 * @return array
	 */
	public function toOptionArray() {
		return [
			['value' => '#075e54', 'label' => __('Verde (escuro)')],
			['value' => '#128c7e', 'label' => __('Verde (azulado escuro)')],
			['value' => '#25d366', 'label' => __('Verde (WhatsApp)')],
			['value' => '#dcf8c6', 'label' => __('Verde (creme de menta)')],
			['value' => '#34b7f1', 'label' => __('Azul (WhatsApp)')]
		];
	}
}
