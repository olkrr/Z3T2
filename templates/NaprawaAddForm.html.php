{extends file="Main.html.php"}
{block name=title}Dodanie Naprawy{/block}
{block name=body}


 <h1>Dodaj naprawę</h1>
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Naprawa/insert" method="post">
    <input type="hidden" value="{$IDKlient}" required="required" name="IDKlient" /><br />
    
    IDProducent *: <div class=form-control> {html_options name=IDProducent options=$producenci} <br /></div>
    Nazwa Myjki *: <input type="text" class="form-control" required="required"  name="NazMyjki" /><br />
    IDTypMyjki *: <div class=form-control> {html_options name=IDTypMyjki options=$myjki}<br /></div>
    IDOsprzet *: <div class=form-control> {html_options name=IDOsprzet options=$osprzet}<br /></div>
    CzyWycena *: <div class=form-control> {html_options name=CzyWycena options=$opcje}<br /></div>
    Symptomy *: <textarea type="text" class="form-control" required="required"  name="Symptomy" /></textarea><br />
    Diagnoza: <textarea type="text"  class="form-control"    name="Diagnoza" /></textarea><br />
    OpisNaprawy: <textarea type="text"  class="form-control"    name="OpisNaprawy" /></textarea><br />
    Czesci: <textarea type="text" class="form-control"  name="Czesci" /></textarea> <br />
    DataDostarczenia: *<input type="date" class="form-control" required="required"  name="DataDostarczenia" /><br />
    DataOdbioru: <input type="date"  class="form-control"   name="DataOdbioru" /><br />
    IDStatus: * <div class=form-control> {html_options name=IDStatus options=$status}<br /></div>
    KwotaNaprawy: <input type="text"  class="form-control"    name="KwotaNaprawy" /><br />
    Kartka: <div class=form-control> {html_options name=Kartka options=$opcje}<br /></div>
    Kontakt: <div class=form-control> {html_options name=Kontakt options=$opcje}<br /></div>
    
    <input type="submit" value="Dodaj" />
</form>
	
<?php include 'templates/footer.html.php';  ?>
    
{/block}