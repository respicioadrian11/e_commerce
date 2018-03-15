var base_url = $("#base_url").val();

$(function(){

  getProducts();

  $(document).on('submit', '#frmOut', function(e){
    e.preventDefault();

    $.ajax({
      url :        base_url + 'outStock/saveProduct',
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
      url :        base_url + 'outStock/getProducts',
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

        $("#tblOut").html(html);
        $(document).ready(function(){
        $('#tblProducts').DataTable();
        });
    
      }
    })
  }

  $(document).on('click', '.btnDelete', function(){
    var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'outStock/deleteProduct',
      type:        'POST',
      data:        {'outID' : prodId},
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
      url :        base_url + 'outStock/getProduct',
      type:        'POST',
      data:        {'outID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        if (data != null) {
          $("#prodname").val(data.product_name);
          $("#prodcode").val(data.product_code);
          $("#prodstock").val(data.stock);
          $("#prodprice").val(data.price);
          $("#image").val(data.image);
          $("#outID").val(data.id);
        }
      }
    })
  });

  $(document).on('click', '#reset', function(){
    $("#prodname").val('');
    $("#prodcode").val('');
    $("#prodstock").val('');
    $("#prodprice").val('');
    $("#image").val('');
    $("#outID").val('');
  })
})