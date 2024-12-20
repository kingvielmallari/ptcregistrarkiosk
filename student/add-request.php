

<head>




</head>

<?php include('main_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
         <?php include('left_sidebar/sidebar.php');?>
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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> Add Request </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Request</li>
                                    </ol>
                                </nav>
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
                                            <form id="validationform" name="docu_forms" data-parsley-validate="" novalidate="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file"></i> Request Info</label>
                                                </div>
                                                <?php 

                                                  function createRandomcnumber() {
                                                      $chars = "003232303232023232023456789";
                                                      srand((double)microtime()*1000000);
                                                      $i = 0;
                                                      $control = '' ;
                                                      while ($i <= 3) {

                                                        $num = rand() % 33;

                                                        $tmp = substr($chars, $num, 1);

                                                        $control = $control . $tmp;

                                                        $i++;

                                                      }
                                                      return $control;
                                                     }
                                                     $cNumber ='PTC-'.createRandomcnumber();


                                                ?>
                                                <script>
                                                document.addEventListener('DOMContentLoaded', () => {
                                                    const documentNameSelect = document.getElementById('document_name');
                                                    const controlNoInput = document.querySelector('input[name=control_no]');

                                                    documentNameSelect.addEventListener('change', () => {
                                                        const selectedOption = documentNameSelect.value;
                                                        let prefix = '';

                                                        switch (selectedOption) {
                                                            case 'CTC of Certificate of Registration':
                                                                prefix = 'CTCR-';
                                                                break;
                                                            case 'CTC of Grades':
                                                                prefix = 'CTCG-';
                                                                break;
                                                            case 'Transcript of Records':
                                                                prefix = 'TOR-';
                                                                break;
                                                            case 'Certificate of Registration':
                                                                prefix = 'COR-';
                                                                break;
                                                            case 'Certificate of Grades':
                                                                prefix = 'COG-';
                                                                break;
                                                            case 'Honorable Dismissal':
                                                                prefix = 'HD-';
                                                                break;
                                                            default:
                                                                prefix = 'CTRL-';
                                                        }

                                                        controlNoInput.value = prefix + createRandomcnumber() + '<?= $_SESSION['student_id']; ?>';
                                                    });

                                                    function createRandomcnumber() {
                                                        const chars = "003232303232023232023456789";
                                                        let control = '';
                                                        for (let i = 0; i < 3; i++) {
                                                            const num = Math.floor(Math.random() * chars.length);
                                                            control += chars.charAt(num);
                                                        }
                                                        return control;
                                                    }
                                                });
                                                </script>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Queue No.</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" value="<?= $cNumber.''.$_SESSION['student_id']; ?>" name="control_no" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                 <?php
                                                      $conn = new class_model();
                                                      $getstudno = $conn->student_profile($student_id);
                                                   ?>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  name="studentID_no" value="<?= $getstudno['studentID_no']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                     
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Email Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  name="email_address" value="<?= $getstudno['email_address']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Document Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <select data-parsley-type="alphanum" type="text" name="document_name" id="document_name" required="" placeholder="" class="form-control">
                                                        
                                                        <option value="">&larr;Select Document &rarr;</option>
                                                        <option value="CTC of Certificate of Registration">CTC of Certificate of Registration</option>
                                                        <option value="CTC of Grades">CTC of Grades</option>
                                                        <option value="Transcript of Records">Transcript of Records</option>
                                                        <option value="Certificate of Registration">Certificate of Registration</option>
                                                        <option value="Certificate of Grades">Certificate of Grades</option>
                                                        <option value="Honorable Dismissal">Honorable Dismissal</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                 <!-- <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="digits" type="number" name="no_ofcopies" required="" placeholder="" class="form-control" min="1" max="5">
                                                    </div>
                                                </div> -->
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                                                        <div class="input-group">
                                                                                                            <input data-parsley-type="digits" type="number" name="no_ofcopies" required="" placeholder="" class="form-control" min="1" max="5" value="1" id="no_ofcopies" readonly>
                                                                                                            <div class="input-group-append">
                                                                                                                <button type="button" class="btn btn-outline-secondary" id="decrement" style="color: gray;">-</button>
                                                                                                                <button type="button" class="btn btn-outline-secondary" id="increment" style="color: gray;">+</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                    <script>
                                                                                                    document.addEventListener('DOMContentLoaded', () => {
                                                                                                        const incrementButton = document.getElementById('increment');
                                                                                                        const decrementButton = document.getElementById('decrement');
                                                                                                        const noOfCopiesInput = document.getElementById('no_ofcopies');

                                                                                                        incrementButton.addEventListener('click', () => {
                                                                                                            let currentValue = parseInt(noOfCopiesInput.value);
                                                                                                            if (currentValue < 5) {
                                                                                                                noOfCopiesInput.value = currentValue + 1;
                                                                                                            }
                                                                                                            incrementButton.style.backgroundColor = '#F5F5F7';
                                                                                                            incrementButton.style.color = 'white';
                                                                                                            setTimeout(() => {
                                                                                                                incrementButton.style.backgroundColor = '';
                                                                                                                incrementButton.style.color = 'gray';
                                                                                                            }, 200);
                                                                                                        });

                                                                                                        decrementButton.addEventListener('click', () => {
                                                                                                            let currentValue = parseInt(noOfCopiesInput.value);
                                                                                                            if (currentValue > 1) {
                                                                                                                noOfCopiesInput.value = currentValue - 1;
                                                                                                            }
                                                                                                            decrementButton.style.backgroundColor = '#F5F5F7';
                                                                                                            decrementButton.style.color = 'white';
                                                                                                            setTimeout(() => {
                                                                                                                decrementButton.style.backgroundColor = '';
                                                                                                                decrementButton.style.color = 'gray';
                                                                                                            }, 200);
                                                                                                        });
                                                                                                    });
                                                                                                    </script>

                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Request</label>
                                                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                                                            <?php date_default_timezone_set('Asia/Manila'); ?>
                                                                                                            <input data-parsley-type="alphanum"  type="text" name="date_request" required="" placeholder="" class="form-control" value="<?php echo date('M d Y h:i A');?>" readonly>
                                                                                                        </div>
                                                                                                    </div>

<!--                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Releasing</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="date" name="date_releasing" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
 -->
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <input type="text" name="student_id" value="<?= $_SESSION['student_id'];?>" class="form-control" hidden>
                                                        <button type="button" class="btn btn-space btn-primary" id="add-request"style="background-color:#1269AF !important; color:white">Submit</button>
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
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>

<!-- JavaScript for Print functionality -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    let btn = document.querySelector('#add-request');
    btn.addEventListener('click', () => {

        const control_no = document.querySelector('input[name=control_no]').value;
        const studentID_no = document.querySelector('input[name=studentID_no]').value;
        const email_address = document.querySelector('input[name=email_address]').value;
        const document_name = $('#document_name option:selected').val();
        const no_ofcopies = document.querySelector('input[name=no_ofcopies]').value;
        const date_request = document.querySelector('input[name=date_request]').value;
        const student_id = document.querySelector('input[name=student_id]').value;

        var data = new FormData(this.form);

        data.append('control_no', control_no);
        data.append('studentID_no', studentID_no);
        data.append('email_address', email_address);
        data.append('document_name', document_name);
        data.append('no_ofcopies', no_ofcopies);
        data.append('date_request', date_request);
        data.append('student_id', student_id);

        if (control_no === '' || studentID_no ==='' || email_address ==='' || document_name ==='' || no_ofcopies ==='' || date_request ===''){
            $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
        } else {
            $.ajax({
                url: '../init/controllers/add_request.php',
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                async: false,
                cache: false,
                success: function(response) {
                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    $("#modalControlNo").text(control_no);
                    $("#modalStudentID").text(studentID_no);
                    $("#modalEmail").text(email_address);
                    $("#modalDocumentName").text(document_name);
                    $("#modalCopies").text(no_ofcopies);
                    $("#modalDateRequested").text(date_request);  
                    $("#requestDetailsModal").modal("show");
			
			 $('#requestDetailsModal').on('hidden.bs.modal', function () {
                    window.location.href = "request-list.php";
        });
                },
               
                error: function(response) {
                    console.log("Failed");
                }
            });
        }
    });

document.getElementById('printButton').addEventListener('click', function() {
    // Gather the form data
    const control_no = document.querySelector('input[name=control_no]').value;
    const studentID_no = document.querySelector('input[name=studentID_no]').value;
    const email_address = document.querySelector('input[name=email_address]').value;
    const document_name = $('#document_name option:selected').val();
    const no_ofcopies = document.querySelector('input[name=no_ofcopies]').value;
    const date_request = document.querySelector('input[name=date_request]').value;
    const student_id = document.querySelector('input[name=student_id]').value;

    // Prepare the data to be sent to print.php
    const data = new FormData();
    data.append('control_no', control_no);
    data.append('studentID_no', studentID_no);
    data.append('email_address', email_address);
    data.append('document_name', document_name);
    data.append('no_ofcopies', no_ofcopies);
    data.append('date_request', date_request);
    data.append('student_id', student_id);

    // Send the data to print.php
    fetch('/print.php', {
        method: 'POST',
        body: data // Send form data
    })
    .then(response => response.text())
    .then(data => {
        alert('Assessment Slip Printed Successfully!\nPlease Proceed to Cashier for Payment.');
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error sending print job.');
  })


});
})
</script>




