<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

/**
 * Comments Model
 *
 * @author  Terry Visser <http://github.com/terryvisser>
 * @package Koowa\Component\Comments
 */
class ComCommentsModelComments extends KModelDatabase
{
    public function __construct(KObjectConfig $config)
    {
        parent::__construct($config);

        $this->getState()
            ->insert('table', 'string', $this->getIdentifier()->package)
            ->insert('row', 'int')
            ->insert('search', 'cmd');
    }

    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'behaviors' => array('searchable'),
        ));

        parent::_initialize($config);
    }

    protected function _buildQueryWhere(KDatabaseQuerySelect $query)
    {
        parent::_buildQueryWhere($query);

        if (!$this->getState()->isUnique())
        {
            $state = $this->getState();

            if ($state->table) {
                $query->where('tbl.table = :table')->bind(array('table' => $state->table));
            }

            if ($state->row) {
                $query->where('tbl.row = :row')->bind(array('row' => $state->row));
            }
        }
    }
}