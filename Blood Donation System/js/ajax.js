$(document).ready(function(){
  $("#forma").submit(function(event) {
      event.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var pwd = $("#password1").val();
      var cpwd = $("#password2").val();
      var age = $("#num").val();
      var gend = $("#gender").val();
      var group = $("#bgroup").val();

      $.ajax({
        url: "/Blood Donation System/includes/signup.php",
        type: "POST",
        data:{
          "name": name,
          "email": email,
          "pwd": pwd,
          "cpwd": cpwd,
          "age": age,
          "gend": gend,
          "group": group
        },
        cache: false,
        success: function(data){
            $("#name").val('');
            $("#email").val('');
            $("#password1").val('');
            $("#password2").val('');
            $("#num").val('');
            $("#gender").val('MALE');
            $("#bgroup").val('A-');
            $(".form-message").html("Your account is created!");
        }
      })
  });
});
