<div class="pacientes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pacientes'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-15">
			<<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('documento'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('endereco'); ?></th>
						<th><?php echo $this->Paginator->sort('numero'); ?></th>
						<th><?php echo $this->Paginator->sort('complemento'); ?></th>
						<th><?php echo $this->Paginator->sort('bairro'); ?></th>
						<th><?php echo $this->Paginator->sort('cidade'); ?></th>
						<th><?php echo $this->Paginator->sort('ausencias'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pacientes as $paciente): ?>
					<tr>
						<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['documento']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['endereco']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['numero']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['complemento']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['bairro']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['cidade']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['ausencias']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span> Visualizar ||', array('action' => 'view', $paciente['Paciente']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Editar ||', array('action' => 'edit', $paciente['Paciente']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Excluir', array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Deseja excluir o paciente %s?', $paciente['Paciente']['nome'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, exibindo {:current} registros de {:count} total, de {:start}, até {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Anterior', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Anterior</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Próxima &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Próxima &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->
