<style>
#users{
    clear: both;    
}

#tblUsers{
    width: 100%;
}
</style>


<div id="users">

    <a href="?admin=user">Toevoegen gebruiker</a>

    <table id="tblUsers">
        <tr>
            <th>Gebruikersnaam</th>
            <th>UserID</th>
            <th>Registratiedatum</th>
            <th>UI</th>
            <th></th>
            <th></th>
        </tr>
    {foreach $users as $index => $user}
        <tr>
            <td>{$user.Gebruikersnaam}</td>
            <td>{$user.UserID}</td>
            <td>{$user.Registratiedatum|date_format:"%d-%m-%Y"}</td>
            <td><img src="{$user.UI}"/></td>
            <td><a href="?admin=user&id={$user.PK_Gebruiker}">Wijzig</a></td>
            <td>Verwijder</td>
        </tr>
    {/foreach}
    </table>
</div>