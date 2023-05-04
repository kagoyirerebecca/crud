<?php
require_once'partials/connect.php';
$dbobj=new Database();
var_dump($dbobj);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <h1 class="bg-dark text-light text-center py-2"> PHP ADVANCED CRUD</h1>
        <div class="container">
            <?php
            include'form.php';
            ?>
            <div class="row mb-3">
              <div class="col-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                         <span class="input-group-text bg-dark">
                           <i class="fas fa-search text-light"></i> 
                         </span> 
                      </div>
                      <input type="text" class="form-control" placeholder="Search User ..."> 
                    </div>
              </div>
              <div class="col-2"> 
                <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">
                  Add new user  
                </button>
              </div>
            </div>
            <table class="table" id="username">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Operations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Picture</th>
                  <td>Khanaan</td>
                  <td>Khanaan@demo.com</td>
                  <td>9484948443</td>
                  <td>
                      <span>Edit</span>
                      <span>Profile</span>
                      <span>Delete</span>
                  </td>
                </tr>
                
              </tbody>
            </table>
            <nav aria-label="Page navigation example" id="pagination">
               <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav>   
        </div>
        
         






        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>