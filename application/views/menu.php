<?php 
         
         $roleID = $this->session->userdata['Rid'];
         //print_r($this->mainModel->GetMenus($roleID));
         $actual_link = "$_SERVER[REQUEST_URI]";
         $Redirect = true;
         $pageID;
         foreach($this->mainModel->GetMenus($roleID) as $getMenuData){
          
            
            if(explode("/", $actual_link)[3] == explode("/",$getMenuData->Path)[0] || explode("/", $actual_link)[3] == "RoleController" || explode("/", $actual_link)[3] == "PagesController"){
                
                $pageID = $getMenuData->Page_Id;
                
                $Redirect = false;
                
            }
            
         }
         
         if($Redirect)
            redirect('main/login');
         
         
       
 ?>

<style type="text/css">
    /*************************************
 * generic styling for ALS elements
 ************************************/
    
    .als-container {
        position: relative;
        width: 100%;
       
        z-index: 0;
        margin-top: 12px;
    }
    
    .als-viewport {
        position: relative;
        overflow: hidden;
        margin: 0px auto;
        height: 50px !important;
    }
    
    .als-wrapper {
        position: relative;
        list-style: none;
    }
    
    .als-item {
        position: relative;
        display: block;
        text-align: center;
        cursor: pointer;
        float: left;
    }
    
    .als-prev,.als-next {
        position: absolute;
        cursor: pointer;
        clear: both;
    }
    
    
    
    #demo1 .als-item {
       
        min-height: 40px;
        text-align: center;
    }
    
    #demo1 .als-item img {
        display: block;
        margin: 0 auto;
        vertical-align: middle;
    }
    
    #demo1 .als-prev,
    #demo1 .als-next {
        top: 14px;
    }
    
    #demo1 .als-prev {
        left: 2%;
    }
    
    #demo1 .als-next {
        right: 2%;
    } 
</style>

<div class="als-container" id="demo1">
    <?php if(count($this->mainModel->GetMenus($roleID)) > 10){ ?>
    <span class="als-prev"><img src="<?php echo $base."/images/prevBtnImg.png" ?>" alt="prev" title="previous" /></span>
    <?php } ?>
    <div class="als-viewport">
        <ul class="als-wrapper">
           
        
        <?php foreach($this->mainModel->GetMenus($roleID) as $allmenus){ ?>
            
            
            <li <?php echo $this->activeMenu=="$allmenus->menuActive" ? "class=\"activeMenu als-item\"" : "class=\"als-item\""; ?>><a href="<?php echo "$base/index.php/$allmenus->Path"; ?>"><?php echo $allmenus->Page; ?></a>
                <div></div>
            </li>
            
        <?php } ?>
        
        
            </ul>
    </div>
    
    <?php if(count($this->mainModel->GetMenus($roleID)) > 10){ ?>
    <span class="als-next"><img src="<?php echo $base."/images/nextBtnImg.png" ?>" alt="next" title="next" /></span>
    <?php } ?>
</div>

<?php if(count($this->mainModel->GetMenus($roleID)) > 10){ ?>

<script type="text/javascript">
    $("#demo1").als({
	visible_items: 10,
	scrolling_items: 5,
	orientation: "horizontal",
	circular: "no",
	autoscroll: "no"
}); 
</script>

<?php } ?>