<?php
/**
 * @copyright
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('text');

/**
 * Class JFormFieldCustom
 */
class JFormFieldCustom extends JFormFieldText
{
	/**
	 * @var string
	 */
	public $type = 'Custom';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   11.1
	 */
	protected function getInput()
	{
		return parent::getInput();
	}

}