<?php include('admin_header.php'); ?>
<div class="container">
	<h2>Welcome To Login Panel</h2>
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $count = 0; ?>
  <?php if (count($articles)): ?>
  	<?php foreach($articles as $article):?>
    <tr>
      <td><?php echo $count +=1; ?></td>
      <td><?= $article->title ?></td>
      <td><?= $article->body ?></td>
      <td>
      	<a href="#" class="btn btn-primary">Edit</a>
      	<a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <tr>
    <?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="3">No record found</td>
	</tr>
    <?php endif; ?>
  </tbody>
</table> 
</div>

<?php include('admin_footer.php'); ?>