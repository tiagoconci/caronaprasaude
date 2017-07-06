<div class="agendas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agenda'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['data']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hora'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['hora']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Capacidade'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['capacidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aberta'); ?></th>
		<td>
			<?php echo h($agenda['Agenda']['aberta']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
	<br>
	<br>
	<div class="form-group col-md-2">
		<?php echo $this->Html->link('Voltar',
		array('controller' => 'agendas', 'action' => "index"),
		array('class' => "btn btn-danger btn-lg" )); ?>
	</div>
</div>

<!--
	<div class="col-md-12">
	<h3><?php echo __('Related Paradas'); ?></h3>
	<?php if (!empty($agenda['Parada'])): ?>
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
	<?php foreach ($agenda['Parada'] as $parada): ?>
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
<?php endif; ?> -->


	</div><!-- end col md 12 -->
</div>
