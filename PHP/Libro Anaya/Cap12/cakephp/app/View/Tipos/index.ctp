<div class="tipos index">
    <h2>Tipos</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('nombre'); ?></th>
            <th class="actions">Acciones</th>
        </tr>
        <?php foreach ($tipos as $tipo): ?>
        <tr>
            <td><?php echo $tipo['Tipo']['id']; ?>&nbsp;</td>
            <td><?php echo $tipo['Tipo']['nombre']; ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $tipo['Tipo']['id'])); ?>
                <?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $tipo['Tipo']['id']), null, '¿Quiere eliminar '.$tipo['Tipo']['nombre'].'?'); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
	<?php
            echo $this->Paginator->counter(array(
                'format' => 'Pág. {:page} de {:pages}, {:current} registros de {:count}, del {:start} al {:end}'
            ));
	?>	
    </p>
    <div class="paging">
	<?php
            echo $this->Paginator->prev('< anterior', array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next('siguiente >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link('Nuevo Tipo', array('action' => 'add')); ?></li>
    </ul>
</div>