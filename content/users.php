<?php

$rollen = new Rollen();



$gebruikers = $user->getAllUsersAndRoles();

$smarty->assign("gebruikers", $gebruikers);
$smarty->assign("rollen", $rollen->haal_rollen());
$smarty->display($template_file);