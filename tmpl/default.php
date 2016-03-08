<?php
/**
 * @package     mod_k2tagfilter
 *
 * @copyright   Copyright (C) 2016 SFW Ltd
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="k2tagfilter">
	<form action="<?php echo JRoute::_($post_to); ?>" method="post" class="form-inline">
        <label for="mod-k2tagfilter-filter" class="element-invisible"><?php echo $label; ?></label>
        <select name="tag" id="mod-k2tagfilter-filter">
            <?php
            print "<option value=''>{$unselected}</option>";
            foreach ($tagList as $tag) {
                print "<option value='{$tag['name']}' data-url='{$tag['link']}'>{$tag['name']}</option>";
            }
            ?>
        </select>
        <button class='button btn btn-primary' onclick='this.form.tag.focus(); if(!this.form.tag.value) {return false;}'><?php echo $button_text; ?></button>
        <?php
        if ($k2cat) {
            print "<input type='hidden' name='Itemid' value='{$k2cat}' />";
        }
        ?>
	</form>
</div>
