<div class="pacientes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Paciente'); ?></h1>
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
		<th><?php echo __('Endereço'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Número'); ?></th>
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
		<th><?php echo __('Telefone para Recado'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['telefone_recado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pessoa para Recado'); ?></th>
		<td>
			<?php echo h($paciente['Paciente']['nome_recado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ausências'); ?></th>
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
<br>
<br>
<div class="form-group">
	<div class="form-group col-md-2">
		<?php echo $this->Html->link('Voltar',
		array('controller' => 'pacientes', 'action' => "index"),
		array('class' => "btn btn-danger btn-lg" )); ?>
	</div>
</div>
