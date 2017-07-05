<div class="destinos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Destinos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->


	<div class="col-lg-12">
			<div class="col-lg-12">
					<div class="panel panel-default">
							<div class="panel-heading">
									Lista dos Usuários Cadastrados Atualmente
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th><?php echo $this->Paginator->sort('nome'); ?></th>
												<th><?php echo $this->Paginator->sort('telefone'); ?></th>
												<th><?php echo $this->Paginator->sort('endereco'); ?></th>
												<th><?php echo $this->Paginator->sort('numero'); ?></th>
												<th><?php echo $this->Paginator->sort('cidade'); ?></th>
												<th class="actions"></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($destinos as $destino): ?>
											<tr>
												<td><?php echo h($destino['Destino']['nome']); ?>&nbsp;</td>
												<td><?php echo h($destino['Destino']['telefone']); ?>&nbsp;</td>
												<td><?php echo h($destino['Destino']['endereco']); ?>&nbsp;</td>
												<td><?php echo h($destino['Destino']['numero']); ?>&nbsp;</td>
												<td><?php echo h($destino['Destino']['cidade']); ?>&nbsp;</td>
												<td class="actions">
													<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span> Visualizar ||', array('action' => 'view', $destino['Destino']['id']), array('escape' => false)); ?>
													<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Editar ||', array('action' => 'edit', $destino['Destino']['id']), array('escape' => false)); ?>
													<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Excluir', array('action' => 'delete', $destino['Destino']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $destino['Destino']['id'])); ?>
												</td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>

							</div>
							<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
	</div>




</div><!-- end containing of content -->
