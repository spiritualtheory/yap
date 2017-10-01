# yap

The purposes of yap are 
    - To be able to take the results of a BMLT root server and play it back through the telephone.  
    - To be able to set up routing rules for zip codes and helpline numbers with optional extension dial throughts

Unlike it's predecessor bmlt-vox, this doesn't require any special infrastructure other than a server capable of delivering PHP over HTTP.

We are taking advantage of using Twilio which essentially handles all the VOIP parts.  You provision a number, set up an application, and point it your PHP server.
