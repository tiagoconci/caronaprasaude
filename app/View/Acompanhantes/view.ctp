<div class="acompanhantes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Acompanhante'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Acompanhante'), array('action' => 'edit', $acompanhante['Acompanhante']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Acompanhante'), array('action' => 'delete', $acompanhante['Acompanhante']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $acompanhante['Acompanhante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Acompanhantes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Acompanhante'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Paradas'), array('controller' => 'paradas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parada'), array('controller' => 'paradas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pacientes'), array('controller' => 'pacientes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Paciente'), array('controller' => 'pacientes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($acompanhante['Acompanhante']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Parada'); ?></th>
		<td>
			<?php echo $this->Html->link($acompanhante['Parada']['id'], array('controller' => 'paradas', 'action' => 'view', $acompanhante['Parada']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Paciente'); ?></th>
		<td>
			<?php echo $this->Html->link($acompanhante['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $acompanhante['Paciente']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

