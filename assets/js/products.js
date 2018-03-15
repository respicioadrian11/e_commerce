var base_url = $("#base_url").val();

$(function(){

  getProducts();

  $(document).on('submit', '#frmProducts', function(e){
    e.preventDefault();

    $.ajax({
      url :        base_url + 'product/saveProduct',
      type:        'POST',
      data:        new FormData(this),
      contentType: false,
      cache:       false,
      processData: false,
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
       swal(data.type, data.message, data.type);
        if (data.status == 1) {
          $('#reset').trigger('click');
          getProducts();
        }
      }
    })
  })

  function getProducts(){
    $.ajax({
      url :        base_url + 'product/getProducts',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped dt-responsive\" id=\"tblProducts\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Stock</th>" +
                   "<th>Price</th>" +
                   "<th>Image</th>" +
                   "<th>Action</th>" +
                   "</tr>" +
                   "</thead>" +
                   "<tbody>";
        if (data != null) {
          for (var i = 0; i < data.length; i++) {
            html += "<tr>" +
                    "<td>"+data[i].product_name+"</td>" +
                    "<td>"+data[i].product_code+"</td>" +
                    "<td>"+data[i].stock+"</td>" +
                    "<td>"+data[i].price+"Php</td>" +
                    "<td><img src=assets/images/"+data[i].image+" class='img-responsive' width='30%' height=10%' ></td>"+
                    "<td><button class=\"btn btn-primary btnEdit\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-edit\"></i></button> " +
                    "<button class=\"btn btn-danger btnDelete\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-trash\"></</button></td>" +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblContainer").html(html);
        $(document).ready(function(){
        $('#tblProducts').DataTable();
        });
    
      }
    })
  }

  $(document).on('click', '.btnDelete', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'product/deleteProduct',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        swal(data.type, data.message, data.type);
        getProducts();
      }
    })
  });

  $(document).on('click', '.btnEdit', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'product/getProduct',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        if (data != null) {
          $("#prodName").val(data.product_name);
          $("#prodCode").val(data.product_code);
          $("#prodStock").val(data.stock);
          $("#prodPrice").val(data.price);
          $("#userfile").val(data.image);
          $("#prodID").val(data.id);
        }
      }
    })
  });

  $(document).on('click', '#reset', function(){
    $("#prodName").val('');
    $("#prodCode").val('');
    $("#prodStock").val('');
    $("#prodPrice").val('');
    $("#userfile").val('');
    $("#prodID").val('');
  })
})


$(function(){

  getProducts();
function getProducts(){
    $.ajax({
      url :        base_url + 'product/getProducts',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table- dt-reponsive\" id=\"tblProd\">" +
                   "<thead>" +
                   "<tr class=\"orange\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Stock</th>" +
                   "<th>Price</th>" +
                   "<th>Image</th>" +
                   "</tr>" +
                   "</thead>" +
                   "<tbody>";
        if (data != null) {
          for (var i = 0; i < data.length; i++) {
            html += "<tr>" +
                    "<td>"+data[i].product_name+"</td>" +
                    "<td>"+data[i].product_code+"</td>" +
                    "<td>"+data[i].stock+"</td>" +
                    "<td>"+data[i].price+"Php</td>" +
                    "<td><img src=assets/images/"+data[i].image+" class='img-responsive' width='30%' height=10%' ></td>"+
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblContainerhome").html(html);
        $(document).ready(function(){
        $('#tblProd').DataTable();

        });
    
      }
    })
  }
})