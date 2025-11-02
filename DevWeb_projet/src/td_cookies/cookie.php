<?php

//setcookie("chocolat", "valeurQuelconque", time() + 2 * 3600);
if (isset($_COOKIE["CHUCULA"])){
    echo 'cookies, YAYYYYYYYYYYYYYYYYYYYYYYYYY!!!!!!!!!!!!!';
}
else {
    setcookie("CHUCULA", "valeurQuelconque", time() + 2 * 3600, "/");
    echo 'MMMMMMMMMMMMMMM, DES BONS KOUKIZE, MIAME, MIAME ATABLE, JÉFIN!!!!';
}
