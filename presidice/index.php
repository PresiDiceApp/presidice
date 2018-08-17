<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Frases celebres del presi::Modificado 17 de agosto de 2018</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>


<body role="document" style="margin:20px;color:green">

	<div class="container theme-showcase" role="main">
    	<div class="">
        	<h1>El presi dice...</h1>
        	<p>...comparte tu sabiduria en la boca del presi.</p>
		</div>
        <div class="row">
            <div class="col-lg-6">
            <form name="forma" action="jpgg.php" method="post" target="marco">
            	<input type="hidden" name="r" id="r">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Renglon superior" id="frase" name="frase">
                    <input type="text" class="form-control" placeholder="Renglon inferior" id="frase2" name="frase2">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onClick="javascript:genera();">Generar!</button>
                    </span>
                </div><!-- /input-group -->
             </form>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <hr>
        	<div class="col-lg-8" id="mfoto">
            	<img id="marco" src="">
            </div>
            <div class="col-lg-4">
            	<h4>Frases de sabiduria del presi:</h4>
            	<?
					$carpeta = "memes/";
					if ($gestor = opendir($carpeta)){
						while (false != ($arch = readdir($gestor))){
							if ($arch != "." && $arch != ".."){
								$a.=$arch.",";
								?>
								<a href="javascript:cfoto('<?=$carpeta.$arch?>');" target="marco"><img src="<?=$carpeta.$arch?>" class="img-thumbnail"  width="120" height="90"></a>&nbsp;
								<?
							}
						}
						closedir($gestor);
					}
                ?>
            </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">
		function genera(){
			url = "jpgg.php?frase=" + document.getElementById('frase').value;
			url+= "&frase2=" + document.getElementById('frase2').value;
			document.getElementById('marco').src = url;
			document.getElementById('marco').className = "img-thumbnail";
		}
		function cfoto(s){
			document.getElementById('mfoto').innerHTML= "<img id='marco' src='"+s+"' class='img-thumbnail'>";
		}
	</script>
</body>
</html>
