				<div class="pagination">
					<?php if($total_pages > 1):?>
					Page:<br>
						<?php $i = 0; ?>
					 	<?php while($i < $total_pages):?>
					 		<?php $i += 1; ?>
					 		<?php if($i  == $current_page) : ?>
					 		   <input type="submit" value="<?php echo $i; ?>" id="current" name="pg">
					 		<?php else : ?>
					 		   <input type="submit" value="<?php echo $i; ?>" id="submit" name="pg">
 
 						 	<?php endif; ?>
					 	<?php endwhile; ?>
 					<?php endif; ?>

				</div>
