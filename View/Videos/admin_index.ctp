<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Videos');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Videos'), array('action' => 'index'));

?>

<div style="overflow-x: auto;" class="videos index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('collection_id'); ?></th>
		<th><?php echo $this->Paginator->sort('title'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('url'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('author'); ?></th>
		<th><?php echo $this->Paginator->sort('status'); ?></th>
		<th><?php echo $this->Paginator->sort('params'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('created_by'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($videos as $video): ?>
	<tr>
		<td><?php echo h($video['Video']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($video['Collection']['name'], array('controller' => 'collections', 'action' => 'view', $video['Collection']['id'])); ?>
		</td>
		<td><?php echo h($video['Video']['title']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['slug']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['description']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['author']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['status']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['params']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['created']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['modified']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['updated_by']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $video['Video']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $video['Video']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $video['Video']['id']), array('icon' => 'trash'), __d('croogo', 'Are you sure you want to delete # %s?', $video['Video']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
