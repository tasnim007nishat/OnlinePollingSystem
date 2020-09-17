$(document).ready(function () {

    $("#signup").click(function () {
        const fname = $("#fname").val();
        const lname = $("#lname").val();
        const dob = $("#dob").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const district = $("#district").val();
        const username = $("#username").val();
        const password = $("#password").val();

        if (fname.length == "") {
            $(".fname").addClass("is-invalid");
        } else {
            $(".fname").removeClass("is-invalid");
        }

        if (lname.length == "") {
            $(".lname").addClass("is-invalid");
        } else {
            $(".lname").removeClass("is-invalid");
        }

        if (dob.length == "") {
            $(".dob").addClass("is-invalid");
        } else {
            $(".dob").removeClass("is-invalid");
        }

        if (email.length == "") {
            $(".email").addClass("is-invalid");
        } else {
            $(".email").removeClass("is-invalid");
        }

        if (phone.length == "") {
            $(".phone").addClass("is-invalid");
        } else {
            $(".phone").removeClass("is-invalid");
        }

        if (district.length == "") {
            $(".district").addClass("is-invalid");
        } else {
            $(".district").removeClass("is-invalid");
        }

        if (username.length == "") {
            $(".username").addClass("is-invalid");
        } else {
            $(".username").removeClass("is-invalid");
        }

        if (password.length == "") {
            $(".password").addClass("is-invalid");
        } else {
            $(".password").removeClass("is-invalid");
        }

        if (fname.length != "" && lname.length != "" && dob.length != "" && email.length != "" && phone.length != "" && district.length != "" && username.length != "" && password.length != "") {
            $.ajax({
                type: "POST",
                url: "signup.php",
                data: { "fname": fname, "lname": lname, "dob": dob, "email": email, "phone": phone, "district": district, "username": username, "password": passowrd },
                dataType: 'JSON',
                success: function (feedback) {
                    if (feedback.status === "error") {
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);
                    } else if (feedback.status === "success") {
                        window.location = "login.php";
                    }
                }
            })
        }
    })

    //user login

    $("#login").click(function(){
        const username = $("#username").val();
        const password = $("#password").val();

        if (username.length == "") {
            $(".username").addClass("is-invalid");
        } else {
            $(".username").removeClass("is-invalid");
        }

        if (password.length == "") {
            $(".password").addClass("is-invalid");
        } else {
            $(".password").removeClass("is-invalid");
        }

        if (fname.length != "" && lname.length != "" && dob.length != "" && email.length != "" && phone.length != "" && district.length != "" && username.length != "" && password.length != "") {
            $.ajax({
                type: "POST",
                url: "signin.php",
                data: {  "username": username, "password": passowrd },
                dataType: 'JSON',
                success: function (feedback) {
                    if (feedback.status === "success") {
                        window.location = "user.php";
                    } else if (feedback.status === "passwordError") {
                        $(".password").addClass("is-invalid");
                        $(".passwordError").html(feedback.messsage);
                        $(".username").removeClass("is-invalid");
                        $("usernameError").html("");
                    } else if(feedback.status === "usernameError"){
                        $(".password").removeClass("is-invalid");
                        $(".passwordError").html("");
                        $(".username").addClass("is-invalid");
                        $("usernameError").html(feedback.messsage);
                    }
                }
            })
        }
    })

})