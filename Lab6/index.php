<?php
//get tasklist array from POST
$task_list = filter_input(INPUT_POST, 'tasklist',
        FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = array();

    // add some hard-coded starting values to make testing easier
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = array();
$task_index = 0;

echo $task_list . "<--zat-<br />";
//functions
function add_task($list,$new_task){
    // $var = array_push($list,$new_task);
    // return $var;

  //   this works
    $list[]=$new_task;
  return $list ;
};

//process
  switch( $action ) {
      case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask');
//declare function
        function addTask($var,&$arr){
          array_push($arr,  $var);
          return  $arr;
      }
      //call function
        addTask($new_task, $task_list);
        break;
      };


// echo 'checking result of save funct'. $result;




switch( $action ) {
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
//declare function
        function deleteTask($var,&$array){
          if ($var === NULL || $var === FALSE) {
              $errors[] = 'The task cannot be deleted.';
          } else {
              unset($array[$var]);
              $array = array_values($array);
          }
        }
//call function

        deleteTask($task_index,$task_list);
        break;

    case 'Modify Task':
      $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
      $task_to_modify = $task_list[ $task_index];
      echo "var check:$ task to modify:" + $task_to_modify;
      echo 'this should be same index num BEFRE SAVE:' . $task_index;


    case 'Save Changes':


        $savedTask = filter_input(INPUT_POST, 'modifiedtask');
        if(empty($savedTask)){
          echo "nothing to save";
        }else{
          echo ' index num on SAVE:' . $task_index . ' task to modify?:' . $task_to_modify;
          $task_list[$task_index] =  $savedTask;
            //unset($task_list[$task_index]);
          // array_push($task_list,$savedTask);
        }

    break;

    case 'Cancel Changes':
      $task_to_modify="";

    break;

    case 'Promote Task':
    $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
    $taskForPromoton;
    function promoteTask($arg, &$array){

      if ($arg === NULL || $arg === FALSE) {
          $errors[] = 'The task cannot be promoted.';
      } else {
      $taskForPromoton = $array[$arg];
      unset($array[$arg]);
      array_unshift($array,$taskForPromoton);


    }
    promoteTask($task_index,$task_list);

  }
    break;

    case 'Sort Tasks':
    sort($task_list);
    break;


}

include('task_list.php');
?>
