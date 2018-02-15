<?php
include("pr_connect.php");
$sql = "select ST_asgeojson(geom) AS geometry, id, nama_kab FROM kabupaten";
$result = pg_query($sql);
$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

while ($isinya = pg_fetch_assoc($result)) {
	$features = array(
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geometry']),
		'properties' => array(
			'id' => $isinya['id'],
			'nama_kab' => $isinya['nama_kab']
			)
		);
	array_push($hasil['features'], $features);
}

?>