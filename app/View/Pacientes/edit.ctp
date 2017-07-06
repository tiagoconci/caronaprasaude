<div class="pacientes form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Paciente'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('Paciente', array('role' => 'form')); ?>

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
					<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label' => 'Endereço', 'placeholder' => 'Endereco'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('numero', array('class' => 'form-control', 'label' => 'Número', 'placeholder' => 'Numero'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('complemento', array('class' => 'form-control', 'placeholder' => 'Complemento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bairro', array('class' => 'form-control', 'placeholder' => 'Bairro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cidade', array('class' => 'form-control', 'placeholder' => 'Cidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone_recado', array('class' => 'form-control', 'label' => 'Telefone para Recado', 'placeholder' => 'Telefone para Recado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome_recado', array('class' => 'form-control', 'label' => 'Nome da Pessoa para Recado', 'placeholder' => 'Nome da Pessoa para Recado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ausencias', array('class' => 'form-control', 'label' => 'Aunsência', 'placeholder' => 'Ausencias'));?>
				</div>
				<br>
				<br>
				<div class="form-group">
					<div class="form-group col-md-2">
						<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-primary btn-lg')); ?>
					</div>
					<div class="form-group col-md-2">
						<?php echo $this->Html->link('Voltar',
						array('controller' => 'pacientes', 'action' => "index"),
						array('class' => "btn btn-danger btn-lg" )); ?>
					</div>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
