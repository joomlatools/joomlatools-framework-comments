<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */


/**
 * Comment Controller
 *
 * @author  Johan Janssens <http://github.com/johanjanssens>
 * @package Koowa\Component\Comments
 */
abstract class ComCommentsControllerComment extends KControllerModel
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'model' => 'com:comments.model.comments'
        ));

        //Alias the permission
        $permission         = $this->getIdentifier()->toArray();
        $permission['path'] = array('controller', 'permission');
        $this->getObject('manager')->registerAlias('com:comments.controller.permission.comment', $permission);

        parent::_initialize($config);
    }

    protected function _actionRender(KControllerContextInterface $context)
    {
        $view = $this->getView();

        //Alias the view layout
        if ($view instanceof KViewTemplate)
        {
            $layout         = $view->getIdentifier()->toArray();
            $layout['name'] = $view->getLayout();

            unset($layout['path'][0]);

            $alias            = $layout;
            $alias['package'] = 'comments';

            $this->getObject('manager')->registerAlias($alias, $layout);
        }

        return parent::_actionRender($context);
    }

    public function getRequest()
    {
        $request = parent::getRequest();

        //Force set the 'table' in the request
        $request->query->table = $this->getIdentifier()->package;
        $request->data->table  = $this->getIdentifier()->package;

        return $request;
    }
}