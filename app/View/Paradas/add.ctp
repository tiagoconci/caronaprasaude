<div class="paradas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Parada'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Paradas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Destinos'), array('controller' => 'destinos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Destino'), array('controller' => 'destinos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Agendas'), array('controller' => 'agendas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Agenda'), array('controller' => 'agendas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pacientes'), array('controller' => 'pacientes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Paciente'), array('controller' => 'pacientes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Acompanhantes'), array('controller' => 'acompanhantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Acompanhante'), array('controller' => 'acompanhantes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Parada', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('hora_cheagada', array('class' => 'form-control', 'placeholder' => 'Hora Cheagada'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('hora_saida', array('class' => 'form-control', 'placeholder' => 'Hora Saida'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('destino_id', array('class' => 'form-control', 'placeholder' => 'Destino Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('agenda_id', array('class' => 'form-control', 'placeholder' => 'Agenda Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('acompanhante', array('class' => 'form-control', 'placeholder' => 'Acompanhante'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ausente', array('class' => 'form-control', 'placeholder' => 'Ausente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('paciente_id', array('class' => 'form-control', 'placeholder' => 'Paciente Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
