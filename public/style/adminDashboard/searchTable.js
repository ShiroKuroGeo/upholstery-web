$(document).ready(function() {
    // searchTable();
    alert("sad");
});

function searchTable(){
    $('#searchFromTable').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#myTable tr:not(:first)').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
}