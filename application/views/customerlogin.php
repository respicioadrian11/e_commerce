<div class="container">
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog orange"> 
    
      <!-- Modal content-->
      <div class="modal-content"  style="margin-top:120px;">
        <h2 align="center" style="font-weight: bolder; color:orange;">Login Customer</h2>
        <div class="modal-body" >
        	<div class="col-sm-12" id="prodMessage"></div>
          <form class="form" id="formLogin" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter Username" >
             
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter password" >
       
            </div>
              <button type="submit" class="btn btn-success" id="btnSubmit"><span class="glyphicon glyphicon-off"></span> Login</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modal"><span class="glyphicon glyphicon-plus"></span>Create Account</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

 


<div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <form class="form" id="frmReg" method="POST">
          <input type="hidden" name="userID" id="userID" value="">
        <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span> Full Name</label>
              <input type="text" class="form-control" id="reg_name" name="reg_name" value="" placeholder="Enter Name" >
             
            </div>
        <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-user"></span> Address</label>
              <input type="text" class="form-control" id="address" name="address" value="" placeholder="address" >
             
            </div>
             <div class="form-group">
              <label for="Birthday"><span class="glyphicon glyphicon-user"></span> contact Number</label>
              <input type="text" class="form-control" id="contact" name="contact" value=""  placeholder="Contact Number" >
            </div>
       <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="reg_username" name="reg_username" value="" placeholder="Enter Username" >
             
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="reg_password" name="reg_password" value="" placeholder="Enter password" >
       
            </div>
              <button type="submit" class="btn btn-success" id="btnReg"><span class="glyphicon glyphicon-off"></span> Register</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>