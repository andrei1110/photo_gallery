<?php

	//variável que irá receber os dados dos arquivos
	$files;
	$count = 1;
	$modal = array();

	require_once("src/model/gallery-all.php");

	echo '<div class="card-deck" style="padding-left: 50px;">';
		echo '<div class="row">';

		while($result = $files->fetch(PDO::FETCH_OBJ)){

			$modal[$count] = $result;

			echo '<div class = "card col-sm-2 col-md-2 col-xs-2 col-lg-2">';

				if($result->type == 'image') echo '<a href="#modal-all-'.$result->id.'" data-toggle="modal"><img src="'.$result->local.$result->name.'" alt="" style="max-height: 150px;" class="card-img-top"></a>';

				else echo '<a href="#modal-all-'.$result->id.'" data-toggle="modal"><img src="images/pdf.png" alt="'.$result->name.'" style="max-height: 150px;" class="img-thumbnail"></a>';

				echo '<div class="card-body">';
					echo '<h5 class="card-title">'.$result->type.'</h5>';
					echo '<p class="card-text">Tamanho: '.number_format($result->size,2).' mb.</p>';
				echo '</div>';

				echo '<div class="card-footer">';
					echo '<small class="text-muted">Adicionado em: '.$result->date_file.'</small>';
				echo '</div>';

			echo '</div> &nbsp;&nbsp;&nbsp;';
			if($count%5 == 0){
				echo '</div> <br/> <div class="row">';
			}
			$count++;
		}

		echo '</div>';
	echo '</div>';
?>

<!-- Modal -->

<?php 
	for($i = 1 ; $i < $count ; $i ++){
		echo '<div class="modal fade" id="modal-all-'.$modal[$i]->id.'" tabindex="-1" role="dialog" aria-labelledby="modalForDoc'.$modal[$i]->id.'" aria-hidden="true">';
			echo '<div class="modal-dialog modal-lg" role="image">';
				echo '<div class="modal-content">';
					echo '<div class="modal-header">';
						echo '<h5 class="modal-title" id="exampleModalLabel">'.$modal[$i]->name.'</h5>';
						echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
						echo '<span aria-hidden="true">&times;</span>';
						echo '</button>';
					echo '</div>';
					echo '<div class="modal-body">';
						//verifica se é pdf
						if($modal[$i]->type == 'doc') echo '<embed src="'.$modal[$i]->local.$modal[$i]->name.'" style="width:100%; min-height: 500px" type="application/pdf">';
						//verifica se é imagem
						if($modal[$i]->type == 'image') echo '<img src="'.$modal[$i]->local.$modal[$i]->name.'" alt="" style="max-width: 100%;">';
					echo '</div>';
					echo '<div class="modal-footer">';
						//verifica se é pdf
						if($modal[$i]->type == 'doc') echo 'Tamanho do arquivo: '.$modal[$i]->size. ' mb.';
						//verifica se é imagem
						if($modal[$i]->type == 'image') echo 'Dimensões da imagem: '.$modal[$i]->img_h.' x '.$modal[$i]->img_w.'<br/> Tamanho da imagem: '.$modal[$i]->size. ' mb.';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';


	}

?>