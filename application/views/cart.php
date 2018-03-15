 <div class="container">
	<iv class="row">
		<div class="col-sm-6">
			<div class="panel bg">
				<div class="panel-heading orange">
					<h3 class="panel-title" style="font-weight: bolder;">Ordering Area</h3>
				</div>
				<div class="panel-body" id="tblCont">

				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel bg">
				<div class="panel-heading orange">
					<h3 class="panel-title" style="font-weight: bolder;">Add Your Item Here</h3>
				</div>
				<div class="panel-body">
          <h5 align="center" style="font-weight: bolder;">Please Bring Valid Id Upon Claiming Your Item </h5>
          <form class="form" id="frmCheck">
                    <input type="hidden" id="prodID" name="prodID">
                  <div class="form-group">
                    <input type="text" class="form-control" name="prodname" id="prodname" placeholder="Product Name" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="prodcode" id="prodcode" placeholder="Code" required="">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" name="prodprice" id="prodprice" placeholder="Price" required="">
                  </div>
                   <div class="form-group">
                    <input type="number" min="0" step="1" max="100" class="form-control" name="quantity" id="quantity" placeholder="Quantity" required="">
                  </div>
                   <div class="form-group">
                    <select name="option" id="option" class="form-control">
                      <option>Delivery</option>
                      <option>Pick Up</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Fullname" required="" value="<?php echo $this->session->userdata('name');?>" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username"  required="" value="<?php echo $this->session->userdata('usernamec');?>" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="" value="<?php echo $this->session->userdata('address');?>">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="number" id="number" placeholder="Contact Number" required="" value="<?php echo $this->session->userdata('contact');?>">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success" id="btnCheck" name="btnCheck">Check Out</button>
                 </div>
              </div>
          </form>
				</div>
			</div>
		</div>
	</div>
</div>


 


  <!-- Modal -->
 
            
        