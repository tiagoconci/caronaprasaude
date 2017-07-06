<div class="usuarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuário'); ?></h1>
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
							<?php echo h($usuario['Usuario']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nome'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['nome']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Documento'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['documento']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Telefone'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['telefone']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Usuário'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['usuario']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Papel'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['papel']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Senha'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['senha']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desativado'); ?></th>
						<td>
							<?php echo h($usuario['Usuario']['desativado']); ?>
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
		array('controller' => 'usuarios', 'action' => "index"),
		array('class' => "btn btn-danger btn-lg" )); ?>
	</div>
</div>
