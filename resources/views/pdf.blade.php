<!DOCTYPE html>
<html>
<head>
	<title> {{ $recs->childfirstname }} </title>
    <!--
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="pdf/css/bootstrap.min.css">
    <script type="text/javascript" src="pdf/js/bootstrap.min.js"></script>
-->

    <style type="text/css">

       .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        background-color: #2196F3;
        padding: 10px;
        }
        .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        font-size: 30px;
        text-align: center;
        }

        .section-label {
        background-color: #102E6C;
        color: white !important;
        text-align: center;
        font-size: 21px !important;
        font-weight: 700;
        overflow-wrap: break-word;
        vertical-align: middle !important;
        }

    </style>

</head>

<body class="grid-container">

	<br>

	<div class="row" style="margin-left: 5px !important;">

		<div class="grid-item">

			<br><br>

			<p> {{ $recs->school_branch }}</p>
			<p> {{ $recs->address }} </p>
			<p> {{ $recs->city }} </p>
			<p> {{ $recs->country }} </p>

		</div>

		<div class="grid-item">

			<div class="page-header">

				<p class="h2"> Online Application Form - PDF </p>

				<h2> AppID: {{ $recs->id }} </h2>

				<p class="h2"> Name: {{ $recs->childfirstname }} </p>

			</div>

		</div>
		<div class="grid-item">

			<br><br>

			<div class="img-responsive">

					<img src="assets/img/logo.png">

				</div>

		</div>

	</div>

	<div class="container">

		<table class="table table-boxed table-responsive">

            <tbody>
				<!-- Enrollment Details -->
			<tr>
					<td class="section-label" rowspan="3" style="width:20%">ENROLMENT<br />DETAILS</td>
					<td class="right-aligned primary-emphasis" style="width:16%">YEAR APPLYING:</td>
					<td class="right-aligned" style="width:24%"> {{ $recs->startyear }} </td>
					<td class="right-aligned primary-emphasis" style="width:16%">EDUCATION LEVEL :</td>
					<td class="right-aligned" style="width:24%">{{ $recs->education_level }}</td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">ENROL TYPE:</td>
	                <td class="right-aligned">{{ $recs->enrol_type }}</td>
	                <td class="right-aligned primary-emphasis">BRANCH / CAMPUS:</td>
                    <td class="right-aligned">{{ $recs->school_branch }}</td>
                    <td></td>
            </tr>
            <tr>
            	<br>
				<br>
            </tr>
            <tr>
					<td class="section-label" rowspan="3" style="width:20%">CHILD<br />DETAILS</td>
					<td class="right-aligned primary-emphasis" style="width:16%">FIRST NAME :</td>
					<td class="right-aligned" style="width:24%"> {{ $recs->childfirstname }} </td>
					<td class="right-aligned primary-emphasis" style="width:16%">SURNAME :</td>
					<td class="right-aligned" style="width:24%">{{ $recs->childlastame }}</td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">DOB :</td>
	                <td class="right-aligned">{{ $recs->DOB }}</td>
	                <td class="right-aligned primary-emphasis">GENDER :</td>
                    <td class="right-aligned">{{ $recs->gender }}</td>
                    <td></td>
            </tr>
			</tbody>

		</table>

	</div>

	<!-- another table -->

	<div class="container">

		<table class="table table-boxed table-responsive">

            <tbody>

				<!-- Enrollment Details -->
			<tr>
					<td class="section-label" rowspan="3" style="width:20%">PARENT / GUARDIAN<br />DETAILS</td>
					<td class="right-aligned primary-emphasis" style="width:16%">NAME OF PARENT:</td>
					<td class="right-aligned" style="width:24%">{{ $recs->name  }}</td>
					<td class="right-aligned primary-emphasis" style="width:16%">MOBILE NO :</td>
					<td class="right-aligned" style="width:24%">{{ $recs->mobile }}</td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">EMAIL :</td>
	                <td class="right-aligned">{{ $recs->email }}</td>
	                <td class="right-aligned primary-emphasis">ADDRESS :</td>
                    <td class="right-aligned">{{ $recs->address }}</td>
                    <td></td>
            </tr>
            <tr>
	                <td class="right-aligned primary-emphasis">ID/PASSPORT NO :</td>
	                <td class="right-aligned">{{ $recs->idpassport }}</td>
	                <td class="right-aligned primary-emphasis">CITY :</td>
                    <td class="right-aligned">{{ $recs->city }}</td>
                    <td></td>
            </tr>
			<tr>
            	<br>
				<br>
            </tr>

			</tbody>

		</table>

	</div>

	<!-- another table -->

	<div class="container">

		<table class="table table-boxed table-responsive">

            <tbody>
				<!-- Enrollment Details -->
			<tr>
					<td class="section-label" rowspan="3" style="width:20%">UPLOADED DOCUMENTS<br />DETAIL</td>
					<td class="right-aligned primary-emphasis" style="width:16%">ID OR PASSPORT:</td>
					<td class="right-aligned" style="width:24%"> {{ $recs->scannedidpassport }} </td>
					<td class="right-aligned primary-emphasis" style="width:16%">RESIDENCE :</td>
					<td class="right-aligned" style="width:24%">{{ $recs->proof_of_residence }}</td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">CHILD BRITH CERT:</td>
	                <td class="right-aligned">{{ $recs->childbirth_cert }}</td>
	                <td class="right-aligned primary-emphasis">LATEST REPORT:</td>
                    <td class="right-aligned">{{ $recs->learners_report }}</td>
                    <td></td>
            </tr>
            <tr>
            	<br>
                <br>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
					<td class="section-label" rowspan="3" style="width:20%">APPLICATION<br />STATUS</td>
					<td class="right-aligned primary-emphasis" style="width:16%">DOCUMENTS REQUIRED:</td>
					<td class="right-aligned" style="width:24%"><!-- Response --></td>
					<td class="right-aligned primary-emphasis" style="width:16%">ELIGIBILITY:</td>
					<td class="right-aligned" style="width:24%"><!-- Response --></td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">SCHOLAR TYPE:</td>
	                <td class="right-aligned">{{ $recs->enrol_type }}</td>
	                <td class="right-aligned primary-emphasis">REG FEE:</td>
                    <td class="right-aligned">{{ $recs->payment }}</td>
                    <td></td>
            </tr>
            <tr>
            	<br>
                <br>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
			<tr>
					<td class="section-label" rowspan="3" style="width:20%">OFFICE<br />USE ONLY</td>

					<td class="right-aligned primary-emphasis" style="width:16%">AGREED TO TERMS:</td>
					<td class="right-aligned" style="width:24%">{{ $recs->TsAndCs }}</td>
					<td class="right-aligned primary-emphasis" style="width:16%">STUDENT NO:</td>
					<td class="right-aligned" style="width:24%"><!-- Response --></td>
			</tr>
			<tr>
	                <td class="right-aligned primary-emphasis">DEBIT ORDER:</td>
	                <td class="right-aligned"> <!-- Response --> </td>
	                <td class="right-aligned primary-emphasis">APPROVED:</td>
                    <td class="right-aligned"><!-- Response --></td>
                    <td></td>
            </tr>

			</tbody>


		</table>

	</div>

	<br>
	<br>

	<div class="panel text-center">

		<p class="lead">

			<h5 class="h5 text-primary"> <ul>&#9400; <script type="text/javascript">
				document.write(new Date().getFullYear());
			</script> - <b class="bold">TAAL-NET GROUP OF SCHOOLS</b> | <i class="fa fa-left-quote"></i> "Together We Can" <i class="fa fa-right-quote"></i> | <b class="bold">+27 11 568 9074</b> | info@taalct.co.za </ul> </h5>
			<hr style="border-width: 3px; color: blue;">

		</p>
		<br>

	</div>

</body>
</html>
