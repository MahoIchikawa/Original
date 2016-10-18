<?php require_once 'common/blank.php';?>
<html>
<body>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">username</label>
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="username" class="form-control input-md">
  <span class="help-block">help</span>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">pic</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password..." class="form-control input-md" required="">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm">password comfirm</label>
  <div class="col-md-4">
    <input id="confirm" name="confirm" type="password" placeholder="confirm pw..." class="form-control input-md" required="">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button"></label>
  <div class="col-md-4">
    <button id="button" name="button" class="btn btn-primary">OK</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
