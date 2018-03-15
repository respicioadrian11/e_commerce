 <div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel bg">
				<div class="panel-heading  orange">
					<h3 class="panel-title" style="font-weight: bolder;">Manage Products</h3>
				</div>
				<div class="panel-body">
					<form class="form" id="frmProducts" method="post">
                        	<input type="hidden" name="prodID" id="prodID" value="">
                    	<div class="form-group">
                      		<input class="form-control" type="text" name="prodName" id="prodName" placeholder="Product Name" value="">
                     	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="text" name="prodCode" id="prodCode" value=""  placeholder="Product Code">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="text"  name="prodStock" id="prodStock" placeholder="Product Stock" value="">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="text" name="prodPrice" id="prodPrice" placeholder="Product Price" value="">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="file" name="userfile" id="userfile" size="20"/>
                    	</div>

               			 <div class="form-group" style="padding-left: 5px;">
                    		<button class="btn btn-success" type="submit" id="btnSubmit">save</button>
                    		<button class="btn btn-danger" type="button" id="reset">clear</button>
                		</div>
          			</form>
				</div>
			</div>
		</div>

		<div class="col-sm-8">
			<div class="panel bg">
				<div class="panel-heading orange">
					<h3 class="panel-title" style="font-weight: bolder;">Product List</h3>
				</div>
					<div class="panel-body" id="tblContainer">
					</div>
			</div>
		</div>
	</div>
</div>