
        function validate()
        {  
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var is_email = re.test(document.form.email.value);  
            if(document.form.user_type.value == "-1" )
            {
                document.getElementById("type_error").style.display="block";
            }
            
            if(document.form.question.value == "1" )
            {
                document.getElementById("qua_error").style.display="block";
            }
            if(document.form.first_name.value == "")
            {
                document.form.first_name.focus();
                document.getElementById('first-name-error').style.display="block";
            }
            if(document.form.username.value == "")
            {
                document.form.username.focus();
                document.getElementById('username-error').style.display="block";
            }
            if(document.form.last_name.value == "")
            {
                document.form.last_name.focus();
                document.getElementById('last-name-error').style.display="block";
            }
            if(document.form.txtmobileNumber.value == "")
            {
                document.form.txtmobileNumber.focus();
                document.getElementById('mobile-error').style.display="block";
            }
            if(document.form.password.value == "" || isNaN(document.form.password.value))
            {
                document.form.password.focus();
                document.getElementById("Password_error").style.display="block";
            }
            // else if(document.form.password.value.length > 10)
            // {
            //     document.getElementById("Password_size").style.display="block";
            // }
            if(is_email == false)
            {
                document.form.email.focus();
                document.getElementById('email-error').style.display="block";
            }
            if(document.form.answer.value == "")
            {
                document.form.answer.focus();
                document.getElementById('ans_error').style.display="block";
                return false;
            }
          return true;
        }

        function SecondWizardValidate()
        {
            var tANDc = document.querySelectorAll('input[name="terms"]:checked');
            if(tANDc.length == 0){
                document.getElementById('term').style.display="block";
                return false;
            }
          return true;
        }
        // function ThirdWizardValidate()
        // {
        //     var enterotp = document.querySelectorAll('input[name="code[]"].value');
        //     if(enterotp.length == 0){
        //         document.getElementById('onetimepass').style.display="block";
        //         return false;
        //     }
        //     return true;
        // }