<?php include('documents/main_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><center><i class="fa fa-fw fa-user-graduate"></i> <strong>Student Registration Form </strong></center> </h2>
                            <div class="page-breadcrumb">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
          
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                            <div class="" id="message"></div>
                                            <form id="validationform" name="student_form" data-parsley-validate="" novalidate="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-user"></i> Student Info</label>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" name="studentID_no" required="" placeholder="" class="form-control" id="username">
                                                    </div>
                                                    <script>
                        $(document).ready(function(){
                            $('#username').on('input', function() {
                                var value = $(this).val().replace(/\D/g, '');
                                if (value.length > 4) {
                                    value = value.substring(0, 4) + '-' + value.substring(4, 8);
                                }
                                $(this).val(value);
                            });
                        });
                    </script>
                                                </div>
                                                
                                            

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">First Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" id="latinTextBox" type="text" name="first_name" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Middle Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" id="latinTextBox1" type="text" name="middle_name" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                   <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Last Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" id="latinTextBox2" type="text" name="last_name" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                               <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Course</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                       <select data-parsley-type="alphanum" type="text" id="course" required="" placeholder="" class="form-control">
                                                       <?php 
                                                            $conn = new class_model();  
                                                            $course = $conn->fetchAll_course();
                                                         ?>
                                                           <option value="">&larr;Select Course &rarr;</option>
                                                            <?php foreach ($course as $row) { ?>
                                                           <option value="<?= $row['course_name']; ?>"><?= $row['course_name']; ?></option>
                                                       <?php } ?>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Year level</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <select data-parsley-type="alphanum" type="text" id="year_level" required="" placeholder="" class="form-control">
                                                           <option value="">&larr;Year level &rarr;</option>
                                                           <option value="1st Year">1st Year</option>
                                                           <option value="2nd Year">2nd Year</option>
                                                           <option value="3rd Year">3rd Year</option>
                                                           <option value="4th Year">4th Year</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date of Birth</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="date" name="date_ofbirth" required="" placeholder="" class="form-control" 
                                                        min="1900-01-01" max="2099-12-31">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Gender</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                       <select data-parsley-type="alphanum" type="text" id="gender" required="" placeholder="" class="form-control">
                                                           <option value="">&larr;Select Gender &rarr;</option>
                                                           <option value="Male">Male</option>
                                                           <option value="Female">Female</option>
                                                       </select>
                                                    </div>
                                                </div>

                                               <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Complete Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                       <textarea rows="1" data-parsley-type="alphanum" type="text" name="complete_address" required="" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Email Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="email" name="email_address" placeholder="" class="form-control" required>
                                                    </div>
                                                </div>
                                                   <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Mobile Number</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" id="intTextBox" type="text" name="mobile_number" minlength="11" maxlength="11" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-user-lock"></i> Account Info</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" name="username" required="" placeholder="" class="form-control" id="username2">
                                                    </div>
                                                    <script>
                        $(document).ready(function(){
                            $('#username2').on('input', function() {
                                var value = $(this).val().replace(/\D/g, '');
                                if (value.length > 4) {
                                    value = value.substring(0, 4) + '-' + value.substring(4, 8);
                                }
                                $(this).val(value);
                            });
                        });
                    </script>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="passwrd" name="password" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <button  class="btn btn-space btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>    
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
           
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>

    <script type="text/javascript">
// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}


// Install input filters.
setInputFilter(document.getElementById("intTextBox"), function(value) {
  return /^-?\d*$/.test(value); });
setInputFilter(document.getElementById("latinTextBox"), function(value) {
  return /^[a-z]*$/i.test(value); });
  setInputFilter(document.getElementById("latinTextBox1"), function(value) {
  return /^[a-z]*$/i.test(value); });
  setInputFilter(document.getElementById("latinTextBox2"), function(value) {
  return /^[a-z]*$/i.test(value); });
</script>




    <script>
    $('#form').parsley();
    </script>
       <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
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
    <script>
      $(document).ready(function() {
       $('form[name="student_form"]').on('submit', function(e){
          e.preventDefault();

          var a = $(this).find('input[name="studentID_no"]').val();
          var b = $(this).find('input[name="first_name"]').val();
          var c = $(this).find('input[name="middle_name"]').val();
          var d = $(this).find('input[name="last_name"]').val();
          var e = $('#course option:selected').val();
          var f = $('#year_level option:selected').val();
          var g = $(this).find('input[name="date_ofbirth"]').val();
          var h = $('#gender option:selected').val();
          var i = $(this).find('textarea[name="complete_address"]').val();
          var j = $(this).find('input[name="email_address"]').val();
          var k = $(this).find('input[name="mobile_number"]').val(); 
          var l = $(this).find('input[name="username"]').val();
          var m = $(this).find('input[name="password"]').val();

        if(l !=m){
         if (a === '' ||  b ===''||  d ===''||  e ==='' ||  f ===''||  g ==='' ||  h ==='' ||  i ==='' || j ==='' ||  k==='' ||  l ==='' ||  m ===''){
              $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
              window.scrollTo(0, 0);
            }else{
            $.ajax({
                url: 'init/controllers/add_student.php',
                method: 'post',
                data: {
                    
                  studentID_no: a,
                  first_name: b,
                  middle_name: c,
                  last_name: d,
                  course: e,
                  year_level: f,
                  date_ofbirth: g,
                  gender: h,
                  complete_address: i,
                  email_address: j,
                  mobile_number: k,
                  username: l,
                  password: m,

                },
                success: function(response) {
                  $("#message").html(response);
                    window.scrollTo(0, 0);
                  },
                  error: function(response) {
                    console.log("Failed");
       
                  }
              });
            }
        }else{
            console.log("Registration Failed: Same Username and Password");
            window.alert("Registration Failed: Same Username and Password");
        }
           
         });
      });
 </script>
</body>
 
</html>