<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Collections');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Collections'), array('action' => 'index'));

?>

<div class="collections index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('user_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('status'); ?></th>
		<th><?php echo $this->Paginator->sort('params'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('created_by'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($collections as $collection): ?>
	<tr>
		<td><?php echo h($collection['Collection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($collection['User']['name'], array('controller' => 'users', 'action' => 'view', $collection['User']['id'])); ?>
		</td>
		<td><?php echo h($collection['Collection']['name']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['slug']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['description']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['status']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['params']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['created']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['modified']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['updated_by']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $collection['Collection']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $collection['Collection']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $collection['Collection']['id']), array('icon' => 'trash'), __d('croogo', 'Are you sure you want to delete # %s?', $collection['Collection']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
