function commonFunctionBody(firstInput, secondInput, bgc) {
	if (!(firstInput < secondInput)) {
		bgc.style.removeProperty("background-color", "#DC143C", "important");
		bgc.style.removeProperty("color", "#FFFAF0", "important");
		bgc.style.removeProperty("border-color", "red", "important");

		return true;
	}
};
function commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc) {
	if (!(firstInput <= secondInput)) {
		bgc.style.removeProperty("background-color", "#DC143C", "important");
		bgc.style.removeProperty("color", "#FFFAF0", "important");
		bgc.style.removeProperty("border-color", "red", "important");

		return true;
	}
};
function commonFunctionBodyEqual(firstInput, secondInput, bgc) {
	if (firstInput == secondInput) {
		bgc.style.removeProperty("background-color", "#DC143C", "important");
		bgc.style.removeProperty("color", "#FFFAF0", "important");
		bgc.style.removeProperty("border-color", "red", "important");
		return true;
	}
};
// submit validation checks starts
function checkD1Cases() {
	var bgc = document.getElementById('d1TotalCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("d1TotalCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkD1Boys() {
	var bgc = document.getElementById('d1BoysTotal');
	var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
	var secondInput = Number(document.getElementById("d1BoysTotal").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkD1Girls() {
	var bgc = document.getElementById('d1GirlsTotal');
	var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
	var secondInput = Number(document.getElementById("d1GirlsTotal").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkD2Cases() {
	var bgc = document.getElementById('d2TotalCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("d2TotalCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkD2Boys() {
	var bgc = document.getElementById('d2BoysTotal');
	var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
	var secondInput = Number(document.getElementById("d2BoysTotal").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkD2Girls() {
	var bgc = document.getElementById('d2GirlsTotal');
	var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
	var secondInput = Number(document.getElementById("d2GirlsTotal").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
//

function checkEwithCBoys() {
	var bgc = document.getElementById('eBoysTotal');
	var firstInput = parseInt(document.getElementById("cBoysTotal").value);
	var secondInput = parseInt(document.getElementById("eBoysTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
//
function checkEwithCGirls() {
	var bgc = document.getElementById('eGirlsTotal');
	var firstInput = parseInt(document.getElementById("cGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("eGirlsTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
//
function checkF3withCBoys() {
	var bgc = document.getElementById('f3BoysTotal');
	var firstInput = parseInt(document.getElementById("cBoysTotal").value);
	var secondInput = parseInt(document.getElementById("f3BoysTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkF3withCGirls() {
	var bgc = document.getElementById('f3GirlsTotal');
	var firstInput = parseInt(document.getElementById("cGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("f3GirlsTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkIBoys() {
	var bgc = document.getElementById('iBoysTotal');
	var firstInput = parseInt(document.getElementById("cBoysTotal").value);
	var secondInput = parseInt(document.getElementById("iBoysTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkIGirls() {
	var bgc = document.getElementById('iGirlsTotal');
	var firstInput = parseInt(document.getElementById("cGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("iGirlsTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkMinorityBoys() {
	var bgc = document.getElementById('iMinorityBoysId');
	var firstInput = parseInt(document.getElementById("iBoysTotal").value);
	var secondInput = parseInt(document.getElementById("iMinorityBoysId").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkMinorityGirls() {
	var bgc = document.getElementById('iMinorityGirlsId');
	var firstInput = parseInt(document.getElementById("iGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("iMinorityGirlsId").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

// k wala
function checkK5Boys() {
	var bgc = document.getElementById('k5aBoys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k5aBoys").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK6Boys() {
	var bgc = document.getElementById('k6Boys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k6Boys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK7Boys() {
	var bgc = document.getElementById('k7Boys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k7Boys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK8Boys() {
	var bgc = document.getElementById('k8Boys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k8Boys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK9Boys() {
	var bgc = document.getElementById('k9Boys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k9Boys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK12Boys() {
	var bgc = document.getElementById('k12Boys');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("k9Boys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
// Girls
function checkK5Girls() {
	var bgc = document.getElementById('k5aGirls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k5aGirls").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK6Girls() {
	var bgc = document.getElementById('k6Girls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k6Girls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK7Girls() {
	var bgc = document.getElementById('k7Girls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k7Girls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK8Girls() {
	var bgc = document.getElementById('k8Girls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k8Girls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK9Girls() {
	var bgc = document.getElementById('k9Girls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k9Girls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK12Girls() {
	var bgc = document.getElementById('k12Girls');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k12Girls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK13aBoys() {
	var bgc = document.getElementById('k13aBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k13aBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK13aGirls() {
	var bgc = document.getElementById('k13aGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k13aGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK13bBoys() {
	var bgc = document.getElementById('k13bBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k13bBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK13bGirls() {
	var bgc = document.getElementById('k13bGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k13bGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK14aBoys() {
	var bgc = document.getElementById('k14aBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k14aBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK14aGirls() {
	var bgc = document.getElementById('k14aGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k14aGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK14bBoys() {
	var bgc = document.getElementById('k14bBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k14bBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK14bGirls() {
	var bgc = document.getElementById('k14bGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k14bGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK15aBoys() {
	var bgc = document.getElementById('k15aBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k15aBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK15aGirls() {
	var bgc = document.getElementById('k15aGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k15aGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK15bBoys() {
	var bgc = document.getElementById('k15bBoys');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k15bBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK15bGirls() {
	var bgc = document.getElementById('k15bGirls');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k15bGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK13cBoys() {
	var bgc = document.getElementById('k13cBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k13cBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK13cGirls() {
	var bgc = document.getElementById('k13cGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k13cGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK13dBoys() {
	var bgc = document.getElementById('k13dBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k13dBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK13dGirls() {
	var bgc = document.getElementById('k13dGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k13dGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK14cBoys() {
	var bgc = document.getElementById('k14cBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k14cBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK14cGirls() {
	var bgc = document.getElementById('k14cGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k14cGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK14dBoys() {
	var bgc = document.getElementById('k14dBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k14dBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK14dGirls() {
	var bgc = document.getElementById('k14dGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k14dGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

function checkK15cBoys() {
	var bgc = document.getElementById('k15cBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k15cBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK15cGirls() {
	var bgc = document.getElementById('k15cGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k15cGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK15dBoys() {
	var bgc = document.getElementById('k15dBoys');
	var firstInput = parseInt(document.getElementById("bBoysTotal").value);
	var secondInput = parseInt(document.getElementById("k15dBoys").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};
function checkK15dGirls() {
	var bgc = document.getElementById('k15dGirls');
	var firstInput = parseInt(document.getElementById("bGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("k15dGirls").value);
	return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
};

// submit Additional functions

function validateMembers() {
	var bgc = document.getElementById('noOfMembers');
	var secondInput = parseInt(document.getElementById("noOfMembers").value);
	var firstInput = parseInt(3);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function h4SectionValue() {

	document.getElementById('h4TotalCases').value = Number(document.getElementById('h1TotalCases').value - 0) + Number(document.getElementById('h2TotalCases').value - 0) + Number(document.getElementById('h3TotalCases').value - 0);
	document.getElementById('h4Boys7to11').value = Number(document.getElementById('h1Boys7to11').value - 0) + Number(document.getElementById('h2Boys7to11').value - 0) + Number(document.getElementById('h3Boys7to11').value - 0);
	document.getElementById('h4Boys12to15').value = Number(document.getElementById('h1Boys12to15').value - 0) + Number(document.getElementById('h2Boys12to15').value - 0) + Number(document.getElementById('h3Boys12to15').value - 0);
	document.getElementById('h4Boys16to18').value = Number(document.getElementById('h1Boys16to18').value - 0) + Number(document.getElementById('h2Boys16to18').value - 0) + Number(document.getElementById('h3Boys16to18').value - 0);
	document.getElementById('h4BoysGreaterThan18').value = Number(document.getElementById('h1BoysGreaterThan18').value - 0) + Number(document.getElementById('h2BoysGreaterThan18').value - 0) + Number(document.getElementById('h3BoysGreaterThan18').value - 0);

	document.getElementById('h4BoysTotal').value = Number(document.getElementById('h4Boys7to11').value - 0) + Number(document.getElementById('h4Boys12to15').value - 0) + Number(document.getElementById('h4Boys16to18').value - 0) + Number(document.getElementById('h4BoysGreaterThan18').value - 0);

	document.getElementById('h4Girls7to11').value = Number(document.getElementById('h1Girls7to11').value - 0) + Number(document.getElementById('h2Girls7to11').value - 0) + Number(document.getElementById('h3Girls7to11').value - 0);
	document.getElementById('h4Girls12to15').value = Number(document.getElementById('h1Girls12to15').value - 0) + Number(document.getElementById('h2Girls12to15').value - 0) + Number(document.getElementById('h3Girls12to15').value - 0);
	document.getElementById('h4Girls16to18').value = Number(document.getElementById('h1Girls16to18').value - 0) + Number(document.getElementById('h2Girls16to18').value - 0) + Number(document.getElementById('h3Girls16to18').value - 0);
	document.getElementById('h4GirlsGreaterThan18').value = Number(document.getElementById('h1GirlsGreaterThan18').value - 0) + Number(document.getElementById('h2GirlsGreaterThan18').value - 0) + Number(document.getElementById('h3GirlsGreaterThan18').value - 0);

	document.getElementById('h4GirlsTotal').value = Number(document.getElementById('h4Girls7to11').value - 0) + Number(document.getElementById('h4Girls12to15').value - 0) + Number(document.getElementById('h4Girls16to18').value - 0) + Number(document.getElementById('h4GirlsGreaterThan18').value - 0);

	document.getElementById('h4GrandTotal').value = Number(document.getElementById('h4BoysTotal').value - 0) + Number(document.getElementById('h4GirlsTotal').value - 0);
}

function checkH4Boys() {
	var bgc = document.getElementById('h4BoysTotal');
	var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
	var secondInput = parseInt(document.getElementById("h4BoysTotal").value);
	return commonFunctionBodyEqual(firstInput, secondInput, bgc);
};

function checkH4Girls() {
	var bgc = document.getElementById('h4GirlsTotal');
	var firstInput = parseInt(document.getElementById("f1GirlsTotal").value);
	var secondInput = parseInt(document.getElementById("h4GirlsTotal").value);
	return commonFunctionBodyEqual(firstInput, secondInput, bgc);
};
function checkJ3Boys() {
	var bgc = document.getElementById('j3TotalBoysTotal');
	var firstInput = parseInt(document.getElementById("aBoysTotal").value);
	var secondInput = parseInt(document.getElementById("j3TotalBoysTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkJ3Girls() {
	var bgc = document.getElementById('j3TotalGirlsTotal');
	var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
	var secondInput = parseInt(document.getElementById("j3TotalGirlsTotal").value);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkEwithCCases() {
	var bgc = document.getElementById('eTotalCases');
	var firstInput = Number(document.getElementById("cTotalCases").value - 0);
	var secondInput = Number(document.getElementById("eTotalCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkF3withCCases() {
	var bgc = document.getElementById('f3TotalCases');
	var firstInput = Number(document.getElementById("cTotalCases").value - 0);
	var secondInput = Number(document.getElementById("f3TotalCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkICases() {
	var bgc = document.getElementById('iTotalCasesId');
	var firstInput = Number(document.getElementById("cTotalCases").value - 0);
	var secondInput = Number(document.getElementById("iTotalCasesId").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK5Cases() {
	var bgc = document.getElementById('k5aCases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k5aCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK6Cases() {
	var bgc = document.getElementById('k6Cases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k6Cases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK7Cases() {
	var bgc = document.getElementById('k7Cases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k7Cases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK8Cases() {
	var bgc = document.getElementById('k8Cases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k8Cases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK9Cases() {
	var bgc = document.getElementById('k9Cases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k9Cases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK12Cases() {
	var bgc = document.getElementById('k12Cases');
	var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
	var secondInput = Number(document.getElementById("k12Cases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK13aCases() {
	var bgc = document.getElementById('k13aCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k13aCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK13bCases() {
	var bgc = document.getElementById('k13bCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k13bCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK13cCases() {
	var bgc = document.getElementById('k13cCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k13cCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK13dCases() {
	var bgc = document.getElementById('k13dCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k13dCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK14aCases() {
	var bgc = document.getElementById('k14aCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k14aCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK14bCases() {
	var bgc = document.getElementById('k14bCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k14bCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};
function checkK14cCases() {
	var bgc = document.getElementById('k14cCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k14cCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK14dCases() {
	var bgc = document.getElementById('k14dCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k14dCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK15aCases() {
	var bgc = document.getElementById('k15aCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k15aCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK15bCases() {
	var bgc = document.getElementById('k15bCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k15bCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK15cCases() {
	var bgc = document.getElementById('k15cCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k15cCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkK15dCases() {
	var bgc = document.getElementById('k15dCases');
	var firstInput = Number(document.getElementById("bTotalCases").value - 0);
	var secondInput = Number(document.getElementById("k15dCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

function checkH4Cases() {
	var bgc = document.getElementById('h4TotalCases');
	var firstInput = parseInt(document.getElementById("f1TotalCases").value);
	var secondInput = parseInt(document.getElementById("h4TotalCases").value);
	return commonFunctionBodyEqual(firstInput, secondInput, bgc);
};

function checkJ3Cases() {
	var bgc = document.getElementById('j3TotalCases');
	var firstInput = Number(document.getElementById("aTotalCases").value - 0);
	var secondInput = Number(document.getElementById("j3TotalCases").value - 0);
	return commonFunctionBody(firstInput, secondInput, bgc);
};

