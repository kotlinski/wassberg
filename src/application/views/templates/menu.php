<div id="menu_wrapper">
    <div id="menu">
        <ul id="menu_items">
            <?php
            for ($i = 0; $i < sizeof($menu_items); $i++) {
                ?>
                <li class="menu_item">
                    <? printListItem($menu_items, $page_id, $i); ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div id="menu_info_container">
        <img class="profileImg" src="<?= base_url('statics/img/profil.png') ?>"/>
    </div>
</div>


<?php
function printListItem($menu_items, $selectedItemId = HOME_ID, $listItemId = HOME_ID)
{
    if ($selectedItemId == $listItemId) {
		print('<a class="menu_href" style="text-decoration:underline;" href="' . base_url('/page/'.$listItemId) . '">' . $menu_items[$listItemId] . '</a>');
    } else {
        print('<a class="menu_href" href="' . base_url('/page/'.$listItemId) . '">' . $menu_items[$listItemId] . '</a>');
    }
}

?>