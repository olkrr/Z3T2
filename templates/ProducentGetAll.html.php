{extends file="Main.html.php"}
{block name=title}Lista producentów{/block}
{block name=body}
<div class ="container-fluid">
<div class ="page-header">
<h1>Producenci</h1>
    </div>
{if isset($producenci)}
{if $producenci|@count === 0}
    <div class="alert alert-danger" role="alert">Brak producenci w bazie!</div>
{else}

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Producent</td>
        
    </tr>
	</thead>
	<tbody>

    {foreach $producenci as $id => $Producent}
	<tr>
   <td>{$Producent['IDProducent']}</td>
                    <td>{$Producent['ProducentNazwa']}</td>
                </tr>
    {/foreach}
	
	</tbody>

</table>
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}
<div class="alert alert-danger" role="alert">Dodatkowych producentów należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>
{/block}

