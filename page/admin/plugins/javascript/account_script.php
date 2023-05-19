<script type="text/javascript">
$(function(){
    search_account();
});

const search_account =()=>{
	$('#spinner').css('display','block');
	var fullname = document.getElementById('account_fullname_search').value;
	$.ajax({
        url:'../../process/admin/processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_account',
                    fullname:fullname
                },success:function(response){
                  document.getElementById('list_of_accounts').innerHTML = response;
                   $('#spinner').fadeOut();
                }
    });
}

const save_account =()=>{
	var fullname = document.getElementById('fullname_add_account').value;
	var username = document.getElementById('username_add_account').value;
	var password = document.getElementById('password_add_account').value;

	if (fullname == '') {
			Swal.fire({
	            icon: 'info',
	            title: 'Please Input Fullname !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else if(username == ''){
			Swal.fire({
	            icon: 'info',
	            title: 'Please Input Username !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else if(password == ''){
			Swal.fire({
	            icon: 'info',
	            title: 'Please Password !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else{
		$.ajax({
	        url:'../../process/admin/processor.php',
	        type:'POST',
	        cache:false,
	        data:{
	            method:'add_account',
	            	fullname:fullname,
					username:username,
					password:password
	        },success:function(response){    
	            
	            if (response == 'success') {
	                    Swal.fire({
	                      icon: 'success',
	                      title: 'Succesfully Recorded!!!',
	                      text: 'Success',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                    $("#fullname_add_account").val('');
	          			$("#username_add_account").val('');
	          			$("#password_add_account").val('');
	          			$('#add_account').modal('hide');
	          			search_account();
	            }else if(response == 'duplicate'){
	                     Swal.fire({
	                      icon: 'info',
	                      title: 'Duplicate Data !!!',
	                      text: 'Information',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                    $("#fullname_add_account").val('');
	          			$("#username_add_account").val('');
	          			$("#password_add_account").val('');
	          			$('#add_account').modal('hide');
	          			search_account();
	            }else{
	                    Swal.fire({
	                      icon: 'error',
	                      title: 'Error !!!',
	                      text: 'Error',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                    $("#fullname_add_account").val('');
	          			$("#username_add_account").val('');
	          			$("#password_add_account").val('');
	          			$('#add_account').modal('hide');
	          			search_account();       
	                }
	        }
	    });
	}
}

const get_account_details =(param)=>{
	var data = param.split('~!~');
    var id = data[0];
    var full_name = data[1];
    var username = data[2];
    var password = data[3];

    document.getElementById('id_account').value = id;
    document.getElementById('fullname_update_account').value = full_name;
	document.getElementById('username_update_account').value = username;
	document.getElementById('password_update_account').value = password;
}

const update_account =()=>{
	var id = document.getElementById('id_account').value;
	var fullname = document.getElementById('fullname_update_account').value;
	var username = document.getElementById('username_update_account').value;
	var password = document.getElementById('password_update_account').value;
	
	if (fullname == '') {
			Swal.fire({
	            icon: 'info',
	            title: 'Please Input Fullname !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else if(username == ''){
			Swal.fire({
	            icon: 'info',
	            title: 'Please Input Username !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else if(password == ''){
			Swal.fire({
	            icon: 'info',
	            title: 'Please Password !!!',
	            text: 'Information',
	            showConfirmButton: false,
	            timer : 1000
	        });
	}else{
		$.ajax({
	        url:'../../process/admin/processor.php',
	        type:'POST',
	        cache:false,
	        data:{
	            method:'update_account',
	            	id:id,
					fullname:fullname,
					username:username,
					password:password
	        },success:function(response){    
	            
	            if (response == 'success') {
	                    Swal.fire({
	                      icon: 'success',
	                      title: 'Succesfully Updated !!!',
	                      text: 'Success',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	          			$('#edit_account').modal('hide');
	          			search_account();
	            }else if(response == 'duplicate'){
	                     Swal.fire({
	                      icon: 'info',
	                      title: 'Duplicate Data !!!',
	                      text: 'Information',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                   $('#edit_account').modal('hide');
	          		   search_account();
	            }else{
	                    Swal.fire({
	                      icon: 'error',
	                      title: 'Error !!!',
	                      text: 'Error',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                    $('#edit_account').modal('hide');
	          			search_account();        
	                }
	        }
	    });
	}
}

const delete_account =()=>{
	var id = document.getElementById('id_account').value;
	$.ajax({
	        url:'../../process/admin/processor.php',
	        type:'POST',
	        cache:false,
	        data:{
	            method:'delete_account',
	            	id:id
	        },success:function(response){    
	            
	            if (response == 'success') {
	                    Swal.fire({
	                      icon: 'info',
	                      title: 'Succesfully Deleted !!!',
	                      text: 'Information',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	          			$('#edit_account').modal('hide');
	          			search_account(); 
	            }else{
	                    Swal.fire({
	                      icon: 'error',
	                      title: 'Error !!!',
	                      text: 'Error',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	          			$('#edit_account').modal('hide');
	          			search_account();           
	                }
	        }
	    });
}
</script>