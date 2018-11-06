{extends file="Main.html.php"}
{block name=title}Lista osprzętów{/block}
{block name=body}
<div class ="container-fluid">
<div class ="page-header">
<h1>Osprzęty</h1>
    </div>
{if isset($osprzety)}
{if $osprzety|@count === 0}
        <div class="alert alert-danger" role="alert">Brak osprzętów w bazie!</div>
{else}

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Osprzętu</td>
        
    </tr>
	</thead>
	<tbody>

    {foreach $osprzety as $id => $Osprzet}
	<tr>
   <td>{$Osprzet['IDOsprzet']}</td>
                    <td>{$Osprzet['OsprzetNazwa']}</td>
                </tr>
        {/foreach}
	</tbody>

</table>
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}
<div class="alert alert-danger" role="alert">Wersje osprzętów należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>
{/block}
