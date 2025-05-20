<div class="tab-pane active" id="samplesettings">
  <h4 class="mt-3"><?php echo _("Basic settings"); ?></h4>
  <div class="row">
    <div class="mb-3 col-12 mt-2">
      <div class="test">
        Test
      </div>
      <div class="buttons">
        <input class="btn btn-outline btn-primary" type="submit" name="saveSettings" value="Test Button">
        <input class="btn btn-warning" type="submit" name="saveSettings" value="Test Warning Button">
      </div>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="txtapikey" name="txtapikey" value="Test Input" required />
        <div class="input-group-text" id="gen_apikey"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
        <div class="invalid-feedback">
          <?php echo _("Please provide a valid API key."); ?>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.tab-pane | basic tab -->

