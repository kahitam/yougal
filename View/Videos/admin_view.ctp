<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Videos'), h($video['Video']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Videos'), array('action' => 'index'));
	
?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Video'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Video'), array('action' => 'edit', $video['Video']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Video'), array('action' => 'delete', $video['Video']['id']), array('button' => 'default'), __d('croogo', 'Are you sure you want to delete # %s?', $video['Video']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Videos'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Video'), array('action' => 'add'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="videos view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($video['Video']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Collection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($video['Collection']['name'], array('controller' => 'collections', 'action' => 'view', $video['Collection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($video['Video']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Slug'); ?></dt>
		<dd>
			<?php echo h($video['Video']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Url'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Description'); ?></dt>
		<dd>
			<?php echo h($video['Video']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Author'); ?></dt>
		<dd>
			<?php echo h($video['Video']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($video['Video']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Params'); ?></dt>
		<dd>
			<?php echo h($video['Video']['params']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($video['Video']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created By'); ?></dt>
		<dd>
			<?php echo h($video['Video']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($video['Video']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified By'); ?></dt>
		<dd>
			<?php echo h($video['Video']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
