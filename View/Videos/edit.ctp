<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Videos');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Videos'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Video']['title'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Videos: ' . $this->data['Video']['title'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Video');

?>
<div class="videos row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Video'), '#video');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='video' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('collection_id', array(
					'label' => 'Collection Id',
				));
				echo $this->Form->input('title', array(
					'label' => 'Title',
				));
				echo $this->Form->input('slug', array(
					'label' => 'Slug',
				));
				echo $this->Form->input('url', array(
					'label' => 'Url',
				));
				echo $this->Form->input('description', array(
					'label' => 'Description',
				));
				echo $this->Form->input('author', array(
					'label' => 'Author',
				));
				echo $this->Form->input('status', array(
					'label' => 'Status',
				));
				echo $this->Form->input('params', array(
					'label' => 'Params',
				));
				echo $this->Form->input('created_by', array(
					'label' => 'Created By',
				));
				echo $this->Form->input('modified_by', array(
					'label' => 'Modified By',
				));
				echo $this->Form->input('Genre');
				echo $this->Croogo->adminTabs();
			?>
			</div>
		</div>

	</div>

	<div class="span4">
	<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'btn btn-danger')) .
			$this->Html->endBox();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>
