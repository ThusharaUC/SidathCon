<?php
/**
 * Created by Thush
 */
include '../core/init.php';
include '../models/dbConfig.php';
$db=DB::getInstance();
/*projects*/
$project="SELECT * FROM projects";
$presult=$db->query($project)->result();
$pcount=$db->query($project)->count();

/*not Done projects*/
$nproject="SELECT * FROM projects WHERE progress!='100%'";
$npresult=$db->query($nproject)->result();
$npcount=$db->query($nproject)->count();

/*Clients*/
$clist="SELECT * FROM client";
$cresult=$db->query($clist)->result();
$ccount=$db->query($clist)->count();

/*all photos*/
$photo="SELECT * FROM photos";
$photores=$db->query($photo)->result();
$photocnt=$db->query($photo)->count();

$donepro=$db->query("SELECT * FROM projects WHERE progress='100%'")->count();
$newpro=$db->query("SELECT * FROM projects WHERE progress='0%'")->count();
