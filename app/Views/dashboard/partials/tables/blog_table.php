<div class="table-responsive">
	
 <table class="table table-sm table-striped border">
    <tr class="bg-light text-dark">
      <td width="25">
       No
      </td>
      <td>
       Title
      </td>
      <td width="150">
        Last Updated
      </td>
      <td width="40">
       View
      </td>
      <td width="40">
        Edit
      </td>
      <td width="40">
        Delete
      </td>
    </tr>

   <?php if(isset($all_blogs)): ?>
   	<?php $counter = 1; ?>
      <?php foreach($all_blogs as $bp) : ?>
        <tr>
          <td class="bg-light text-dark"><?=$counter?></td>
          <td><?=$bp['title']?></td>
          <td><?= substr($bp['createdAt'], 0,10) ?></td>
          <td><button class="btn btn-sm btn-success rounded-circle"><i class="bi bi-eye"></i></button></td>
          <td><a href="<?=base_url('/dashboard/edit/blog/'.$bp['id'])?>" class="btn btn-sm btn-primary rounded-circle"><i class="bi bi-pencil"></i></a></td>
          <td><button class="btn btn-sm btn-danger rounded-circle"><i class="bi bi-trash"></i></button></td>
        </tr>
        <?php $counter++?>
      <?php endforeach  ?>
    <?php endif ?>
  </table>

</div>