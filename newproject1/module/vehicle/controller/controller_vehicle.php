<?php
include("module/vehicle/model/DAOVehicle.php");
//probar en buit el echo hola 

switch ($_GET['op']) {
    case 'list';

        try {
            $daovehicle = new DAOVehicle();
            $rdo = $daovehicle->select_all_vehicle();
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        /*  echo $rdo; */

        if ($rdo) {
            include("module/vehicle/view/list_vehicle.php");
        } else {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        break;

        /*  $data = 'hola DAO user';
             die('script>console.log('.json_encode($data).');<script>'); */

    case 'create';

        include("module/vehicle/model/validate.php");

        // echo '<script language="javascript">alert("Ha entrado correctamente")</script>';

        $check = true;
        //
        if (isset($_POST['create'])) {
            // echo '<script language="javascript">alert("hola post user ")</script>';
            /* $data = 'hola hola aci pete 
                ';
                die('<script<console.log('.json_encode($data).');</script>'); */

            // $check=validate();

            $check = true;
            if ($check) {


                $_SESSION['vehicle'] = $_POST;
                try {

                    $daovehicle = new DAOVehicle();
                    $rdo = $daovehicle->insert_vehicle($_POST);
                } catch (Exception $e) {

                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_vehicle&op=list';
                    die('<script>window.location.href="' . $callback . '";</script>');
                } else {
                    echo '<script language="javascript">alert("error DAO")</script>';
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        }
        include("module/vehicle/view/create_vehicle.php");
        break;

    case 'update';
        //primer el echo dollar get  id, el formulari, fer validacio en javascript despres php
        $check = true;
        //antes de validar ho te que entrar al php
        if ($_POST) {
            include("module/vehicle/model/validate.php");
            // $check = validate(); //dins del validate echo hola vore si el torna true/false.
            $check = validate();
            // echo "<script>alert('".json_encode($check)."')</script>";
            if ($check == false) {
                // echo "<script>alert('ye klkuouou')</script>";
                $_SESSION['vehicle'] = $_POST;
                try {
                    // echo "<script>alert('ye klk')</script>";
                    $daovehicle = new DAOVehicle();
                    $rdo = $daovehicle->update_vehicle($_POST);
                    // echo $rdo;
                    // exit;
                } catch (Exception $e) {

                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                    // $callback = 'index.php?page=controller_vehicle&op=list';
                    // die('<script>window.location.href="'.$callback .'";</script>');
                }

                if ($rdo) {
                    echo "<script>alert('ye klk')</script>";
                    echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';

                    $callback = 'index.php?page=controller_vehicle&op=list'; //redirecció
                    die('<script>window.location.href="' . $callback . '";</script>');
                } else {
                    // $data = 'hola hola aci pete 
                    // // ';
                    // die('<script<console.log(' . json_encode($data) . ');</script>');
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        } else {

            try {
                $daovehicle = new DAOVehicle();
                $rdo = $daovehicle->select_vehicle($_GET['id']);
                $vehicle = get_object_vars($rdo);

                //comrpovar si entra en el validate

                //i si tens el objecte 
                // echo '<script language="javascript">alert("Hola controller update, tens el objecte ")</script>';


            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if (!$rdo) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                include("module/vehicle/view/update_vehicle.php");
            }
        }
        break;

    case 'read';
        /* $data = 'hola read user';
             die('script>console.log('.json_encode($data).');<script>'); */
        try {
            $daovehicle = new DAOVehicle();
            $rdo = $daovehicle->select_vehicle($_GET['id']);
            $vehicle = get_object_vars($rdo);
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/vehicle/view/read_vehicle.php");
        }
        break;

    case 'delete';
        if (isset($_POST['delete'])) {
            try {
                $daovehicle = new DAOvehicle();
                $rdo = $daovehicle->delete_vehicle($_GET['id']);
            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                $callback = 'index.php?page=controller_vehicle&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }

        include("module/vehicle/view/delete_vehicle.php");
        break;
    default;
        include("view/inc/error404.php");
        break;
}
