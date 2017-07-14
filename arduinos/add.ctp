<div class="arduinos form">
<?php echo $this->Form->create('Arduino');?>
	<fieldset>
		<legend><?php __('Add Arduino'); ?></legend>
	<?php
		echo $this->Form->input('light');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Arduinos', true), array('action' => 'index'));?></li>
	</ul>
</div>