<pre><?php 
$d=opendir(__DIR__);
while($r = readdir($d)) {
	echo $r,"\n";
}
phpinfo(); ?>
