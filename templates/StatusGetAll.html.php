{extends file="Main.html.php"}
{block name=title}Lista statusów{/block}
{block name=body}
<div class ="container">
<div class ="page-header">
<h1>Statusy</h1>
    </div>
{if isset($statusy)}
{if $statusy|@count === 0}
        <div class="alert alert-danger" role="alert">Brak statusów w bazie!</div>
{else}


<table class="table table-striped table-bordered" cellspacing="0" width="100%">   
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Status</td>
        
    </tr>
	</thead>
	<tbody>

    {foreach $statusy as $id => $Status}
	<tr>
   <td>{$Status['IDStatus']}</td>
                    <td>{$Status['StatusNazwa']}</td>
                </tr>
        {/foreach}
	</tbody>

</table>
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}

    <div class="alert alert-danger" role="alert">Statusy należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>

{/block}