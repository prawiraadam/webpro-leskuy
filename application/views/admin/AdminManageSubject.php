        <!-- Content -->
  			<div class="col-9"> 
  				<table class="table table-striped">
            <div class="row">
              <div class="col">
                <div class="table-title">
                  <h2>Manage <b>Subjects</b></h2>
                </div>
              </div>
            </div>
  					<thead class="thead">
  						<tr>
      						<th scope="col">Subject ID</th>
      						<th scope="col">Name</th>
      						<th scope="col">Description</th>
      						<th scope="col">Foto</th>
                  <th scope="col">Actions</th>
    					</tr>
  					</thead>
  					<tbody>
              <?php foreach ($subject as $sbj) {?>
  						<tr>
  							<td><?php echo $sbj->sub_id ?></td> <!--Subject ID-->
                <td><?php echo $sbj->sub_nama ?></td> <!--Name-->
                <td><?php echo $sbj->sub_desc ?></td> <!--Description-->
                <td><?php echo $sbj->sub_foto ?></td> <!--Foto-->
                <td>
                  <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $sbj->sub_id ?>">Edit</button>
                  <a href="<?php echo base_url()?>index.php/Admin/deletesubject/<?php echo $sbj->sub_id ?>" type="button" class="btn btn-dark btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
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
                  <form method="POST" action="<?php echo base_url()?>index.php/Admin/addsubject">
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="sub_id" placeholder="Subject ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="sub_nama" placeholder="Subject name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="sub_desc" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <input type="file" accept="image/*" class="form-control" id="recipient-name" name="sub_foto" placeholder="Foto">
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
          <?php foreach ($subject as $sbj) {?>
            <div class="modal fade" id="edit<?php echo $sbj->sub_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                    <form method="post" action="<?php echo base_url()?>index.php/Admin/editsubject/<?php echo $sbj->sub_id ?>">
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="sub_id" placeholder="Subject ID">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="sub_nama" placeholder="Subject name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="sub_desc" placeholder="Description">
                      </div>
                      <div class="form-group">
                        <input type="file" accept="image/*" class="form-control" id="recipient-name" name="sub_foto" placeholder="Foto">
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
          <?php } ?>
        </div>
      </div>
		</div>
	</div>
</body>
</html>