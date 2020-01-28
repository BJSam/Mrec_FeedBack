<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'https://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
//	echo "please wait....";
	header('Location: '.$uri.'/m_home/');
	exit;
?>
Something is wrong contact admin :-(
