## THE TASK 1
- Create a web page with a simple HTML form.
  - Date - YYYY-mm-dd
  - timezone 
- Add validation

On submit, redirect or display the following:

The time zone [input-timezone] has [A] minutes offset to UTC on the given day at noon.<br />
February in this year has [B] days.<br />
The specified month [C] is [D] days long.

#### Where:
[input-timezone] is the timezone received from the input.
[A] is the time offset to UTC - in minutes. Values: may be 0, negative integer with minus (e.g. -60), positive integer with plus (e.g. +60)
[B] is the number of days in February in the year of the given date. The integer.
[C] is the name of the given month.
[D] is the number of days in the month from the given date.

#### E.G
Input:
date=2019-07-10
timezone=Europe/London

Output:
The timezone Europe/London has +60 minutes offset to UTC on given day at midnight.<br />
February in this year has 28 days.<br />
Specified month (July) has 31 days.

Input:
date=2016-11-28
timezone=Asia/Tokyo

Output:
The timezone Asia/Tokyo has +540 minutes offset to UTC on given day at midnight.<br />
February in this year has 29 days.<br />
Specified month (November) has 30 days.

## TASK 2

#### Brief:

We have a simple project. It creates a random post 3 times a day on a blog page.
We would like to add 1 extra post generated per day, but that extra post should be created in a different way.
The existing script generates the random post 3 times a day. 
We want to add another 1 extra post per day (generated at 12pm). 
That extra post shouldn't have the random title, but instead, the title should be "Summary YYYY-MM-DD", where the date is the current day, when the post is generated.
The new extra post should contain only 1 paragraph (instead of 2 paragraphs normally)."

##### Please assume that somebody else will set up the cron jobs for the new extra post.

Don’t implement unit tests.

** PROJECT DELIVERY **
Create a public GIT repository (e.g. GitHub), push the project there (without ./vendor/ folder) 
and send the URL to the repository to us.



Note: 

As composer autoload has changed, you may need to run `composer dump-autoload`.