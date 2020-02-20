<?php
include 'dbconnection1.php';
$select_query = "select * from admission,admission_form where admission_form.id = admission.id";
$select_query1 = "delete from admission_form where id='VGECHOSTEL01'";
$select_query_run1= mysqli_query($connection1,$select_query1);
                        $select_query_run= mysqli_query($connection1,$select_query);
                       
                        while ($result = mysqli_fetch_array($select_query_run,MYSQLI_ASSOC)){
                        	echo $result['branch'];
                        	echo $result['email'];
                        }
                            ?>
