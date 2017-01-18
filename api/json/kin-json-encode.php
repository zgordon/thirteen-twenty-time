<?php 

$json_file = file_get_contents('http://api.1320time.net/json/1320-constants.json');
$all_kin = json_decode( $json_file );

$colors = $all_kin->{'colors'};
$tones = $all_kin->{'tones'};
$days = $all_kin->{'days'};
$glyphs = $all_kin->{'glyphs'};
$days = $all_kin->{'days'};


for( $i = 0; $i < 260; $i++ ) {

	// Kin Number
	$kin[$i]['num'] = $i + 1;

	// Color
	$color = $i % 4;		
	$kin[$i]['color'] = $colors[$color];

	// Tone
	$tone = $i % 13;
	$kin[$i]['tone'] = $tones[$tone][0];		 	

	// Glyph
	$glyph = $i % 20;
	$kin[$i]['glyph'] = $glyphs[$glyph][0];		 	

	// Name
	$kin[$i]['name'] = 	"Kin " . $kin[$i]['num'] . " - " . $kin[$i]['color'] . " " . $kin[$i]['tone'] . " " . $kin[$i]['glyph'];

	// Image
	$kin[$i]['img_url'] = 	"http://api.1320time.net/assets/images/Kin" . $kin[$i]['num'] . '.png';


	// if(	strlen($kin['num']) < 2 ) {
	// 	$kin['img_url'] .= "00";
	// } elseif ( strlen($kin['num']) < 3 ) {
	// 	$kin['img_url'] .= "0";
	// } else {}


	// out( get_object_vars( $kin['tone'] ) );
	// $wptreehouse_profile->{'badges'}[$i]->{'name'}	

	
}

echo json_encode( $kin );	
//out($kin);

function out( $str ) {

	echo "<pre>";
	var_dump( $str );
	echo "</pre>";

}


 ?>