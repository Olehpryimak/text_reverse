<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container" style="margin: 5%">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <div class="well row">
                    <div class="form-group ">
                        <h3 style="text-align: center">Reverse digits</h3>
                        <form style="text-align: center;" action="/" method="post">
                            <br>
                            <input class="form-control" min="1"  type="number" name="digit" placeholder="Enter your digit">
                            <br>
                            <button type="submit" class="btn btn-success fa fa-exchange" name="sort1"> Reverse</button>
                        </form>
                    </div>
                </div>
                <div class="well row">
                    <div class="form-group ">
                        <h3 style="text-align: center">Find substring</h3>
                        <form style="text-align: center;" action="/" method="post">
                            <br>
                            <input class="form-control" type="text" name="string" placeholder="Enter your string">
                            <br>
                            <button type="submit" class="btn btn-success fa fa-search" name="sort2"> Find</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <?php if ($reverse1): ?>
                    <p style="text-align: center">
                    <p4>Результат з переведенням в String -   <?php echo $data['digit'] . " --- " . $reverse1; ?></p4>
                    </p>
                <?php endif ?>
                <?php if ($reverse2): ?>
                    <p style="text-align: center">
                    <p4>Результат без переведення в String -   <?php echo $data['digit'] . " --- " . $reverse2; ?></p4>
                    </p>
                <?php endif ?> 
                <?php if ($substr): ?>
                    <p style="text-align: center">
                    <p4>Максимально довга підстрока без повторень -   <?php echo $data['string'] . " --- " . $substr; ?></p4>
                    </p>
                <?php endif ?> 
            </div>


        </div>
    </div>
</section>