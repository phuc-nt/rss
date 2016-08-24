<h3>RSS Screen</h3>

<div class="row">

    <h5>Functions</h5>

    <form method="post" action="/hiten/RSS/Base/update">
	    <label><strong>Function Id: <?php echo $functions[0]->function_id; ?></strong></label>
	    <input type="hidden" name="f1_id" value="<?php echo $functions[0]->function_id; ?>">
	    <label>Status</label>
		<select name="f1_status" id="f1_status">
			<?php if($functions[0]->status === 0): ?>
				<option value="0" selected>Inactive</option>
				<option value="1">Active</option>
			<?php endif; ?>

			<?php if($functions[0]->status === 1): ?>
				<option value="0">Inactive</option>
				<option value="1" selected>Active</option>
			<?php endif; ?>
		</select>
		<br>
		<label><strong>Function: <?php echo $functions[1]->function_id; ?></strong></label>
	    <input type="hidden" name="f2_id" value="<?php echo $functions[1]->function_id; ?>">
	    <label>Status</label>
		<select name="f2_status" id="f2_status">
			<?php if($functions[1]->status === 0): ?>
				<option value="0" selected>Inactive</option>
				<option value="1">Active</option>
			<?php endif; ?>

			<?php if($functions[1]->status === 1): ?>
				<option value="0">Inactive</option>
				<option value="1" selected>Active</option>
			<?php endif; ?>
		</select>
		<br>
		<label><strong>Function: <?php echo $functions[2]->function_id; ?></strong></label>
	    <input type="hidden" name="f3_id" value="<?php echo $functions[2]->function_id; ?>">
	    <label>Status</label>
		<select name="f3_status" id="f3_status">
			<?php if($functions[2]->status === 0): ?>
				<option value="0" selected>Inactive</option>
				<option value="1">Active</option>
			<?php endif; ?>

			<?php if($functions[2]->status === 1): ?>
				<option value="0">Inactive</option>
				<option value="1" selected>Active</option>
			<?php endif; ?>
		</select>
		<br>

	    <input type="submit" value="Save" />
	</form>

</div>

<!-- OnPage script -->
<script type="text/javascript">
	$(function() {
		
	});
</script>