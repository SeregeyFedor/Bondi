<div class="groupsClients form">
<?php echo $this->Form->create('GroupsClient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Groups Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GroupsClient.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GroupsClient.id'))); ?></li>
		<li><?php //echo $this->Html->link(__('List Groups Clients'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
