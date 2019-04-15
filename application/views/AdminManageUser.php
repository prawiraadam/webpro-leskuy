      <!-- Content -->
			<div class="col-9"> 
				<table class="table table-striped">
          <div class="row">
            <div class="col">
              <div class="table-title">
                <h2>Manage <b>User</b></h2>
              </div>
            </div>
          </div>
					<thead class="thead">
						<tr>
  						<th scope="col">User ID</th>
  						<th scope="col">Fullname</th>
  						<th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Profile Picture</th>
              <th scope="col">Course ID</th>
              <th scope="col">Actions</th>
  					</tr>
					</thead>
					<tbody>
						<?php foreach ($user as $u) {?>
            <tr>
							<td><?php echo $u->user_id ?></td> <!--User ID-->
              <td><?php echo $u->course_id ?></td> <!--Fullname-->
              <td><?php echo $u->fullname ?></td> <!--Email-->
              <td><?php echo $u->email ?></td> <!--Password-->
              <td><?php echo $u->password ?></td> <!--Profile Picture-->
              <td><?php echo $u->foto_profile ?></td> <!--Course ID-->
              <td>
                <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $u->user_id ?>">Edit</button>
                <button href="<?php echo base_url()?>index.php/M_User/deleteuser/<?php echo $u->user_id ?>" type="button" class="btn btn-dark btn-sm" onclick="deleteConfirm()">Delete</button>
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
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="User ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="file" accept="image/*" class="form-control" id="recipient-name" placeholder="Profile Picture">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Course ID">
                    </div>
                 </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Create data</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Edit -->
          <div class="modal fade" id="edit<?php echo $u->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="User ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="file" accept="image/*" class="form-control" id="recipient-name" placeholder="Profile Picture">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Course ID">
                    </div>
                 </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Edit data</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
	</div>
</div>
</body>
</html>