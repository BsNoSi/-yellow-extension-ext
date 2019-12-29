# Yellow Extension Ext 

### V 1.1.1 (Requires YELLOW 0.8.4 or higher)

Ext creates a link to a new tab/window.

## The Idea Behind

I wanted "external links" without replacing the current page. 

## How do I Install This?

1. Download and install [Datenstrom Yellow CMS](https://github.com/datenstrom/yellow/).
2. Download [Ext extension](https://github.com/BsNoSi/yellow-extension-ext/archive/master.zip ).  If you are using Safari, right click and select 'Download file as'.
3. Copy the `yellow-extension-cmail-master.zip` into the `system/plugins` folder.

To uninstall simply delete the [extension files](update.ini).

## How do I use ext extension?

Create a `[ext  link linktext title destination]` shortcut.

The following arguments are available

**link** the address you want to link to - required

**linktext** the displayed text. Optional, if empty replaced by "link"

**title** A title for screenreaders, optional. If empty  "open in new window/tab", which is appended otherwise

**destination** A named target, optional, if empty replaced by "_blank"

> Use quotation marks to enclose words in a single argument separated by a space or special characters.

To highlight *external* links, add a style `.cext` to your stylesheet, perhaps something like this:

~~~.css
.cext:before {content: "\0029A8\00202F"; color:#FF6633;}
~~~

This would display links to new tabs/windows like this  »[<span style="color:#FF6633">&#x29A8;&#x202F;</span>The Link-text](#_)«.

## Examples

Minimum: `[ext https://datenstrom.se]`

Using all options: `[ext https://datenstrom.se "link to datenstrom" "Creators Homepage of YELLOW" "yellow"]`

## History

2019-05-05, v1.1.0: Initial GitHub-Release

2019-12-29, v1.1.1: Class added


## Developer

[Norbert Simon](https://nosi.de)