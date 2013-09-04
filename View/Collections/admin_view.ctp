<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Collections'), h($collection['Collection']['name']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Collections'), array('action' => 'index'));
	
?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Collection'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Collection'), array('action' => 'edit', $collection['Collection']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Collection'), array('action' => 'delete', $collection['Collection']['id']), array('button' => 'default'), __d('croogo', 'Are you sure you want to delete # %s?', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Collections'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Collection'), array('action' => 'add'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="collections view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['User']['name'], array('controller' => 'users', 'action' => 'view', $collection['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Name'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Slug'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Description'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Params'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['params']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created By'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified By'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
