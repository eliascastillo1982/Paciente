<?php

function getGender222()
{
	//do not use this function
	exit;
	$data = '<option value="">Select Gender</option>';

	$data = $data . '<option value="Masculino">Male</option>';
	$data = $data . '<option value="Femenino">Female</option>';
	$data = $data . '<option value="Otro">Other</option>';

	return $data;
}

function getGender($gender = '')
{
	$data = '<option value="">Selecciona Género</option>';

	$arr = array("Masculino", "Femenino", "Otro");

	$i = 0;
	$size = sizeof($arr);

	for ($i = 0; $i < $size; $i++) {
		if ($gender == $arr[$i]) {
			$data = $data . '<option selected="selected" value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
		} else {
			$data = $data . '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
		}
	}

	return $data;
}


function getMedicines($con, $medicineId = 0)
{

	$query = "select `id`, `medicine_name` from `medicines` 
	order by `medicine_name` asc;";

	$stmt = $con->prepare($query);
	try {
		$stmt->execute();
	} catch (PDOException $ex) {
		echo $ex->getTraceAsString();
		echo $ex->getMessage();
		exit;
	}

	$data = '<option value="">Selecciona Medicina</option>';

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if ($medicineId == $row['id']) {
			$data = $data . '<option selected="selected" value="' . $row['id'] . '">' . $row['medicine_name'] . '</option>';
		} else {
			$data = $data . '<option value="' . $row['id'] . '">' . $row['medicine_name'] . '</option>';
		}
	}

	return $data;
}


function getPatients($con)
{
	$query = "select `id`, `patient_name`, `phone_number` 
from `patients` order by `patient_name` asc;";

	$stmt = $con->prepare($query);
	try {
		$stmt->execute();
	} catch (PDOException $ex) {
		echo $ex->getTraceAsString();
		echo $ex->getMessage();
		exit;
	}

	$data = '<option value="">Selecciona Paciente</option>';

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data = $data . '<option value="' . $row['id'] . '">' . $row['patient_name'] . ' (' . $row['phone_number'] . ')' . '</option>';
	}

	return $data;
}


function getDateTextBox($label, $dateId)
{

	$d = '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                <div class="form-group">
                  <label>' . $label . '</label>
                  <div class="input-group rounded-0 date" 
                  id="" 
                  data-target-input="nearest">
                  <input type="text" class="form-control form-control-sm rounded-0 datetimepicker-input" data-toggle="datetimepicker" 
data-target="#' . $dateId . '" name="' . $dateId . '" id="' . $dateId . '" required="required" autocomplete="off"/>
                  <div class="input-group-append rounded-0" 
                  data-target="#' . $dateId . '" 
                  data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </div>';

	return $d;
}
