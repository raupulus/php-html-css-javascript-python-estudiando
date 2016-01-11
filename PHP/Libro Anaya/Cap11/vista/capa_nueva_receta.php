<div class="row marketing">
    <div class="col-lg-12">
        <form role="form" id="formulario" action="grabar/" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduce un título" minlength="5" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Introduce una breve descripción" minLength= "5" required>
            </div>
            <div class="form-group">
                <label for="ingredientes">Ingredientes</label>
                <textarea class="form-control" rows="3" id="ingredientes" name="ingredientes" placeholder="Introduzca los ingredientes separados por una coma" minLength= "5" required></textarea>
            </div>
            <div class="form-group">
                <label for="ingredientes">Elaboración</label>
                <textarea class="form-control" rows="5" id="elaboracion" name="elaboracion" placeholder="Introduzca una breve explicación de la receta" minLength= "5" required></textarea>
            </div>
            <div class="form-group">
                <label for="fichero">Fotografía</label>
                <input type="file" id="fichero" name="fichero">
                <p class="help-block">Introduce una fotografía.</p>
            </div>
            <button type="submit" class="btn btn-default">Grabar</button>
        </form>
    </div>
</div>
<script type = "text/javascript">
$(document).ready(function(){
   $("#formulario").validate();
});
</script>
