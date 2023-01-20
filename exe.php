<?php
$cn = pg_connect("host=192.168.60.34 port=5432 dbname=madurai user=gismetro password=gismetro123");
$result = pg_query($cn,"select * from metrocircle.distribution_transformer");
while($row = pg_fetch_object($result))
{
	echo "<br/>".$row->sec_code."               " .$row->dt_code;
}
pg_close($cn);
?>
