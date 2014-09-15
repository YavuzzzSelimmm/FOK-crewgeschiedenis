{foreach $users as $index => $user}
        <tr id="{$user.PK_Gebruiker}" {if $user@index is div by 2} class="even"{/if} onmouseover="set_mouseover(this);" onmouseout="set_mouseout(this);">
            <td width="60" class="hasmenu ui" onclick="show_rollen('{$user.PK_Gebruiker}');"><img src="{$user.UI}" width="60" height="60"/></td>
            <td class="hasmenu username" onclick="show_rollen('{$user.PK_Gebruiker}');">{$user.Gebruikersnaam}</td>
            <td class="hasmenu userid" width="140" onclick="show_rollen('{$user.PK_Gebruiker}');">{$user.UserID}</td>
            <td class="hasmenu registratiedatum" width="140" onclick="show_rollen('{$user.PK_Gebruiker}');">{$user.Registratiedatum|date_format:"%d-%m-%Y"}</td>
        </tr>
        <tr id="rollen_{$user.PK_Gebruiker}" class="rollen">
            <td colspan="4" style="border:1px solid #000;">
                <table width="100%" cellspacing="0">
                <tr>
                    <th>Rol</th>
                    <th>Startdatum</th>
                    <th>Einddatum</th>
                    <th>StartURL</th>
                    <th>EindURL</th>
                </tr>
                {foreach $user.rollen as $index=>$rol}
                <tr>
                    <td>{$rol.Naam}/{$rol.Omschrijving}</td>
                    <td>{$rol.Startdatum|date_format:"%d-%m-%Y"}</td>
                    <td>{$rol.Einddatum|date_format:"%d-%m-%Y"}</td>
                    <td><a class="topic" href="{$rol.StartURL}" target="_blank">{$rol.StartURL}</a></td>
                    <td><a class="topic" href="{$rol.EindURL}" target="_blank">{$rol.EindURL}</a></td>
                </tr>
                {/foreach}
                </table>
            </td>
       </tr>
{/foreach}