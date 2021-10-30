$(document).ready(function(){
    $.get('contoh.php', function(data, status){
        alert('Data : '+data+'\nStatus : '+status);
    });
});