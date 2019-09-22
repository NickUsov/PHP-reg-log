<?php
    include_once 'functions.php';
    if(isset($_POST['del_user'])){
        foreach($_POST['indexes'] as $id){
            $del = "delete from users where Id=$id";
            mysqli_query(connect(), $del);
        }
        $msg = "<span class='alert alert-success'>User deleted</span>";
    }    
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Admin panel</h3>
            </div>
            <form action="index.php?page=3" method="post">
                <div class="panel-body">
                    <?php
                        $link = connect();
                        $sel = 'select * from users';
                        $users_res = mysqli_query($link, $sel);
                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>login</th>
                                <th>password</th>
                                <th>email</th>
                                <th>is_admin</th>
                                <th>options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($users_res)):?>
                            <tr>
                                <td><?=$row['Id']?></td>    
                                <td><?php echo $row['login']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['is_admin']?></td>
                                <td>
                                    <input type="checkbox" name="indexes[]" value="<?=$row['Id']?>">
                                </td>
                            </tr>
                            <? endwhile;?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-danger" name="del_user" type="submit">Delete</button>
                    <?= $msg?:''?>
                </div>
            </form>
        </div>
    </div>
</div>