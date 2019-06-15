


function adduservalidation(){
    var username = document.getElementById('add-users-form-username').value;
    var name = document.getElementById('add-users-form-name').value;
    var email = document.getElementById('add-users-form-email').value;
    var password = document.getElementById('add-users-form-password').value;
    if (name == '') {
        $("#add-users-form-name").addClass('warning-input');
        $("#add-users-form-email,#add-users-form-username,#add-users-form-password").removeClass('warning-input');
        $("#header-notification").slideDown( function(){
            $("#notification-text-2").text("Please fill out Name Field.")
        })
        return false;
     }
     if (email == '') {
        $("#add-users-form-email").addClass('warning-input');
        $("#add-users-form-name,#add-users-form-username,#add-users-form-password").removeClass('warning-input');
        $("#header-notification").slideDown(function(){
            $("#notification-text-2").text("Please fill out Email Field.")
        })
        return false;
     }
    if (username == '') {
       $("#add-users-form-username").addClass('warning-input');
       $("#add-users-form-name,#add-users-form-email,#add-users-form-password").removeClass('warning-input');
       $("#header-notification").slideDown(function(){
        $("#notification-text-2").text("Please fill out Username Field.")
    })
       return false;
    }
    if (password == '') {
        $("#add-users-form-password").addClass('warning-input');
        $("#add-users-form-name,#add-users-form-email,#add-users-form-username").removeClass('warning-input');
        $("#header-notification").slideDown(function(){
            $("#notification-text-2").text("Please fill out Password Field.")
        })
        
        return false;
     }
  
    
  

    else{
        return true;
    }
    
}


function pushnotification() {
    var notification_textarea = document.getElementById('notify').value;
    if (notification_textarea == '') {
        $("#notify").addClass('warning-input');
        $("#header-notification").slideDown(function(){
            $("#notification-text-2").text("Please fill out Notification Field."); })
        return false;
    } else {
        return true;
    }
}

function  killerrorpage(){
    $("#close-error").click(function(){
        $("#page-error").fadeOut(500);
    } );
}



