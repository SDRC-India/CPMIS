// save and submit function starts
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
	var bgc = document.getElementById('d10Total');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("d10Total").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkF() {
	var bgc = document.getElementById('fTotal');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("fTotal").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};
function checkFMinority() {
	var bgc = document.getElementById('fMinority');
	var firstInput = parseInt(document.getElementById("fTotal").value);
	var secondInput = parseInt(document.getElementById("fMinority").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkG() {
	var bgc = document.getElementById('g5Total');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("g5Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkH5() {
	var bgc = document.getElementById('h5Total');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("h5Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkI5() {
	var bgc = document.getElementById('iTotalNumberTotal');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("iTotalNumberTotal").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkJ1() {
	var bgc = document.getElementById('j1Total');
	var firstInput = Number(document.getElementById('aTotal').value - 0);
	var secondInput = parseInt(document.getElementById("j1Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkJ2() {
	var bgc = document.getElementById('j2Total');
	var firstInput = parseInt(document.getElementById("b3Total").value);
	var secondInput = parseInt(document.getElementById("j2Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkJ3() {
	var bgc = document.getElementById('j3Total');
	var firstInput = parseInt(document.getElementById("d10Total").value);
	var secondInput = parseInt(document.getElementById("j3Total").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkJ4() {
	var bgc = document.getElementById('j4TotalNumberTotal');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("j4TotalNumberTotal").value);
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};

function checkK1() {
	var bgc = document.getElementById('k1');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("k1").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK2() {
	var bgc = document.getElementById('k2');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("k2").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK3() {
	var bgc = document.getElementById('k3');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("k3").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK4() {
	var bgc = document.getElementById('k4');
	var firstInput = parseInt(document.getElementById("cTotal").value);
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
function checkK9() {
	var bgc = document.getElementById('k9');
	var firstInput = parseInt(document.getElementById("e1Total").value);
	var secondInput = parseInt(document.getElementById("k9").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK10() {
	var bgc = document.getElementById('k10');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k10").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK13() {
	var bgc = document.getElementById('k13');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k13").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK15() {
	var bgc = document.getElementById('k15');
	var firstInput = parseInt(document.getElementById("cTotal").value);
	var secondInput = parseInt(document.getElementById("k15").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK11n12() {
	var bgc = document.getElementById('e1Total');
	var firstInput = Number(document.getElementById("e1Total").value - 0);
	var firstK11 = Number(document.getElementById("k11").value - 0);
	var secondK12 = Number(document.getElementById("k12").value - 0);
	var secondInput = firstK11 + secondK12;
	return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
};
// save and submit function
