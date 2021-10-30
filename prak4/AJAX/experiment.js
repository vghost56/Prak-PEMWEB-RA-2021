$(document).ready(function(){
    $('#btn_tampil').click(function(){
        $('#tampil').load('contoh.php');
    });
});

$(document).ready(function(){
    $.get('contoh.php', function(data, status){
        alert('Data : '+data+'\nStatus : '+status);
    });
});