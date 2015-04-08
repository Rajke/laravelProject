angular.module('docApp', [])
  .controller('docController', function() {
    var docCtrl = this;
    docCtrl.res = [
      {text:'Exam 1', result:null},
      {text:'Exam 2', result:null},
      {text:'Exam 3', result:null}];
      docCtrl.myVar=true;
	docCtrl.addDoc = function() {
	      docCtrl.res.push({text:docCtrl.docText,result:null});
	      docCtrl.docText = '';
	    };
	    //remove from res and add to finished

		
      	
	 	// docCtrl.go = function(doc){
	 	// 	var index = docCtrl.res.indexOf(doc);
			// results = prompt("Enter results for: " + doc.text);
   //      	console.log(docCtrl.fres);
       
   // 		 };
		// delete from finished
	    docCtrl.del= function(doc)
	    {	
	    	var index = docCtrl.res.indexOf(doc);
	 		console.log(index);
	    	docCtrl.res.splice(index, 1);
	    };

	    docCtrl.edit = function(doc)
	    {	
	    	var index = docCtrl.res.indexOf(doc);
	 		console.log(index);
			results = prompt("Enter results for: " + doc.text, doc.result);
			        	docCtrl.res[index].result=results;
			        	console.log(docCtrl.res);
			        	docCtrl.myVar=false;
	    };

	    docCtrl.noResult = function(value, index)
	    {
	    	return  value.result==null||value.result=="";
	    }

	    docCtrl.yesResult = function(value, index)
	    {
	    	return  !docCtrl.noResult(value, index);
	    }
	     
  });