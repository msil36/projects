<fieldset>
    <legend>Adicionar uma Foto</legend>

    <form method="POST" enctype="multipart/form-data">
        <label>Titulo:</label><br/>
        <input type="text" name="titulo"/><br/><br/>

        <label>Foto:</label><br/>
        <input type="file" name="arquivo"/><br/><br/>

        <input type="submit" value="Enviar Arquivo"/>
    </form>
</fieldset>
<br/><br/>


<?php foreach ($fotos as $foto): ?>

    <img src="<?php echo BASE_URL; ?>/assets/images/galeria/<?php echo $foto['url']; ?>" width="300px" border="0" /><br/>
    <?php echo $foto['titulo']; ?>
    <hr/>
<?php endforeach; ?>