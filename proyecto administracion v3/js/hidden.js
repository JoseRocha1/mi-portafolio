$(document).ready(function() {
	$("input[type=radio]").click(function(event) {
		var valor = $(event.target).val();
		if(valor === "card") {
			$("#div1").show();
			$("#div2").hide();
		} else if(valor === "pay") {
			$("#div1").hide();
			$("#div2").show();
		}
	});
});