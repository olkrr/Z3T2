{block name=body}
<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel='stylesheet' type='text/css' href='http://{$smarty.server.HTTP_HOST}{$subdir}css/style.css' />-->
        <link rel='stylesheet' type='text/css' href='/Z3T/css/style.css' />
        </head>
<body>
<div id="page-wrap">
    <div class="text">
<div id="tura">Turze, dnia {$faktura['DataDostarczenia']} r. </div>
<h1 id="naglowek"> Zlecenie NR {$faktura['IDNaprawa']} </h1><br/>
    
    <div id="naglowek">Klient: {$faktura['Imie']} {$faktura['Nazwisko']} <br/>
       Firma: {$faktura['NazwaFirmy']} <br/>
       Adres:  {if isset($Ulica)} ul.{$faktura['Ulica']} {$faktura['NumerDomu']} {/if} {$faktura['KodPocztowy']} {$faktura['Miejscowosc']} Tel. {$faktura['NumerTelefonu']}</div>
    Sprzęt: {$faktura['ProducentNazwa']} {$faktura['NazMyjki']}<br/>
    Symptomy: {$faktura['Symptomy']}<br/>
    Przyczyna: {$faktura['Diagnoza']}<br/>
    Data naprawy BRAK DATY NAPRAWY<br/>
    Użyte części/czynności: {$faktura['Czesci']}
    <div id="tura">Cena {$faktura['KwotaNaprawy']}</div>
        </div>
    </div>
    <div style="text-align:center"> <input id="drukowanie" type="button" value="drukowanie" onclick="drukuj()"></div>
   
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/Naprawa.js"></script>
    </body>
    </html>
    {if isset($error)}
<strong>{$error}</strong>
{/if}
</div></div>
{/block}