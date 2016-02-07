<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016 006
 * Time: 4:58 PM
 */




global $pdo;
$sql = 'SELECT name, school, major, exp FROM entry';

$result = $pdo->query($sql);

$row_num = $result->rowCount();
$row_num /= 2;

# setting the fetch mode
$result->setFetchMode(PDO::FETCH_ASSOC);


//while($row = $result->fetch()) {
//    echo $row['name'] . "<br>";
//    echo $row['exp'] . "<br>";
//    echo $row['school'] . "<br>";
//}

?>



<div id="page">
    <div id="page-header-container">
        <div id="page-header">
            <div class="view-des">
                <p>Designer</p>
            </div>
            <div class="view-dir">
                <p>Director</p>
            </div>
            <div class="view-eng">
                <p>Engineer</p>
            </div>

        </div>
    </div>

    <!-- page-body -->
    <div id="page-body">
        <div id="page-left">
            <div id="page-left-title">
                <p>Designer</p>
            </div>
            <div id="page-left-content">
                <ul class="page-left-list">
                    <li class="selected-orange">3D</li>
                    <li>영상</li>
                    <li>포토샵</li>
                    <li>일러스트</li>
                </ul>
            </div>
        </div>

        <div id="page-right">
            <div id="page-content">

                <?php for($i = 0; $i < $row_num; $i++) { ?>

                    <div class="page-content-row">
                        <div id="page-content-row-bg">
                        </div>


                        <div class="pentry">
                            <?php
                                $row = $result->fetch();
                            ?>
                            <div class="pentry-left">
                                photo
                            </div>
                            <div class="pentry-right">
                                <div class="pentry-name">
                                    <p>
                                       <?= $row['name'] ?>
                                    </p>
                                </div>
                                <div class="pentry-school">
                                    <p>
                                        <?= $row['school'] ?>
                                    </p>
                                </div>
                                <div class="pentry-exp">
                                    <p>
                                        <?= $row['exp'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pentry">
                            <?php
                                $row = $result->fetch();
                            ?>
                            <div class="pentry-left">
                                photo
                            </div>
                            <div class="pentry-right">
                                <div class="pentry-name">
                                    <p>
                                        <?= $row['name'] ?>
                                    </p>
                                </div>
                                <div class="pentry-school">
                                    <p>
                                        <?= $row['school'] ?>
                                    </p>
                                </div>
                                <div class="pentry-exp">
                                    <p>
                                        <?= $row['exp'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>

</div>