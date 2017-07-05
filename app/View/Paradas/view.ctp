<div class="paradas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Parada'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Parada'), array('action' => 'edit', $parada['Parada']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Parada'), array('action' => 'delete', $parada['Parada']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $parada['Parada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Paradas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parada'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Destinos'), array('controller' => 'destinos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Destino'), array('controller' => 'destinos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Agendas'), array('controller' => 'agendas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Agenda'), array('controller' => 'agendas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pacientes'), array('controller' => 'pacientes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Paciente'), array('controller' => 'pacientes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Acompanhantes'), array('controller' => 'acompanhantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Acompanhante'), array('controller' => 'acompanhantes', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($parada['Parada']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hora Cheagada'); ?></th>
		<td>
			<?php echo h($parada['Parada']['hora_cheagada']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hora Saida'); ?></th>
		<td>
			<?php echo h($parada['Parada']['hora_saida']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Destino'); ?></th>
		<td>
			<?php echo $this->Html->link($parada['Destino']['id'], array('controller' => 'destinos', 'action' => 'view', $parada['Destino']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Agenda'); ?></th>
		<td>
			<?php echo $this->Html->link($parada['Agenda']['id'], array('controller' => 'agendas', 'action' => 'view', $parada['Agenda']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Acompanhante'); ?></th>
		<td>
			<?php echo h($parada['Parada']['acompanhante']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ausente'); ?></th>
		<td>
			<?php echo h($parada['Parada']['ausente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Paciente'); ?></th>
		<td>
			<?php echo $this->Html->link($parada['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $parada['Paciente']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

