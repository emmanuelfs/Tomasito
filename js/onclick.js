$('#navBar').children('ul').children('li').children('a').click(function(){
	$idClicked = $(this).attr('id');
    $.ajax({url: "content/" + $idClicked + ".html", success: function(result){
        $("#ajax-info").html(result);
    }});
});

$('#bottombar').children('a').click(function(){
	$idClicked = $(this).attr('id');
    $.ajax({url: "content/" + $idClicked + ".html", success: function(result){
        $("#ajax-info").html(result);
    }});
});
