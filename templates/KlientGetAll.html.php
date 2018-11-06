{extends file="Main.html.php"}
{block name=title}Lista klientów{/block}
{block name=body}

<div class ="container-fluid">
<div class ="page-header">

<h1>Klienci</h1>
    </div>
{if isset($klienci)}
{if $klienci|@count === 0}
        <div class="alert alert-danger" role="alert">Brak klientów w bazie!</div>
{else}
<td></td>
    <div>
<table id="example" class="table display table-striped table-bordered" cellspacing="0" width="100%"> 
   
       <thead>
      <tr>
        <!--<th><a>ID</a></th>-->
        <th>Imie/Nazwisko/Firma</th>
      <!--  <th>Nazwisko</th>
        <th>Nazwa Firmy</th> -->
        <th>Telefon</th>
        <th>Email</th>
        <th>Nip</th>
		<th>Uwagi</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
	</thead>
	<tbody>
    
        {foreach $klienci as $id => $Klient}
        <tr>
                    <!--<td>{$Klient['IDKlient']}</td>-->
                    <td>{$Klient['Imie']} {$Klient['Nazwisko']} 
					{$Klient['NazwaFirmy']}</td>
                    <!--<td>{$Klient['Nazwisko']}</td>
                    <td>{$Klient['NazwaFirmy']}</td> -->
                    <td>{$Klient['NumerTelefonu']}</td>
                    <td>{$Klient['Email']}</td>
                    {if ($Klient['Nip'] == null)} 
						<td> <em>-Brak-</em>
						{else}
					<td>{$Klient['Nip']}</td>
						{/if}
						{if ($Klient['Uwagi'] == null)} 
						<td> <em>-Brak-</em>
						{else}
					<td>{$Klient['Uwagi']}</td>
						{/if}

            
            <td><a type="button" class="btn btn-info center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/getNaprawyForKlient/{$Klient['IDKlient']}">Naprawy</a></td>
            <td><a type="button" class="btn btn-primary center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Klient/edit/{$Klient['IDKlient']}">Edytuj</a></td>
			<td><a type="button" class="btn btn-success center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/add/{$Klient['IDKlient']}">Dodaj naprawę</a></td>
            <td><a type="button" class="btn btn-danger center-block" href="http://{$smarty.server.HTTP_HOST}{$subdir}Klient/delete/{$Klient['IDKlient']}">Usuń</a></td>
            
                </tr>
        {/foreach}
	</tbody>
</table>
        
        
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}
<br/><br/>
<a href="http://{$smarty.server.HTTP_HOST}{$subdir}Klient/add">Dodaj klienta</a><br/>
</div></div>
    

{/block}