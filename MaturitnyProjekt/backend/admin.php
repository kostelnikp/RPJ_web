<?php

session_start();



include("connection.php");
include("functions.php");

$data_pouzivatela = check_login($con);

?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Ubytovanie SPŠE PREŠOV</title>
    <link rel="icon" href="../Obrazky/Logo2.png">
    <link rel="stylesheet" type="text/css" href="../html/css/Main.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Admin.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Domov.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<!--MAIN NAV-->

<div class="section">
    <div class="logo">
        <a href="../backend/admin.php"><img src="../Obrazky/Group 5.svg"></a>
    </div>
    <nav class="navigation">
        <a href="logout.php">ODHLÁSIŤ SA</a>
    </nav>

    <div class="toggleBox">
        <a href="#" onclick="showMenu()">
            <img class="menu" src="https://icons-for-free.com/iconfiles/png/512/navicon-131965017486542289.png"
                 style="width: 40px;height: 40px;">
            <img class="close"
                 src="https://cdn0.iconfinder.com/data/icons/web-app-ui-1/64/menu-preset-interface-ui_icon-49-512.png"
                 style="width: 40px;height: 40px;"></a>
    </div>
</div>


<div class="disable">
    <div class="domov">
        <h1>Vitaj, <?php echo $data_pouzivatela['meno']; ?><br></h1>

    </div>

    <div class="col-md-1"></div>
    <div class="col-md-10 well">

        <div class="domov"><h2>Žiadosti o ubytovanie</h2></div>

        <div class="col-md-1"></div>
        <div class="col-md-12" >
            <form method="POST" action="">
                <div class="form-inline">
                    <label>Trieda:</label>
                    <select class="form-control" name="trieda">
                        <option value='null'>Všetky</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="SA">SA</option>
                        <option value="SB">SB</option>
                        <option value="SC">SC</option>
                        <option value="F">F</option>
                    </select>
                    <label>Ročník:</label>
                    <select class="form-control" name="rocnik">

                        <option value='null'>Všetky</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                    </select>

                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>

                </div>
            </form>
            <br/><br/>
            <table class="table table-striped table-bordered table-hover  table-responsive-md"  id="datatableid"  >
                <thead class="thead-dark">
                <th>ID</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Trieda</th>
                <th>Ročník</th>
                <th>Vzdialenosť od internátu</th>
                <th>Dátum podania prihlášky</th>
                </thead>
                <tbody id="datatableid">
                <?php include 'adminfilter.php'
                ?>

                </tbody>
                <br>
            </table>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>




