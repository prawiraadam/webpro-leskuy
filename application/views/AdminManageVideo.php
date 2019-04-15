        <!-- Content -->
  			<div class="col-9"> 
  				<table class="table table-striped">
            <div class="row">
              <div class="col">
                <div class="table-title">
                  <h2>Manage <b>Videos</b></h2>
                </div>
              </div>
            </div>
  					<thead class="thead">
  						<tr>
      					<th scope="col">Video ID</th>
      					<th scope="col">Course ID</th>
      					<th scope="col">Name</th>
      					<th scope="col">Description</th>
      					<th scope="col">Content</th>
      					<th scope="col">Thumbnail</th>
                <th scope="col">Univ ID</th>
                <th scope="col">Pembuat</th>
                <th scope="col">Actions</th>
    					</tr>
  					</thead>
  					<tbody>
  						<tr><?php foreach ($video as $vid) { ?>
  							<td><?php echo $vid->vid_id ?></td> <!--Video ID-->
                <td><?php echo $vid->course_id ?></td> <!--Course ID-->
                <td><?php echo $vid->univ_id ?></td> <!--Name-->
                <td><?php echo $vid->vid_nama ?></td> <!--Description-->
                <td><?php echo $vid->vid_content ?></td> <!--Content-->
                <td><?php echo $vid->vid_desc ?></td> <!--Thumbnail-->
                <td><?php echo $vid->vid_thumbnail ?></td> <!-- Univ ID -->
                <td><?php echo $vid->vid_maker ?></td> <!-- Dosen pembuat video -->
                <td>
                  <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $vid->vid_id ?>">Edit</button>
                  <button href="<?php echo base_url()?>index.php/M_Video/deletevideo/<?php echo $vid->vid_id ?>" type="button" class="btn btn-dark btn-sm" onclick="deleteConfirm()">Delete</button>
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
                      <input type="file" accept="video/*" class="form-control" id="recipient-name" placeholder="Video ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Course ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Content">
                    </div>
                    <div class="form-group">
                      <input type="file" accept="image/*" class="form-control" id="recipient-name" placeholder="Thumbnail">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Univ ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Pembuat">
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
          <div class="modal fade" id="edit<?php echo $vid->vid_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                      <input type="file" accept="video/*" class="form-control" id="recipient-name" placeholder="Video ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Course ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Content">
                    </div>
                    <div class="form-group">
                      <input type="file" accept="image/*" class="form-control" id="recipient-name" placeholder="Thumbnail">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Univ ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="recipient-name" placeholder="Pembuat">
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