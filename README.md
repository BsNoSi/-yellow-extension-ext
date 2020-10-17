# Yellow Extension Ext 

Version 1.2.1

> Tested with core version 0.8.23

## Application

Ext creates a link to a new tab/window.


## Install

1. Download and install [Datenstrom Yellow CMS](https://github.com/datenstrom/yellow/).
2. Download [Ext extension](https://github.com/BsNoSi/yellow-extension-ext/archive/master.zip ).  If you are using Safari, right click and select 'Download file as'.
3. Copy the `yellow-extension-cmail-master.zip` into the `system/plugins` folder.

To uninstall simply delete the `ext.*` files from `extensions` folder.

## Usage

     [ext  link linktext title destination]

| Parameter | Function |
| :---: | :--- |
| link | *required*: The address you want to link to |
| linktext | The displayed text. Optional, if empty replaced by `link` |
| title | A title for screenreaders. If empty  `open in new window/tab`, which is appended otherwise`|
| destination | A named target, optional, if empty replaced by `_blank |

> Use quotation marks to enclose words in a single argument separated by a space or special characters.

The link is enclosed in a style `cext`. To mark external links you can add your stylesheet perhaps something like this:

```.css
.cext:before {content: "\0029A8\00202F"; color:#FF6633;}
```

This will display links to new tabs/windows like this  »<span style="color:#FF6633">&#x29A8;&#x202F;</span>[The Link-text](#_)«.

## Examples

Minimum: `[ext https://datenstrom.se]`

Using all options: `[ext https://datenstrom.se "link to datenstrom" "Creators Homepage of YELLOW" "yellow"]`

## History

2020-10-17: v1.2.1: API changes applied.

2020-10-13, v1.2: Necessary changes to meet Yellow API changes

2019-12-29, v1.1.1: Class added

2019-05-05, v1.1.0: Initial GitHub-Release



## Developer

[Norbert Simon](https://nosi.de)
