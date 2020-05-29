<?php
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

</html>

<head>
	<title>Form Artikel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
	<!-- <link rel="stylesheet" type="text/css" href="../CKEditor/src/style.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/form_artikel.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>


</head>

<body data-editor="ClassicEditor" data-collaboration="false">
	<?php require "ustadznavbar.php" ?>
	<main>
		<div class="message">
			<div class="centered">
				<h2>Sampaikanlah Walau Satu Ayat!</h2>
				<blockquote> <span>"</span>Siapakah yang lebih baik perkataannya daripada orang yang menyeru
					kepada Allah, mengerjakan amal yang saleh, dan berkata: Sesungguhnya aku termasuk
					orang-orang yang menyerah diri? (QS. Fushshilat: 33)<span>”</span></blockquote>
			</div>
		</div>
		<div class="centered">
			<div class="row row-editor">

				<form action=""></form>
				<div class="input-title">
					<div class="icon">
						<span class="iconify" data-inline="false" data-icon="icomoon-free:pencil"></span>
					</div>
					<input type="text" name="title" id="title" placeholder="Masukkan judul artikel/event">
				</div>
				<div class="input-title">
					<div class="icon">
						<span class="iconify" data-inline="false" data-icon="bx:bxs-user-circle"></span>
					</div>
					<input type="text" name="author" id="author" placeholder="Masukkan nama author">
				</div>

				<textarea class="editor">


				</textarea>

				<button type="submit" name="submit" id="submit">Post Artikel</button>
				</form>
			</div>
		</div>
		</div>
	</main>
	<footer>
		<p><span>&copy</span> HafizQuran 2020</p>
	</footer>


	<script src="../CKEditor/build/ckeditor.js"></script>
	<script>
		ClassicEditor
			.create(document.querySelector('.editor'), {

				toolbar: {
					items: [
						'heading',
						'|',
						'fontFamily',
						'fontSize',
						'fontColor',
						'bold',
						'italic',
						'underline',
						'strikethrough',
						'link',
						'highlight',
						'|',
						'bulletedList',
						'numberedList',
						'alignment',
						'indent',
						'outdent',
						'|',
						'subscript',
						'superscript',
						'specialCharacters',
						'blockQuote',
						'imageUpload',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo',
						'removeFormat'
					]
				},
				language: 'id',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
				licenseKey: '',

			})
			.then(editor => {
				window.editor = editor;




			})
			.catch(error => {
				console.error('Oops, something gone wrong!');
				console.error('Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:');
				console.warn('Build id: pxxq6dr2n4fw-79epbl2o91qu');
				console.error(error);
			});
	</script>
</body>