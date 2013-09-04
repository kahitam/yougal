<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Genres');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Genres'), array('action' => 'index'));

?>

<div class="genres index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('created_by'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($genres as $genre): ?>
	<tr>
		<td><?php echo h($genre['Genre']['id']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['name']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['slug']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['description']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['created']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['modified']); ?>&nbsp;</td>
		<td><?php echo h($genre['Genre']['updated_by']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $genre['Genre']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $genre['Genre']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $genre['Genre']['id']), array('icon' => 'trash'), __d('croogo', 'Are you sure you want to delete # %s?', $genre['Genre']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
