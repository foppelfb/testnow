<pre><?php 
$d=opendir(__DIR__);
while($r = readdir($d.'/testdir')) {
	echo $r,"\n";
}
phpinfo(); ?>
