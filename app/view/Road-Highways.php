<?php
include '../templates/header.php';

?>

<section class="all-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titles">
                    <h6>WE PROUD OF OUR</h6>
                    <h2>ROAD & HIGHWAYS PROJECTS</h2>
                </div>
                <!-- end title -->
            </div>
            <!-- end col-12 -->


        </div>
        <!-- end row -->

        <ul>
            <?php
            include '../core/init.php';
            include '../models/dbConfig.php';
            $db=DB::getInstance();
            $sql="SELECT * FROM projects WHERE p_type='Road & Highways'";
            $result=$db->query($sql)->result();
            $count=$db->query($sql)->count();
            if ($count>0) {
                for ($i = 0; $i < $count; $i++) {
//var_dump($presult);
                    ?>
                    <li>
                        <figure><img src="<?php echo SCRIPT_ROOT;
                            echo $result[$i]->p_photo ?>" alt="Image">
                            <figcaption>
                                <div class="table">
                                    <div style="color: white" class="inner"><?php echo str_replace("_"," ",$result[$i]->p_name) ?></div>
                                </div>
                            </figcaption>
                        </figure>

                        <div class="progress">
                            <div class="progress-bar wow " data-wow-delay="0.1s" role="progressbar" aria-valuenow="4"
                                 aria-valuemin="0" aria-valuemax="100"
                                 style="width: <?php echo $result[$i]->progress ?>%"> <?php echo $result[$i]->progress ?>%
                            </div>
                            <!-- end progress-bar -->
                        </div>
                        <!-- end progress -->
                        <div class="info">
                            <h5><?php echo $result[$i]->p_name ?></h5>
                            <span class="type"><?php echo $result[$i]->p_type ?></span>
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td width="43%" height="27" valign="top"><span><b>Location</b></span></td>
                                    <td width="4%" valign="top"><span>:</span></td>
                                    <td width="63%" valign="top">
                                        <span>&nbsp; <?php echo $result[$i]->p_location ?></span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td width="43%" height="27" valign="top"><span><b>Prices</b></span></td>
                                    <td width="4%" valign="top"><span>: </span></td>
                                    <td width="63%" valign="top">
                                        <span>&nbsp;Rs:&nbsp; <?php echo number_format($result[$i]->p_value, 2); ?></span>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td width="43%" height="27" valign="top"><span><b>Duration</b></span></td>
                                    <td width="4%" valign="top"><span>:</span></td>
                                    <td width="63%" valign="top">
                                        <span>&nbsp;<?php echo $result[$i]->p_client ?></span><br><br></td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="search-result.php?p-name=<?php echo $result[$i]->p_name?>">DETAIL</a>
                        </div>
                        <!-- end info -->
                    </li>
                    <!-- end project -->
                <?php }
            }?>
            <!-- end project -->
        </ul>

        <!-- end projects -->
    </div>
    <!-- end container -->
</section>








<?php
include '../templates/footer.php';
?>;