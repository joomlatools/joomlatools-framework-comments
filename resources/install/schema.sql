/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-comments for the canonical source repository
 */

-- --------------------------------------------------------
--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
    `comments_comment_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `table` VARCHAR(64) NOT NULL,
    `row` INT UNSIGNED NOT NULL,
    `text` TEXT,
    `created_on` DATETIME,
    `created_by` INT UNSIGNED,
    `modified_on` DATETIME,
    `modified_by` INT UNSIGNED,
    `locked_on` DATETIME,
    `locked_by` INT UNSIGNED,
    `uuid` char(36) NOT NULL,
    PRIMARY KEY (`comments_comment_id`),
    UNIQUE KEY `uuid` (`uuid`),
    INDEX `idx_table_row` (`table`, `row`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;