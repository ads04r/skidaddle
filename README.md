Skidaddle
=========

I manage several websites, at the file level. None of these sites uses Wordpress, yet
I regularly get 404s in the logs from people attempting to access /wp-admin/ and
/wp-login.php on all the sites I manage. I guess these are hits from morons running
scripts to locate Wordpress login pages, presumably to try and break into them.

So I spent an evening writing this. Just pop the files in this repo into the htdocs
root of a website (that isn't running Wordpress, obviously!) and scripts looking for
Wordpress installs will return a positive on your site, as the /wp-login.php will
present a realistic-looking Wordpress login. Any attempts to log in however, no
matter the password used, will present a sarcastic response.

I have no idea if this script is an effective deterrent, but I figure that while
the script kiddies are wasting time trying to break into my (non-Wordpress) sites,
they're not trying to break into other people's actual Wordpress sites, so I'm
serving the greater good.

Example
-------

* https://www.flarpyland.com/wp-login.php
