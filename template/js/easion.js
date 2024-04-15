
const mobileBreakpoint = window.matchMedia("(max-width: 991px )");

$(document).ready(function(){
    $(".dash-nav-dropdown-toggle").click(function(){
        $(this).closest(".dash-nav-dropdown")
            .toggleClass("show")
            .find(".dash-nav-dropdown")
            .removeClass("show");

        $(this).parent()
            .siblings()
            .removeClass("show");
    });

    $(".menu-toggle").click(function(){
        if (mobileBreakpoint.matches) {
            $(".dash-nav").toggleClass("mobile-show");
        } else {
            $(".dash").toggleClass("dash-compact");
        }
    });

    $(".searchbox-toggle").click(function(){
        $(".searchbox").toggleClass("show");
    });

    // Dev utilities
    // $("header.dash-toolbar .menu-toggle").click();
    // $(".searchbox-toggle").click();
});




// Table

$(document).ready(function() {
    $('#example').DataTable();
});

$(document).ready(function() {
    $('#ticket').DataTable();

    // Handle status filtering
    $('#statusFilter').change(function() {
        var status = $(this).val();
        $('#ticket').DataTable().columns(6).search(status).draw();
        // Adjust the column index (5) based on the position of the "Status" column in your table
    });
});

$(document).ready(function() {
    $('#agent').DataTable();

    // Handle status filtering
    $('#deptFilter').change(function() {
        var status = $(this).val();
        $('#agent').DataTable().columns(2).search(status).draw();
    });
});

