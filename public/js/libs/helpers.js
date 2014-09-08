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




// FOR HTTP CALLS JSON/PHP ISSUE
// ============================================
Object.toparams = function ObjecttoParams(obj) {
    var p = [];
    for (var key in obj) {
        p.push(key + '=' + obj[key]);
    }
    return p.join('&');
};












// VALIDATIONS
// ============================================


$.fn.validationStation = function(options) {

	var settings = $.extend({
		msgDest: options.msgDest || '.validation-message' // Message destination selector
	}, options);

	log(options);


	var errors = [];
	var errorCount = 0;


	var error = function(errorType){

		if(errorType === 'empty'){
			log('empty');
			errors.push({ number: errorCount, message: 'Field is empty', title: settings.title})
			errorCount++;
		}
		if(errorType === 'tooSmall'){
			log('too small');
			errors.push({ number: 1, message: 'Please enter more characters', title: settings.title})
			errorCount++;
		}
		if(errorType === 'invalidEmail'){
			log('invalid email');
			errors.push({ number: errorCount, message: 'Please enter a valid email.', title: settings.title})
			errorCount++;
		}

	}

	
	var valEmail = function(value){
		log(value);

		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!re.test(value)){
			error('invalidEmail');
		} 
		

		
	}


	var passMessage = function(){
		
		var err = "";
		for(i=0;i<errorCount;i++){
			var eMessage = errors[i].message;
			var eTitle = errors[i].title;
			err+= "<p>"+eTitle+": "+eMessage+"</p>";
		}

		var errorHTML = "<div class='msg error'>"+err+"</div>"

		log(settings.msgDest);
		$(settings.msgDest).html(errorHTML);
	}



	var validate = function(val){

		// Mins and Max
		if (!val){
			error('empty');
		}
		if (settings.min){
			if(val.length < settings.min){
				error('tooSmall');
			}
		}

		//Type
		if(settings.type == 'email'){ valEmail(val); }
	

		passMessage();

	}


	return this.each(function(){
		validate($(this).val());
	})

}






















