var base_url = $("#base_url").val();

$(document).on('submit','#frmLogin',function(e){
  e.preventDefault();

  $.ajax({
      url :        base_url + 'login/userlogin',
      type:        'POST',
      data:        new FormData(this),
      contentType: false,
      cache:       false,
      processData: false,
      dataType:    'JSON',
      beforeSend: function(){

    },
    success:function(data){
      swal(data.type, data.message, data.type);
      if(data.status==0){

      }else{
       window.location.href="product/enter";
      }
    }
  })
})


