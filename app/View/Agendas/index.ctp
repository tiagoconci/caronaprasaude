<div class="agendas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agendas'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-9">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('cidade'); ?></th>
						<th><?php echo $this->Paginator->sort('data'); ?></th>
						<th><?php echo $this->Paginator->sort('hora'); ?></th>
						<th><?php echo $this->Paginator->sort('capacidade'); ?></th>
						<th><?php echo $this->Paginator->sort('aberta'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($agendas as $agenda): ?>
					<tr>
						<td><?php echo h($agenda['Agenda']['id']); ?>&nbsp;</td>
						<td><?php echo h($agenda['Agenda']['cidade']); ?>&nbsp;</td>
						<td><?php echo h($agenda['Agenda']['data']); ?>&nbsp;</td>
						<td><?php echo h($agenda['Agenda']['hora']); ?>&nbsp;</td>
						<td><?php echo h($agenda['Agenda']['capacidade']); ?>&nbsp;</td>
						<td><?php echo h($agenda['Agenda']['aberta']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span> Visualizar ||', array('action' => 'view', $agenda['Agenda']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Editar ||', array('action' => 'edit', $agenda['Agenda']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Excluir', array('action' => 'delete', $agenda['Agenda']['id']), array('escape' => false), __('Deseja excluir a agenda %s, %s Hs?', $agenda['Agenda']['cidade'], $agenda['Agenda']['hora'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->
