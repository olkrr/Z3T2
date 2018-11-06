{extends file="Main.html.php"}
{block name=title}Edycja{/block}
{block name=body}

<h1>Edycja naprawy </h1>

<form  action="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/update" method="post">
    <input type="hidden" id="IDNaprawa" name="IDNaprawa" value="{$IDNaprawa}"> <br />
   
    <input type="hidden" class="form-control" required="required" id="IDKlient" name="IDKlient"  value="{$IDKlient}"><br />
    
    IDProducent:  <div class="form-control"> {html_options name=IDProducent options=$producenci selected=$IDProducent}<br /> </div>
    
    NazMyjki:  <input type="text" class="form-control" name="NazMyjki" required="required"      value="{$NazMyjki}"><br /> 
    
    IDTypMyjki: <div class="form-control"> {html_options name=IDTypMyjki options=$myjki selected=$IDTypMyjki}<br /> </div>
    
    IDOsprzet: <div class="form-control">  {html_options name=IDOsprzet options=$osprzet selected=$IDOsprzet}<br /> </div>
    
	CzyWycena: <div class="form-control">  {html_options name=CzyWycena options=$opcje selected=$CzyWycena}<br /> </div>
    
	Symptomy: <textarea type="textarea" class="form-control" required="required" id="Symptomy" name="Symptomy"  value="">{$Symptomy}</textarea><br />
    
    Diagnoza: <textarea type="textarea" class="form-control" id="Diagnoza" name="Diagnoza"  value=""> {$Diagnoza} </textarea> <br />
    
    OpisNaprawy: <textarea type="textarea" class="form-control" id="OpisNaprawy" name="OpisNaprawy"  value="">{$OpisNaprawy}</textarea> <br />
    
    Czesci: <textarea type="textarea" class="form-control" id="Czesci" name="Czesci"  value="">{$Czesci}</textarea> <br />
    
    DataDostarczenia: <input type="date" class="form-control" required="required" id="DataDostarczenia" name="DataDostarczenia"  value="{$DataDostarczenia}"><br />
    
    DataOdbioru: <input type="date" class="form-control"  id="DataOdbioru" name="DataOdbioru"  value="{$DataOdbioru}"><br />
    
    IDStatus: <div class="form-control">  {html_options name=IDStatus options=$status selected=$IDStatus}<br /> </div>
    
    KwotaNaprawy: <input type="number" class="form-control" id="KwotaNaprawy" name="KwotaNaprawy"  value="{$KwotaNaprawy}"><br />
    
    Kartka: <div class="form-control">  {html_options name=Kartka options=$opcje selected=$Kartka}<br /> </div>
    
    Kontakt: <div class="form-control">  {html_options name=Kontakt options=$opcje selected=$Kontakt}<br /> </div>
    
    
    <input type="submit" class="btn btn-success" value="Aktualizuj" />
</form>
{if isset($error)}
<strong>{$error}</strong>
{/if}

{/block}