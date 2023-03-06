<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3 class="text-center p-3">Edit Form
</h3>
<div class="text-center p-3">
<a href="<?= base_url('students')?>" class="btn btn-danger btn-sm float-end">BACK</a>
</div>
<div class="row">
 <div class="col-12 col-md-8 offset-md-2">




 <form method="POST" action="<?=base_url('student/update/'.$student['post_id']) ?>">
 <input type="hidden" name="_method" value="PUT" />

    <div class="form-group">
<label for="">Title</label>
<input id="" class="form-control" value="<?= $student['post_title']; ?>" type="text" name="post_title">
</div>

<div class="form-group">
<label for="">Content</label>

    <input name="post_content" value="<?= $student['post_content']; ?>" id="" class="form-control">
</div>

<div class="form-group">

<button class="btn btn-success btn-sm">Update</button>
</div>

</div>

 </form>

 </div>
</div>
<?= $this->endSection() ?> 