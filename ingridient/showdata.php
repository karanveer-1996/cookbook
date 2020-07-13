<?php
        // showing data on console to user

            require 'select.php';
            
            
            // print_r($fetch);

            

            foreach($fetch as $element){
                echo "<ul>";
                // echo "<input type='text' name='itemtodelete' value = '$itemid'";
                echo "<li>".$element["name"]." </li>";?>
                <form action="recepie.php" method="POST">
                    <input type="hidden" name="delete" value="<?php echo $element['id'];?>">
                    <button class="btn btn-danger my-2" type="submit" name="del" value="submit">delete</button>
                </form>

                <?php echo "</ul>";
            }

            // deleting a particular item from ingridient section
            if(isset($_POST['delete'])){              
                $deleteid = $_POST['delete'];
                // echo "ID TO DELETE :".$deleteid;
                $id = mysqli_real_escape_string($conn,$deleteid);
                $sql = "DELETE FROM ingridents WHERE id = $id";
                $query = mysqli_query($conn,$sql);
                if(!$query){
                    echo "ERROR : ".mysqli_error($conn);
                }else{
                    header('Location: recepie.php');
                }
            }
            
            


            ?>