<?php echo $this->Form->Create('Usuario'); ?>
<div class="usuarios form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Usuário'); ?></h1>
			</div>
		</div>
	</div>



		<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('Usuario', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('documento', array('class' => 'form-control', 'placeholder' => 'Documento', 'type' => 'text'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'placeholder' => 'Telefone', 'type' => 'text'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desativado', array('class' => 'form-control', 'placeholder' => 'Desativado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('usuario', array('class' => 'form-control', 'placeholder' => 'Usuario'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('papel', array('class' => 'form-control', 'placeholder' => 'Papel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('senha', array('class' => 'form-control', 'placeholder' => 'Senha', 'type' => 'password'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
</div>
