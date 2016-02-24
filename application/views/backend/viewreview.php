<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch("review");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">id</th>
<!-- <th data-field="duration">duration</th>
<th data-field="teamsize">teamsize</th>
<th data-field="lastlocation">lastlocation</th>
<th data-field="nextlocation">nextlocation</th>
<th data-field="knowssmash">knowssmash</th>
<th data-field="hostwithsmash">hostwithsmash</th> -->
<th data-field="name">name</th>
<th data-field="email">email</th>
<th data-field="phone">phone</th>
<th data-field="designation">designation</th>
<th data-field="organization">organization</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createreview"); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
</div>
</div>
<script>
function drawtable(resultrow) {
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.email + "</td><td>" + resultrow.phone + "</td><td>" + resultrow.designation + "</td><td>" + resultrow.organization + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editreview?id=');?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deletereview?id='); ?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
