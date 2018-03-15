$(function(){

  close();

  function close(){
    $.ajax({
      url :        base_url + 'filter/close',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblclose\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Unit Price</th>" +
                   "<th>Quantity</th>" +
                   "<th>Total Price</th>" +
                   "<th>Mode</th>" +
                   "<th>Customer</th>" +
                   "<th>Username</th>" +
                   "<th>address</th>" +
                   "<th>Contact</th>" +
                   "<th>Transaction Date</th>" +
                   "<th>Status</th>" +
                   "<th></th>" +
                   "<th></th>" +
                   "</tr>" +
                   "</thead>" +
                   "<tbody>";
        if (data != null) {
          for (var i = 0; i < data.length; i++) {
            html += "<tr>" +
                    "<td>"+data[i].productname+"</td>" +
                    "<td>"+data[i].productcode+"</td>" +
                    "<td>"+data[i].price+"Php</td>" +
                    "<td>"+data[i].quantity+"</td>" +
                    "<td>"+data[i].totalprice+"Php</td>" +
                    "<td>"+data[i].mode+"</td>" +
                    "<td>"+data[i].custname+"</td>" +
                    "<td>"+data[i].username+"</td>" +
                    "<td>"+data[i].custaddress+"</td>" +
                    "<td>"+data[i].custnumber+"</td>" +
                    "<td>"+data[i].transactiondate+"</td>" +
                    "<td>"+data[i].order_status+"</td>" +
                  "<td><button class=\"btn btn-primary btnDelivered\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-check\"></i></button> " +
                     "<td><button class=\"btn btn-danger btnDelete\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-trash\"></i></button> " +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblClose").html(html);
        $(document).ready(function(){
        $('#tblclose').DataTable();
         });
      }
    })
  }
})


$(function(){

  cancel();

  function cancel(){
    $.ajax({
      url :        base_url + 'filter/cancel',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblcancel\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Unit Price</th>" +
                   "<th>Quantity</th>" +
                   "<th>Total Price</th>" +
                   "<th>Mode</th>" +
                   "<th>Customer</th>" +
                   "<th>Username</th>" +
                   "<th>address</th>" +
                   "<th>Contact</th>" +
                   "<th>Transaction Date</th>" +
                   "<th>Status</th>" +
                   "<th></th>" +
                   "<th></th>" +
                   "</tr>" +
                   "</thead>" +
                   "<tbody>";
        if (data != null) {
          for (var i = 0; i < data.length; i++) {
            html += "<tr>" +
                    "<td>"+data[i].productname+"</td>" +
                    "<td>"+data[i].productcode+"</td>" +
                    "<td>"+data[i].price+"Php</td>" +
                    "<td>"+data[i].quantity+"</td>" +
                    "<td>"+data[i].totalprice+"Php</td>" +
                    "<td>"+data[i].mode+"</td>" +
                    "<td>"+data[i].custname+"</td>" +
                    "<td>"+data[i].username+"</td>" +
                    "<td>"+data[i].custaddress+"</td>" +
                    "<td>"+data[i].custnumber+"</td>" +
                    "<td>"+data[i].transactiondate+"</td>" +
                    "<td>"+data[i].order_status+"</td>" +
                  "<td><button class=\"btn btn-primary btnDelivered\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-check\"></i></button> " +
                     "<td><button class=\"btn btn-danger btnDelete\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-trash\"></i></button> " +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblCancel").html(html);
        $(document).ready(function(){
        $('#tblcancel').DataTable();
         });
      }
    })
  }
})

$(function(){

  process();

  function process(){
    $.ajax({
      url :        base_url + 'filter/process',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblcancel\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Unit Price</th>" +
                   "<th>Quantity</th>" +
                   "<th>Total Price</th>" +
                   "<th>Mode</th>" +
                   "<th>Customer</th>" +
                   "<th>Username</th>" +
                   "<th>address</th>" +
                   "<th>Contact</th>" +
                   "<th>Transaction Date</th>" +
                   "<th>Status</th>" +
                   "<th></th>" +
                   "<th></th>" +
                   "</tr>" +
                   "</thead>" +
                   "<tbody>";
        if (data != null) {
          for (var i = 0; i < data.length; i++) {
            html += "<tr>" +
                    "<td>"+data[i].productname+"</td>" +
                    "<td>"+data[i].productcode+"</td>" +
                    "<td>"+data[i].price+"Php</td>" +
                    "<td>"+data[i].quantity+"</td>" +
                    "<td>"+data[i].totalprice+"Php</td>" +
                    "<td>"+data[i].mode+"</td>" +
                    "<td>"+data[i].custname+"</td>" +
                    "<td>"+data[i].username+"</td>" +
                    "<td>"+data[i].custaddress+"</td>" +
                    "<td>"+data[i].custnumber+"</td>" +
                    "<td>"+data[i].transactiondate+"</td>" +
                    "<td>"+data[i].order_status+"</td>" +
                  "<td><button class=\"btn btn-primary btnDelivered\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-check\"></i></button> " +
                     "<td><button class=\"btn btn-danger btnDelete\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-trash\"></i></button> " +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblProcess").html(html);
        $(document).ready(function(){
        $('#tblprocess').DataTable();
         });
      }
    })
  }
})