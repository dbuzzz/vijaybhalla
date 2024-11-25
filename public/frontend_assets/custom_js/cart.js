

$('#newsLetter').on('submit',function(e){
      e.preventDefault();  
      $.ajaxSetup({
                  headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });
      $.ajax({    
         url:siteUrl +'/saveNewsletter',      
         type:'post',      
         data:new FormData(this),      
         dataType:'json', 
         contentType:false,
         processData: false,    
         success:function(res){
         if(res.status_code == 200){
            toastr.success(res.message);
            $("#newsLetter").trigger("reset");
         }else if(res.status_code == 301){
            $.each(res.message,function(key , value){
               toastr.warning(value);
            });
         }else if(res.status_code == 201){
            toastr.warning(res.message);
         }
      },error:function(e){
         console.log(e);       
      }
      })
   });

// $('#contactform').on('submit',function(e){
//       e.preventDefault();  
//       $.ajaxSetup({
//                   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
//               });
//       $.ajax({    
//          url:siteUrl +'/savecontactform',      
//          type:'post',      
//          data:new FormData(this),      
//          dataType:'json', 
//          contentType:false,
//          processData: false,    
//          success:function(res){
//          if(res.status_code == 200){
//             toastr.success(res.message);
//             $("#contactform").trigger("reset");
//          }else if(res.status_code == 301){
//             $.each(res.message,function(key , value){
//                toastr.warning(value);
//             });
//          }else if(res.status_code == 201){
//             toastr.warning(res.message);
//          }
//       },error:function(e){
//          console.log(e);       
//       }
//       })
//    });

$("#contactUs").on("submit",function(e){
  e.preventDefault(); 
  $.ajaxSetup({
        headers: { 'X-CSRF-Token': $('meta[name=_token]').attr('content') }
    });
    $.ajax({ 
        type:"post",
        url:siteUrl +'/savecontactform',
        data:new FormData(this),
        processData: false, 
        contentType: false, 
        success:function(res){
            if(res.status_code == 200){
                toastr.success(res.message);
                $("#contactform").trigger("reset");
            }else if(res.status_code == 301){
                $.each(res.message,function(key , value){
                    toastr.warning(value);
                });
            }else if(res.status_code == 201){
                toastr.warning(res.message);
            }
        },error:function(e){
            console.log(e);      
        }
    });
});

$('#applyForJob').on('submit',function(e){
      e.preventDefault();  
      $.ajaxSetup({
                  headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });
      $.ajax({    
         url:siteUrl +'/saveapplyForJob',      
         type:'post',      
         data:new FormData(this),      
         dataType:'json', 
         contentType:false,
         processData: false,    
         success:function(res){
         if(res.status_code == 200){
            toastr.success(res.message);
            $("#applyForJob").trigger("reset");
         }else if(res.status_code == 301){
            $.each(res.message,function(key , value){
               toastr.warning(value);
            });
         }else if(res.status_code == 201){
            toastr.warning(res.message);
         }
      },error:function(e){
         console.log(e);       
      }
      })
   });


$(document).on("click",".icon", function(e){ 
    if ($(this).hasClass("fa fa-fw fa-eye-slash")) {
        $(this).removeClass('fa fa-fw fa-eye-slash');
        $(this).addClass('fa fa-fw fa-eye');
        $("#"+$(this).attr('data-ic')).attr("type", "text");
    } else {
        $(this).removeClass('fa fa-fw fa-eye');
        $(this).addClass('fa fa-fw fa-eye-slash');
        $("#"+$(this).attr('data-ic')).attr("type", "password");
    }
    
})

$(function() {
    $("#aadhar_front").on('change',function() {
        $('#image').attr('src','');
        if (this.files && this.files[0]) {
            position = 0 ;
            const image_name = [];
            const image_type = [];
            
            for (var i = 0; i < this.files.length; i++) {
            var reader = new FileReader();
            
            
            image_name.push(this.files[i].name);
            image_type.push(this.files[i].type.split('/')[1]);
            
            console.log(image_type[position]);
            console.log(this.files.length);
            console.log(this.files[i].type.split('/')[1]);
            reader.onload = function(e) {
                
                    $('#image').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[i]);
            }
        }
    });
});
