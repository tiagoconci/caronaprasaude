<div class="destinos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Destino'); ?></h1>
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
							<?php echo h($destino['Destino']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nome'); ?></th>
						<td>
							<?php echo h($destino['Destino']['nome']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Telefone'); ?></th>
						<td>
							<?php echo h($destino['Destino']['telefone']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Endereço'); ?></th>
						<td>
							<?php echo h($destino['Destino']['endereco']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Número'); ?></th>
						<td>
							<?php echo h($destino['Destino']['numero']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Complemento'); ?></th>
						<td>
							<?php echo h($destino['Destino']['complemento']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Bairro'); ?></th>
						<td>
							<?php echo h($destino['Destino']['bairro']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Cidade'); ?></th>
						<td>
							<?php echo h($destino['Destino']['cidade']); ?>
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
		array('controller' => 'destinos', 'action' => "index"),
		array('class' => "btn btn-danger btn-lg" )); ?>
	</div>
</div>
