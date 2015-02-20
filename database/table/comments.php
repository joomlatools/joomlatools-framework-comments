<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

/**
 * Comments Database Table
 *
 * @author  Steven Rombauts <http://github.com/stevenrombauts>
 * @package Koowa\Component\Comments
 */
class ComCommentsDatabaseTableComments extends KDatabaseTableAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'name'      => 'comments',
            'behaviors' => array('creatable', 'modifiable', 'lockable', 'identifiable'),
            'filters' => array(
                'text'   => array('html', 'tidy'),
            )
        ));

        parent::_initialize($config);
    }
}