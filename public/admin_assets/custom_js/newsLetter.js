$(document).ready(function(){
	show_project();
});
 


function show_project(){
    $('#cat_datatable').DataTable().destroy();
	var table = $('#cat_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: siteUrl+"/newsLetter/show",
        columns: [ 
            {data: 'DT_RowIndex'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status', orderable: false, searchable: false},
        ]
    });
}


function status(id = "", status = "") {
    $.ajax({
        url: siteUrl +"/newsLetter/status",
        data: { id: id, status: status },
        type: "get",
        dataType: "json",
        success: function (response) {
            if(response.status_code==200){
                console.log(response.message);
                    toastr["success"](response.message);
                    show_project();
                }else if(response.status==201){
                    toastr["error"](response.message);
                    show_project();
                }
        },
    });
}

