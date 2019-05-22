function setDelLinkId(id){
    var id = id;
    $("#delLinkId").val(id);
}

/*function deleteLink(){
    var linkId = document.getElementById( "delLinkId" ).value;

    $.ajax({
        type: 'post',
        url: '../list.php',
        data: {
            delLinkId : linkId
        },

        success: function(result){
            alert('Successfully Updated.');
            setTimeout(function(){location.reload();},0);

        }
    });
}*/
function addToFav(id) {
    $.ajax({
        url:"./controller/AjaxData.php", //the page containing php script
        type: "POST", //request type
        data: {
            id:id,
        },
        success:function(response){
            $('#fa'+id).removeClass('fa fa-star-o fa-1x fa-fw').addClass('fa fa-star fa-1x fa-fw');
        }
    });
}