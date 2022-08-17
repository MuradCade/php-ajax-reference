<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <title>Student Dashboard</title>
</head>
<body>
  
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-sm-8">
        <h1 class="fs-3 text-center">Users Info</h1>
        <button class="btn btn-success" id="addNew">Add New</button>
        <table class="table" id="studentTable">
          <thead>
            <tr>
              <th>Student Id</th>
              <th>Student Name</th>
              <th>Student Class</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="modal" tabindex="-1" id="studentModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Student Registration Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="studentForm">
                <div class="form-group m-2">
                  <input type="text" name="stdId" id="stdId" class="form-control" placeholder="Enter Student Id">
                </div>
                <div class="form-group m-2">
                  <input type="text" name="stdName" id="stdName" class="form-control" placeholder="Enter Student Name">
                </div>
                <div class="form-group m-2">
                  <input type="text" name="stdClass" id="stdClass" class="form-control" placeholder="Enter Student Class">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="saveChange">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="main.js"></script>

</body>
</html>