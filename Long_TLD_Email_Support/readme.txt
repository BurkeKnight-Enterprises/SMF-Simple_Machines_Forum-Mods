[b]Long TLD Email Support[/b]

[b]Latest Version:[/b] 1.0
[b]Compatible With SMF:[/b] 2.0.x[hr]

Made by: [url=http://www.simplemachines.org/community/index.php?action=profile;u=150637]BurkeKnight[/url] - [url=http://www.burkeknight.com/]BurkeKnight Enterprises[/url]
For Support: The mod's Support topice at SMF, or at [url=http://www.burkeknight.com/]BurkeKnight Enterprises[/url].[hr]

This is a simple mod that allows support for long TLD email addresses.
When email address support in SMF was written years ago, the longest TLD was 6 letters, with absolutely no sign of new TLDs.
This was discussed on the [url=http://www.simplemachines.org/community/index.php?topic=501395.0]SMF site[/url] by a member, and was originally posted by: [url=http://www.simplemachines.org/community/index.php?action=profile;u=93211]Arantor[/url]

[hr]

Credit:
[url=http://www.simplemachines.org/community/index.php?action=profile;u=93211]Arantor[/url] - For posting the edit.

[hr]

[center][url=http://creativecommons.org/licenses/by-sa/3.0/deed.en_US][img]http://i.creativecommons.org/l/by-sa/3.0/88x31.png[/img][/url]
This work is licensed under a [url=http://creativecommons.org/licenses/by-sa/3.0/deed.en_US]Creative Commons Attribution-ShareAlike 3.0 Unported License[/url].[/center]

For manual installation:

Sources/Post.php
[code=find]					elseif (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_REQUEST['email']) == 0)[/code]

[code=replace]					elseif (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_REQUEST['email']) == 0)[/code]

[code=find]				if (!allowedTo('moderate_forum') && preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['email']) == 0)[/code]

[code=replace]				if (!allowedTo('moderate_forum') && preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['email']) == 0)[/code]

Sources/Profile-Modify.php
[code=find]				if ($row['mask'] == 'email' && (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $value) === 0 || strlen($value) > 255))[/code]

[code=replace]				if ($row['mask'] == 'email' && (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $value) === 0 || strlen($value) > 255))[/code]

[code=find]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $email) == 0)[/code]

[code=replace]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $email) == 0)[/code]

Sources/Register.php
[code=find]				if ($row['mask'] == 'email' && (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $value) === 0 || strlen($value) > 255))[/code]

[code=replace]				if ($row['mask'] == 'email' && (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $value) === 0 || strlen($value) > 255))[/code]

[code=find]		if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['new_email']) == 0)[/code]

[code=replace]		if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['new_email']) == 0)[/code]

Sources/SendTopic.php
[code=find]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['y_email']) == 0)[/code]

[code=replace]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['y_email']) == 0)[/code]

[code=find]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['r_email']) == 0)[/code]

[code=replace]	if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['r_email']) == 0)[/code]

[code=find]			if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['y_email']) == 0)[/code]

[code=replace]			if (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['y_email']) == 0)[/code]

[code=find]		elseif (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $_POST['email']) == 0)[/code]

[code=replace]		elseif (preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $_POST['email']) == 0)[/code]

Sources/Subs-Members.php
[code=find]	if (empty($regOptions['email']) || preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,6})$~', $regOptions['email']) === 0 || strlen($regOptions['email']) > 255)[/code]

[code=replace]	if (empty($regOptions['email']) || preg_match('~^[0-9A-Za-z=_+\-/][0-9A-Za-z=_\'+\-/\.]*@[\w\-]+(\.[\w\-]+)*(\.[\w]{2,16})$~', $regOptions['email']) === 0 || strlen($regOptions['email']) > 255)[/code]