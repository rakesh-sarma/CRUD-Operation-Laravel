<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="addwidth=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-dark text-white text-center p-5 ">Crud Operation</h1>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary p-2 m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Student
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" id="name" class="form-control" placeholder="Enter Name">
          <input type="email" id="email" class="form-control" placeholder="Enter Email">
          <input type="text" id="dept" class="form-control" placeholder="Enter Dept">

         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="Addstudent()" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
        <table class="table table-striped">
            <th>Name</th>
            <th>Email</th>
            <th>Dept</th>
            <th>Edit</th>
            <th>Delete</th>

            <tbody id="output">

            </tbody>
        </table>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" id="name1" class="form-control" placeholder="Enter Name">
          <input type="email" id="email2" class="form-control" placeholder="Enter Email">
          <input type="text" id="dept3" class="form-control" placeholder="Enter Dept">
          <input type="hidden" name="" id="hiddenID">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="update()" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="{{asset('custom_js/custom.js')}}"></script>
</body>
</html>