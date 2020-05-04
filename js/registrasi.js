let id = [];
let formId = $("form").attr("id");
(function getId() {
	$("input").each(function () {
		currentId = currentId = $(this).attr("id");
		if (currentId) id.push(currentId);
	});
})();

$("#" + formId).submit(function (e) {
	let valid = true;
	id.forEach((cek) => {
		if ($("#" + cek).val() == "" && cek != "password2") {
			alert(cek + " tidak bisa kosong");
			valid = false;
		}
	});
	if (!valid) e.preventDefault();
});
