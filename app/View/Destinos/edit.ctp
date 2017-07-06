<div class="destinos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Destino'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('Destino', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'placeholder' => 'Telefone', 'type' => 'text'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label' => 'Endereço', 'placeholder' => 'Endereço'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('numero', array('class' => 'form-control', 'label' => 'Número', 'placeholder' => 'Número', 'type' => 'text'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('complemento', array('class' => 'form-control', 'placeholder' => 'Complemento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bairro', array('class' => 'form-control', 'placeholder' => 'Bairro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => "form-control",
					'options' => array(
						'Caxias do Sul' => 'Caxias do Sul',
						'Porto Alegre' => 'Porto Alegre',
					),
				));?>
			</div>
			<br>
			<br>
			<div class="form-group">
				<div class="form-group col-md-2">
					<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-primary btn-lg')); ?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Html->link('Voltar',
					array('controller' => 'destinos', 'action' => "index"),
					array('class' => "btn btn-danger btn-lg" )); ?>
				</div>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
