<div class="modal fade" id="update_resident" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" style="min-width:92%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><b>Resident Details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <form action="../../process/admin/update_resident.php"  enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-lg-4">
                   <img src="" id="preview_profile_img" width="100px" height="100px" > 
                   <input type="hidden" id="id_update" name="id_update">
                   <input type="hidden" id="fname">
                </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Profile Picture:</b></span>
                 <input type="file" name="files_update" id ="files_update" class="form-control-lg" accept="image/png, image/gif, image/jpeg">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>First Name:</b></span>
                <input type="text" name="firstname_update" id="firstname_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Middle Name:</b></span>
                <input type="text" name="middlename_update" id="middlename_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Last Name:</b></span>
                <input type="text" name="lastname_update" id="lastname_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Suffix: (Jr. / Sr.) (Input N/A if none)</b></span>
                <input type="text" name="suffix_update" id="suffix_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
           <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Birthdate:</b></span>
                <input type="date" name="birthdate_update" id="birthdate_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Age:</b></span>
                <input type="number" name="age_update" id="age_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Gender:</b></span>
                <select name="gender_update" id="gender_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Civil Status:</b></span>
                <select name="civil_update" id="civil_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
                    <option value="">Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Contact No:</b></span>
                <input type="number" name="number_update" id="number_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Occupation:</b></span>
                <input type="text" name="occupation_update" id="occupation_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Citizenship:</b></span>
                <input type="text" name="citizenship_update" id="citizenship_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Complete Address:</b></span>
                <input type="text" name="address_update" id="address_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off" required>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Fully Vaccinated?</b></span>
                <select name="vaccinated_update" id="vaccinated_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Status</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Are you A Voters?</b></span>
                <select name="voter_update" id="voter_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" required>
                    <option value="">Select Status</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <span><b>Document:(Only for Releasing of Document)</b></span>
                <select name="document_update" id="document_update" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;">
                    <option value="">Select Type of Document</option>
                    <option value="cert">Barangay Certificate</option>
                    <option value="residency">Barangay Residency</option>
                    <option value="indigency">Barangay Indigency</option>
                    <option value="clearance">Barangay Clearance</option>
                </select>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-12">
                <a href="#" class="btn btn-danger" onclick="delete_resident()">Delete Data</a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <p style="text-align: right;">
                <a href="#" class="btn btn-info" onclick="relase()">Release Document</a>
                </p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="float-right">
                   <input type="submit" class="btn btn-primary" name="submit" value="Update Resident Details">
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
