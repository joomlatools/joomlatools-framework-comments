<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/nooku-framework for the canonical source repository
 */

/**
 * Editor Template Helper
 *
 * @author  Jebb Domingo <https://github.com/jebbdomingo>
 * @package Koowa\Component\Koowa\Template\Helper
 */
class ComCommentsTemplateHelperEditor extends ComKoowaTemplateHelperEditor
{
    /**
     * Generates an HTML editor
     *
     * @param   array   $config An optional array with configuration options
     * @return  string  Html
     */
    public function display($config = array())
    {
        $config = new KObjectConfigJson($config);

        if ($config->editor == 'com:ckeditor.controller.editor') {
            $editor = $this->getObject($config->editor);

            $config = array(
                'name'    => $config->name,
                'id'      => $config->id,
                'text'    => $config->text,
                'attribs' => array(
                    'class' => 'ckeditor-required'
                )
            );
            
            return $editor->render($config);
        }

        return parent::display($config);
    }
}
