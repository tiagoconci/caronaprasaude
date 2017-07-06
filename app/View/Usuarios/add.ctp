<div class="usuarios form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cadastrar Usuário'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('Usuario', array('role' => 'form')); ?>

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
				<?php echo $this->Form->input('usuario', array('label' => 'Usuário','class' => 'form-control', 'placeholder' => 'Usuário'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('papel', array('label' => 'Papel', 'class' => "form-control",
				'options' => array(
					'coordenador' => 'Coordenador',
					'motorista' => 'Motorista',
					'secretario' => 'Secretário',
				),
			));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('senha', array('class' => 'form-control', 'placeholder' => 'Senha', 'type' => 'password'));?>
		</div>
		<br>
		<div class="form-group">
			<?php echo $this->Form->input('desativado', array('class' => 'form-control', 'placeholder' => 'Desativado'));?>
		</div>
		<br>
		<br>
		<br>
		<div class="form-group">
			<div class="form-group col-md-2">
				<?php echo $this->Form->submit(__('Cadastrar'), array('class' => 'btn btn-primary btn-lg')); ?>
			</div>
			<div class="form-group col-md-2">
				<?php echo $this->Html->link('Voltar',
				array('controller' => 'usuarios', 'action' => "index"),
				array('class' => "btn btn-danger btn-lg" )); ?>
			</div>
		</div>

		<?php echo $this->Form->end() ?>

	</div><!-- end col md 12 -->
</div><!-- end row -->
</div>
