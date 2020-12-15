<?php
include_once "seeder.php";

for ($x = 0; $x<sizeof((new Seeder())->getDemoData()); $x++) {
    print_r(((new Seeder())->getDemoData())[$x]);
    echo '<br>';
}
