<?php
include 'model/delete_model.php';
    if(isset($_POST['delete']))
    {
       $un=$_POST["usname"];
	   
        
		
        $op=$_POST["op"];
		
        
		if($op=='enable')
		{
			
			$del=new Delete();
			$deluser= $del->enableu($un);
		}
		elseif($op=='disable')
		{
			
			$del=new Delete();
            $deluser= $del->disableu($un);
		}
		elseif($op=='delete')
		{
			
			    $del=new Delete();
				$deluser= $del->delete_U($un);
		}
		else
		{
			echo "pleasse select the operation";
		}
		
		
    }
	//Delete Student Code 
    if(isset($_POST['delete_S']))
    {
        $sid=$_POST["Stid"];
        $op=$_POST["op"];
		
        
		if($op=='enable')
		{
			
			$del=new Delete();
			$deluser= $del->enable($sid);
		}
		elseif($op=='disable')
		{
			
			$del=new Delete();
			$deluser= $del->disable($sid);
		}
		elseif($op=='delete')
		{
				
				$del=new Delete();
			$deluser= $del->delete_S($sid);
		}
		else
		{
			echo "pleasse select the operation";
		}
		
    }
	
	//delete Certificate Code
    if(isset($_POST['delete_Certificate']))
    {
        $sidd=$_POST["Stid"];
        $opp=$_POST["op"];
		
        
		if($opp=='enable')
		{
			
			$del=new Delete();
			$deluser= $del->enablec($sidd);
		}
		elseif($opp=='disable')
		{
			
			$del=new Delete();
			$deluser= $del->disablec($sidd);
		}
		elseif($opp=='delete')
		{
				
				$del=new Delete();
			$deluser= $del->delete_Certificate($sidd);
		}
		else
		{
			echo "pleasse select the operation";
		}
		
    }
	
    
   
        






