<script>

    function showMenu() {
        document.querySelector('.navigation').classList.toggle('active');

        document.querySelector('.close').classList.toggle('show');
        document.querySelector('.disable').classList.toggle('hide');

    }
    $(document).ready(function() {
        $('#datatableid').DataTable( {
            "language": {
                "info": "Záznamy _START_ až _END_ z celkom _TOTAL_",
                "infoEmpty": "Záznamy 0 až 0 z celkom 0 ",
                "infoFiltered": "(vyfiltrované spomedzi _MAX_ záznamov)",
                "infoThousands": " ",
                "lengthMenu": "Zobraz _MENU_ záznamov",
                "loadingRecords": "Načítavam...",
                "processing": "Spracúvam...",
                "search": "Hľadať:",
                "zeroRecords": "Nenašli sa žiadne vyhovujúce záznamy",
                "paginate": {
                    "first": "Prvá",
                    "last": "Posledná",
                    "next": "Nasledujúca",
                    "previous": "Predchádzajúca"
                },
                "aria": {
                    "sortAscending": ": aktivujte na zoradenie stĺpca vzostupne",
                    "sortDescending": ": aktivujte na zoradenie stĺpca zostupne"
                },
                "autoFill": {
                    "cancel": "Zrušiť",
                    "fill": "Vyplniť všetky bunky s <i>%d<i><\/i><\/i>",
                    "fillHorizontal": "Vyplniť bunky horizontálne",
                    "fillVertical": "Vyplniť bunky vertikálne"
                },
                "buttons": {
                    "collection": "Kolekcia <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                    "colvisRestore": "Obnoviť viditeľnosť",
                    "copy": "Kopírovať",
                    "copySuccess": {
                        "1": "Skopírovaný 1 riadok do schránky",
                        "_": "Skopírovaných %d riadkov do schránky"
                    },
                    "copyTitle": "Kopírovať do schránky",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Zobraziť všetky riadky",
                        "_": "Zobraziť %d riadkov"
                    },
                    "pdf": "PDF",
                    "print": "Tlačiť",
                    "colvis": "Viditeľnosť stĺpcov",
                    "copyKeys": "Stlačte CTRL alebo u2318 + C pre kopírovanie dát tabuľky do systémovej schránky. Pre zrušenie kliknite na túto správu alebo stlačte ESC."
                },
                "searchBuilder": {
                    "add": "Pridať Podmienku",
                    "clearAll": "Zmazať všetko",
                    "condition": "Podmienka",
                    "conditions": {
                        "date": {
                            "after": "Po",
                            "before": "Pred",
                            "between": "Medzi",
                            "empty": "Prázdne",
                            "equals": "Rovná sa",
                            "not": "Nie je",
                            "notBetween": "Nie je medzi",
                            "notEmpty": "Nie je prázdne"
                        },
                        "number": {
                            "between": "Medzi",
                            "empty": "Prázdne",
                            "equals": "Rovná sa",
                            "gt": "Väčšie ako",
                            "gte": "Väčšie alebo rovnaké ako",
                            "lt": "Menšie ako",
                            "lte": "Menšie alebo rovnaké ako",
                            "not": "Nie",
                            "notBetween": "Nie medzi",
                            "notEmpty": "Nie prázdne"
                        },
                        "string": {
                            "contains": "Obsahuje",
                            "empty": "Prázdne",
                            "endsWith": "Končí s",
                            "equals": "Rovná sa",
                            "not": "Nie je",
                            "notEmpty": "Nie je prázdne",
                            "startsWith": "Začína s"
                        },
                        "array": {
                            "equals": "Rovná sa",
                            "empty": "Prázdne",
                            "contains": "Obsahuje",
                            "not": "Nie je",
                            "notEmpty": "Nie je prázdne",
                            "without": "Bez"
                        }
                    },
                    "data": "Dáta",
                    "deleteTitle": "Vymazať filtrovacie pravidlo",
                    "logicAnd": "A",
                    "logicOr": "Alebo",
                    "value": "Hodnota",
                    "button": {
                        "0": "Rozšírený filter",
                        "_": "Rozšírený filter (%d)"
                    },
                    "leftTitle": "Podmienky odseku",
                    "rightTitle": "Podmienky v odseku",
                    "title": {
                        "0": "Rozšírený filter",
                        "_": "Rozšírený filter (%d)"
                    }
                },
                "searchPanes": {
                    "clearMessage": "Vymazať všetko",
                    "collapse": {
                        "0": "Vyhľadávacie Panely",
                        "_": "Vyhľadávacie Panely (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Žiadne Vyhľadávacie Panely",
                    "loadMessage": "Načítavam Vyhľadávacie Panely",
                    "title": "Aktívnych Filtrov - %"
                },
                "select": {
                    "cells": {
                        "1": "1 zvolená bunka",
                        "_": "%d vybraných buniek"
                    },
                    "columns": {
                        "1": "1 vybraný stĺpec",
                        "_": "%d vybraných stĺpcov"
                    }
                },
                "thousands": " ",
                "datetime": {
                    "next": "Ďalší",
                    "hours": "Hodiny",
                    "minutes": "Minúty",
                    "seconds": "Sekundy",
                    "unknown": "Neznámy",
                    "amPm": [
                        "am",
                        "pm"
                    ],
                    "previous": "Predchádzajúci",
                    "months": {
                        "0": "Január",
                        "1": "Feburár",
                        "10": "November",
                        "11": "December",
                        "2": "Marec",
                        "3": "Apríl",
                        "4": "Máj",
                        "5": "Jún",
                        "6": "Júl",
                        "7": "August",
                        "8": "September",
                        "9": "Október"
                    },
                    "weekdays": [
                        "Nedeľa",
                        "Pondelok",
                        "Utorok",
                        "Streda",
                        "Štvrtok",
                        "Piatok",
                        "Sobota"
                    ]
                },
                "editor": {
                    "close": "Zavrieť",
                    "create": {
                        "button": "Nový",
                        "title": "Vytvoriť nový záznam",
                        "submit": "Vytvoriť"
                    },
                    "edit": {
                        "button": "Editovať",
                        "title": "Editovať záznam",
                        "submit": "Aktualizovať"
                    },
                    "remove": {
                        "button": "Vymazať",
                        "title": "Vymazať",
                        "submit": "Vymazať",
                        "confirm": {
                            "_": "Určite chcete vymazať %d riadkov?",
                            "1": "Určite chcete vymazať 1 riadok?"
                        }
                    },
                    "multi": {
                        "title": "Niekoľko hodnôt",
                        "info": "Zvolený prvok obsahuje rozdielne hodnoty pre tento vstup. Na editovanie a nastavenie všetkých prvkov pre tento vstup na rovnakú hodnotu, kliknite alebo klepnite tu, inak si zachovajú individuálne hodnoty.",
                        "restore": "Vrátiť späť zmeny",
                        "noMulti": "Tento vstup môže byť editovaný samostatne, ale nie ako súčasť skupiny."
                    },
                    "error": {
                        "system": "Vyskytla sa systémová chyba."
                    }
                },
                "decimal": ",",
                "emptyTable": "Nie sú k dispozícii žiadne dáta."
            }




            }
        );
    } );


</script>

</body>
</html>

