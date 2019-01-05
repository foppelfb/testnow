<pre><?php 
$d=opendir(__DIR__.'/testdir');
while($r = readdir($d)) {
	echo $r,"\n";
}
include('testdir/index.php');
phpinfo(); ?>
