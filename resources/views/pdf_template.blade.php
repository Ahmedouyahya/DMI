<!DOCTYPE html>
<html>
<head>
    <title>Master1 SSD</title>
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            src: url('{{ storage_path('fonts/DejaVuSans.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 10px;
            direction: rtl; /* Set text direction to right-to-left */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header-table {
            width: 100%;
            margin-bottom: 10px;
        }
        .header-table td {
            border: none;
            padding: 2px;
            text-align: left;
        }
        .header-table .right {
            text-align: right;
        }
        .header-table .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <table class="header-table">
        <tr>
            <td>
                <p>Université de Nouakchott Al Aasriya<br>Faculté des Sciences Techniques</p>
            </td>
            <td class="right">
                <p>جامعة نواكشوط العصرية<br>كلية العلوم و التقنيات</p>
            </td>
        </tr>
    </table>
    <div class="center" style="text-align: center;">
        <h3>Année Universitaire: {{ $year }}</h3>
        <h3>Liste des candidats retenus pour le {{ $title }}</h3>
        <h4>Résultats de la sélection</h4>
    </div>
    <table>
        <thead>
            <tr>
                <th rowspan="2">Profil</th>
                <th rowspan="2">Nom et prénom</th>
                <th rowspan="2">N°</th>

                <th rowspan="2">Ann Bac</th>
                <th rowspan="2">Ann dipl</th>
                <th colspan="7">Moy</th>
                <th rowspan="2">bonus <br> ann <br> form</th>
                <th rowspan="2">Bonus <br> 1er <br> sess</th>
                <th rowspan="2">Malus</th>
                <th rowspan="2">Moy Gén</th>
                <th rowspan="2">Spécialité</th>
                <th rowspan="2">Etab Dip</th>
                <th colspan="4">Choix</th> <!-- Adjusted the header for choice columns -->
                <th rowspan="2">Décision</th>
            </tr>
            <tr>
                <th>S 1</th>
                <th>S 2</th>
                <th>S 3</th>
                <th>S 4</th>
                <th>S 5</th>
                <th>S 6</th>
                <th>moy 6</th>
                <th>Choix 1</th> <!-- Added headers for choice columns -->
                <th>Choix 2</th>
                <th>Choix 3</th>
                <th>Choix 4</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->profile }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->number }}</td>

                    <td>{{ $student->year_of_bac }}</td>
                    <td>{{ $student->year_of_diploma }}</td> <!-- Added year_of_diploma field -->
                    <td>{{ $student->score_s1 }}</td>
                    <td>{{ $student->score_s2 }}</td>
                    <td>{{ $student->score_s3 }}</td>
                    <td>{{ $student->score_s4 }}</td>
                    <td>{{ $student->score_s5 }}</td>
                    <td>{{ $student->score_s6 }}</td>
                    <td>{{ $student->avg_moy6 }}</td>
                    <td>{{ $student->bonus_ann_form }}</td>
                    <td>{{ $student->bonus_1st_session }}</td>
                    <td>{{ $student->malus }}</td>
                    <td>{{ $student->general_avg }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>{{ $student->diploma_institution }}</td>
                    <td>{{ $student->choice1 }}</td> <!-- Adjusted data fields for choices -->
                    <td>{{ $student->choice2 }}</td>
                    <td>{{ $student->choice3 }}</td>
                    <td>{{ $student->choice4 }}</td>
                    <td>{{ $student->decision }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{ date('Y-m-d') }}</p>
</body>
</html>
