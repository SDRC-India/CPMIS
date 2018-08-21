// Save and submit validation starts
function commonFunctionBody(firstInput, secondInput, bgc) {

	if (!(firstInput < secondInput)) {
		bgc.style.removeProperty("background-color", "#DC143C", "important");
		bgc.style.removeProperty("color", "#FFFAF0", "important");
		bgc.style.removeProperty("border-color", "red", "important");
		return true;
	}
};
function commonFunctionBodyEqualTo(firstInput, secondInput, bgc) {

	if (firstInput == secondInput) {
		bgc.style.removeProperty("background-color", "#DC143C", "important");
		bgc.style.removeProperty("color", "#FFFAF0", "important");
		bgc.style.removeProperty("border-color", "red", "important");
		return true;
	}
};

function checkD() {
	var bgc = document.getElementById('d7Total');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("d7Total").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkFTotal() {
	var bgc = document.getElementById('fTotal');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("fTotal").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};
function checkFMinority() {
	var bgc = document.getElementById('fMinority');
	var firstInput = parseInt(document.getElementById("fTotal").value);
	var secondInput = parseInt(document.getElementById("fMinority").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkG7() {
	var bgc = document.getElementById('g7Total');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("g7Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};
function checkH() {
	var bgc = document.getElementById('h5Total');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("h5Total").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkI1() {
	var bgc = document.getElementById('i1Total');
	var firstInput = parseInt(document.getElementById("aTotal").value);
	var secondInput = parseInt(document.getElementById("i1Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};
function checkI2() {
	var bgc = document.getElementById('i2Total');
	var firstInput = parseInt(document.getElementById("b3Total").value);
	var secondInput = parseInt(document.getElementById("i2Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkI3() {
	var bgc = document.getElementById('i3Total');
	var firstInput = parseInt(document.getElementById("d7Total").value);
	var secondInput = parseInt(document.getElementById("i3Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkI4() {
	var bgc = document.getElementById('i4Total');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("i4Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkJ4() {
	var bgc = document.getElementById('j4TotalNumberTotal');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("j4TotalNumberTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK1() {
	var bgc = document.getElementById('k1');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k1").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK2() {
	var bgc = document.getElementById('k2');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k2").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK3() {
	var bgc = document.getElementById('k3');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k3").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK4() {
	var bgc = document.getElementById('k4');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k4").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK5() {
	var bgc = document.getElementById('k5');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k5").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK6() {
	var bgc = document.getElementById('k6');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k6").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK7() {
	var bgc = document.getElementById('k7');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k7").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK8() {
	var bgc = document.getElementById('k8');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k8").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK9() {
	var bgc = document.getElementById('k9');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k9").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK10() {
	var bgc = document.getElementById('k10');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k10").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK14() {
	var bgc = document.getElementById('k14');
	var firstInput = parseInt(document.getElementById("eTotal").value);
	var secondInput = parseInt(document.getElementById("k14").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
//ends
//save and submit function