$(document).ready(function () {
    
    $.ajax({
        type: "GET",
        url: "reservation_form.php",
        success: function (data) {
            $("#reservation-data").html(data);
        },
        error: function (error) {
            console.log("Error fetching reservations:", error);
        }
    });
});


$(document).ready(function() {
    $('#showUsersBtn').click(function() {
        $.ajax({
            url: 'show_users.php',
            type: 'GET',
            success: function(response) {
                $('#userTable').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching users:', error);
            }
        });
    });
});



$(document).ready(function() {
    $('#showItemsBtn').click(function() {
        $.ajax({
            url: 'show_items.php',
            type: 'GET',
            success: function(response) {
                $('#menuItemTable').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching menu items:', error);
            }
        });
    });
});