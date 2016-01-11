<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
    <fieldset>
    <legend>Nuevo Producto</legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('precio');
            echo $this->Form->input('tipo_id');
	?>
    </fieldset>
    <?php echo $this->Form->end('Crear'); ?>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link('Listado Productos', array('action' => 'index')); ?></li>
    </ul>
</div>
