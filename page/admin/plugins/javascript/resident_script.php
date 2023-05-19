<script type="text/javascript">
$(function(){
	search_resident();
});
const search_resident =()=>{
	$('#spinner').css('display','block');
	var fullname = document.getElementById('resident_fullname_search').value;
	$.ajax({
        url:'../../process/admin/processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_resident',
                    fullname:fullname
                },success:function(response){
                  document.getElementById('list_of_resident').innerHTML = response;
                   $('#spinner').fadeOut();
                }
    });
}

const get_resident_details =(param)=>{
	var data = param.split('~!~');
    var id = data[0];
	var first_name = data[1];
	var middle_name = data[2];
	var last_name = data[3];
	var suffix = data[4];
	var Birthdate = data[5];
	var age = data[6];
	var gender = data[7];
	var contact_no = data[8];
	var complete_address = data[9];
	var occupation = data[10];
	var citizenship = data[11];
	var civil_status = data[12];
	var vaccinated = data[13];
	var voters = data[14];
	var image = data[15];
	var full_name = data[16];
	var image = '../../process/admin/' + data[15];

	$('#id_update').val(id);
	$('#firstname_update').val(first_name);
	$('#middlename_update').val(middle_name);
	$('#lastname_update').val(last_name);
	$('#suffix_update').val(suffix);
	$('#birthdate_update').val(Birthdate);
	$('#age_update').val(age);
	$('#gender_update').val(gender);
	$('#civil_update').val(civil_status);
	$('#number_update').val(contact_no);
	$('#occupation_update').val(occupation);
	$('#citizenship_update').val(citizenship);
	$('#address_update').val(complete_address);
	$('#vaccinated_update').val(vaccinated);
	$('#voter_update').val(voters);
	$('#fname').val(full_name);
	$('#preview_profile_img').attr('src',image);
}	

const delete_resident =()=>{
	var id = document.getElementById('id_update').value;
	$.ajax({
	        url:'../../process/admin/processor.php',
	        type:'POST',
	        cache:false,
	        data:{
	            method:'delete_resident',
	            	id:id
	        },success:function(response){    
	            
	            if(response == 'success'){
	                     Swal.fire({
	                      icon: 'info',
	                      title: 'Succesfully Deleted !!!',
	                      text: 'Information',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	                    $('#update_resident').modal('hide');
	          			search_resident();
	            }else{
	                    Swal.fire({
	                      icon: 'error',
	                      title: 'Error !!!',
	                      text: 'Error',
	                      showConfirmButton: false,
	                      timer : 1000
	                    });
	          			$('#update_resident').modal('hide');
	          			search_resident();           
	                }
	        }
	    });
}

const relase =()=>{
	var documents = document.getElementById('document_update').value;
	var fname = document.getElementById('fname').value;
	var address = document.getElementById('address_update').value;
	if(documents == ''){
	    Swal.fire({
	        icon: 'info',
	        title: 'Please Select Type of Document !!!',
	        text: 'Information',
	        showConfirmButton: false,
	        timer : 1000
	    });              
	}else{
		if (documents == 'cert') {
			window.open('certificate.php?fname='+fname,'_blank');
		}else if(documents == 'residency'){
			window.open('recidency.php?fname='+fname+'&&address='+address,'_blank');
		}else if (documents == 'indigency') {
			window.open('indigency.php?fname='+fname,'_blank');
		}else{
			window.open('clearance.php?fname='+fname,'_blank');
		}
	}
}

const print_records =()=>{
	window.open('records.php?_blank');
}
</script>