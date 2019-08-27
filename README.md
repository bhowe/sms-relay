# sms-relay
Relays SMS to hide the nmber

https://www.twilio.com/docs/sms/api/message-resource

https://www.twilio.com/docs/sms



Array
(
    [Called] => +16013261597
    [ToState] => MS
    [CallerCountry] => US
    [Direction] => inbound
    [CallerState] => MS
    [ToZip] => 39232
    [CallSid] => CAeeead21aae4df102832401689cad777b
    [To] => +16013261597
    [CallerZip] => 39213
    [ToCountry] => US
    [ApiVersion] => 2010-04-01
    [CalledZip] => 39232
    [CalledCity] => JACKSON
    [CallStatus] => ringing
    [From] => +16015001794
    [AccountSid] => ACf5831563fb261642d639a7580eb5ac6e
    [CalledCountry] => US
    [CallerCity] => JACKSON
    [Caller] => +16015001794
    [FromCountry] => US
    [ToCity] => JACKSON
    [FromCity] => JACKSON
    [CalledState] => MS
    [FromZip] => 39213
    [FromState] => MS
)


Array
(
    [Called] => +16013261597
    [ToState] => MS
    [CallerCountry] => US
    [Direction] => inbound
    [CallerState] => MS
    [ToZip] => 39232
    [CallSid] => CAeeead21aae4df102832401689cad777b
    [To] => +16013261597
    [CallerZip] => 39213
    [ToCountry] => US
    [ApiVersion] => 2010-04-01
    [CalledZip] => 39232
    [CalledCity] => JACKSON
    [CallStatus] => ringing
    [From] => +16015001794
    [AccountSid] => ACf5831563fb261642d639a7580eb5ac6e
    [CalledCountry] => US
    [CallerCity] => JACKSON
    [Caller] => +16015001794
    [FromCountry] => US
    [ToCity] => JACKSON
    [ErrorUrl] => http://hiddensmsforwork.com/sms-relay/controller.php
    [FromCity] => JACKSON
    [CalledState] => MS
    [ErrorCode] => 12100
    [FromZip] => 39213
    [FromState] => MS
)


Array
(
    [ToCountry] => US
    [ToState] => MS
    [SmsMessageSid] => SMb952d364b81d1ec568e8d5545ee24c8a
    [NumMedia] => 0
    [ToCity] => JACKSON
    [FromZip] => 39213
    [SmsSid] => SMb952d364b81d1ec568e8d5545ee24c8a
    [FromState] => MS
    [SmsStatus] => received
    [FromCity] => JACKSON
    [Body] => This is a rest
    [FromCountry] => US
    [To] => +16013261597
    [ToZip] => 39232
    [MessageSid] => SMb952d364b81d1ec568e8d5545ee24c8a
    [AccountSid] => ACf5831563fb261642d639a7580eb5ac6e
    [From] => +16015001794
    [ApiVersion] => 2010-04-01

)


INSERT INTO `hiddensms`.`sms_log`
(`idsms_log`,
`ToCountry`,
`SmsMessageSid`,
`NumMedia`,
` ToCity`,
`FromZip`,
`SmsSid`,
`FromState`,
`SmsStatus`,
`FromCity`,
`Body`,
`FromCountry`,
`To`,
`Tozip`,
`MessageSid`,
`AccountSid`,
`From`,
`ApiVersion`)
VALUES
(<{idsms_log: }>,
<{ToCountry: }>,
<{SmsMessageSid: }>,
<{NumMedia: }>,
<{ ToCity: }>,
<{FromZip: }>,
<{SmsSid: }>,
<{FromState: }>,
<{SmsStatus: }>,
<{FromCity: }>,
<{Body: }>,
<{FromCountry: }>,
<{To: }>,
<{Tozip: }>,
<{MessageSid: }>,
<{AccountSid: }>,
<{From: }>,
<{ApiVersion: }>);


INSERT INTO `hiddensms`.`phone_log`
(`idphone_log`,
`Called`,
`ToState`,
`CallerCountry`,
`Direction`,
`CallerState`,
`ToZip`,
`CallSid`,
`To`,
`CallerZip`,
`ToCountry`,
`ApiVersion`,
`CalledZip`,
`CalledCity`,
`CallStatus`,
`From`,
`AccountSid`,
`CalledCountry`,
`CallerCity`,
`Caller`,
`FromCountry`,
`ToCity`,
`ErrorUrl`,
`FromCity`,
`CalledState`,
`ErrorCode`,
`FromZip`,
`FromState`)
VALUES
(<{idphone_log: }>,
<{Called: }>,
<{ToState: }>,
<{CallerCountry: }>,
<{Direction: }>,
<{CallerState: }>,
<{ToZip: }>,
<{CallSid: }>,
<{To: }>,
<{CallerZip: }>,
<{ToCountry: }>,
<{ApiVersion: }>,
<{CalledZip: }>,
<{CalledCity: }>,
<{CallStatus: }>,
<{From: }>,
<{AccountSid: }>,
<{CalledCountry: }>,
<{CallerCity: }>,
<{Caller: }>,
<{FromCountry: }>,
<{ToCity: }>,
<{ErrorUrl: }>,
<{FromCity: }>,
<{CalledState: }>,
<{ErrorCode: }>,
<{FromZip: }>,
<{FromState: }>);





