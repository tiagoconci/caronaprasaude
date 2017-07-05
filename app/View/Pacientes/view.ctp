<div class="pacientes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Paciente'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Paciente'), array('action' => 'edit', $paciente['Paciente']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pacientes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Paciente'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Paradas'), array('controller' => 'paradas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parada'), array('controller' => 'paradas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Documento'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['documento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numero'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['numero']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Complemento'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['complemento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bairro'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['bairro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone Recado'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['telefone_recado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome Recado'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['nome_recado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ausencias'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['ausencias']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Paradas'); ?></h3>
	<?php if (!empty($paciente['Parada'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hora Cheagada'); ?></th>
		<th><?php echo __('Hora Saida'); ?></th>
		<th><?php echo __('Destino Id'); ?></th>
		<th><?php echo __('Agenda Id'); ?></th>
		<th><?php echo __('Acompanhante'); ?></th>
		<th><?php echo __('Ausente'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($paciente['Parada'] as $parada): ?>
		<tr>
			<td><?php echo $parada['id']; ?></td>
			<td><?php echo $parada['hora_cheagada']; ?></td>
			<td><?php echo $parada['hora_saida']; ?></td>
			<td><?php echo $parada['destino_id']; ?></td>
			<td><?php echo $parada['agenda_id']; ?></td>
			<td><?php echo $parada['acompanhante']; ?></td>
			<td><?php echo $parada['ausente']; ?></td>
			<td><?php echo $parada['paciente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'paradas', 'action' => 'view', $parada['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'paradas', 'action' => 'edit', $parada['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'paradas', 'action' => 'delete', $parada['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $parada['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Parada'), array('controller' => 'paradas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
