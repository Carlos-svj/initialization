<?php
    include ("module/user/model/DAOUser.php");
    session_start();
    //probar en buit el echo hola 

    switch($_GET['op']){
        case 'list';
        $data = 'hola ctrl user';
         die('<script> console.log('.json_encode ($data) .');</script>');
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;
            
        case 'create';
            include("module/user/model/validate.php");
            
            $check = true;
            //
            if (isset($_POST['create'])){
                $check=validate();
                
                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->insert_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
            //primer el echo dollar get  id, el formulari, fer validacio en javascript despres php
            $check = true;
            //antes de validar ho te que entrar al php
            if (isset($_POST['update'])){
                $check=validate();//dins del validate echo hola vore si el torna true/false.
                
                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->update_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){ 
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';//redirecció
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;
            
        case 'read';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                	$rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }