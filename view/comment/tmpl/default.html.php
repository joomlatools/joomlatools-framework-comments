<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

$route = ($state->route) ? "{$state->route}&row={$state->row}&table={$state->table}" : "row={$state->row}&table={$state->table}";
?>

<div id="comments-comment-form">
    <form action="<?php echo route($route) ?>" method="post">
        <input type="hidden" name="row" value="<?php echo $state->row ?>" />
        <input type="hidden" name="table" value="<?php echo $state->table ?>" />

        <?php
        echo object('com:ckeditor.controller.editor')->render(
                array(
                    'name'    => 'text',
                    'text'    => 'Add new comment here ...',
                    'toolbar' => 'Basic',
                    'attribs' => array(
                        'class' => 'ckeditor-required'
                    )
                )
            );
        ?>

        <br />
        <input class="button" type="submit" value="<?php echo translate('Submit') ?>"/>
    </form>
</div>