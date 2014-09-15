<style>
#gebruiker{
    clear: both;
    border-bottom: 1px solid #000;
}

#form_gebruiker{
    margin-top: 20px;
}

.btn_green{
    background-color: green;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #009900;
  padding: 5px;
  color: #fff;
  height: 26px;
}

</style>


<div id="gebruiker">

    <table>
    <tr>
        <td><h1>{$gebruiker.Gebruikersnaam}</h1></td>
        <td><h2>{$gebruiker.UserID}</h2></td>
    </tr>
    <tr>
        <td rowspan="2">{if isset($gebruiker.UI)}<img src="{$gebruiker.UI}" />{/if}</td>
        <td>{$gebruiker.Registratiedatum|date_format:"%d-%m-%Y"}</td>
    </tr>
    <tr>
        <td>{if isset($gebruiker.UserID)}<a href="http://forum.fok.nl/user/profile/{$gebruiker.UserID}" >FOK!Profiel</a>{/if}</td>
    </tr>
    </table>
</div>

<div id="form_gebruiker">

    <form method="post" action="?admin=user&PK_Gebruiker={$gebruiker.PK_Gebruiker}" onsubmit="return form_validate();" >
    <h3>Gebruikersinfo</h3>
    <table>
        <tr>
            <td>Gebruikersnaam:</td>
            <td><input type="text" id="Gebruikersnaam" name="Gebruikersnaam" value="{$gebruiker.Gebruikersnaam}" </td>
        </tr>
       <tr>
            <td>UserID:</td>
            <td><input type="text" id="UserID" name="UserID" value="{$gebruiker.UserID}" </td>
        </tr>
        <tr>
            <td>Registratiedatum:</td>
            <td><input type="text" id="Registratiedatum" name="Registratiedatum" value="{$gebruiker.Registratiedatum|date_format:"%d-%m-%Y"}" </td>
        </tr>
        <tr>
            <td>UI:</td>
            <td><input type="text" id="UI" name="UI" value="{$gebruiker.UI}" /> </td>
        </tr>
        
    </table>
    
    {if isset($gebruiker.PK_Gebruiker)}
    
    {/if}
    
    
    <h3>Rol toevoegen</h3>
    <table id="RolToevoegen">
        <tr>
            <td>Rol:</td>
            <td><select id="rol" name="rol">
                <option value="0">Selecteer..</option>
                {foreach $rollen as $index=>$rol}
                    <option value="{$rol.PK_Rol}">{$rol.Omschrijving}</option>
                {/foreach}
                </select>
            </td>
        </tr>
        <tr>
            <td>Startdatum:</td>
            <td><input type="text" id="Startdatum" name="Startdatum" /></td>
        </tr>
        <tr>
            <td>Einddatum:</td>
            <td><input type="text" id="Einddatum" name="Einddatum" /></td>
        </tr>
         <tr>
            <td>StartURL:</td>
            <td><input type="text" id="StartURL" name="StartURL" /></td>
        </tr>
        <tr>
            <td>EindURL:</td>
            <td><input type="text" id="EindURL" name="EindURL" /></td>
        </tr>
    </table>
    
    {if isset($gebruiker.PK_Gebruiker)}
        <button class="btn_green" name="smtUser" value="update">Wijzigen</button>
    {else}
        <button class="btn_green" name="smtUser" value="insert">Invoeren</button>
    {/if}
        
    </form>
</div>