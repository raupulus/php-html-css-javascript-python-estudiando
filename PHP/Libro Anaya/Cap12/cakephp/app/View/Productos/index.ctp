<div class="productos index">
    <h2>Productos</h2>
    <table cellpadding="0" cellspacing="0">
	<tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('nombre');?></th>
            <th><?php echo $this->Paginator->sort('precio');?></th>
            <th><?php echo $this->Paginator->sort('tipo_id');?></th>
            <th class="actions">Acciones</th>
	</tr>
	<?php foreach ($productos as $producto): ?>
	<tr>
            <td><?php echo $producto['Producto']['id'];?></td>
            <td><?php echo $producto['Producto']['nombre'];?></td>
            <td><?php echo $producto['Producto']['precio'];?></td>
            <td>
                <?php echo $this->Html->link($producto['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'edit', $producto['Tipo']['id'])); ?>
            </td>
            <td class="actions">
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $producto['Producto']['id'])); ?>
                <?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $producto['Producto']['id']), null, '¿Desea eliminar '.$producto['Producto']['nombre'].'?'); ?>
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
        <li><?php echo $this->Html->link('Nuevo Producto', array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Tipos', array('controller' => 'tipos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link('Nuevo Tipo', array('controller' => 'tipos', 'action' => 'add')); ?> </li>
    </ul>
</div>
