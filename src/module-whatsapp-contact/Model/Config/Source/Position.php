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
class Position implements \Magento\Framework\Option\ArrayInterface {
	/**
	 * Options getter
	 *
	 * @return array
	 */
	public function toOptionArray() {
		return [
			['value' => 'top-left', 'label' => __('Topo, à esquerda')],
			['value' => 'top-right', 'label' => __('Topo, à direita')],
			['value' => 'top-center', 'label' => __('Topo, centralizado')],
			['value' => 'bottom-left', 'label' => __('Base, à esquerda')],
			['value' => 'bottom-right', 'label' => __('Base, à direita')],
			['value' => 'bottom-center', 'label' => __('Base, centralizado')]
		];
	}
}
