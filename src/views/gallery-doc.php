<?php

	//variável que irá receber os dados dos arquivos
	$files;
	$count = 1;
	$modal = array();

	require_once("src/model/gallery-doc.php");

	echo '<div class="card-deck" style="padding-left: 50px;">';

		while($result = $files->fetch(PDO::FETCH_OBJ)){

			$modal[$count] = $result;

			echo '<div class = "card" style="max-width:240px;">';

				echo '<a href="#modal-doc-'.$result->id.'" data-toggle="modal"><img src="images/pdf.png" alt="'.$result->name.'" style="max-height: 150px;" class="img-thumbnail"></a>';

				echo '<div class="card-body">';
					echo '<h5 class="card-title">'.$result->type.'</h5>';
					echo '<p class="card-text">Tamanho: '.number_format($result->size,2).' mb.</p>';
				echo '</div>';

				echo '<div class="card-footer">';
					echo '<small class="text-muted">Adicionado em: '.$result->date_file.'</small>';
				echo '</div>';

			echo '</div> &nbsp;&nbsp;&nbsp;';
			if($count%5 == 0){
				echo '</div> <br/> <div class="card-deck" style="padding-left: 50px;">';
			}
			$count++;
		}
	echo '</div>';
?>

<!-- Modal -->

<?php 
	for($i = 1 ; $i < $count ; $i ++){
		echo '<div class="modal fade" id="modal-doc-'.$modal[$i]->id.'" tabindex="-1" role="dialog" aria-labelledby="modalForDoc'.$modal[$i]->id.'" aria-hidden="true">';
			echo '<div class="modal-dialog modal-lg" role="image">';
				echo '<div class="modal-content">';
					echo '<div class="modal-header">';
						echo '<h5 class="modal-title" id="exampleModalLabel">'.$modal[$i]->name.'</h5>';
						echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
						echo '<span aria-hidden="true">&times;</span>';
						echo '</button>';
					echo '</div>';
					echo '<div class="modal-body">';
						echo '<embed src="'.$modal[$i]->local.$modal[$i]->name.'" width="760" height="500" type="application/pdf">';
						echo '<center>';
							echo 'Tamanho do arquivo: '.number_format($modal[$i]->size,2). ' mb. <br/>';
						echo '</center>';
					echo '</div>';
					echo '<div class="modal-footer">';
						echo '<a href="#modal-doc-del-'.$modal[$i]->id.'" data-toggle="modal">Excluir</a> ';
						echo '<a download="'.$modal[$i]->name.'" href="'.$modal[$i]->local.'/'.$modal[$i]->name.'" title="'.$modal[$i]->name.'">Download</a> ';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';

		echo '<div class="modal fade" id="modal-doc-del-'.$modal[$i]->id.'" tabindex="-1" role="dialog" aria-labelledby="modalDelForDoc'.$modal[$i]->id.'" aria-hidden="true">';
			echo '<div class="modal-dialog modal-lg" role="image">';
				echo '<div class="modal-content">';
					echo '<div class="modal-header">';
						echo '<h5 class="modal-title" id="exampleModalLabel">Excluir arquivo '.$modal[$i]->name.'</h5>';
						echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
						echo '<span aria-hidden="true">&times;</span>';
						echo '</button>';
					echo '</div>';
					echo '<div class="modal-body">';
						echo 'Tem certeza que deseja excluir o arquivo '.$modal[$i]->name.'?';
					echo '</div>';
					echo '<div class="modal-footer">';
						echo '<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>';
						echo '<a href="src/model/delete.php?file_id='.$modal[$i]->id.'" class="btn btn-danger">Excluir</a>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}

?>