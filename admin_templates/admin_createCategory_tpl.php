<div class="container" style="padding-top:25px">
  <div class="wrapper">
    <div class="col-lg-9 col-md-12 col-sm-12 col-sx-12">
      <div id="respond">
      <?php echo $templateData->get_response();?>
        <form method="post" action="?controller=createCategory">
          <div class="form-group">
            <label name="labelCreateCategori">Skapa en kategori</label>
            <input name="categoryName" type="text" class="form-control" placeholder="Skriv in ett kategorinamn" value="<?php echo $templateData->get_categoryName(); ?>"/>
          </div>
          <button type="submit" class="btn btn-primary">Skapa</button>
        </form>
      </div>
    </div>
  </div>
</div>