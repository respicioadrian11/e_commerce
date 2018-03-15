<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel bg">
				<div class="panel-heading orange">
					<h3 class="panel-title">Manage Transactions</h3> <a href="<?= base_url('filter');?>">Closed Transactions</a> || <a href="<?= base_url('filter/filter1');?>">On Process</a> || <a href="<?= base_url('filter/filter2');?>">Cancelled Transactions</a>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Transaction Chart</button>
				</div>
				<div class="panel-body" id="tblCons">

				</div>
			</div>
		</div>
	</div>
</div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5>Transactions</h5>
      </div>
      <div class="modal-body">
       <div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
      	<script language="JavaScript">
         	function drawChart() {
            
            	var data = new google.visualization.DataTable();
            	data.addColumn('string', 'Status');
            	data.addColumn('number', 'Percentage');
            	data.addRows([
               	['Delivered', 45.0],
               	['Cancelled', 26.8],
               	['On Process', 12.8],
               
            	]);
            
            
            	var options = {'title':'Delivered,Cancelled and On Process Transactions ',
               	'width':550,
               	'height':400};

           
            	var chart = new google.visualization.PieChart(document.getElementById('container'));
           	 chart.draw(data, options);
         	}
         	google.charts.setOnLoadCallback(drawChart);
     	 </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>