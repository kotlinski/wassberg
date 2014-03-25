<div id="infoSpan">
    <div id="menu">
        <ul id="menu_items">
            <?php
            for ($i = 0; $i < 4; $i++) {
                ?>
                <li class="menu_item">
                    <? printListItem($page_id, $i); ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div id="infoContent">
        <img class="profileImg" src="<?= base_url('statics/img/profil.png') ?>"/>
    </div>
</div>


<?php
function printListItem($selectedItemId = STARTPAGE_ID, $listItemId = STARTPAGE_ID)
{
    $list = array(STARTPAGE_ID => "Startsida",
        1 => "Bröllop",
        2 => "Om mig",
        3 => "Inspiration"
    );
    if ($selectedItemId == $listItemId) {
        print('<a style="font-weight: bold;" href="' . base_url('/page/'.$listItemId) . '">' . $list[$listItemId] . '</a>');
    } else {
        print('<a href="' . base_url('/page/'.$listItemId) . '">' . $list[$listItemId] . '</a>');
    }
}

?>