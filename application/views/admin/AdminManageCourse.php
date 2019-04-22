        <!-- Content -->
  			<div class="col-9"> 
  				<table class="table table-striped">
            <div class="row">
              <div class="col">
                <div class="table-title">
                  <h2>Manage <b>Course</b></h2>
                </div>
              </div>
            </div>
  					<thead class="thead">
  						<tr>
      						<th scope="col">Course ID</th>
      						<th scope="col">Subject ID</th>
                  <th scope="col">University ID</th>
      						<th scope="col">Name</th>
      						<th scope="col">Description</th>
      						<th scope="col">Date</th>
      						<th scope="col">Price</th>
                  <th scope="col">Actions</th>
    					</tr>
  					</thead>
  					<tbody>
              <?php foreach ($course as $crs) {?>
    						<tr> 
    							<td><?php echo $crs->course_id ?></td> <!--Course ID-->
                  <td><?php echo $crs->sub_id ?></td> <!--Subject ID-->
                  <td><?php echo $crs->univ_id ?></td> <!-- Univ id -->
                  <td><?php echo $crs->course_name ?></td> <!--Name-->
                  <td><?php echo $crs->course_desc ?></td> <!--Description-->
                  <td><?php echo $crs->course_date ?></td> <!--Date-->
                  <td><?php echo $crs->course_price ?></td> <!--Price-->
                  <td>
                    <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $crs->course_id ?>">Edit</button>
                    <a href="<?php echo base_url()?>index.php/Admin/deletecourse/<?php echo $crs->course_id ?>" type="button" class="btn btn-dark btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
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
                  <form method="POST" action="<?php echo base_url()?>index.php/Admin/addcourse">
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="course_id" placeholder="Course ID" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="sub_id" placeholder="Subject ID" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="univ_id" placeholder="University ID" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="course_name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="course_desc" placeholder="Description" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="course_date" placeholder="Date" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" name="course_price" placeholder="Price" required>
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
          <?php foreach ($course as $crs) {?>
            <div class="modal fade" id="edit<?php echo $crs->course_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                    <form method="post" action="<?php echo base_url()?>index.php/Admin/editcourse/<?php echo $crs->course_id ?>">
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="course_id" placeholder="Course ID" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="sub_id" placeholder="Subject ID" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="univ_id" placeholder="University ID" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="course_name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="course_desc" placeholder="Description" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="course_date" vplaceholder="Date" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" name="course_price" placeholder="Price" required>
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