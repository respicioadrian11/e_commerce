var base_url = $("#base_url").val();

$(function(){

  getProducts();

  

  function getProducts(){
    $.ajax({
      url :        base_url + 'product/getProducts',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        var html = "<table class=\"table table-hover table-striped table-editable\" id=\"tblProducts\">" +
                   "<thead>" +
                   "<tr class=\"danger\">" +
                   "<th>Product Name</th>" +
                   "<th>Product Code</th>" +
                   "<th>Product Stock</th>" +
                   "<th>Product Price</th>" +
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
                    "<td>"+data[i].price+"</td>" +
                     "<td><img src=assets/images/"+data[i].image+" class='img-responsive' width='100%' height='10%' ></td>"+
                    "<td><button class=\"btn btn-primary btnAdd\" data-id=\""+data[i].id+"\"><i class=\"glyphicon glyphicon-shopping-cart\"></i></button> " +
                    "</tr>";
          }
        }
           html += "</tbody>" +
                   "</table>";

        $("#tblCont").html(html);
        $(document).ready(function(){
        $('#tblProducts').DataTable();
        });
    
      }
    })
  }

 

  $(document).on('click', '#reset', function(){
    $("#prodName").val('');
    $("#prodCode").val('');
    $("#prodStock").val('');
    $("#prodPrice").val('');
    $("#image").val('');
    $("#prodID").val('');
  })
})

 $(document).on('click', '.btnAdd', function(){
  var prodId = $(this).attr('data-id');
    $.ajax({
      url :        base_url + 'customercart/getItem',
      type:        'POST',
      data:        {'prodID' : prodId},
      dataType:    'JSON',
      beforeSend: function(){

             },
      success: function(data){
        if (data != null) {
          $("#prodname").val(data.product_name);
          $("#prodcode").val(data.product_code);
          $("#prodprice").val(data.price);
          $("#prodID").val(data.id);
        }
      }
    })
  });
 
 $(document).on('submit', '#frmCheck', function(e){
    e.preventDefault();

    $.ajax({
      url :        base_url + 'customercart/saveItem',
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
          getItem();
        }
      }
    })
  })