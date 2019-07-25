<?php

//Funcion Insertar en la tabla

function insertar($conexion,$nombre,$precio,$artista,$descripcion,$stock,$ml){
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
	    $directorio = '../../img/clothes/';
        $foto=$_FILES['imagen']['name'];
        $maxAncho = 700;
        $maxAlto=700;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $foto);
        $img=redimensionarImagen($foto,$maxAncho,$maxAlto,'center');
        if(isset($img)){
        	unlink($foto);
        }else{
            $img="";
        }
            
	}
	$insert = "INSERT INTO productos(nombre,precio,artista,descripcion,stock,foto,ml) VALUES ('$nombre','$precio','$artista','$descripcion','$stock','$img','$ml')";
	$sql=$conexion->query($insert);
	echo "<script>window.location='abm.php'</script>";
}

//Funcion para borrar

function borrar($conexion){
    $id=$_GET['id'];
    $borrar="DELETE FROM productos WHERE id='$id'";
    $sql = $conexion->query($borrar);
    echo "<script>window.location='abm.php'</script>";
}

//Funcion para generar la tabla
function generarTabla($conexion){
	$select = "SELECT * FROM productos";
	$sql = $conexion->query($select);
	$tabla="<table border='1'>
			<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Artista</th>
				<th>Descripcion</th>
				<th>Stock</th>
                <th>Imagen</th>
                <th>Link ML</th>
                <th>Editar</th>
                <th>Borrar</th>
			</tr>";
	echo $tabla;
	if($sql->num_rows>0){
		while($registro=$sql->fetch_assoc()){
			if(isset($_REQUEST['id_edit']) && $_GET['id']==$registro['id']){
				$tabla="<tr>
			<form action='#' method='POST'>
			<td><input type='hidden' name='id' value='".$registro["id"]."'>".$registro["id"]."</td>
			<td><input type='text' name='nombre' value='".$registro["nombre"]."'></td>
			<td><input type='int' name='precio'value='".$registro["precio"]."'></td>
			<td><select name='tipo'>
                <option value='2'>MBAaCH</option>
                <option value='3'>Little Boogie</option>
                <option value='4'>AM Drunk</option>
                <option value='5'>Chill Boy</option>
                <option value='6'>Ice Cold</option>
                <option value='7'>Marfil</option>
                <option value='8'>Delvi</option>
                <option value='9'>Xavier2000</option>
            </td>
			<td><input type='text' name='descripcion' value='".$registro["descripcion"]."'></td>
			<td><select name='stock'>
                <option value='2'>Hay Stock</option>
                <option value='3'>No hay Stock</option>
            </td>
			<td><input type='file' name='imagen'></td>
			<td><input type='text' name='link' value='".$registro["ml"]."'></td>
			
			<td><input type='submit' value='editar' name='edit'></td>
			<td><input type='submit' name='borrar' value='borrar'></td>
			</tr>
			</form>";

			echo $tabla;
			}else{
			$tabla="<tr>
			<td>".$registro["id"]."</td>
			<td>".$registro["nombre"]."</td>
			<td>".$registro["precio"]."</td>
			<td>".nombreArtista($registro["artista"])."</td>
			<td>".$registro["descripcion"]."</td>
			<td>".recibeStock($registro["stock"])."</td>
			<td><img class='imgabm' src='../../img/clothes/".$registro["foto"]."'></td>
			<td>".$registro["ml"]."</td>
			<td><a href='?id_edit=".$registro['id']."&&id=".$registro['id']."'>Editar</a></td>
			<td><a href='?borrar&&id=".$registro['id']."'>Borrar</a></td>
			</tr>";
			echo $tabla;
		}
		}
	}
	$tabla="</table>";
}

//Funcion para editar la tabla

function editar($conexion,$nombre,$precio,$artista,$descripcion,$ml){
	$id = $_POST['id'];
	if(isset($_REQUEST['imagen'])){
		if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
			$directorio = '../../img/clothes/';
			$foto=$_FILES['imagen']['name'];
			$maxAncho = 700;
			$maxAlto=700;
			move_uploaded_file($_FILES['imagen']['tmp_name'], $foto);
			$img=redimensionarImagen($foto,$maxAncho,$maxAlto,'center');
			if(isset($img)){
				unlink($foto);
			}else{
				$img="";
			}
		}
		echo "con imagen";
		$editar = "UPDATE productos SET nombre='$nombre',precio='$precio',artista='$artista',descripcion='$descripcion',foto='$img',ml='$ml' WHERE id=$id";
	}else{
		echo "sin imagen";
		$editar = "UPDATE productos SET nombre='$nombre',precio='$precio',artista='$artista',descripcion='$descripcion',ml='$ml' WHERE id=$id";
	}
	$sql = $conexion->query($editar);
}

function nombreArtista($art_id){
    switch ($art_id) {
        case 2:
            $i = "MBAaCH";
            break;
        case 3:
            $i = "Little Boogie";
            break;
        case 4:
            $i = "AM Drunk";
            break;
        case 5:
            $i = "Chill Boy";
            break;
        case 6:
            $i = "Ice Cold";
            break;
        case 7:
            $i = "Marfil";
            break;
        case 8:
            $i = "Delvi";
            break;
        case 9:
            $i = "Xavier2000";
            break;
    }
    return $i;
}

function recibeStock($stock_id){
	switch ($stock_id){
		case 2:
			$j = "Hay Stock";
			break;
		case 3:
			$j = "No hay Stock";
			break;
	}
	return $j;
}

//Funcion Redimensionar imagenes

function redimensionarImagen($foto,$ancho_f,$alto_f,$desplazamiento){

	list($ancho_org, $alto_org, $nrotipo) = getimagesize($foto);   
	 
switch ($nrotipo) {
		case 1:
			$img_original=imagecreatefromgif($foto);
			
			break;
		case 2:
			$img_original=imagecreatefromjpeg($foto);
			break;
		case 3:
			$img_original=imagecreatefrompng($foto);
			break;	
		
		default:
			echo "archivo incorrecto";
			break;
	}
	

	$ratio_ancho=$ancho_f / $ancho_org;
	$ratio_alto=$alto_f / $alto_org;

	$ratio_max= max($ratio_ancho,$ratio_alto);

	$nuevo_ancho=$ancho_org * $ratio_max;
	$nuevo_alto= $alto_org * $ratio_max;

	$recorte_ancho=$nuevo_ancho - $ancho_f;
	$recorte_alto= $nuevo_alto - $alto_f;
	if ($desplazamiento=='center') {
		$desplazamiento=0.5;
		
	}else if($desplazamiento=='top-left'){
		$desplazamiento=0;
	}else if($desplazamiento=='bottom-right'){
		$desplazamiento=1;
	}

	$nueva_img=imagecreatetruecolor($ancho_f, $alto_f);

	imagecopyresampled($nueva_img,$img_original, -$recorte_ancho*$desplazamiento, -$recorte_alto * $desplazamiento, 0, 0, $ancho_f+$recorte_ancho, $alto_f+$recorte_alto, $ancho_org, $alto_org);
	imagedestroy($img_original);
	$calidad=70;
	$nombre_img=time()."-".$foto;
	imagejpeg($nueva_img,"../../img/clothes/$nombre_img",$calidad);
	return $nombre_img;	
	
}
