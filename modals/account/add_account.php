<div class="modal fade bd-example-modal-xl" id="add_account" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <b>Add Account</b>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4">
                <span><b>Fullname:</b></span>
                <input type="text" id="fullname_add_account" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off">
            </div>
            <div class="col-4">
                 <span><b>Username:</b></span>
                 <input type="text" id="username_add_account" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off">
            </div>
            <div class="col-4">
                 <span><b>Password:</b></span>
                 <input type="password" id="password_add_account" class="form-control" style="height:45px; border: 1px solid black; font-size: 25px;" autocomplete="off">
            </div>
        </div> 
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <a href="#" class="btn btn-primary" onclick="save_account()">Register Account</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>