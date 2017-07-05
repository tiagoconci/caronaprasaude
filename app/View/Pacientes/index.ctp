<div class="pacientes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pacientes'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Paciente'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Paradas'), array('controller' => 'paradas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Parada'), array('controller' => 'paradas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('documento'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('endereco'); ?></th>
						<th><?php echo $this->Paginator->sort('numero'); ?></th>
						<th><?php echo $this->Paginator->sort('complemento'); ?></th>
						<th><?php echo $this->Paginator->sort('bairro'); ?></th>
						<th><?php echo $this->Paginator->sort('cidade'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone_recado'); ?></th>
						<th><?php echo $this->Paginator->sort('nome_recado'); ?></th>
						<th><?php echo $this->Paginator->sort('ausencias'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pacientes as $paciente): ?>
					<tr>
						<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['documento']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['endereco']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['numero']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['complemento']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['bairro']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['cidade']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['telefone_recado']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['nome_recado']); ?>&nbsp;</td>
						<td><?php echo h($paciente['Paciente']['ausencias']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $paciente['Paciente']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $paciente['Paciente']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->