<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3 class="text-center p-3">Form
</h3>
<div class="text-center p-3">
<a href="<?= base_url('students')?>" class="btn btn-danger btn-sm float-end">BACK</a>
</div>
<div class="row">
 <div class="col-12 col-md-8 offset-md-2">




 <form method="post" action="<?=base_url('/students/add') ?>">
    <div class="form-group">
<label for="">Title</label>
<input id="" class="form-control"  type="text" name="post_title">
</div>

<div class="form-group">
<label for="">Content</label>

    <textarea name="post_content" id="" class="form-control" rows="3"></textarea>
</div>

<div class="form-group">

<button class="btn btn-success btn-sm">Save</button>
</div>

</div>

 </form>

 </div>
</div>
<?= $this->endSection() ?> 