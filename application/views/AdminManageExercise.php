  <!DOCTYPE html>
  <html>
  <head>
  	<title>Manage Exercises</title>
  	<link rel="stylesheet" type="text/css" href="css/PageStyle.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>

  <script>
    function deleteConfirm(){
      confirm("Are you sure ?");
    }
  </script>

  <body>
  	<div class="container-fluid">
  		<div class="row">
    			<div class="col-2"> <!-- Sidebar -->
      			<ul class="nav flex-column">
      				<li class="nav-item"><a class="nav-link" href="AdminHome.html">Leskuy!</a></li>
    					<li class="nav-item"><a class="nav-link active" href="AdminManageStudent.html">Students List</a></li>
    					<li class="nav-item"><a class="nav-link" href="AdminManageTeacher.html">Teachers List</a></li>
    					<li class="nav-item"><a class="nav-link" href="AdminManageExercise.html">Exercises Bank</a></li>
    					<li class="nav-item"><a class="nav-link" href="AdminManageVideo.html">Teaching Materials</a></li>
              <li class="nav-item"><a class="nav-link" href="AdminLogin.html">Logout</a></li>
  				</ul>
    			</div>

          <!-- Content -->
    			<div class="col-9"> 
    				<table class="table table-hover">
              <div class="row">
                <div class="col">
                  <div class="table-title">
                    <h2>Manage <b>Exercises</b></h2>
                  </div>
                </div>
              </div>
    					<thead class="thead-dark">
    						<tr>
        						<th scope="col">ID</th>
        						<th scope="col">Subject</th>
        						<th scope="col">Educational Level</th>
        						<th scope="col">Grade</th>
        						<th scope="col">Chapter</th>
        						<th scope="col">Section</th>
                    <th scope="col">Actions</th>
      					</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td>MATH-001</td> <!--Exercise ID-->
                  <td>Mathematics</td> <!--Subject name-->
                  <td>Elementary School</td> <!--Educational level-->
                  <td>1st</td> <!--Grade-->
                  <td>Basic counting operations</td> <!--Chapter-->
                  <td>Addition</td> <!--Section-->
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm()">Delete</button>
                  </td>
    						</tr>
    						<tr>
                  <td>SCNC-002</td> <!--Exercise ID-->
                  <td>Science</td> <!--Subject name-->
                  <td>Junior High School</td> <!--Educational level-->
                  <td>1st</td> <!--Grade-->
                  <td>Temperature & Measurement</td> <!--Chapter-->
                  <td>Principal amount</td> <!--Section-->
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm()">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>INDO-001</td> <!--Exercise ID-->
                  <td>Bahasa Indonesia</td> <!--Subject name-->
                  <td>Junior High School</td> <!--Educational level-->
                  <td>3rd</td> <!--Grade-->
                  <td>Quick Reading</td> <!--Chapter-->
                  <td>Understanding main idea</td> <!--Section-->
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm()">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>PHYS-001</td> <!--Exercise ID-->
                  <td>Physics</td> <!--Subject name-->
                  <td>Senior High School</td> <!--Educational level-->
                  <td>1st</td> <!--Grade-->
                  <td>Equation of motion</td> <!--Chapter-->
                  <td>Linear Motion</td> <!--Section-->
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm()">Delete</button>
                  </td>
                </tr>
    					</tbody>
    				</table>
            <div class="tablePages">
              <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal" id="myBtn">Create</button>

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
                        <input type="text" class="form-control" id="recipient-name" placeholder="ID">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Full name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Education Level">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Phone number">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Line ID">
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
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                        <input type="text" class="form-control" id="recipient-name" placeholder="ID">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Full name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Education Level">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Phone number">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Line ID">
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