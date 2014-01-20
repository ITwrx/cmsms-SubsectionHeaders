<?php
#-------------------------------------------------------------------------
# Module: Subsection Headers
# Version: 0.1, released May 15 2013
#
# Copyright (c) 2013, Andries Information Services <info@andriesinfoserv.com>
# For Information, Support, Bug Reports, etc, please visit the
# module page at http://dev.cmsmadesimple.org/projects/subsectionhead
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2008 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------

class SubsectionHeaders extends CMSModule
{
	function SubsectionHeaders() {
	    $this->CMSModule();
	    $this->InstalledModules = array();
	    if ($GLOBALS['CMS_VERSION'] >= 1.6) {
		parent::CMSModule();
		$this->RegisterContentType('ContentAlias', dirname(__FILE__).DIRECTORY_SEPARATOR.'contenttype.subsectionheader.php',
			       'Subsection Header');	    
	    }
	}
	function GetName()
	{
		return 'SubsectionHeaders';
	}

	function GetFriendlyName()
	{
		return $this->Lang('friendlyname');
	}

	function IsPluginModule()
	{
		return false;
	}

	function HasAdmin()
	{
		return false;
	}

	function GetAdminDescription()
	{
		return '';
	}

	function GetVersion()
	{
		return '0.1';
	}

  	function MinimumCMSVersion()
  	{
    return '1.10';
  	}

    function Install()
    {
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
    }

    function Uninstall()
    {
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
    }

	function InstallPostMessage()
	{
		return $this->Lang('postinstall');
	}

	function Upgrade($oldversion, $newversion)
	{
		$gCms=cmsms();
		$db = $gCms->GetDb();
		$current_version = $oldversion;
		switch($current_version)
		{
			case '0.2';
			case '0.3':
				 $query = "update ". cms_db_prefix(). 
				 	"content_props cp, ". cms_db_prefix()."content c set cp.prop_name='alias_target' where c.content_id = cp.content_id and c.type='aliasmodule' and cp.prop_name='target'";
				 error_log($query);
				 $dbresult = $db->Execute($query);
			case '0.4':
			case '0.5':

		}
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
	}


	function SetParameters()
	{
			$this->RegisterContentType('SubsectionHeader', dirname(__FILE__).DIRECTORY_SEPARATOR.'contenttype.subsectionheader.php',
				       'Subsection Header');	    
	}


	function DoAction($action, $id, $params, $returnid = -1)
	{
		switch ($action)
		{
			case "default":
				break;

			case "defaultadmin":
				break;
		}
	}

	function GetHelp()
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'andriesinfoserv';
	}

	function GetAuthorEmail()
	{
		return 'info@andriesinfoserv.com';
	}

	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}
}

?>
