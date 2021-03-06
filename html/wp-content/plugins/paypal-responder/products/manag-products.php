<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2>Manage Products</h2>

<?php require 'process.php'; ?>
 
 <table class="inner-setings" style="margin-top:20px;"> 
 
 <?php if($action=='update'): ?>
    <form name="frm1" method="post">
     <tr height="60">
		<td width="120"><strong>Product Name</strong></td>
        <td>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $singleprod->product_name; ?>" name="product_name" /></td>
	</tr>
    <tr height="60"> 
		<td width="120"><strong>Price</strong></td>
        <td><strong>$</strong><input type="text" value="<?php echo $singleprod->product_price; ?>" name="product_price"  /></td>
	</tr>
    <tr>
    	<td><input type="submit" class="button-primary" value="<?php _e('Update Product') ?>" name="updateprod" /></td>
        <td><?php if($prod): ?><div class="success">Success</div><?php elseif($eprod): ?><div class="errorr">All fields are required</div><?php endif; ?></td>
    </tr>
    </form>
 <?php else: ?>
 <form name="frm1" method="post">
 <tr height="60">
		<td width="120"><strong>Product Name</strong></td>
        <td>&nbsp;&nbsp;&nbsp;<input type="text" name="product_name" /></td>
	</tr>
    <tr height="60"> 
		<td width="120"><strong>Price</strong></td>
        <td><strong>$</strong><input type="text" name="product_price" /></td>
	</tr>
    <tr>
    	<td><input type="submit" class="button-primary" value="<?php _e('Add Product') ?>" name="addprod" /></td>
        <td><?php if($prod): ?><div class="success">Success</div><?php elseif($eprod): ?><div class="errorr">All fields are required</div><?php endif; ?></td>
    </tr>
   </form>
 <?php endif; ?>
 </table>
  <table class="widefat posts" cellspacing="0" style="margin-top:20px;">
  	<thead>
    <tr>
        <th scope="col" width="35%"><a href="javascript:;">Product Name</a></th>
        <th scope="col" width="10%"><a href="javascript:;">Price</a></th>
        <th scope="col" width="35%"><a href="javascript:;">Shortcode</a></th>
        <th scope="col" width="10%"><a href="javascript:;">Edit</a></th>	
        <th scope="col" width="10%"><a href="javascript:;">Delete</a></th>	
    </tr>
    </thead>
    <tfoot>
    <tr>
         <th scope="col"><a href="javascript:;">Product Name</a></th>
        <th scope="col"><a href="javascript:;">Price</a></th>
        <th scope="col"><a href="javascript:;">Shortcode</a></th>
        <th scope="col"><a href="javascript:;">Edit</a></th>	
        <th scope="col"><a href="javascript:;">Delete</a></th>		
    </tr>
    </tfoot>
    <tbody>
         <?php
			$sql		=	"SELECT * FROM $table";
			$results 	= 	$wpdb->get_results( $sql );
		?>
	<?php if( !empty( $results ) ) : ?>
    <?php foreach( $results as $result ): ?>
        <tr>
        	<td><?php echo $result->product_name; ?></td>
            <td><?php echo $result->product_price; ?></td>
            <td><?php echo $result->shortcode; ?></td>
            <td><a href="admin.php?page=paypal_products&action=update&id=<?php echo $result->id; ?>">Update</a></td>
            <td><a href="admin.php?page=paypal_products&action=delete&id=<?php echo $result->id; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
	
	<?php else: ?>
    <tr>
    	<td colspan="5">No Products</td>
    </tr>
	<?php endif; ?>
    </tbody>
  </table>
  
</div>