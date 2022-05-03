**Laravel App sending email through mail-gun : direct aw well as using queue**

*Routes*

http://127.0.0.1:8000/queue

http://127.0.0.1:8000/direct

  
*Source code*

App\Http\Controllers\EmailController

App\Jobs\SendEmailJob

App\Mail\SpamFreeMail

views\emails\spamfree.blade.php

routes\web.php

*Screen*
https://www.screencast.com/t/NzTYJ6Fox6A
