<?php

require '../database/ConnectionFactory.php';

class TaskService{
    
    public static function listTasks(){
        $db = ConnectionFactory::getDB();
        $tasks  = array();
        foreach($db->tasks() as $task){
            $tasks[]  = array(
                'id'=> $tasks['id'],
                'description'=> $task['description'],
                'done'=> $tasks['done']
                );
        }
        
        $tasks;
    }
}

?>