<div class="modal fade" id="requestDetailsModal" tabindex="-1" role="dialog" aria-labelledby="requestDetailsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestDetailsLabel">Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Control No:</strong> <span id="modalControlNo"></span></p>
        <p><strong>Student ID:</strong> <span id="modalStudentID"></span></p>
        <p><strong>Email Address:</strong> <span id="modalEmail"></span></p>
        <p><strong>Document Name:</strong> <span id="modalDocumentName"></span></p>
        <p><strong>Number of Copies:</strong> <span id="modalCopies"></span></p>
        <p><strong>Date Requested:</strong> <span id="modalDateRequested"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="printButton">Print</button>
      </div>
    </div>
  </div>
</div>

</body>
 
</html>
<!-- <script>
// document.addEventListener('DOMContentLoaded', () => {
//     // Get the select element
//     const documentSelect = document.getElementById('document_name');
    
//     // Fetch existing requests
//     fetch('../init/controllers/get_pending_requests.php?student_id=<?= $_SESSION['student_id'] ?>')
//         .then(response => response.json())
//         .then(pendingRequests => {
//             // Get all options
//             const options = documentSelect.options;
            
//             // Remove options that are already pending
//             for(let i = options.length-1; i >= 0; i--) {
//                 const docName = options[i].value;
//                 if(pendingRequests.includes(docName)) {
//                     options[i].remove();
//                 }
                
//             }
//         });
// });
// </script> -->