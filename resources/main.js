/**
 * edit profile
 */
$('#edit_profile_btn').click(function() {
    var username = $('#input_user_name').val();
    var address = $('#input_user_address').val();
    var contact = $('#input_user_contact').val();
    $.ajax({
        type: 'POST',
        url: '../includes/process.php',
        data: { 
            username: username,
            id: 1,
            address:address,
            contact:contact },
        success: function(response) {
            $('#result').html(response);
        }
    });
});
/**
 * add skills on profile
 */
 $('#add_skill_btn').click(function() {
    var name = $('#input_skill').val();
    $.ajax({
        type: 'POST',
        url: '../includes/process.php',
        data: { 
            skill:'txt',
            name:name,
            id:'1' },
        success: function(response) {
            $('#result').html(response);
        }
    });
});
/**
 * add work on profile
 */
 $('#add_work_btn').click(function() {
    var work = $('#input_work').val();
    var files = $('#file')[0].files;
    // Check file selected or not
    if(files.length > 0 ){
        //append to form data
        var formData = new FormData();
        formData.append('file',files[0]);
        formData.append('work',work);
        formData.append('id','1');
        $.ajax({
            url: '../includes/process.php',
            type: 'post',
            data:formData,
            contentType: false,
            processData: false,
            success: function(response){
                $('#result').html(response);
            }
        });
    }
});



$(document).ready(function(){   
    alert("text");            
    $.ajax({
    type: "POST",
    dataType: "json",
    url: '../includes/process.php',
    data: {action: "load"},
        success: function (response){ 
            $('#id').html(response);
        }
    });
});





/***
 * <script type="text/javascript">  
      $(document).ready(function(){  
           load_data();  
           $('#action').val("Insert");  
           function load_data()  
           {  
                var action = "Load";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#user_table').html(data);  
                     }  
                });  
           }  
           $('#user_form').on('submit', function(event){  
                event.preventDefault();  
                var firstName = $('#first_name').val();  
                var lastName = $('#last_name').val();  
                var extension = $('#user_image').val().split('.').pop().toLowerCase();  
                if(extension != '')  
                {  
                     if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                     {  
                          alert("Invalid Image File");  
                          $('#user_image').val('');  
                          return false;  
                     }  
                }  
                if(firstName != '' && lastName != '')  
                {  
                     $.ajax({  
                          url:"action.php",  
                          method:"POST",  
                          data:new FormData(this),  
                          contentType:false,  
                          processData:false,  
                          success:function(data)  
                          {  
                               alert(data);  
                               $('#user_form')[0].reset();  
                               load_data();  
                          }  
                     })  
                }  
                else  
                {  
                     alert("Both Fields are Required");  
                }  
           });  
      });  
 </script>  
 */
