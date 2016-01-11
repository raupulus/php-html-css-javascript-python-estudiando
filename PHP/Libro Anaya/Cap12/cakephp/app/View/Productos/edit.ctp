<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
    <fieldset>
        <legend>Editar Producto</legend>
	<?php
            echo $this->Form->input('id');
            echo $this->Form->input('nombre');
            echo $this->Form->input('precio');
            echo $this->Form->input('tipo_id');
	?>
    </fieldset>
<?php echo $this->Form->end('Actualizar'); ?>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link('Listado Productos', array('action' => 'index')); ?></li>
    </ul>
</div>
