<?php
include "assets/scripts/funcoes.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Projeto Experimental</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script type='text/javascript' src='assets/js/functions.js'></script>
</head>
<body onload="startTime()">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/logo.png" />
                </div>
            </div>
        </div>
    </header>
    <div class="content-wrapper">
        <div class="container">
             <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Clima Tempo
                        </div>
                        <div class="panel-body">
                            <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="150" height="260" src="http://www.tempoagora.com.br/ta-widgets?cidades=SaoPaulo-SP&amp;tipo=vertical"></iframe>
                        </div>
                        <div class="panel-footer">
                            Fonte: www.tempoagora.com.br
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Panorama
                        </div>
                        <div class="panel-body">
                            <?
							# Retornando  o conteudo de todas as tags item  do RSS / XML
							$items = untag2($xml, 'item');
							
							# Retornando cada tag item do array items
							foreach ($items as $item) {
								if ($i < $qtdelinks){
									# Recuperando o conteudo da tag title
									$title = untag2($item, 'title');
									# Recuperando o conteudo da tag href / link
									$link  = untag2($item, 'link');
									# Armazenando o link na var html / utf8_decode trata os acentos no titulo
									$html .= '<a href="'.$link[0].'" target="_blank">'.utf8_decode($title[0])."</a><br>";
									$i++;
							   	}
							}
							# Exibindo o HTML gerado
							echo utf8_encode($html);
							?>
                        </div>
                        <div class="panel-footer">
							Fonte: www.panoramacomerc.com.br
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container" style="height:90px">
            <div class="row">
                <div class="col-md-12" id="clock" style="text-align:right; font-size:18px; font-weight:bold">
                   
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
