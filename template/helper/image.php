<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

/**
 * Image Template Helper
 *
 * @author  Steven Rombauts <https://nooku.assembla.com/profile/stevenrombauts>
 * @package Koowa\Component\Comments
 */
class ComCommentsTemplateHelperImage extends KTemplateHelperAbstract
{
    public function gravatar($config = array())
    {
        $config = new KObjectConfig($config);
        $config->append(array(
            'email'  => '',
            'size'  => '32',
            'attribs' => array()
        ));

        $source = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $config->email ) ) ) . "?s=".$config->size;

        $html = '<img class="avatar" src="'.$source.'" />';

        return $html;
    }
}