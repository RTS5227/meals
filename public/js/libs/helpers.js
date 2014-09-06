log = function(m){console.log(m);}


// MESSAGES 
// =================================

var Message = function(options){
	this.target = options.target;
	this.type = options.type;
	this.message = options.message;
}

				
Message.prototype = {
	
	show: function(){
		var msg = "<div class='msg "+this.type+"'>"+this.message+"</div>";
		$(this.target).empty().append(msg);
	},
	
	hide: function(){
		log('hide');
		$('.msg').remove();
	}

}
