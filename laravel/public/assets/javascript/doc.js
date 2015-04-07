angular.module('docApp', [])
  .controller('docController', function() {
    var docCtrl = this;
    docCtrl.res = [
      {text:'Exam 1'},
      {text:'Exam 2'},
      {text:'Exam 3'}];

	docCtrl.addDoc = function() {
	      docCtrl.res.push({text:docCtrl.docText, done:false});
	      docCtrl.docText = '';
	    };
	    //remove from res and add to finished

		docCtrl.fres=[];
	 	docCtrl.go = function(doc){
	 		var index = docCtrl.res.indexOf(doc);
	 		docCtrl.res.splice(index, 1);
        results = prompt("Enter results for: " + doc.text);
        	docCtrl.fres.push({text:doc.text+": " ,results});
        	console.log(docCtrl.fres);
       
   		 };
		// delete from finished
	    docCtrl.del= function(doc)
	    {	
	    	var index = docCtrl.fres.indexOf(doc);
	 		console.log(index);
	    	docCtrl.fres.splice(index, 1);
	    };

	    docCtrl.edit = function(doc)
	    {	
	    	var index = docCtrl.fres.indexOf(doc);
	 		console.log(index);
	    	docCtrl.fres.splice(index, 1); 
			results = prompt("Enter results for: " + doc.text, doc.results);
			        	docCtrl.fres.push({text:doc.text,results});
			        	console.log(docCtrl.fres);
	    };


  });

 