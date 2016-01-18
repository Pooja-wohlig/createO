<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create fileupload</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createfileuploadsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="cdate">cdate</label>
<input type="date" id="cdate" name="cdate" value='<?php echo set_value('cdate');?>'>
</div>
</div>

<div class="row">
  <div class="file-field input-field col m6 s12">
    <div class="btn blue darken-4">
      <span>Image</span>
      <input name="image" type="file" multiple>
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image');?>">
    </div>
  </div>
</div>


<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewfileupload"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
