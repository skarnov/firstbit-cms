<?php
    if($search_startpoint !=NULL)
    {
?>
<ul id="route-list">
    <?php
    foreach ($search_startpoint as $v_search_startpoint) {
        ?>
        <li onClick="selectItem('<?php echo $v_search_startpoint->route_startpoint; ?>');"><?php echo $v_search_startpoint->route_startpoint; ?></li>
    <?php } ?>
</ul>
<?php
    }