{extends file="Main.html.php"}
{block name=title}Dodanie{/block}
{block name=body}

<h1>Dodaj klienta</h1>
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Klient/insert" method="post">
    Imie: <input type="text" class="form-control" required="required"     name="Imie" /><br />
    Nazwisko: <input type="text" class="form-control" required="required"     name="Nazwisko" /><br />
    Nazwa Firmy: <input type="text" class="form-control" name="NazwaFirmy" /><br />
    Telefon: <input type="text" class="form-control" required="required"     name="NumerTelefonu" /><br />
    E-Mail: <input type="text" class="form-control" name="Email" /><br />
    Ulica: <input type="text" class="form-control" name="Ulica" /><br />
    NumerDomu: <input type="text" class="form-control" name="NumerDomu" /><br />
    Miejscowosc: <input type="text" class="form-control" required="required"     name="Miejscowosc" /><br />
    KodPocztowy: <input type="text" class="form-control" required="required"     name="KodPocztowy" /><br />
    Uwagi: <input type="text" class="form-control" name="Uwagi" /><br />
    Nip: <input type="text" class="form-control" name="Nip" /><br />
    <input type="submit" class="btn btn-success" value="Dodaj" />
</form>

{/block}


