<?php

include("settings.php");
$conn = mysql_connect($dbhost, $dbuser, $dbpassword);


//EVENTOS

$sql="SELECT eventos.evento, eventos.inicio, eventos.fin, eventos.pais_id, pais.pais, banners.imagen, banners.evento_id, banners.id, banners.link
FROM ( eventos
INNER  JOIN pais ON eventos.pais_id = pais.id )
RIGHT  JOIN banners ON eventos.id = banners.evento_id
WHERE banners.fin >= NOW()  AND banners.tipo =3
ORDER  BY banners.orden DESC , eventos.inicio ASC";

$conn = mysql_connect($dbhost, $dbuser, $dbpassword);
$rsTemp=mysql_db_query($dbname,$sql);

$xml.='<?xml version="1.0" encoding="utf-8"?>';
$xml.="<eventos>\n";
while($rs=mysql_fetch_array($rsTemp)) {
		$xml.="\t<evento>\n";
		$xml.="\t\t<id>".$rs['evento_id']."</id>\n";
		$xml.="\t\t<titulo>".$rs['evento']."</titulo>\n";
		$xml.="\t\t<banner_id>".$rs['id']."</banner_id>\n";
		$xml.="\t\t<inicio>".$rs['inicio']."</inicio>\n";
		$xml.="\t\t<fin>".$rs['fin']."</fin>\n";
		$xml.="\t\t<pais_id>".$rs['pais_id']."</pais_id>\n";
		$xml.="\t\t<pais>".$rs['pais']."</pais>\n";
		$xml.="\t\t<link>".$rs['link']."</link>\n";
		$xml.="\t\t<imagen>".$rs['imagen']."</imagen>\n";
		$xml.="\t</evento>\n";
		
}
$xml.="</eventos>\n";

$archivo=fopen("../xml/eventos.xml","w+");
fwrite($archivo,$xml);
fclose($archivo);

?>
<?php mysql_free_result($rsTemp);
 mysql_close($conn)
?>

