# TWILLO STARTER PACK

https://www.twilio.com/docs/sms/api/message-resource

https://www.twilio.com/docs/sms

Twillo rest has some issues being used on the lamp stack. In the POST values they pass they use "To" and "From" which are mysql reservere words. 
This start pack takes care that, and saving the post variables to mysql tables properly escapped.

Also includes two forms to simulate testing localhost 

Questions or comments send them to blake@blakehowe.com