<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <?php foreach ($latestTasks as $task): ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Задача</th>
                <th>Статус</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="/template/images/19621036_239521669887890_1208747178532153914_o.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                <td> <?php echo $task['name'];?><br></td>
                <td> <?php echo $task['email'];?><br></td>
                <td> <?php echo $task['task'];?><br></td>
                <td> <?php echo $task['status'];?><br></td>
                <td><button type="button" class="btn btn-primary"><a href="/task/<?php echo $task['id'];?>">
                           <font color="white">Просмотреть задачу - <?php echo $task['name'];?></font>
                        </a></button></td>
            </tr>

            </tbody>
        </table>
    <?php endforeach; ?>
</div>

<ul class="pagination">
    <li><a href="#">1</a></li>
    <li class="active"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
</ul>

<?php include ROOT . '/views/layouts/footer.php'; ?>




