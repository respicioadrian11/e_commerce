 var base_url = $("#base_url").val();

$(function(){

  getItems();

 function getItems(){
    $.ajax({
      url :        base_url + 'cartView/getItems',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblProducts\">" +
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
                     "<td><button class=\"btn btn-danger btnCancel\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-remove-sign\"></i></button> " +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblContain").html(html);
        $(document).ready(function(){
        $('#tblProducts').DataTable();
        });
      }
    })
  }
  $(document).on('click', '.btnCancel', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'cartView/editItems',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){
      },
      success: function(data){
        swal(data.type, data.message, data.type);
        getItems();
      }
    })
  })
})

$(function(){

  getItemss();

  function getItemss(){
    $.ajax({
      url :        base_url + 'cartView/getItemss',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblProd\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Unit Price</th>" +
                   "<th>Quantity</th>" +
                   "<th>Total Price</th>" +
                   "<th>Mode</th>" +
                   "<th>Customer</th>" +
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

        $("#tblCons").html(html);
        $(document).ready(function(){
        $('#tblProd').DataTable();
        });
      }
    })
  }

  $(document).on('click', '.btnDelete', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'cartView/deleteItem',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){
        

      },
      success: function(data){
        swal(data.type, data.message, data.type);
        getItemss();
      }
    })
  });

  $(document).on('click', '.btnDelivered', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'cartView/updateItems',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){
            
      },
      success: function(data){
       swal(data.type, data.message, data.type);
        getItemss();
      }
    })
  });
})


