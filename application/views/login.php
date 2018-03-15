<div class="container ">
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog orange"> 
    
      <!-- Modal content-->
      <div class="modal-content"  style="margin-top:120px;">
         <h2 align="center" style="font-weight: bolder; color: orange">Login Admin</h2>
        <div class="modal-body" >
        	<div class="col-sm-12" id="prodMessage"></div>
          <form class="form" id="frmLogin" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter Username" >
             
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter password" >
       
            </div>
              <button type="submit" class="btn btn-success" id="btnSubmit"><span class="glyphicon glyphicon-off"></span> Login</button>
              
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

 


