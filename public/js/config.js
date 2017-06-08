/*<script src="./assets/jquery/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/nprogress/nprogress.js"></script>
<script src="./js/common.js"></script>*/

requirejs.config({
	baseUrl : '/public/assets',
	paths : {
		jquery : 'jquery/jquery.min',
		bootstrap : 'bootstrap/js/bootstrap.min',
		cookie : 'jquery-cookie/jquery.cookie',
		common : '../js/common',
		login : '../js/login'
	},
	shim : {
		bootstrap : {
			deps : ['jquery']
		}
	}
});