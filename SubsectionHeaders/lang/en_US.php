<?php
$lang['edit_orig_content']=' Click here to edit original content.';
$lang['postinstall']='The Subsection Headers Module has been installed.';
$lang['friendlyname']='Subsection Headers';
$lang['target']='Target';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['changelog']='<ul>  
		<li>Version 0.1 - 15 May 2013. Initial release.</li></ul>';
$lang['help']='<h3>What does this do?</h3>
		<p>This module simply creates a new content type called Subsection Header.</p><p>We just needed a way to have an additional section header content type for special use cases and this method was the most obvious at the time.</p><p>The code for this module is a lightly modified mashup of the core "section header" content type and the Content Aliases module (as a lightweight example of how to create/clone a content type without hacking the core). So thanks to the devs of those components.</p>
		<p>After installing the module, you will have a new section header content type available called "Subsection Header". First you must import the menu or menus you are using in your template into the database via the menu manager. Then, also in menu manager, in your newly imported menu template, duplicate and subsequently alter the duplicated sectionheader related smarty and html by adding "sub" in front of "sectionheader".</p><p>Then use it the same way you would use the section header content type and style it differently in your style sheet(assuming that\'s the functionality you were seeking).</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the developer forge
at <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, andriesinfoserv, will probably be hard to find in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>However, please feel free to <a href="http://www.andriesinfoserv.com/contact_ais.html">email</a> the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p><a href="http://www.andriesinfoserv.com/contact_ais.html">Andries Information Services</a></p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
?>