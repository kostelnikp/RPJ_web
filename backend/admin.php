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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sl-1.3.4/datatables.min.css"/>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


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
        <div class="col-md-12">
            <form method="POST">
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
            <table class="table table-striped table-bordered table-hover  table-responsive-md" id="datatableid">
                <thead style="background-color: black;color: white">
                <tr>
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Priezvisko</th>
                    <th>Trieda</th>
                    <th>Ročník</th>
                    <th>Vzdialenosť od internátu</th>
                    <th>Dátum podania prihlášky</th>
                </tr>
                </thead>
                <tbody id="datatableid">
                <?php include 'adminfilter.php';
                include 'mail.php' ?>

                </tbody>

            </table>

            <form method="POST">
                <input type="number" id="delete_id" name="delete_id">
                <button id="button" name="delete">Vymazať zvolené stĺpce</button>
                <button name="send">Odoslať</button>
            </form>

        </div>

        <div class="domov"><h2>Vytvorenie prihlasovacích údajov používateľa</h2></div>
        <div class="ziak">
            <form method="post" action="../backend/signuppouzivatel.php">
                <label for="id_ziak">Prihlasovacie id používateľa: </label>
                <input id="id_ziak" type="number" name="id_ziak"><br>
                <label for="meno">Prihlasovacie meno používateľa: </label>
                <input id="meno" type="text" name="meno"><br>
                <label for="heslo">Prihlasovacie heslo používateľa: </label>
                <input id="heslo" type="text" name="heslo"><br>
                <input id="button" type="submit" name="submit" value="Vytvoriť používateľa"><br><br>
            </form>
        </div>
        <table class="table table-striped table-bordered table-hover  table-responsive-md" id="datatableid2">
            <thead style="background-color: black;color: white">
            <tr>
                <th>ID</th>
                <th>ID_ziak</th>
                <th>Prihlasovacie meno</th>
                <th>Prihlasovacie heslo</th>
            </tr>
            </thead>
            <tbody >
            <?php include 'ubytovanifilter.php';
            ?>
            </tbody>
        </table>

    </div >







</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/dt-1.11.5/b-2.2.2/b-print-2.2.2/r-2.2.9/sl-1.3.4/datatables.min.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sl-1.3.4/datatables.min.js"></script>


<script>

    function showMenu() {
        document.querySelector('.navigation').classList.toggle('active');
        document.querySelector('.close').classList.toggle('show');
        document.querySelector('.disable').classList.toggle('hide');

    }

    $(document).ready(function () {
        $('#button').click(function () {

            table.rows('.selected').remove().draw( false ); //vymazat potom
            document.getElementById("delete_id").value= data[0];
        });

        let data;

        $('#datatableid tbody').on('click', 'tr', function () {
            data = table.row(this).data();
        });




        var table = $('#datatableid').DataTable ({
                select: true,

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


                    "select": {
                        "rows": {
                            "1": "1 vybraná bunka",
                            "_": "%d vybraných buniek"
                        },

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

                        "error": {
                            "system": "Vyskytla sa systémová chyba."
                        }
                    },

                    "emptyTable": "Nie sú k dispozícii žiadne dáta."
                }

            }
        );
        var table2 = $('#datatableid2').DataTable ({


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


                    "select": {
                        "rows": {
                            "1": "1 vybraná bunka",
                            "_": "%d vybraných buniek"
                        },

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

                        "error": {
                            "system": "Vyskytla sa systémová chyba."
                        }
                    },

                    "emptyTable": "Nie sú k dispozícii žiadne dáta."
                }

            }
        );


    });

</script>

</body>
</html>