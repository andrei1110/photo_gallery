<?php
?>
<br/>
<div class="col-sm-12 col-xs-12 col-lg-12">
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" id="all-files" data-toggle="tab" href="#all-files-content" role="tab" aria-controls="sign-in" aria-selected="true">Todos os arquivos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="all-images" data-toggle="tab" href="#all-images-content" role="tab" aria-controls="sign-up" aria-selected="false">Imagens</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="all-docs" data-toggle="tab" href="#all-docs-content" role="tab" aria-controls="sign-up" aria-selected="false">Documentos</a>
		</li>
	</ul>
</div>

<div class="tab-content">
	<div class="tab-pane fade show active col-sm-12 col-lg-12 col-xs-12" id="all-files-content" role="tabpanel" aria-labelledby="all-files">
		<br/>
		<h4>Todos os arquivos</h4>
		<br/>
		<?php include("src/views/gallery-all.php"); ?>
	</div>
	<div class="tab-pane fade col-sm-12 col-lg-12 col-xs-12" id="all-images-content" role="tabpanel" aria-labelledby="all-images">
		<br/>
		<h3>Imagens</h3>
		<br/>
		<?php include("src/views/gallery-image.php"); ?>
	</div>
	<div class="tab-pane fade col-sm-12 col-lg-12 col-xs-12" id="all-docs-content" role="tabpanel" aria-labelledby="all-docs">
		<br/>
		<h4>Documentos</h4>
		<br/>
		<?php include("src/views/gallery-doc.php"); ?>
	</div>
</div>