    <img src="http://localhost/parana/img/logo.jpg" class="logo">        
        <form action="abm.php" method="get" class="formfiltro">
            <?php
            if (isset($_GET['grupo'])) {
            echo '<input type="hidden" name="grupo" value="'.$_GET['grupo'].'">';
            }
            ?>
            <input type="hidden" name="grupo" value="">
            <input type="text" name="p_buscar" placeholder="Palabra a buscar" >
            <input type="submit" name="buscar" value="Buscar" class="buscar">
        </form>
        <form action="#" method="POST" class="forminsert" enctype="multipart/form-data">
            <div class="boxinput">
                    <h2>Ingrese producto</h2>
                <input type="text" class="inputform" name="nombre" required="required" placeholder="Nombre del producto">
                <input type="int" name="precio" required="required" min="0" placeholder="Precio" class="inputform">
                <select name="tipo" class="select">
                    <option value="2">MBAaCH</option>
                    <option value="3">Little Boogie</option>
                    <option value="4">AM Drunk</option>
                    <option value="5">Chill Boy</option>
                    <option value="6">Ice Cold</option>
                    <option value="7">Marfil</option>
                    <option value="8">Delvi</option>
                    <option value="9">Xavier2000</option>
                </select>
            </div>
            <textarea name="descripcion" rows="5" cols="300" placeholder="Descripcion" class="texta"></textarea>
                <select name="stock" class="select">
                    <option value="2">Stock: Si</option>
                    <option value="3">Stock: No</option>
                </select>
                    <input id="file" class="upload inputfile" type="file" name="imagen" data-multiple-caption="{count} files selected" multiple>
                    <label for="file"><strong style="color:black">Imagen</strong></label>
            <textarea name="link" rows="5" cols="300" placeholder="Link de MercadoLibre" class="texta"></textarea>
            <input type="submit" name="enviar" value="Ingresar producto" class="button">
        </form>