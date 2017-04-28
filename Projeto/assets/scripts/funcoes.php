<?php
# Url do RSS / Feed
$feed = 'http://www.panoramacomerc.com.br/?feed=rss2';
# Quantidade de links que serão exibidos
$qtdelinks=9; 
# Variavel que aramazena os links
$html = "";
# Variavel utilizada no laço x quantidade de links (set)
$i=0;
# Variavel que recebe os dados do url
$xml = "";
# Abrindo o arquivo remoto
$fp = fopen($feed, 'r');
while (!feof($fp))
{
# Armazenando o conteudo do arquivo na variavel XML
$xml .= fread($fp, 128);
}
# Fechando o arquivo
fclose($fp);

# Função que captura o conteudo das Tags
function untag2($string, $tag)
{
	$tmp = array();
	# Informando as tags passadas no parametro para obter o conteudo
	$preg = "|<$tag>(.*?)</$tag>|s";
		# Obtendo o conteudo das tags passadas no param e adicionando em tags
	preg_match_all($preg, $string, $tags);
		# Para cada tag contida em no array tags
	foreach ($tags[1]as $tmptag){
		# Adicionando no array tmp o conteudo das tags
	$tmp[] = $tmptag;
	}
	# Retornando um array com conteudo de cada tag 
return $tmp;
}
?>