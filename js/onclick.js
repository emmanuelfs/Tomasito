$('#navBar').children('ul').children('li').click(function(){
	$idClicked = $(this).children('a').attr('id');
    $.ajax({url: "content/" + $idClicked + ".html", success: function(result){
        $("#ajax-info").html(result);
    }});
});

$('#bottombar').click(function(){
	$idClicked = $(this).children('a').attr('id');
    $.ajax({url: "content/" + $idClicked + ".html", success: function(result){
        $("#ajax-info").html(result);
    }});
});
