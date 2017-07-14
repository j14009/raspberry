<div class="arduinos view">
<h2><?php  __('Arduino');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arduino['Arduino']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Light'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arduino['Arduino']['light']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arduino', true), array('action' => 'edit', $arduino['Arduino']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Arduino', true), array('action' => 'delete', $arduino['Arduino']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $arduino['Arduino']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Arduinos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arduino', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
