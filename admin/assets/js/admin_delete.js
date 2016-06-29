/**
 * Created by Aysen on 28/06/2016.
 */
$(document).ready(function(){

    $('#btn-delete').click(function(e){

        var r = confirm("Press a button!");
        if( r==true){
            console.log('http://'+ window.location.hostname+"/admin/index.php");
            window.location.href= 'http://'+ window.location.hostname+"/admin/admin_delete_execute.php?id=" +
                    $('#id').val();

        }
        return false;


    });


    console.log('sole');
});