<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">

<div class="row">

<div class="col-md-12">

<!-- <?php
if(session()->getFlashdata('status'))
{

    ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey</strong> <?= session()->getFlashdata('status'); ?>
 
</div>
    <?php

}

?> -->

    <div class="card">
        <div class="card-reader">
        <h5 class="text-center p-3">Student data </h5>
    <div class="text-center p-3">          
        <a href="<?=base_url('students/create') ?>"
 class="btn btn-info btn-sm float-end">Add</a></div>  


        </div>
<div class="card-body">
        <table class="table table-bordered" id="mydatatable">
                <thead>
                        <tr>
                        <th>Post Id</th>
                                <th>Post Title</th>
                                <th>Post Content</th>
                                <th>Action</th>
                                <th>Confirm Delete</th>
                                        
                        </tr>
                </thead>

                <tbody>
        <?php if($students):?>
                <?php foreach($students as $row) : ?>
                        <tr>
                        <td> <?php echo $row['post_id']; ?></td>
                                <td> <?php echo $row['post_title']; ?></td>
                                <td> <?php echo $row['post_content']; ?></td>
                                <td> 
                                <a href="<?= base_url('student/edit/'.$row['post_id'])?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?= base_url('student/delete/'.$row['post_id'])?>" class="btn btn-danger btn-sm">Delete</a>
                        
                        </td>
   <td>
        <button type="button" value="<?=$row['post_id']; ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>
   </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      
                
</tbody>

        </table>
</div>

</div>
</div>
</div>
</div>
<?= $this->endSection() ?> 

<?= $this->section('scripts') ?>

<script>
 $(document).ready(function () {
        $('.confirm_del_btn').click(function (e) { 
                e.preventDefault();
                var id =$(this).val();

                swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   

        $.ajax({
                              
                 url:"/student/confirm-delete/"+id, 
                         success: function (response){
                                                   swal({
                                                title: response.status,
                                                text: response.status_text,
                                                icon: response.status_icon,
                                                button: "OK",
                                                
                                                    }).then((confirmed) => {
                                                        window.location.reload(); 

                                                    });
                                                      }
                                             });
   
  } else {
    swal("Your imaginary file is safe!");
  }
});


        });
 });

        // $(document).ready(function () {
        //     $('.confirm_del_btn').click(function (e) { 
        //         e.preventDefault();
        //         var id =$(this).val();
        //         if(confirm("confirmed?")){
        //                 alert(id);

        //                 $.ajax({
                              
        //                         url:"/student/confirm-delete/"+id, 
        //                         success: function (response) {
        //                                 window.location.reload(); 
        //                                 alert("Data Deleted");
        //                         }
        //                });
        //         }
                
        //     });    
        // });

</script>
<?= $this->endsection() ?>