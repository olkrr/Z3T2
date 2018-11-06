{extends file="Main.html.php"}
{block name=title}Edycja{/block}
{block name=body}
<h1>Edytuj dane klienta</h1>

<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Klient/update" method="post">
     <input type="hidden" id="id" name="id" value="{$Klient['IDKlient']}">
   
    Imie: <input type="text" class="form-control" required="required" id="Imie" name="Imie"  value="{$Klient['Imie']}"><br />
    Nazwisko: <input type="text" class="form-control" required="required"     id="Nazwisko" name="Nazwisko"  value="{$Klient['Nazwisko']}"><br />
    Nazwa Firmy : <input type="text" name="NazwaFirmy"   class= "form-control"   value="{$Klient['NazwaFirmy']}"><br />
    Telefon : <input type="text" class="form-control" required="required"     id="NumerTelefonu" name="NumerTelefonu"  value="{$Klient['NumerTelefonu']}"><br />
    E-mail : <input type="text" class="form-control" id="Email" name="Email"  value="{$Klient['Email']}"><br />
	Ulica : <input type="text" class="form-control" id="Ulica" name="Ulica"  value="{$Klient['Ulica']}"><br />
	Nr Domu : <input type="text" class="form-control" id="NumerDomu" name="NumerDomu"  value="{$Klient['NumerDomu']}"><br />
    Miejscowość : <input type="text" class="form-control" id="Miejscowosc" required="required"     name="Miejscowosc" value="{$Klient['Miejscowosc']}"><br />
    KodPocztowy :<input type="text" class="form-control" id="KodPocztowy" required="required"     name="KodPocztowy" value="{$Klient['KodPocztowy']}"><br />
    Nip : <input type="text" class="form-control" id="Nip" name="Nip" value="{$Klient['Nip']}"><br />
	Uwagi : <input type="textbox" class="form-control" id="Uwagi" name="Uwagi" value="{$Klient['Uwagi']}"><br />
    <input type="submit" class="btn btn-success" value="Aktualizuj" />
</form>
{if isset($error)}
<strong>{$error}</strong>
{/if}

{/block}