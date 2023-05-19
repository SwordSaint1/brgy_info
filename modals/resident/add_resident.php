<div class="modal fade" id="add_resident" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" style="min-width:92%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><b>Add Resident</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <form action="../../process/admin/add_resident.php"  enctype="multipart/form-data" method="POST">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Profile Picture:</b></span>
                 <input type="file" name="files[]" id ="files" class="form-control-lg" accept="image/png, image/gif, image/jpeg" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>First Name:</b></span>
                <input type="text" name="firstname_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Middle Name:</b></span>
                <input type="text" name="middlename_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Last Name:</b></span>
                <input type="text" name="lastname_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Suffix: (Jr. / Sr.) (Input N/A if none)</b></span>
                <input type="text" name="suffix_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
           <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Birthdate:</b></span>
                <input type="date" name="birthdate_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Age:</b></span>
                <input type="number" name="age_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Gender:</b></span>
                <select name="gender_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Civil Status:</b></span>
                <select name="civil_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
                    <option value="">Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Contact No:</b></span>
                <input type="number" name="number_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Occupation:</b></span>
                <input type="text" name="occupation_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Citizenship:</b></span>
                <input type="text" name="citizenship_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <span><b>Complete Address:</b></span>
                <input type="text" name="address_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Fully Vaccinated?</b></span>
                <select name="vaccinated_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Status</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Are you A Voters?</b></span>
                <select name="voter_add" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Status</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Register Resident">

      </div>
         </form>
    </div>
  </div>
</div>
