<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">

        <h2>Panel Heading</h2>
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Name:  <?php echo $tasks['name'];?></p>
                <p>Email: <?php echo $tasks['email'];?></p>
                <p>Изменить задачу</p>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="/template/images/19621036_239521669887890_1208747178532153914_o.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
                    </div>
                    <div class="col-sm-8"><?php echo $tasks['task'];?></div>
                </div>
            </div>
        </div>

    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>