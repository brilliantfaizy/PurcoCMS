
<?php 
    
         $roleID = $this->session->userdata['Rid'];
         //print_r($this->mainModel->GetMenus($roleID));
         $actual_link = "$_SERVER[REQUEST_URI]";
         $Redirect = true;
         $pageID;
         foreach($this->mainModel->GetMenus($roleID) as $getMenuData){
          
            
            if(explode("/", $actual_link)[3] == explode("/",$getMenuData->Path)[0] || explode("/", $actual_link)[3] == "RoleController" || explode("/", $actual_link)[3] == "PagesController"){
                
                
                if(explode("/", $actual_link)[3] == "RoleController" || explode("/", $actual_link)[3] == "PagesController"){
                    
                    $pageID = 16;
                    
                } else {
                    
                    $pageID = $getMenuData->Page_Id;
                }
                
                $Redirect = false;
                
            }
            
         }
         
        
?>

<ul>

<?php
    
    //print_r($this->mainModel->GetSubMenus($pageID,$roleID));
    
    

 foreach($this->mainModel->GetSubMenus($pageID,$roleID) as $allmenus){
    
        if(explode("/", $actual_link)[3]."/".explode("/", $actual_link)[4] == $allmenus->Menu_Controller."/".$allmenus->Menu_Function || explode("/", $actual_link)[3]."/".explode("/", $actual_link)[4] == $allmenus->Menu_Controller."/viewupdate" || explode("/", $actual_link)[3]."/".explode("/", $actual_link)[4] == $allmenus->Menu_Controller."/viewupdaterole"){
        //if(explode("/", $actual_link)[3] == $allmenus->Menu_Controller){
        
         $this->SubMenus = $allmenus;
        
         
       
    }
    ?>

<li><a <?php echo $innerMenuActive==$allmenus->Menu_Function ? "class=\"innerMenuActive\"" : ""; ?> href='<?php echo "$base/index.php/$allmenus->Menu_Controller/$allmenus->Menu_Function"; ?>'><?php echo $allmenus->Menu_Title; ?></a></li>

<?php } ?>

</ul>