<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * partads - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) txmod (http://www.txmodxoops.org)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       txmod (http://www.txmodxoops.org)
 * @license         GNU GPL
 * @package         partads
 * @author          txmod (http://www.txmodxoops.org)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
if (!defined("XOOPS_ROOT_PATH")) {
die("XOOPS root path not defined");
}

if (!class_exists("XoopsPersistableObjectHandler")) {
include_once XOOPS_ROOT_PATH."/modules/partads/class/object.php";
}

class partads_pards extends XoopsObject
{
     //Constructor
     function __construct()
     {
          $this->XoopsObject();
          $this->initVar("pards_id",XOBJ_DTYPE_INT,null,false,8);
          $this->initVar("pards_title",XOBJ_DTYPE_TXTBOX,null,false);
          $this->initVar("pards_desc",XOBJ_DTYPE_TXTBOX,null,false);
          $this->initVar("pards_url",XOBJ_DTYPE_TXTBOX,null,false);
          $this->initVar("pards_image",XOBJ_DTYPE_TXTBOX,null,false);
          $this->initVar("pards_weight",XOBJ_DTYPE_INT,null,false,10);
          $this->initVar("pards_hits",XOBJ_DTYPE_INT,null,false,10);
          $this->initVar("pards_status",XOBJ_DTYPE_INT,null,false,1);
          $this->initVar("pards_date_expired",XOBJ_DTYPE_INT,null,false,10);
          $this->initVar("pards_submitter",XOBJ_DTYPE_INT,null,false,10);
          $this->initVar("pards_date_created",XOBJ_DTYPE_INT,null,false,10);
          $this->initVar("pards_online",XOBJ_DTYPE_INT,null,false,1);

          // Pour autoriser le html
          $this->initVar("dohtml", XOBJ_DTYPE_INT, 1, false);
     }

     function partads_pards()
     {
          $this->__construct();
     }
     
     function getURL()       
     {
         if ($GLOBALS['xoopsModuleConfig']['htaccess']) 
         {
             return urldecode('/' . $GLOBALS['xoopsModuleConfig']['baseurl'] . '/' . $this->getVar('pards_id') . '/'. str_replace(' ', '-', $this->getVar('pards_title')) . $GLOBALS['xoopsModuleConfig']['endofurl']);
         } else {
             return urldecode('/modules/partads/visit.php?pards='.$this->getVar('pards_id'));
         }
     }

     function getForm($action = false)
     {
          global $xoopsDB, $xoopsModuleConfig;
          if ($action === false) {
              $action = $_SERVER["REQUEST_URI"];
          }
          $title = $this->isNew() ? sprintf(_AM_PARTADS_PARDS_ADD) : sprintf(_AM_PARTADS_PARDS_EDIT);
          include_once(XOOPS_ROOT_PATH."/class/xoopsformloader.php");

          $form = new XoopsThemeForm($title, "form", $action, "post", true);
          $form->setExtra('enctype="multipart/form-data"');
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_TITLE, "pards_title", 50, 255, str_replace("&","&amp;",$this->getVar("pards_title"))), true);
          $editor_configs=array();
          $editor_configs["name"] = "pards_desc";
          $editor_configs["value"] = str_replace("&","&amp;",$this->getVar("pards_desc", "e")); 
          $editor_configs["rows"] = 20;
          $editor_configs["cols"] = 80;
          $editor_configs["width"] = "100%";
          $editor_configs["height"] = "400px";
          $editor_configs["editor"] = $xoopsModuleConfig["partads_editor"];
          $form->addElement( new XoopsFormEditor(_AM_PARTADS_PARDS_DESC, "pards_desc", $editor_configs), true );
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_URL, "pards_url", 50, 255, str_replace("&","&amp;",$this->getVar("pards_url"))), true);
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_IMAGE, "pards_image", 50, 255, str_replace("&","&amp;",$this->getVar("pards_image"))), true);
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_WEIGHT, "pards_weight", 50, 10, $this->getVar("pards_weight")), true);
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_HITS, "pards_hits", 50, 255, $this->getVar("pards_hits")), true);
          $form->addElement(new XoopsFormText(_AM_PARTADS_PARDS_STATUS, "pards_status", 50, 10, $this->getVar("pards_status")), true);
          $form->addElement(new XoopsFormTextDateSelect(_AM_PARTADS_PARDS_DATE_EXPIRED, "pards_date_expired", "", $this->getVar("pards_date_expired")));
          $form->addElement(new XoopsFormSelectUser(_AM_PARTADS_PARDS_SUBMITTER, "pards_submitter", false, $this->getVar("pards_submitter"), 1, false), true);
          $form->addElement(new XoopsFormTextDateSelect(_AM_PARTADS_PARDS_DATE_CREATED, "pards_date_created", "", $this->getVar("pards_date_created")));
          $pards_online = $this->isNew() ? 1 : $this->getVar("pards_online");
          $check_pards_online = new XoopsFormCheckBox(_AM_PARTADS_PARDS_ONLINE, "pards_online", $pards_online);
          $check_pards_online->addOption(1, " ");
          $form->addElement($check_pards_online);
          $form->addElement(new XoopsFormHidden("op", "save_pards"));
          $form->addElement(new XoopsFormButton("", "submit", _SUBMIT, "submit"));
          $form->display();
          return $form;
     }
}
class partadspartads_pardsHandler extends XoopsPersistableObjectHandler 
{
      function __construct(&$db)
      {
            parent::__construct($db, "partads_pards", "partads_pards", "pards_id", "pards_title");
      }
}
?>