<?php
/**
 * @copyright
 */

defined('_JEXEC') or die;

/**
 * Class PlgContentHelloworld
 */
class PlgContentHelloworld extends JPlugin
{
    /**
     * @param     $context
     * @param     $row
     * @param     $params
     * @param int $page
     */
    public function onContentPrepare($context, &$row, &$params, $page = 0)
    {
    }

    /**
     * @param     $context
     * @param     $row
     * @param     $params
     * @param int $page
     *
     * @return string
     */
    public function onContentAfterTitle($context, &$row, &$params, $page = 0)
    {
        return 'foo';
    }

    /**
     * @param     $context
     * @param     $row
     * @param     $params
     * @param int $page
     *
     * @return string
     */
    public function onContentBeforeDisplay($context, &$row, &$params, $page = 0)
    {
        return 'foo';
    }

    /**
     * @param     $context
     * @param     $row
     * @param     $params
     * @param int $page
     *
     * @return string
     */
    public function onContentAfterDisplay($context, &$row, &$params, $page = 0)
    {
        return 'foo';
    }

    /**
     * @param $context
     * @param $row
     * @param $is_new
     *
     * @return bool
     */
    public function onContentBeforeSave($context, &$row, $is_new)
    {
        return true; // will affect the saving process
    }

    /**
     * @param $context
     * @param $row
     * @param $is_new
     */
    public function onContentAfterSave($context, &$row, $is_new)
    {
    }

    /**
     * @param $form
     * @param $data
     *
     * @return bool
     */
    public function onContentPrepareForm($form, $data)
    {
        return true;
    }

    /**
     * @param string $context
     * @param stdClass $data
     *
     * @return bool
     */
    public function onContentPrepareData($context, stdClass $data)
    {
        return true;
    }

    /**
     * @param string $context
     * @param JTable $data
     *
     * @return bool
     */
    public function onContentBeforeDelete($context, JTable $data)
    {
        return true; // will affect the saving process
    }

    /**
     * @param string $context
     * @param JTable $data
     */
    public function onContentAfterDelete($context, JTable $data)
    {
    }

    /**
     * @param string $context
     * @param array $ids
     * @param string $value
     */
    public function onContentChangeState($context, $ids, $value)
    {
    }

    /**
     * @param string $text
     * @param string $phrase
     * @param string $ordering
     * @param array $area
     *
     * @return array
     */
    public function onContentSearch($text, $phrase, $ordering, $area)
    {
        return [];
    }

    /**
     * @return array
     */
    public function onContentSearchAreas()
    {
        return ['fruits' => 'Fruits', 'vegetables' => 'Vegetables'];
    }
}