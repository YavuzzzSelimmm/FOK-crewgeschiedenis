<option value="all">Alle</option>
{foreach $rollen as $index => $rol}
<option value="{$rol.PK_Rol}">{$rol.Omschrijving}</option>
{/foreach}