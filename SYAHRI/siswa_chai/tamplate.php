<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">USS Enterprise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">History</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Compensable Skills
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h3 class="mt-2">US NAVY</h3>
      <a href="" class="btn btn-primary mb-2">Tambah Prajurit</a>

     <!-- Button to trigger modal -->
<button class="btn btn-success btn-lg mb-2" data-toggle="modal" data-target="#modalForm">
    TAMBAH PRAJURIT
</button>

      <!-- Modal -->
      <div class="modal fade" id="modalForm" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                      
                      <h4 class="modal-title" id="myModalLabel">Daftar Prajurit</h4>
                  </div>
                  
                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                      <form role="form">
                          <div class="form-group">
                              <label for="inputName">Name</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                          </div>
                          <div class="form-group">
                              <label for="inputMessage">Message</label>
                              <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                          </div>
                      </form>
                  </div>
                  
                  <!-- Modal Footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                  </div>
              </div>
          </div>
      </div>
      
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>

  </body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</html>