#Changelog simple engine ![lel](http://puu.sh/77JnR.png)

###Description
This is a small project that I'm integrating with my personal website and Browser Game.
Changelog is PHP|MySQLI based, no HTML|CSS|JS stuff (form is customisable).

___
###Features

* Type of changes `add`, `fix`, `remove`
* Description
* Date

___
###How to?
To "install" the changelog engine, copy/paste it somewhere, and add it to your project.
`require([...]"Changelog/changelog-main.php");` ( [...] - your path of course)

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
Enjoy