<?php
    if($search_startpoint !=NULL)
    {
?>
<ul id="route-list">
    <?php
    foreach ($search_startpoint as $v_search_startpoint) {
        ?>
        <li onClick="selectItemEndpoint('<?php echo $v_search_startpoint->route_endpoint; ?>');"><?php echo $v_search_startpoint->route_endpoint; ?></li>
    <?php } ?>
</ul>
<?php
    }