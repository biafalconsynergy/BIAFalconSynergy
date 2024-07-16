Readme.txt (contact.php)

Following changes to be made
to use the inbuilt xampp smtp service
for sending emails on form submission

------------------------------------------------------

Make changes in the php.ini file
(Location = C:\xampp\php\php.ini)

Open the file in Notepad
Search for "mail function"

Change the following data:

SMTP=localhost
smtp_port=25
;sendmail_from = me@example.com
;sendmail_path =


To the following:

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = "biafalconsynergy2024@gmail.com"
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

------------------------------------------------------

Make changes in the sendmail.ini file
(Location = C:\xampp\sendmail\sendmail.ini)

Open the file in Notepad

Change the following data:

smtp_server=mail.mydomain.com
smtp_port=25
auth_username=
auth_password=


To the following:

smtp_server=smtp.gmail.com
smtp_port=587
auth_username=biafalconsynergy2024@gmail.com
auth_password=rqde fvsk krib nzlv

------------------------------------------------------