<div class="agendas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Agenda'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('Agenda', array('role' => 'form')); ?>

			<div class="col-md-9">
				<?php echo $this->Form->create('Agenda', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => "form-control",
					'options' => array(
						'Caxias do Sul' => 'Caxias do Sul',
						'Porto Alegre' => 'Porto Alegre',
					),
				));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('data', array('class' => 'form-control', 'placeholder' => 'Data', 'id' => 'meses'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('hora', array('class' => 'form-control', 'label' => 'Hora',
				'options' => array(
					'05:00:00' => '05:00:00',
					'06:00:00' => '06:00:00',
					'11:30:00' => '11:30:00',
				),
			));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('capacidade', array('class' => 'form-control', 'placeholder' => 'Capacidade'));?>
		</div>
		<br>
		<br>

		<div class="form-group">
			<?php echo $this->Form->input('aberta', array('class' => 'form-control', 'placeholder' => 'Aberta'));?>
		</div>
		<br>
		<br>
		<div class="form-group">
			<div class="form-group col-md-2">
				<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-primary btn-lg')); ?>
			</div>
			<div class="form-group col-md-2">
				<?php echo $this->Html->link('Voltar',
				array('controller' => 'agendas', 'action' => "index"),
				array('class' => "btn btn-danger btn-lg" )); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
