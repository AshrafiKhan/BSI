$(document).ready(function () {
    $('#signup').prop('disabled', true);
    $('#passHelp').text('');
    $('#emailHelp').text('');


    $(document).on('input', '#signup_name, #signup_email, #signup_cpassword, #signup_password', function () {
        var input = $(this).val();
        if (input === '') {
            $('#passHelp').text('');
            $('#emailHelp').text('');
            $('#signup').prop('disabled', true);
        }
        else {
            $('#signup').prop('disabled', false);

        }
        // console.log(input);
    });

    $(document).on('input', '#signup_cpassword, #signup_password', function () {
        let password = $('#signup_password').val();
        let cpassword = $('#signup_cpassword').val();

        if (password === '') {
            $('#passHelp').text('');
            return;
        }
        
        // Check if the entered value is not empty
        if (cpassword.length === 0) {
            $('#passHelp').text('Enter your password to confirm.');
            $('#passHelp').css('color', 'grey');
            return;
        }

        // Display the result
        if (password === cpassword) {
            $('#passHelp').text('Password Confirmed');
            $('#passHelp').css('color', 'green');
            // Enable the button
            $("#signup").prop("disabled", false);
        } else {
            $('#passHelp').text('Password do not Match');
            $('#passHelp').css('color', 'red');
            // Disable the button
            $("#signup").prop("disabled", true);
        }
    });

    $(document).on('input', '#signup_email', function () {
        var email = $('#signup_email').val();

        if (email === "") {
            $('#emailHelp').css('color', 'grey');
            $('#emailHelp').text('Enter a valid email address');
            $('#signup').prop('disabled', true);
        } else {
            var data = {
                'email': email,
                'check_email': 1,
            };

            $.ajax({
                type: "POST",
                url: "components/functions.php",
                data: data,
                // dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response == '1') {
                        $('#emailHelp').css({ 'color': 'red' });
                        $('#emailHelp').text('Email Already taken by other User');
                        $('#signup').prop('disabled', true);

                    } else {
                        $('#emailHelp').css({ 'color': 'green' });
                        $('#emailHelp').text('Email available.');
                        $('#signup').prop('disabled', false);

                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        // console.log(email);

        
    });
});