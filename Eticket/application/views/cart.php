<?php
$contents = $this->cart->contents();
$i = 1;
foreach ($contents as $v_contents) {
    ?>
    <tr>
        <td>
            <?php echo $v_contents['id']; ?>
            <input type="hidden" name="cart_<?php echo $i; ?>" value="<?php echo $v_contents['id']; ?>"/>
        </td>
        <td>
            <?php echo $v_contents['price']; ?>
            <input type="hidden" name="price_<?php echo $i; ?>" value="<?php echo $v_contents['price']; ?>"/>
        </td>
    </tr>
    <?php
    $i++;
}
$total = $this->cart->total();
$grand_total = $total;
$sdata = array();
$sdata['grand_total'] = $grand_total;
$this->session->set_userdata($sdata);
?>
<h3 style="margin-top:10%; border: 2px solid purple;">Total: <?php echo $grand_total; ?></h3>
<br/>
<button type="submit" class="btn btn-success col-md-7">Checkout</button>
<a href="" onclick="cartDistroy();" class="btn btn-danger col-md-offset-1 col-md-4">Reset</a>