<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/joomlatools/joomlatools-framework-comments for the canonical source repository
 */
?>

<div id="comments-comments-list">
    <? foreach($comments as $comment) :?>
        <div class="comment" id="comment-<?= $comment->id ?>">
            <div class="comment-header">
                <?= $comment->created_by == object('user')->id ? translate('You') : $comment->created_by_name ?>&nbsp;<?= translate('wrote') ?>
                <time datetime="<?= $comment->created_on ?>" pubdate><?= helper('date.humanize', array('date' => $comment->created_on)) ?></time>
            </div>
            <p><?= $comment->text ?></p>
        </div>
    <? endforeach ?>
</div>