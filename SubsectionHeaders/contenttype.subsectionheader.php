<?php 

class SubsectionHeader extends CMSModuleContentType
{
	var $attrs;
	
	function ModuleName()
	{
		return 'SubsectionHeaders';
	}
	
    function FriendlyName()
    {
      return $this->lang('friendlyname');
    }

    function SetProperties()
    {
      parent::SetProperties();
      $this->RemoveProperty('secure',0);
      $this->RemoveProperty('accesskey','');
      $this->RemoveProperty('title','');
      //$this->RemoveProperty('showinmenu',true);
      $this->RemoveProperty('cachable',true);
      $this->RemoveProperty('target','');
	  //$this->RemoveProperty('alias','');
	  $this->RemoveProperty('page_url','');
	  $this->SetURL(''); // url will be lost when going back to a content page.

      #Turn off caching
      $this->mCachable = false;
    }

    function HasUsableLink()
    {
		return false;
    }


	function RequiresAlias()
	{
		return FALSE;
	}

    function TabNames()
    {
      $res = array(lang('main'));
      if( check_permission(get_userid(),'Manage All Content') )
	{
	  $res[] = lang('options');
	}
      return $res;
    }

    function EditAsArray($adding = false, $tab = 0, $showadmin = false)
    {
      switch($tab)
	{
	case '0':
	  return $this->display_attributes($adding);
	  break;
	case '1':
	  return $this->display_attributes($adding,1);
	  break;
	}
    }

    function ValidateData()
    {
      $res = parent::ValidateData();
      if( is_array($res) && $this->mId < 1 )
	{
	  // some error occurred..
	  // reset the menu text
	  // and the alias
	  $this->mName = '';
	  $this->mMenuText = '';
	  $this->mAlias = '';
	}
      $this->mTemplateId = -1;
      return $res;
    }

    function GetURL($rewrite = true)
    {
	return '#';
    }

    function IsViewable()
    {
      return FALSE;
    }
}

# vim:ts=4 sw=4 noet
?>
