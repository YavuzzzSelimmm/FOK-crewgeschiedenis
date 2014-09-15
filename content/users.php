<?php

$rollen = new Rollen();

$smarty->assign("rollen", $rollen->haal_rollen());
$smarty->display($template_file);