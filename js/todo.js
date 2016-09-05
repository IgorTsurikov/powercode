$( function() {
    $("#datepicker").datepicker();
} );
$.datepicker.setDefaults($.datepicker.regional["ru"]);

function getProjects() {
    jQuery.post('./projectslist/projects',
    function(data) {
	document.getElementById('projectslist').innerHTML = data;
    });
}

function showForm() {
    $('#addother').removeClass('show');
    $('#addother').addClass('hidden');
    $('#addform').removeClass('hidden');
    $('#addform').addClass('show');
}

$(document).ready(function(){
    var onpage=document.getElementById('projectslist'); /* проверка главная ли страница */

    $("body").on("click", ".checkproject", function () {
        var projectId = this.id;
	if(document.getElementById(projectId).checked==true) {
	    var projectStatus = 1;
	} else {
	    var projectStatus = 0;
	}

	jQuery.post('./checkproject/projectstatus',{projectId:projectId, projectStatus:projectStatus},
	function(data) {
	    if(onpage) {
		getProjects();
	    }
	    else {
		document.getElementById('noticesave').innerHTML = '<p class="bg-success text-center" style="padding: 10px;margin-top: 10px;">Изменён статус проекта</p>';
		setTimeout("document.getElementById('noticesave').innerHTML = ''", 1500);
	    }
	});

    });

    if(onpage){
	$("#addproject").submit(function () {
	    var str = $("#addproject").serialize();
	    jQuery.post('./addproject/newproject',{str:str},
	    function(data) {
		$('#addproject').trigger('reset');
		$('#addform').addClass('hidden');
		$('#addother').removeClass('hidden');
		$('#addother').addClass('show');
		getProjects();
	    });
	    return false;
	});
	getProjects();
	$('#addotherbutton').on('click', showForm);
    }
    if(!onpage) {
	$("#saveproject").submit(function () {
	    var str = $("#saveproject").serialize();
	    jQuery.post('./saveproject/save',{str:str},
	    function(data) {
		document.getElementById('noticesave').innerHTML = '<p class="bg-success text-center" style="padding: 10px;margin-top: 10px;">Проект сохранён</p>';
		setTimeout("document.getElementById('noticesave').innerHTML = ''", 1000);
	    });
	    return false;
	});
    }
});
