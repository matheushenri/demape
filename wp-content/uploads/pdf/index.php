<?php

$file_url = $_SERVER['SERVER_NAME'] . '/wp-content/uploads/pdf/pdf.pdf';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);

?>

<script type="text/javascript">
//	jQuery(function() {
//		document.close();
//	});
</script>