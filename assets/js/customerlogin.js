var base_url = $("#base_url").val();

$(document).on('submit','#formLogin',function(e){
  e.preventDefault();

  $.ajax({
      url :        base_url + 'customerlogin/userlogin',
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
       window.location.href="customerCart/enter";
      }
    }
  })
})


$(document).on('submit','#frmReg',function(e){
  e.preventDefault();

  $.ajax({
      url :        base_url + 'customerLogin/registration',
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
        if (data.status == 1) {
          $('#reg_name').val('');
          $('#address').val('');
          $('#contact').val('');
          $('#reg_username').val('');
          $('#reg_password').val('');
      }else{
        
      }
    }
  })
})

