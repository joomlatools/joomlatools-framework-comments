<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/joomlatools/joomlatools-framework-comments for the canonical source repository
 */

/**
 * Commentable Controller Behavior
 *
 * @author  Steven Rombauts <http://github.com/stevenrombauts>
 * @package Koowa\Component\Comments
 */
class ComCommentsDatabaseBehaviorCommentable extends KDatabaseBehaviorAbstract
{
    /**
     * Get a list of comments
     *
     * @return KModelEntityInterface
     */
    public function getComments()
    {
        $comments = $this->getObject('com:comments.model.comments')
            ->row($this->id)
            ->table($this->getTable()->getName())
            ->fetch();

        return $comments;
    }
}