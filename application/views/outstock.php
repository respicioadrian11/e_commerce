 <div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel bg">
				<div class="panel-heading  orange">
					<h3 class="panel-title" style="font-weight: bolder;">Manage Out of Stock Products</h3>
				</div>
				<div class="panel-body">
					<form class="form" id="frmOut" method="post">
                        	<input type="hidden" name="outID" id="outID" value="">
                    	<div class="form-group">
                      		<input class="form-control" type="text" name="prodname" id="prodname" placeholder="Product Name" value="">
                     	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="text" name="prodcode" id="prodcode" value=""  placeholder="Product Code">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="number" min="0" step="1"  name="prodstock" id="prodstock" placeholder="Product Stock" value="">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="number" min="1" step="1" name="prodprice" id="prodprice" placeholder="Product Price" value="">
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
					<h3 class="panel-title" style="font-weight: bolder;">Out of Stock Product</h3>
				</div>
					<div class="panel-body" id="tblOut">
					</div>
			</div>
		</div>
	</div>
</div>