$(document).ready(function() {
    $("#basic-form").validate({
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
      rules: {
        name : {
          required: true,
          minlength: 3
        },
        no : {
          required: true,
          maxlength:10,
          number: true
         
        },
        email: {
          required: true,
          email: true
        },
        dat:{
          
           required: true
            
          },
        time:
        {
          required:true
        },
        area : {
          required: true,
          minlength: 3
        },
        city : {
          required: true,
          minlength: 3
        },
        state : {
          required: true,
          minlength: 3
        },
        code:
        {
          required:true,
          maxlength:6
        },
        

      },
      messages : {
        name: {
           required:"Name is required",
           minlength: "Name should be at least 3 characters"
        },
        no: {
          required: "Mobile Number is required"
        },
        email: {
          required: "Email is required",
          email: "The email should be in the format: abc@domain.tld"
        },
        dat: 
        {
          required: "Date is required"
        },
        time:{
          required:"Please Select Time", 
        },
        city:{
          required:"City is required", 
        },
        state:{
          required:"state is required", 
        },
        area:{
          required:"Area is required", 
        },
        code:{
          required:"Code is Required"

        }
       
      },

     
    });
  });