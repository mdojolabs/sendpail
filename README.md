sendpail
========

Q: What's sendpail and what's a sendmail "proxy"?
----------------------------------------------

*A:* Sendpail (aka SENDMAILP-roxy) is an alternative way to send transactional email. 

It will accept a JSON http POST request and then create a request to sendgrid to send the e-mail.

Currently, the only e-mail transport service we support is sendgrid. 

Q: Any plans to use mailgun instead of sendgrid?
------------------------------------------------

*A:* Yup, in the near future.

Q: Why would I need this?
-------------------------

*A:* If you're a) not a web dev guru and b) dont know how to use sendgrid, maybe you can use this as a way to create your own service. 

Forget that dumb joke. If you've had problems getting a live development server (lets call this the "E-mail NOT-OK site") to send email, but have an existing website that still works with sendgrid (the E-mail IS-OK site), maybe you can set this up and route e-mail that couldn't be delivered from your "E-mail NOT-OK site" and POST the email details to your "E-mail IS-OK site", which then sends the e-mail. Get the picture? 



