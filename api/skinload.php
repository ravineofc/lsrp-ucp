<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$race = $_POST['race'];

	$gender = $_POST['gender'];

	$weight = $_POST['weight'];

	$category = $_POST['category'];
	
	$faction = $_POST['faction_id'];
}
else exit();

$serverSkins = array
(
	array("id"=>1, "name"=>"truth", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>2, "name"=>"maccer", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>3, "name"=>"andre", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>4, "name"=>"bbthin", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>5, "name"=>"bb", "race"=>2, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>6, "name"=>"emmet", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>7, "name"=>"male01", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>8, "name"=>"janitor", "race"=>3, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>9, "name"=>"bfori", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>10, "name"=>"bfost", "race"=>2, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>11, "name"=>"vbfycrp", "race"=>2, "gender"=>2, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>12, "name"=>"bfyri", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>13, "name"=>"bfyst", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>14, "name"=>"bmori", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>15, "name"=>"bmost", "race"=>2, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>16, "name"=>"bmyap", "race"=>2, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>17, "name"=>"bmybu", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>18, "name"=>"bmybe", "race"=>2, "gender"=>1, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>19, "name"=>"bmydj", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>20, "name"=>"bmyri", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>21, "name"=>"bmycr", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>22, "name"=>"bmyst", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>23, "name"=>"wmybmx", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>24, "name"=>"wbydg1", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>25, "name"=>"wbydg2", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>26, "name"=>"wmybp", "race"=>1, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>27, "name"=>"wmycon", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>28, "name"=>"bmydrug", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>29, "name"=>"wmydrug", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>30, "name"=>"hmydrug", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>31, "name"=>"dwfolc", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>32, "name"=>"dwmolc1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>33, "name"=>"dwmolc2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>34, "name"=>"dwmylc1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>35, "name"=>"hmogar", "race"=>3, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>36, "name"=>"wmygol1", "race"=>2, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>37, "name"=>"wmygol2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>39, "name"=>"hfost", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>40, "name"=>"hfyri", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>41, "name"=>"hfyst", "race"=>3, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>42, "name"=>"jethro", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>43, "name"=>"hmori", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>44, "name"=>"hmost", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>45, "name"=>"hmybe", "race"=>1, "gender"=>1, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>46, "name"=>"hmyri", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>47, "name"=>"hmycr", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>48, "name"=>"hmyst", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>49, "name"=>"omokung", "race"=>4, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>50, "name"=>"wmymech", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>51, "name"=>"bmymoun", "race"=>2, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>52, "name"=>"wmymoun", "race"=>1, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>54, "name"=>"ofost", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>55, "name"=>"ofyri", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>56, "name"=>"ofyst", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>57, "name"=>"omori", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>58, "name"=>"omost", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>59, "name"=>"omyri", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>60, "name"=>"omyst", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>61, "name"=>"wmyplt", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>62, "name"=>"wmopj", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>63, "name"=>"bfypro", "race"=>3, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>64, "name"=>"hfypro", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>65, "name"=>"kendl", "race"=>2, "gender"=>2, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>66, "name"=>"bmypol1", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>67, "name"=>"bmypol2", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>68, "name"=>"wmoprea", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>69, "name"=>"sbfyst", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>72, "name"=>"swmyhp1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>73, "name"=>"swmyhp2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>75, "name"=>"swfopro", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>76, "name"=>"wfystew", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>77, "name"=>"swmotr1", "race"=>1, "gender"=>2, "weight"=>2, "category"=>8, "factions"=>[]),
	array("id"=>78, "name"=>"wmotr1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>79, "name"=>"bmotr1", "race"=>2, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>80, "name"=>"vbmybox", "race"=>2, "gender"=>1, "weight"=>3, "category"=>5, "factions"=>[]),
	array("id"=>81, "name"=>"wmybox", "race"=>1, "gender"=>1, "weight"=>3, "category"=>5, "factions"=>[]),
	array("id"=>82, "name"=>"vhmyelv", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>83, "name"=>"vbmyelv", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>84, "name"=>"vimyelv", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>85, "name"=>"vwfypro", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>86, "name"=>"ryder3", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>87, "name"=>"vwfyst1", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>88, "name"=>"wfori", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>89, "name"=>"wfost", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>90, "name"=>"wfyjg", "race"=>1, "gender"=>2, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>91, "name"=>"wfyri", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>93, "name"=>"wfyst", "race"=>1, "gender"=>2, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>94, "name"=>"wmori", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>95, "name"=>"wmost", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>96, "name"=>"wmyjg", "race"=>1, "gender"=>1, "weight"=>1, "category"=>5, "factions"=>[]),
	array("id"=>97, "name"=>"wmylg", "race"=>1, "gender"=>1, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>98, "name"=>"wmyri", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>100, "name"=>"wmycr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>101, "name"=>"wmyst", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>102, "name"=>"ballas1", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>103, "name"=>"ballas2", "race"=>2, "gender"=>1, "weight"=>2, "category"=>2, "factions"=>[]),
	array("id"=>104, "name"=>"ballas3", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>105, "name"=>"fam1", "race"=>2, "gender"=>1, "weight"=>2, "category"=>2, "factions"=>[]),
	array("id"=>106, "name"=>"fam2", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>107, "name"=>"fam3", "race"=>2, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>108, "name"=>"lsv1", "race"=>3, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>109, "name"=>"lsv2", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>110, "name"=>"lsv3", "race"=>3, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>111, "name"=>"maffa", "race"=>1, "gender"=>1, "weight"=>3, "category"=>1, "factions"=>[]),
	array("id"=>112, "name"=>"maffb", "race"=>1, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>113, "name"=>"mafboss", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>114, "name"=>"vla1", "race"=>3, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>115, "name"=>"vla2", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>116, "name"=>"vla3", "race"=>3, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>117, "name"=>"triada", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>118, "name"=>"triadb", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>119, "name"=>"sindaco", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>120, "name"=>"triboss", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>121, "name"=>"dnb1", "race"=>4, "gender"=>1, "weight"=>2, "category"=>2, "factions"=>[]),
	array("id"=>122, "name"=>"dnb2", "race"=>4, "gender"=>1, "weight"=>3, "category"=>2, "factions"=>[]),
	array("id"=>123, "name"=>"dnb3", "race"=>4, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>124, "name"=>"vmaff1", "race"=>1, "gender"=>1, "weight"=>3, "category"=>1, "factions"=>[]),
	array("id"=>125, "name"=>"vmaff2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>126, "name"=>"vmaff3", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>127, "name"=>"vmaff4", "race"=>1, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>128, "name"=>"dnmylc", "race"=>3, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>129, "name"=>"dnfolc1", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>130, "name"=>"dnfolc2", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>131, "name"=>"dnfylc", "race"=>3, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>132, "name"=>"dnmolc1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>133, "name"=>"dnmolc2", "race"=>1, "gender"=>1, "weight"=>3, "category"=>3, "factions"=>[]),
	array("id"=>134, "name"=>"sbmotr2", "race"=>2, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>135, "name"=>"swmotr2", "race"=>1, "gender"=>1, "weight"=>2, "category"=>8, "factions"=>[]),
	array("id"=>136, "name"=>"sbmytr3", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>137, "name"=>"swmotr3", "race"=>1, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>138, "name"=>"wfybe", "race"=>1, "gender"=>2, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>139, "name"=>"bfybe", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>140, "name"=>"hfybe", "race"=>3, "gender"=>2, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>141, "name"=>"sofybu", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>142, "name"=>"sbmyst", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>143, "name"=>"sbmycr", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>144, "name"=>"bmycg", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>145, "name"=>"wfycrk", "race"=>1, "gender"=>2, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>146, "name"=>"hmycm", "race"=>1, "gender"=>1, "weight"=>3, "category"=>7, "factions"=>[]),
	array("id"=>147, "name"=>"wmybu", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>148, "name"=>"bfybu", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>150, "name"=>"wfybu", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>151, "name"=>"dwfylc1", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>152, "name"=>"wfypro", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>153, "name"=>"wmyconb", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>154, "name"=>"wmybe", "race"=>1, "gender"=>1, "weight"=>3, "category"=>7, "factions"=>[]),
	array("id"=>155, "name"=>"wmypizz", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>156, "name"=>"bmobar", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>157, "name"=>"cwfyhb", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>158, "name"=>"cwmofr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>159, "name"=>"cwmohb1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>160, "name"=>"cwmohb2", "race"=>1, "gender"=>1, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>161, "name"=>"cwmyfr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>162, "name"=>"cwmyhb1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>163, "name"=>"bmyboun", "race"=>2, "gender"=>1, "weight"=>3, "category"=>6, "factions"=>[]),
	array("id"=>164, "name"=>"wmyboun", "race"=>1, "gender"=>1, "weight"=>3, "category"=>6, "factions"=>[]),
	array("id"=>165, "name"=>"wmomib", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>166, "name"=>"bmymib", "race"=>2, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>167, "name"=>"wmybell", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>168, "name"=>"bmochil", "race"=>2, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>169, "name"=>"sofyri", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>170, "name"=>"somyst", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>171, "name"=>"vwmybjd", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>172, "name"=>"vwfycrp", "race"=>1, "gender"=>2, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>173, "name"=>"sfr1", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>174, "name"=>"sfr2", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>175, "name"=>"sfr3", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>176, "name"=>"bmybar", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>177, "name"=>"wmybar", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>178, "name"=>"wfysex", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>179, "name"=>"wmyammo", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>180, "name"=>"bmytatt", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>181, "name"=>"vwmycr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>182, "name"=>"vbmocd", "race"=>2, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>183, "name"=>"vbmycr", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>184, "name"=>"vhmycr", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>185, "name"=>"sbmyri", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>186, "name"=>"somyri", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>187, "name"=>"somybu", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>188, "name"=>"swmyst", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>189, "name"=>"wmyva", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>190, "name"=>"copgrl3", "race"=>2, "gender"=>2, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>191, "name"=>"gungrl3", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>192, "name"=>"mecgrl3", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>193, "name"=>"nurgrl3", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>194, "name"=>"crogrl3", "race"=>1, "gender"=>2, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>195, "name"=>"gangrl3", "race"=>2, "gender"=>2, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>196, "name"=>"cwfofr", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>197, "name"=>"cwfohb", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>198, "name"=>"cwfyfr1", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>199, "name"=>"cwfyfr2", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>200, "name"=>"cwmyhb2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>201, "name"=>"dwfylc2", "race"=>1, "gender"=>2, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>202, "name"=>"dwmylc2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>203, "name"=>"omykara", "race"=>4, "gender"=>1, "weight"=>3, "category"=>6, "factions"=>[]),
	array("id"=>204, "name"=>"wmykara", "race"=>1, "gender"=>1, "weight"=>3, "category"=>6, "factions"=>[]),
	array("id"=>205, "name"=>"wfyburg", "race"=>1, "gender"=>2, "weight"=>2, "category"=>6, "factions"=>[]),
	array("id"=>206, "name"=>"vwmycd", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>207, "name"=>"vhfypro", "race"=>3, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>208, "name"=>"suzie", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>209, "name"=>"omonood", "race"=>4, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>210, "name"=>"omoboat", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>211, "name"=>"wfyclot", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>212, "name"=>"vwomotr1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>213, "name"=>"vwomotr2", "race"=>1, "gender"=>1, "weight"=>2, "category"=>8, "factions"=>[]),
	array("id"=>214, "name"=>"vwfywai", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>215, "name"=>"sbfori", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>216, "name"=>"swfyri", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>217, "name"=>"wmyclot", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>218, "name"=>"sbfost", "race"=>2, "gender"=>2, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>219, "name"=>"sbfyri", "race"=>2, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>220, "name"=>"sbmocd", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>221, "name"=>"sbmori", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>222, "name"=>"sbmost", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>223, "name"=>"shmycr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>224, "name"=>"sofori", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>225, "name"=>"sofost", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>226, "name"=>"sofyst", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>227, "name"=>"somobu", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>228, "name"=>"somori", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>229, "name"=>"somost", "race"=>4, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>230, "name"=>"swmotr5", "race"=>1, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>231, "name"=>"swfori", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>232, "name"=>"swfost", "race"=>1, "gender"=>2, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>233, "name"=>"swfyst", "race"=>1, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>234, "name"=>"swmocd", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>235, "name"=>"swmori", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>236, "name"=>"swmost", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>237, "name"=>"shfypro", "race"=>3, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>238, "name"=>"sbfypro", "race"=>2, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>239, "name"=>"swmotr4", "race"=>1, "gender"=>1, "weight"=>1, "category"=>8, "factions"=>[]),
	array("id"=>240, "name"=>"swmyri", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>241, "name"=>"smyst", "race"=>3, "gender"=>1, "weight"=>2, "category"=>3, "factions"=>[]),
	array("id"=>242, "name"=>"smyst2", "race"=>3, "gender"=>1, "weight"=>2, "category"=>2, "factions"=>[]),
	array("id"=>243, "name"=>"sfypro", "race"=>3, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>244, "name"=>"vbfyst2", "race"=>2, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>245, "name"=>"vbfypro", "race"=>2, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>246, "name"=>"vhfyst3", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>247, "name"=>"bikera", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>248, "name"=>"bikerb", "race"=>1, "gender"=>1, "weight"=>1, "category"=>3, "factions"=>[]),
	array("id"=>249, "name"=>"bmypimp", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>250, "name"=>"swmycr", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>251, "name"=>"wfylg", "race"=>1, "gender"=>2, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>252, "name"=>"wmyva2", "race"=>1, "gender"=>1, "weight"=>1, "category"=>7, "factions"=>[]),
	array("id"=>253, "name"=>"bmosec", "race"=>2, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>254, "name"=>"bikdrug", "race"=>1, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>255, "name"=>"wmych", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>256, "name"=>"sbfystr", "race"=>2, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>257, "name"=>"swfystr", "race"=>1, "gender"=>2, "weight"=>1, "category"=>4, "factions"=>[]),
	array("id"=>258, "name"=>"heck1", "race"=>1, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>259, "name"=>"heck2", "race"=>1, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>260, "name"=>"bmycon", "race"=>2, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>261, "name"=>"wmycd1", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>262, "name"=>"bmocd", "race"=>2, "gender"=>1, "weight"=>2, "category"=>1, "factions"=>[]),
	array("id"=>263, "name"=>"vwfywa2", "race"=>4, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>264, "name"=>"wmoice", "race"=>1, "gender"=>1, "weight"=>2, "category"=>6, "factions"=>[]),
	array("id"=>268, "name"=>"dwayne", "race"=>1, "gender"=>1, "weight"=>1, "category"=>6, "factions"=>[]),
	array("id"=>269, "name"=>"smoke", "race"=>2, "gender"=>1, "weight"=>2, "category"=>2, "factions"=>[]),
	array("id"=>270, "name"=>"sweet", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>271, "name"=>"ryder", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>272, "name"=>"forelli", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>273, "name"=>"tbone", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>289, "name"=>"zero", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>290, "name"=>"rose", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>291, "name"=>"paul", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>292, "name"=>"cesar", "race"=>3, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>293, "name"=>"ogloc", "race"=>2, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>294, "name"=>"wuzimu", "race"=>4, "gender"=>1, "weight"=>1, "category"=>2, "factions"=>[]),
	array("id"=>295, "name"=>"torino", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>296, "name"=>"jizzy", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>297, "name"=>"maddogg", "race"=>2, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>298, "name"=>"cat", "race"=>3, "gender"=>2, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>299, "name"=>"claude", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[])
	/*array("id"=>303, "name"=>"lapdpc", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>304, "name"=>"lapdpd", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[]),
	array("id"=>305, "name"=>"lvpdpc", "race"=>1, "gender"=>1, "weight"=>1, "category"=>1, "factions"=>[])*/
);

$found = 0;

$jsondata = '[';

$count = 0;

for($i = 0; $i < sizeof($serverSkins); ++$i)
{
	//if($serverSkins[$i][6] != 0 && $serverSkins[$i][6] != $faction) continue;
	
	if($race != -1 && $serverSkins[$i]["race"] != $race) continue;
	
	if($gender != -1 && $serverSkins[$i]["gender"] != $gender) continue;
	
	if($weight != -1 && $serverSkins[$i]["weight"] != $weight) continue;
	
	if($category != -1 && $serverSkins[$i]["category"] != $category) continue;
	
	if($count == 0) $jsondata = $jsondata.'{"id":'. $serverSkins[$i]["id"] .',"name":"'. $serverSkins[$i]["name"] .'","race":'. $serverSkins[$i]["race"] .',"gender":'. $serverSkins[$i]["gender"] .',"weight":'. $serverSkins[$i]["weight"] .',"category":'. $serverSkins[$i]["category"] .',"faction":-1}';	
	else $jsondata = $jsondata.',{"id":'. $serverSkins[$i]["id"] .',"name":"'. $serverSkins[$i]["name"] .'","race":'. $serverSkins[$i]["race"] .',"gender":'. $serverSkins[$i]["gender"] .',"weight":'. $serverSkins[$i]["weight"] .',"category":'. $serverSkins[$i]["category"] .',"faction":-1}';	

	$count ++;
}

$jsondata = $jsondata.']';

echo $jsondata;

?>