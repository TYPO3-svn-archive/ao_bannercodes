<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_aobannercodes_bannercodes=1
');
?>