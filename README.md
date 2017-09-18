# ReCaptcha
You need to Go to your google account
https://www.google.com/recaptcha/intro/android.html
Register your domain or list all your previous registered recaptcha domails
https://www.google.com/recaptcha/admin#list

When your users submit the form where you integrated reCAPTCHA, you'll get as part of the payload a string with the name "g-recaptcha-response". In order to check whether Google has verified that user, send a POST request with these parameters:
URL: https://www.google.com/recaptcha/api/siteverify
secret (required)	your-registerd-secret-key-by-google
response (required)	The value of 'g-recaptcha-response'.
remoteip	The end user's ip address.
