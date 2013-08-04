<?php  
$ch = curl_init("http://www.healthspace.ca/Clients/VDH/VBeach/VBeach_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=M");
$html = curl_exec($ch);
echo $html;
?>