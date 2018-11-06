{extends file="Main.html.php"}
{block name=title}Lista napraw{/block}
{block name=body}
<div class ="container-fluid">
<div class ="page-header">
<h1>Naprawy</h1>
    
    
    
    
    
    </div>
{if isset($naprawy)}
{if $naprawy|@count === 0}

        <div class="alert alert-danger" role="alert">Brak napraw w bazie!</div>
{else}
    <div>
<table id="example" class="table display table-striped table-bordered table-responsive" cellspacing="0" width="100%">
   <thead>
      <tr>
		<!--<th><a>ID</a></th>-->
        <th><a>Imie/Nazwisko/Firma</a></th>
        <th><a>Producent</a></th>
        <th><a>Model Myjki</a></th>
        <th><a>Typ Myjki</a></th>
        <th><a>Osprzęt</a></th>
        <th><a>Wycena?</a></th>
        <th><a>Data Dostarczenia</a></th>
        <th><a>Data Odbioru</a></th>
        <th><a>Należność</a></th>
        <th><a>Opis</a></th>
        <th><a>Status</a></th>
        <th></th>
          <th></th>
    </tr>
</thead>
<tbody>
    
    
    {foreach $naprawy as $id => $Naprawa}
<tr>
<!--<td>{$Naprawa['IDNaprawa']}</td>-->
<td>{$Naprawa['Imie']} {$Naprawa['Nazwisko']} {$Naprawa['NazwaFirmy']} </td>   
<td>{$Naprawa['ProducentNazwa']}</td> 
<td>{$Naprawa['NazMyjki']}</td>
<td>{$Naprawa['NazwaTypMyjki']}</td>
<td>{$Naprawa['OsprzetNazwa']}</td>
<td>{$Naprawa['Opcja']}</td>
<td>{$Naprawa['DataDostarczenia']}</td>
<td>{$Naprawa['DataOdbioru']}</td>
<td>{$Naprawa['KwotaNaprawy']}</td>
<td>{$Naprawa['OpisNaprawy']}</td>
<td>{$Naprawa['StatusNazwa']}</td>



    <td><a type="button" class="btn btn-primary center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/edit/{$Naprawa['IDNaprawa']}">edytuj</a></td>
    <td><a type="button" class="btn btn-warning center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/faktura/{$Naprawa['IDNaprawa']}">faktura</a></td>
    <td><a type="button" class="btn btn-danger center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/delete/{$Naprawa['IDNaprawa']}">usuń</a></td>
                </tr>
        {/foreach}
    </tbody>
</table> 
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}
</div></div>
{/block}
