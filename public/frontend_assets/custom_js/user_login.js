$("#_login").on("submit",function(e){
	// alert(1);
	e.preventDefault();
	$.ajax({
		type:"post",
		url:siteUrl + "/login_user",
		data:new FormData(this),
		processData: false,
    	contentType: false,
		success:function(res){
			if(res.status_code == 200){
				window.location.href = siteUrl+"/";
				console.log('logib');			
			}else if(res.status_code == 202){
				$.each(res.error,function(key , value){
					toastr.warning(value);
				});
			}else if(res.status_code == 201){
				toastr.warning(res.message);
			}
		},error:function(e){
			console.log(e);		
		}
	});
})


$("#signup_form").on("submit",function(e){
	e.preventDefault();
	$.ajax({
		type:"post",
		url:siteUrl + "/SignUpuser",
		data:new FormData(this),
		processData: false,
    	contentType: false,
		success:function(res){
			if(res.status_code == 200){
				window.location.href = siteUrl+"/user-opt_verify/"+res.id;
			}else if(res.status_code == 202){
				$.each(res.error,function(key , value){
					console.log(value);
					toastr.warning(value);
				});
			}else if(res.status_code == 201){
				toastr.warning(res.message);
			}
		},error:function(e){
			console.log(e);		
		}
	});
})

$("#update_profile").on("submit",function(e){
	e.preventDefault();
	$.ajax({
		type:"post",
		url:siteUrl + "/update_user",
		data:new FormData(this),
		processData: false,
    	contentType: false,
		success:function(res){
			if(res.status_code == 200){
				window.location.reload();
			}else if(res.status_code == 202){
				$.each(res.error,function(key , value){
					console.log(value);
					toastr.warning(value);
				});
			}else if(res.status_code == 201){
				toastr.warning(res.message);
			}
		},error:function(e){
			console.log(e);		
		}
	});
})

$("#otp_vrify").on("submit",function(e){
	e.preventDefault();
	$.ajax({
		type:"post",
		url:siteUrl + "/verify_otp",
		data:new FormData(this),
		processData: false,
    	contentType: false,
		success:function(res){
			if(res.status_code == 200){
				window.location.href = siteUrl+"/user-login";
			}else if(res.status_code == 202){
				$.each(res.error,function(key , value){
					console.log(value);
					toastr.warning(value);
				});
			}else if(res.status_code == 201){
				toastr.warning(res.message);
			}
		},error:function(e){
			console.log(e);		
		}
	});
})

$(function() {
    $("#file").on('change',function() {
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