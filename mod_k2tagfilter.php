<?php
/**
 * @package  mod_k2tagfilter
 *
 * @copyright   Copyright (C) 2016 SFW Ltd.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

//$lang = JFactory::getLanguage();
$app  = JFactory::getApplication();

$label           = htmlspecialchars($params->get('label', 'Tag Filter'));
$unselected      = htmlspecialchars($params->get('unselected_text', 'Select a tag'));
$k2cat           = (int)$params->get('k2cat', 0);
$button_text     = htmlspecialchars($params->get('button_text', 'FILTER'));

$post_to         = "/index.php?option=com_k2&view=itemlist&task=tag";

//load tags
$db = JFactory::getDBO();
$query = "SELECT t.id, t.name
            FROM #__k2_tags t
            INNER JOIN #__k2_tags_xref x on t.id = x.tagID
            INNER JOIN #__k2_items i on i.id = x.itemID
            WHERE t.published=1 AND i.published=1";
if ($k2cat) {
    $query .= " AND i.catid = {$k2cat}";
}
$db->setQuery($query);
$tagArray = $db->loadAssocList();

$tagList = [];
foreach ($tagArray as $tag) {
    $tagList[$tag['id']] = [
        'name' => $tag['name'],
        'link' => JRoute::_($post_to."&tag=".$tag['name']),
    ];
}

require JModuleHelper::getLayoutPath('mod_k2tagfilter', 'default');
