<?php include 'header.php' ?>
<body>
    <!--personal details-->
   
    <div class="container mx-auto">
        
    <form class="needs-validation width mx-auto bg-light shadow p-4" novalidate>
        <h5>PERSONAL DETAILS :</h5>
        <div class="form-row d-flex justify-content-between">
          <div class="col-md-4 mb-1 ">
            <label for="validationCustom01">Name :</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter  Name" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          <div class="col-md-4 mb-1">
            <label for="validationCustom02">Address :</label>
            <input type="address" class="form-control" id="validationCustom02" placeholder="Enter Address" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          </div>
          <div class="form-row  justify-content-between d-flex">
            <div class="col-md-4  mb-1">
              <label for="validationCustom01">Number :</label>
              <input type="number" class="form-control" id="validationCustom01" placeholder=" Enter Number" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
            <div class="col-md-4  mb-1">
              <label for="validationCustom02">Email :</label>
              <input type="email" class="form-control" id="validationCustom02" placeholder="Enter Email" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
          </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Password :</label>
                  <input type="password" class="form-control" id="validationCustom01" placeholder=" Password" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Confirm Password :</label>
                  <input type="password" class="form-control" id="validationCustom02" placeholder="Confirm passsword" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <h5>EDUCATION / SKILLS :</h5>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">12th Passing year :</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">Graduation Passing year :</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Skills : </label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">College name :</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <h5>INTERNSHIP DETAILS :</h5>
       
            <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Joining Date :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required placeholder="Enter joining date:">
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Department :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required placeholder="Enter Department">
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Stipend :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02"required placeholder="Stipend">
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Reporting Manager</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02"  required placeholder="Enter Reporting Manager name">
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Hr Reference Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required  placeholder="Enter Hr Reference Manager name">
                </div>
              </div>
    
              <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        
      </form>
      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
