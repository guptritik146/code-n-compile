$(document).ready(function(){ 
	$( '#primary_topic').change(function() {
		getChildTopics($('#primary_topic').val(),'topic');
	});
	$( '#topic' ).change(function() {
		getChildTopics($('#topic').val(),'sub_topic');
	});
	$("#add_tutorial_button").click(function(){
        if(validateTutorial()){
		 addTutorial();
		}
    }); 
});


function getChildTopics(topicValue,selectBoxId) {
	var selectList = $('#'+selectBoxId);
    selectList.find("option:gt(0)").remove();	
    $.ajax({
        type: 'GET',
        url: 'https://codencompile.com/admin/topic-service/get-child-topics/'+topicValue, 
        cache:false,
        success:function(data){
            var $topics = JSON.parse(data);
			for (var topicId in $topics) {
				$('#'+selectBoxId).append($('<option>', {value: topicId, text:  $topics[topicId]}));
			}
        }
    });
    return false;
}