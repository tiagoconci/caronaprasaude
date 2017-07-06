
<div class="usuarios index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuários'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<!-- TABELA -->
	<div class="col-lg-12">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista dos Usuários Cadastrados Atualmente
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Telefone</th>
								<th>Desativado</th>
								<th>Usuário</th>
								<th>Papel</th>
								<th class="actions"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($usuarios as $usuario): ?>
								<tr>
									<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['telefone']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['desativado']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['usuario']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['papel']); ?>&nbsp;</td>
									<td class="actions">
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>  Visualizar ||', array('action' => 'view', $usuario['Usuario']['id']), array('escape' => false)); ?>
										<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Editar ||', array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?>
										<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Excluir', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), __('Deseja excluir o usuário %s?', $usuario['Usuario']['nome'])); ?>
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




</div><!-- end row -->


</div><!-- end containing of content -->
