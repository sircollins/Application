<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<style type="text/css">

    .section-label {
        background-color: #102E6C;
        color: white !important;
        text-align: center;
        font-size: 21px !important;
        font-weight: 700;
        overflow-wrap: break-word;
        vertical-align: middle !important;
        display: table-cell;
    }

</style>
<body class="container">

<br>

<div class="page-header">

    <div class="img-responsive">

        <img src="img/">

    </div>

    <h1> Applicant - Child First Name</h1>

</div>

<hr>

<div class="table-responsive">

    <table class="table table-boxed">

        <tbody class="no-border-y">

        <!-- Enrollment Details -->

        <tr>
            <td class="section-label" rowspan="3" style="width:20%">ENROLMENT<br />DETAILS</td>
            <td class="right-aligned primary-emphasis" style="width:16%">YEAR APPLYING FOR :</td>
            <td class="right-aligned" style="width:24%"> {{ $recs->startyear }} </td>
            <td class="right-aligned primary-emphasis" style="width:16%"> GRADE :</td>
            <td class="right-aligned" style="width:24%"> {{ $recs->grade }} </td>
        </tr>
        <tr>
            <td class="right-aligned primary-emphasis">STUDY OPTION:</td>
            <td class="right-aligned"><select tabindex="0" class="form-control" data-bind="options:StudyOptions, value:StudyOption,optionsCaption:' - Please Select - '"></select></td>
            <td class="right-aligned primary-emphasis">SCHOOL / CAMPUS :</td>
            <td class="right-aligned"><input type="text" tabindex="0" class="form-control" data-bind="value:Campus"></td>
        </tr>

        </tbody>

    </table>

</div>

</body>
</html>