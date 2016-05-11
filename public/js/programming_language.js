

// languages
var l_a = new Array();
l_a[0]="";
l_a[1]="javascript|python|ruby|ruby on rails|c|c++|c#|cobol|pascal|haskell|java|clojure|perl|c sharp|php|lisp|jquery|scala|html5|css3|mysql|";


function populateLanguages(  languageElementId ){
	
	

	var languageElement = document.getElementById( languageElementId );
	
	languageElement.length=0;	// Fixed by Julian Woods
	languageElement.options[0] = new Option('Select language','');
	languageElement.selectedIndex = 0;
	
	var language_arr = l_a[1].split("|");
	
	for (var i=0; i<language_arr.length; i++) {
		languageElement.options[languageElement.length] = new Option(language_arr[i],language_arr[i]);
	}
}

					

