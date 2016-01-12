<div class="tipos form">
    <?php echo $this->Form->create('Tipo'); ?>
    <fieldset>
        <legend>Nuevo Tipo</legend>
        <?php echo $this->Form->input('nombre');?>
    </fieldset>
    <?php echo $this->Form->end("Crear"); ?>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link("Listado Tipos", array('action' => 'index')); ?></li>
        <!--li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li-->
    </ul>
</div>
