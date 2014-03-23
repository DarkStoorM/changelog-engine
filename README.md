#Changelog simple engine ![lel](http://puu.sh/77JnR.png)

###Description
This is a small project that I'm integrating with my personal website and Browser Game.
Changelog is PHP|MySQLI based, no HTML|CSS|JS stuff (form is customisable).

___
###Features

* Type of changes `add`, `fix`, `remove`
* Description - you can set the length in `changelog-settings.php`
* Date - format is: **YYYY-MM-DD**

___
###How to?
To "install" the changelog engine, copy/paste it somewhere, and add it to your project.
`require([...]"Changelog/changelog-main.php");` ( [...] - your path of course)

To use the changelog form, you have to call it by these two lines:

`$changelog -> submit();` - This one checks if you pushed the button

`$changelog -> form();` - This one shows our form

___
###What do I have to change?
The only thing to do is providing your **MySQLI** (!!) "link" argument:

* `Changelog/changelog-main.php`

$changelog = new changelog(**$link**);

`$link` - remember

___
###Customising
You can set styles for your changelog form as you like, even changing the order of form fields. Just go to:

* `Changelog/changelog-form.php`

######Just don't mess up the form.

___
###What about the data?
You can access the data simply by calling the `get_changes()` method, like this:

`$changes = $changelog -> get_changes();`

And you get this:



    Array
    (
        [0] => Array
            (
                [id] => 15
                [type] => a
                [description] => olololol
                [date] => 2014-03-23
            )
        [...]
    )
    
You can just `foreach($changes as $change)` these fields as you like, accessing:

        $change["id"]
        $change["type"]
        $change["description"]
        $change["date"]
While showing your changelog, you can add your own images to the `change_types`.
There are three types of changes:

* Add - type "a"
* Fix - type "f"
* Remove - type "r"

Easiest way to use types that you want to show on your website is to `switch()` your type like:
    
        switch($change["type"])
        {
            case "a": $path="path-to-ADDED-image"; break;
            case "f": $path="path-to-FIXED-image"; break;
            case "r": $path="path-to-REMOVED-image"; break;
        }
        and just echo the image
You can get something like this:

![img](http://puu.sh/7GsiQ.png) 2014-03-23 - Added something.

![img](http://puu.sh/7Gsjy.png) 2014-03-23 - Fixed something.

![img](http://puu.sh/7GshH.png) 2014-03-23 - Removed something.

##Date
The date format is **YYYY-MM-DD** and you can do whatever you like with this date.

You can even make your own daily changelog by filtering the `$change["date"]`.
___
Enjoy