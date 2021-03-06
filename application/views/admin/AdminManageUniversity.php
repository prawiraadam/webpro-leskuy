        <!-- Content -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/AdminPageStyle.css') ?>">
  			<div class="col-9"> 
  				<table class="table table-striped">
            <div class="row">
              <div class="col">
                <div class="table-title">
                  <h2>Manage <b>University</b></h2>
                </div>
              </div>
            </div>
  					<thead class="thead">
  						<tr>
      						<th scope="col">Univ ID</th>
      						<th scope="col">Name</th>
      						<th scope="col">Logo</th>
                  <th scope="col">Actions</th>
    					</tr>
  					</thead>
  					<tbody>
  						<?php foreach ($university as $univ) {?>
              <tr>
  							<td><?php echo $univ->univ_id ?></td> <!--Univ ID-->
                <td><?php echo $univ->univ_name ?></td> <!--Name-->
                <td><?php echo $univ->univ_logo ?></td> <!--Logo-->
                <td>
                  <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $univ->univ_id ?>">Edit</button>
                  <a href="<?php echo base_url()?>index.php/Admin/deleteuniversity/<?php echo $univ->univ_id ?>" type="button" class="btn btn-dark btn-sm" onClick="return confirm('Apakah Anda Yakin?')">Delete</a>
                </td>
  						</tr>
              <?php } ?>
  					</tbody>
  				</table>

          <!-- Pagination -->
          <!-- <div class="tablePages">
            <ul class="pagination pagination-sm">
              <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
          </div> -->

          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createModal" id="myBtn">Create</button>

            <!-- Modal Create -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">

                <!-- Modal Content -->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="ModalLabel">Create new data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?php echo base_url()?>index.php/Admin/adduniversity">
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Univ ID" name="univ_id" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Name" name="univ_name" required>
                      </div>
                      <div class="form-group">
                        <input type="file" accept="image/*" class="form-control" id="recipient-name" name="univ_logo" placeholder="Logo" required>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create data</button>
                      </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Edit -->
            <?php foreach ($university as $univ) {?>
              <div class="modal fade" id="edit<?php echo $univ->univ_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                  <!-- Modal Content -->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="ModalLabel">Edit data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?php echo base_url()?>index.php/Admin/edituniversity/<?php echo $univ->univ_id ?>">
                        <div class="form-group">
                          <input type="text" class="form-control" id="recipient-name" placeholder="Univ ID" name="univ_id" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="recipient-name" placeholder="Name" name="univ_name" required>
                        </div>
                        <div class="form-group">
                          <input type="file" accept="image/*" class="form-control" id="recipient-name" name="univ_logo" placeholder="Logo" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit data</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
		</div>
	</div>
</body>
</html>