
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://oauth.googlecode.com/svn/code/javascript/sha1.js"></script>
<script type="text/javascript" src="http://oauth.googlecode.com/svn/code/javascript/oauth.js"></script>
<script type="text/javascript">

	var theUrl = 'http://www.miamibeachapi.com/rest/a.pi/businesses/search';
	var consumerKey = "anonymous";
	var consumerSecret = "anonymous";
	var token = "1163463c8655f9d2a5f3c3ddb8a76c0b5ace18d5";
	var tokenSecret = "e1edbff84eb106a56021d8722348f4cd839f03d5";

	var accessor = {
		consumerKey: consumerKey
		, consumerSecret : consumerSecret
		, token  : token
		, tokenSecret   : tokenSecret
	};

	var message = {
		method: "GET"
		, action: theUrl
		, parameters: {}
	};

	function getAPIData(){

		message.parameters = {};
		message.parameters['rows'] = 35;
		message.parameters['page'] = 1;
		message.parameters['category_filter'] = 360;
		message.parameters['jsoncallback'] = '?';
		message.parameters['oauth_timestamp'] = freshTimestamp();
		message.parameters['oauth_nonce'] = freshNonce();
		
		OAuth.completeRequest(message, accessor);
		OAuth.SignatureMethod.sign(message, accessor);
		var encodedParams = OAuth.formEncode(message.parameters);
		var getURL = theUrl + '?' + encodedParams;

		$.getJSON(getURL, function(data){
			var outHTML = "";
			if(data.businesses){
				outHTML += "<ul>";
				$.each(data.businesses,function(i,e){
					outHTML += "<li>"+e.dba_name+"</li>";
					
				});
			}			
			$('#results').html(outHTML);
		});
	}
			
	function freshTimestamp() {
		return OAuth.timestamp();
	}
	function freshNonce() {
		return OAuth.nonce(11);
	}
</script>

<div id="results"></div>

<script>
$(document).ready(function() {
	getAPIData();
});
</script>

