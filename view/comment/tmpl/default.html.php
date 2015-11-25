<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */
?>

<div id="comments-comment-form">
    <form action="<?= route('row='.@$state->row.'&table='.$state->table) ?>" method="post">
        <input type="hidden" name="row" value="<?= $state->row ?>" />
        <input type="hidden" name="table" value="<?= $state->table ?>" />

        <?php echo helper('com:comments.editor.display', array(
            'editor' => 'com:ckeditor.controller.editor',
            'name'   => 'text',
            'id'     => 'new-comment-text',
            'text'   => 'Add new comment here ...'
        )) ?>

        <br />
        <input class="button" type="submit" value="<?= translate('Submit') ?>"/>
    </form>
</div>