 <div class="container">
	<div class="row">
		<div class="col-sm-3">
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
                      		<input class="form-control" type="number" min="1" step="1"  name="prodStock" id="prodStock" placeholder="Product Stock" value="">
                    	</div>
                    	<div class="form-group">
                      		<input class="form-control" type="number" min="1" step="1" name="prodPrice" id="prodPrice" placeholder="Product Price" value="">
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

		<div class="col-sm-9">
			<!--------<a href="<base_url('excel/export');?>"  class="btn btn-info"  style="margin-bottom: 5px;">Export to Excel</a>-->
			<form method="POST" action="<?=base_url();?>excel/action" style="margin-bottom: 5px;">
				<button type="submit" name="export" class="btn btn-info">Export to Excel</button>
			</form>
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


