Site Key: your-site-key

Secret Key: your-secret-key

1: 
<pre>
This is your javascript:
<script src='https://www.google.com/recaptcha/api.js'></script> 
put this code into your form:
<div class="g-recaptcha" data-sitekey="your-site-key"></div>
</pre>

2: url: https://www.google.com/recaptcha/api/siteverify

Sec: your-secret-key
res: 'g-recaptcha-response'
remote: $_SERVER['REMOTE_ADDR']