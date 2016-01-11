<?php $appDescription = 'Catálogo: mi catálogo de productos';?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $appDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('cake.generic');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1><?php echo $this->Html->link($appDescription, '/'); ?></h1>
        </div>
        <div id="menu">
            <h1>
                <?php echo $this->Html->link("Tipos", "/tipos"); ?>
                <?php echo $this->Html->link("Productos", "/productos"); ?>
            </h1>
        </div>
        <div id="content">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
