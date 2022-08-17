<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model">
    Add Student
</button>
<div class="modal" tabindex="-1" id="model">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Student Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <form id="Formdata">
            <input type="text" name="name" id="name" class="form-control mb-2"  placeholder="Enter Name..">
            <input type="text" name="phone" id="phone" class="form-control mb-2"  placeholder="Enter Phone..">
            <input type="text" name="class" id="class" class="form-control mb-2"  placeholder="Enter Class..">
          </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" id="cancel">cancel</button>
            <button id="submit" class="btn btn-success">Submit</button>
    </div>
    </form>
    </div>
  </div>
</div>
<!-- table -->
<table class="table table-responsive mt-2" id="tabledata">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>



</div>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>