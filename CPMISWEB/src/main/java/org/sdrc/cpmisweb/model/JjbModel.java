package org.sdrc.cpmisweb.model;

import java.io.Serializable;
import java.sql.Date;
import java.util.List;

import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.jjb.JjbDetailsTraining;

public class JjbModel implements Serializable {
	/**
	 * Biswa Ranjan
	 */
	private static final long serialVersionUID = -4470243303300211202L;

	private Integer id;

	private String nameOfAuthorizedPerson;
	private boolean isLive;

	private Integer userId;

	// private String userName;
	private boolean isSubmitted;

	private Date dateOfSubmimission;

	private Date lastSaveDate;
	// Extra columns add ends
	private Date monthyear;

	private String designation;

	private Integer districtId;

	private Integer noOfMembers;

	private Integer noOfMaleMembers;

	private Integer noOfFemaleMembers;

	private Integer noOfProbationOfficers;

	private String placeOfJjbSittings;
	// A starts
	private Integer jjbSectionAId;
	private Integer a1TotalCases;
	private Integer a1Boys7to11;
	private Integer a1Boys12to15;
	private Integer a1Boys16to18;
	private Integer a1BoysGreaterThan18;
	private Integer a1BoysTotal;
	private Integer a1Girls7to11;
	private Integer a1Girls12to15;
	private Integer a1Girls16to18;
	private Integer a1GirlsGreaterThan18;
	private Integer a1GirlsTotal;
	private Integer a1GrandTotal;
	private Integer a2TotalCases;
	private Integer a2Boys7to11;
	private Integer a2Boys12to15;
	private Integer a2Boys16to18;
	private Integer a2BoysGreaterThan18;
	private Integer a2BoysTotal;
	private Integer a2Girls7to11;
	private Integer a2Girls12to15;
	private Integer a2Girls16to18;
	private Integer a2GirlsGreaterThan18;
	private Integer a2GirlsTotal;
	private Integer a2GrandTotal;
	private Integer aTotalCases;
	private Integer aBoys7to11;
	private Integer aBoys12to15;
	private Integer aBoys16to18;
	private Integer aBoysGreaterThan18;
	private Integer aBoysTotal;
	private Integer aGirls7to11;
	private Integer aGirls12to15;
	private Integer aGirls16to18;
	private Integer aGirlsGreaterThan18;
	private Integer aGirlsTotal;
	private Integer aGrandTotal;

	// A ends

	// B starts
	private Integer jjbSectionBId;
	private Integer b1TotalCases;
	private Integer b1Boys7to11;
	private Integer b1Boys12to15;
	private Integer b1Boys16to18;
	private Integer b1BoysGreaterThan18;
	private Integer b1BoysTotal;
	private Integer b1Girls7to11;
	private Integer b1Girls12to15;
	private Integer b1Girls16to18;
	private Integer b1GirlsGreaterThan18;
	private Integer b1GirlsTotal;
	private Integer b1GrandTotal;
	private Integer b2TotalCases;
	private Integer b2Boys7to11;
	private Integer b2Boys12to15;
	private Integer b2Boys16to18;
	private Integer b2BoysGreaterThan18;
	private Integer b2BoysTotal;
	private Integer b2Girls7to11;
	private Integer b2Girls12to15;
	private Integer b2Girls16to18;
	private Integer b2GirlsGreaterThan18;
	private Integer b2GirlsTotal;
	private Integer b2GrandTotal;
	private Integer b3TotalCases;
	private Integer b3Boys7to11;
	private Integer b3Boys12to15;
	private Integer b3Boys16to18;
	private Integer b3BoysGreaterThan18;
	private Integer b3BoysTotal;
	private Integer b3Girls7to11;
	private Integer b3Girls12to15;
	private Integer b3Girls16to18;
	private Integer b3GirlsGreaterThan18;
	private Integer b3GirlsTotal;
	private Integer b3GrandTotal;
	private Integer bTotalCases;
	private Integer bBoys7to11;
	private Integer bBoys12to15;
	private Integer bBoys16to18;
	private Integer bBoysGreaterThan18;
	private Integer bBoysTotal;
	private Integer bGirls7to11;
	private Integer bGirls12to15;
	private Integer bGirls16to18;
	private Integer bGirlsGreaterThan18;
	private Integer bGirlsTotal;
	private Integer bGrandTotal;

	// B ends
	// C starts
	private Integer jjbSectionCId;
	private Integer cTotalCases;
	private Integer cBoys7to11;
	private Integer cBoys12to15;
	private Integer cBoys16to18;
	private Integer cBoysGreaterThan18;
	private Integer cBoysTotal;
	private Integer cGirls7to11;
	private Integer cGirls12to15;
	private Integer cGirls16to18;
	private Integer cGirlsGreaterThan18;
	private Integer cGirlsTotal;
	private Integer cGrandTotal;

	// C ends
	// D starts
	private Integer jjbSectionDId;
	private Integer d1TotalCases;
	private Integer d1Boys7to11;
	private Integer d1Boys12to15;
	private Integer d1Boys16to18;
	private Integer d1BoysGreaterThan18;
	private Integer d1BoysTotal;
	private Integer d1Girls7to11;
	private Integer d1Girls12to15;
	private Integer d1Girls16to18;
	private Integer d1GirlsGreaterThan18;
	private Integer d1GirlsTotal;
	private Integer d1GrandTotal;
	private Integer d2TotalCases;
	private Integer d2Boys7to11;
	private Integer d2Boys12to15;
	private Integer d2Boys16to18;
	private Integer d2BoysGreaterThan18;
	private Integer d2BoysTotal;
	private Integer d2Girls7to11;
	private Integer d2Girls12to15;
	private Integer d2Girls16to18;
	private Integer d2GirlsGreaterThan18;
	private Integer d2GirlsTotal;
	private Integer d2GrandTotal;
	private Integer dTotalCases;
	private Integer dBoys7to11;
	private Integer dBoys12to15;
	private Integer dBoys16to18;
	private Integer dBoysGreaterThan18;
	private Integer dBoysTotal;
	private Integer dGirls7to11;
	private Integer dGirls12to15;
	private Integer dGirls16to18;
	private Integer dGirlsGreaterThan18;
	private Integer dGirlsTotal;
	private Integer dGrandTotal;

	// D ends
	// E starts
	private Integer jjbSectionEId;
	private Integer e1TotalCases;
	private Integer e1Boys7to11;
	private Integer e1Boys12to15;
	private Integer e1Boys16to18;
	private Integer e1BoysGreaterThan18;
	private Integer e1BoysTotal;

	private Integer e1Girls7to11;
	private Integer e1Girls12to15;
	private Integer e1Girls16to18;
	private Integer e1GirlsGreaterThan18;
	private Integer e1GirlsTotal;

	private Integer e1GrandTotal;

	private Integer e2TotalCases;
	private Integer e2Boys7to11;
	private Integer e2Boys12to15;
	private Integer e2Boys16to18;
	private Integer e2BoysGreaterThan18;
	private Integer e2BoysTotal;

	private Integer e2Girls7to11;
	private Integer e2Girls12to15;
	private Integer e2Girls16to18;
	private Integer e2GirlsGreaterThan18;
	private Integer e2GirlsTotal;

	private Integer e2GrandTotal;

	private Integer e3TotalCases;
	private Integer e3Boys7to11;
	private Integer e3Boys12to15;
	private Integer e3Boys16to18;
	private Integer e3BoysGreaterThan18;
	private Integer e3BoysTotal;

	private Integer e3Girls7to11;
	private Integer e3Girls12to15;
	private Integer e3Girls16to18;
	private Integer e3GirlsGreaterThan18;
	private Integer e3GirlsTotal;

	private Integer e3GrandTotal;

	private Integer e4TotalCases;
	private Integer e4Boys7to11;
	private Integer e4Boys12to15;
	private Integer e4Boys16to18;
	private Integer e4BoysGreaterThan18;
	private Integer e4BoysTotal;
	private Integer e4Girls7to11;
	private Integer e4Girls12to15;
	private Integer e4Girls16to18;
	private Integer e4GirlsGreaterThan18;
	private Integer e4GirlsTotal;
	private Integer e4GrandTotal;
	private Integer e5TotalCases;
	private Integer e5Boys7to11;
	private Integer e5Boys12to15;
	private Integer e5Boys16to18;
	private Integer e5BoysGreaterThan18;
	private Integer e5BoysTotal;
	private Integer e5Girls7to11;
	private Integer e5Girls12to15;
	private Integer e5Girls16to18;
	private Integer e5GirlsGreaterThan18;
	private Integer e5GirlsTotal;
	private Integer e5GrandTotal;
	private Integer e6TotalCases;
	private Integer e6Boys7to11;
	private Integer e6Boys12to15;
	private Integer e6Boys16to18;
	private Integer e6BoysGreaterThan18;
	private Integer e6BoysTotal;
	private Integer e6Girls7to11;
	private Integer e6Girls12to15;
	private Integer e6Girls16to18;
	private Integer e6GirlsGreaterThan18;
	private Integer e6GirlsTotal;
	private Integer e6GrandTotal;
	private Integer e7TotalCases;
	private Integer e7Boys7to11;
	private Integer e7Boys12to15;
	private Integer e7Boys16to18;
	private Integer e7BoysGreaterThan18;
	private Integer e7BoysTotal;
	private Integer e7Girls7to11;
	private Integer e7Girls12to15;
	private Integer e7Girls16to18;
	private Integer e7GirlsGreaterThan18;
	private Integer e7GirlsTotal;
	private Integer e7GrandTotal;
	private Integer e8TotalCases;
	private Integer e8Boys7to11;
	private Integer e8Boys12to15;
	private Integer e8Boys16to18;
	private Integer e8BoysGreaterThan18;
	private Integer e8BoysTotal;
	private Integer e8Girls7to11;
	private Integer e8Girls12to15;
	private Integer e8Girls16to18;
	private Integer e8GirlsGreaterThan18;
	private Integer e8GirlsTotal;
	private Integer e8GrandTotal;
	private Integer e9TotalCases;
	private Integer e9Boys7to11;
	private Integer e9Boys12to15;
	private Integer e9Boys16to18;
	private Integer e9BoysGreaterThan18;
	private Integer e9BoysTotal;
	private Integer e9Girls7to11;
	private Integer e9Girls12to15;
	private Integer e9Girls16to18;
	private Integer e9GirlsGreaterThan18;
	private Integer e9GirlsTotal;
	private Integer e9GrandTotal;
	private Integer e10TotalCases;
	private Integer e10Boys7to11;
	private Integer e10Boys12to15;
	private Integer e10Boys16to18;
	private Integer e10BoysGreaterThan18;
	private Integer e10BoysTotal;
	private Integer e10Girls7to11;
	private Integer e10Girls12to15;
	private Integer e10Girls16to18;
	private Integer e10GirlsGreaterThan18;
	private Integer e10GirlsTotal;

	private Integer e10GrandTotal;

	private Integer e11TotalCases;
	private Integer e11Boys7to11;
	private Integer e11Boys12to15;
	private Integer e11Boys16to18;
	private Integer e11BoysGreaterThan18;
	private Integer e11BoysTotal;

	private Integer e11Girls7to11;
	private Integer e11Girls12to15;
	private Integer e11Girls16to18;
	private Integer e11GirlsGreaterThan18;
	private Integer e11GirlsTotal;

	private Integer e11GrandTotal;

	private Integer e12TotalCases;
	private Integer e12Boys7to11;
	private Integer e12Boys12to15;
	private Integer e12Boys16to18;
	private Integer e12BoysGreaterThan18;
	private Integer e12BoysTotal;

	private Integer e12Girls7to11;
	private Integer e12Girls12to15;
	private Integer e12Girls16to18;
	private Integer e12GirlsGreaterThan18;
	private Integer e12GirlsTotal;

	private Integer e12GrandTotal;

	private Integer e13TotalCases;
	private Integer e13Boys7to11;
	private Integer e13Boys12to15;
	private Integer e13Boys16to18;
	private Integer e13BoysGreaterThan18;
	private Integer e13BoysTotal;

	private Integer e13Girls7to11;
	private Integer e13Girls12to15;
	private Integer e13Girls16to18;
	private Integer e13GirlsGreaterThan18;
	private Integer e13GirlsTotal;

	private Integer e13GrandTotal;

	private Integer eTotalCases;
	private Integer eBoys7to11;
	private Integer eBoys12to15;
	private Integer eBoys16to18;
	private Integer eBoysGreaterThan18;
	private Integer eBoysTotal;

	private Integer eGirls7to11;
	private Integer eGirls12to15;
	private Integer eGirls16to18;
	private Integer eGirlsGreaterThan18;
	private Integer eGirlsTotal;

	private Integer eGrandTotal;

	// E ends
	// F starts
	private Integer jjbSectionFId;
	private Integer f1TotalCases;
	private Integer f1Boys7to11;
	private Integer f1Boys12to15;
	private Integer f1Boys16to18;
	private Integer f1BoysGreaterThan18;
	private Integer f1BoysTotal;

	private Integer f1Girls7to11;
	private Integer f1Girls12to15;
	private Integer f1Girls16to18;
	private Integer f1GirlsGreaterThan18;
	private Integer f1GirlsTotal;

	private Integer f1GrandTotal;

	private Integer f2TotalCases;
	private Integer f2Boys7to11;
	private Integer f2Boys12to15;
	private Integer f2Boys16to18;
	private Integer f2BoysGreaterThan18;
	private Integer f2BoysTotal;

	private Integer f2Girls7to11;
	private Integer f2Girls12to15;
	private Integer f2Girls16to18;
	private Integer f2GirlsGreaterThan18;
	private Integer f2GirlsTotal;

	private Integer f2GrandTotal;
	private Integer f3TotalCases;
	private Integer f3Boys7to11;
	private Integer f3Boys12to15;
	private Integer f3Boys16to18;
	private Integer f3BoysGreaterThan18;
	private Integer f3BoysTotal;

	private Integer f3Girls7to11;
	private Integer f3Girls12to15;
	private Integer f3Girls16to18;
	private Integer f3GirlsGreaterThan18;
	private Integer f3GirlsTotal;

	private Integer f3GrandTotal;

	// F ends
	// G starts
	private Integer jjbSectionGId;
	private Integer g1PettyTotalCases;
	private Integer g1PettyBoys7to11;
	private Integer g1PettyBoys12to15;
	private Integer g1PettyBoys16to18;
	private Integer g1PettyBoysGreaterThan18;
	private Integer g1PettyBoysTotal;
	private Integer g1PettyGirls7to11;
	private Integer g1PettyGirls12to15;
	private Integer g1PettyGirls16to18;
	private Integer g1PettyGirlsGreaterThan18;
	private Integer g1PettyGirlsTotal;
	private Integer g1PettyGrandTotal;

	private Integer g1SeriousTotalCases;
	private Integer g1SeriousBoys7to11;
	private Integer g1SeriousBoys12to15;
	private Integer g1SeriousBoys16to18;
	private Integer g1SeriousBoysGreaterThan18;
	private Integer g1SeriousBoysTotal;
	private Integer g1SeriousGirls7to11;
	private Integer g1SeriousGirls12to15;
	private Integer g1SeriousGirls16to18;
	private Integer g1SeriousGirlsGreaterThan18;
	private Integer g1SeriousGirlsTotal;
	private Integer g1SeriousGrandTotal;
	private Integer g1HeinousTotalCases;
	private Integer g1HeinousBoys7to11;
	private Integer g1HeinousBoys12to15;
	private Integer g1HeinousBoys16to18;
	private Integer g1HeinousBoysGreaterThan18;
	private Integer g1HeinousBoysTotal;
	private Integer g1HeinousGirls7to11;
	private Integer g1HeinousGirls12to15;
	private Integer g1HeinousGirls16to18;
	private Integer g1HeinousGirlsGreaterThan18;
	private Integer g1HeinousGirlsTotal;
	private Integer g1HeinousGrandTotal;

	private Integer g1TotalCases;
	private Integer g1Boys7to11;
	private Integer g1Boys12to15;
	private Integer g1Boys16to18;
	private Integer g1BoysGreaterThan18;
	private Integer g1BoysTotal;

	private Integer g1Girls7to11;
	private Integer g1Girls12to15;
	private Integer g1Girls16to18;
	private Integer g1GirlsGreaterThan18;
	private Integer g1GirlsTotal;

	private Integer g1GrandTotal;

	private Integer g2PettyTotalCases;
	private Integer g2PettyBoys7to11;
	private Integer g2PettyBoys12to15;
	private Integer g2PettyBoys16to18;
	private Integer g2PettyBoysGreaterThan18;
	private Integer g2PettyBoysTotal;
	private Integer g2PettyGirls7to11;
	private Integer g2PettyGirls12to15;
	private Integer g2PettyGirls16to18;
	private Integer g2PettyGirlsGreaterThan18;
	private Integer g2PettyGirlsTotal;
	private Integer g2PettyGrandTotal;

	private Integer g2SeriousTotalCases;
	private Integer g2SeriousBoys7to11;
	private Integer g2SeriousBoys12to15;
	private Integer g2SeriousBoys16to18;
	private Integer g2SeriousBoysGreaterThan18;
	private Integer g2SeriousBoysTotal;
	private Integer g2SeriousGirls7to11;
	private Integer g2SeriousGirls12to15;
	private Integer g2SeriousGirls16to18;
	private Integer g2SeriousGirlsGreaterThan18;
	private Integer g2SeriousGirlsTotal;
	private Integer g2SeriousGrandTotal;
	private Integer g2HeinousTotalCases;
	private Integer g2HeinousBoys7to11;
	private Integer g2HeinousBoys12to15;
	private Integer g2HeinousBoys16to18;
	private Integer g2HeinousBoysGreaterThan18;
	private Integer g2HeinousBoysTotal;
	private Integer g2HeinousGirls7to11;
	private Integer g2HeinousGirls12to15;
	private Integer g2HeinousGirls16to18;
	private Integer g2HeinousGirlsGreaterThan18;
	private Integer g2HeinousGirlsTotal;
	private Integer g2HeinousGrandTotal;

	private Integer g2TotalCases;
	private Integer g2Boys7to11;
	private Integer g2Boys12to15;
	private Integer g2Boys16to18;
	private Integer g2BoysGreaterThan18;
	private Integer g2BoysTotal;

	private Integer g2Girls7to11;
	private Integer g2Girls12to15;
	private Integer g2Girls16to18;
	private Integer g2GirlsGreaterThan18;
	private Integer g2GirlsTotal;

	private Integer g2GrandTotal;

	private Integer g3PettyTotalCases;
	private Integer g3PettyBoys7to11;
	private Integer g3PettyBoys12to15;
	private Integer g3PettyBoys16to18;
	private Integer g3PettyBoysGreaterThan18;
	private Integer g3PettyBoysTotal;
	private Integer g3PettyGirls7to11;
	private Integer g3PettyGirls12to15;
	private Integer g3PettyGirls16to18;
	private Integer g3PettyGirlsGreaterThan18;
	private Integer g3PettyGirlsTotal;
	private Integer g3PettyGrandTotal;

	private Integer g3SeriousTotalCases;
	private Integer g3SeriousBoys7to11;
	private Integer g3SeriousBoys12to15;
	private Integer g3SeriousBoys16to18;
	private Integer g3SeriousBoysGreaterThan18;
	private Integer g3SeriousBoysTotal;
	private Integer g3SeriousGirls7to11;
	private Integer g3SeriousGirls12to15;
	private Integer g3SeriousGirls16to18;
	private Integer g3SeriousGirlsGreaterThan18;
	private Integer g3SeriousGirlsTotal;
	private Integer g3SeriousGrandTotal;
	private Integer g3HeinousTotalCases;
	private Integer g3HeinousBoys7to11;
	private Integer g3HeinousBoys12to15;
	private Integer g3HeinousBoys16to18;
	private Integer g3HeinousBoysGreaterThan18;
	private Integer g3HeinousBoysTotal;
	private Integer g3HeinousGirls7to11;
	private Integer g3HeinousGirls12to15;
	private Integer g3HeinousGirls16to18;
	private Integer g3HeinousGirlsGreaterThan18;
	private Integer g3HeinousGirlsTotal;
	private Integer g3HeinousGrandTotal;

	private Integer g3TotalCases;
	private Integer g3Boys7to11;
	private Integer g3Boys12to15;
	private Integer g3Boys16to18;
	private Integer g3BoysGreaterThan18;
	private Integer g3BoysTotal;

	private Integer g3Girls7to11;
	private Integer g3Girls12to15;
	private Integer g3Girls16to18;
	private Integer g3GirlsGreaterThan18;
	private Integer g3GirlsTotal;

	private Integer g3GrandTotal;

	private Integer g4PettyTotalCases;
	private Integer g4PettyBoys7to11;
	private Integer g4PettyBoys12to15;
	private Integer g4PettyBoys16to18;
	private Integer g4PettyBoysGreaterThan18;
	private Integer g4PettyBoysTotal;
	private Integer g4PettyGirls7to11;
	private Integer g4PettyGirls12to15;
	private Integer g4PettyGirls16to18;
	private Integer g4PettyGirlsGreaterThan18;
	private Integer g4PettyGirlsTotal;
	private Integer g4PettyGrandTotal;

	private Integer g4SeriousTotalCases;
	private Integer g4SeriousBoys7to11;
	private Integer g4SeriousBoys12to15;
	private Integer g4SeriousBoys16to18;
	private Integer g4SeriousBoysGreaterThan18;
	private Integer g4SeriousBoysTotal;
	private Integer g4SeriousGirls7to11;
	private Integer g4SeriousGirls12to15;
	private Integer g4SeriousGirls16to18;
	private Integer g4SeriousGirlsGreaterThan18;
	private Integer g4SeriousGirlsTotal;
	private Integer g4SeriousGrandTotal;
	private Integer g4HeinousTotalCases;
	private Integer g4HeinousBoys7to11;
	private Integer g4HeinousBoys12to15;
	private Integer g4HeinousBoys16to18;
	private Integer g4HeinousBoysGreaterThan18;
	private Integer g4HeinousBoysTotal;
	private Integer g4HeinousGirls7to11;
	private Integer g4HeinousGirls12to15;
	private Integer g4HeinousGirls16to18;
	private Integer g4HeinousGirlsGreaterThan18;
	private Integer g4HeinousGirlsTotal;
	private Integer g4HeinousGrandTotal;

	private Integer g4TotalCases;
	private Integer g4Boys7to11;
	private Integer g4Boys12to15;
	private Integer g4Boys16to18;
	private Integer g4BoysGreaterThan18;
	private Integer g4BoysTotal;

	private Integer g4Girls7to11;
	private Integer g4Girls12to15;
	private Integer g4Girls16to18;
	private Integer g4GirlsGreaterThan18;
	private Integer g4GirlsTotal;

	private Integer g4GrandTotal;

	// G ends
	// H starts
	private Integer jjbSectionHId;
	private Integer h1TotalCases;
	private Integer h1Boys7to11;
	private Integer h1Boys12to15;
	private Integer h1Boys16to18;
	private Integer h1BoysGreaterThan18;
	private Integer h1BoysTotal;

	private Integer h1Girls7to11;
	private Integer h1Girls12to15;
	private Integer h1Girls16to18;
	private Integer h1GirlsGreaterThan18;
	private Integer h1GirlsTotal;

	private Integer h1GrandTotal;

	private Integer h2TotalCases;
	private Integer h2Boys7to11;
	private Integer h2Boys12to15;
	private Integer h2Boys16to18;
	private Integer h2BoysGreaterThan18;
	private Integer h2BoysTotal;

	private Integer h2Girls7to11;
	private Integer h2Girls12to15;
	private Integer h2Girls16to18;
	private Integer h2GirlsGreaterThan18;
	private Integer h2GirlsTotal;

	private Integer h2GrandTotal;

	private Integer h3TotalCases;
	private Integer h3Boys7to11;
	private Integer h3Boys12to15;
	private Integer h3Boys16to18;
	private Integer h3BoysGreaterThan18;
	private Integer h3BoysTotal;

	private Integer h3Girls7to11;
	private Integer h3Girls12to15;
	private Integer h3Girls16to18;
	private Integer h3GirlsGreaterThan18;
	private Integer h3GirlsTotal;

	private Integer h3GrandTotal;

	private Integer h4TotalCases;
	private Integer h4Boys7to11;
	private Integer h4Boys12to15;
	private Integer h4Boys16to18;
	private Integer h4BoysGreaterThan18;
	private Integer h4BoysTotal;
	private Integer h4Girls7to11;
	private Integer h4Girls12to15;
	private Integer h4Girls16to18;
	private Integer h4GirlsGreaterThan18;
	private Integer h4GirlsTotal;
	private Integer h4GrandTotal;
	
	// H ends
	// I starts
	private Integer jjbSectionIId;
	private Integer iTotalCases;
	private Integer iBoysSC;
	private Integer iBoysST;
	private Integer iBoysOBC;
	private Integer iBoysEBC;
	private Integer iBoysOthers;
	private Integer iBoysNotKnown;
	private Integer iBoysTotal;

	private Integer iGirlsSC;
	private Integer iGirlsST;
	private Integer iGirlsOBC;
	private Integer iGirlsEBC;
	private Integer iGirlsOthers;
	private Integer iGirlsNotKnown;
	private Integer iGirlsTotal;

	private Integer iGrandTotal;

	private Integer iMinorityBoys;
	private Integer iMinorityGirls;
	private Integer iMinorityTotal;
	// I ends
	// J starts
	private Integer jjbSectionJId;
	private Integer j1NonHeinousTotalCases;
	private Integer j1NonHeinousBoys7to11;
	private Integer j1NonHeinousBoys12to15;
	private Integer j1NonHeinousBoys16to18;
	private Integer j1NonHeinousBoysGreaterThan18;
	private Integer j1NonHeinousBoysTotal;

	private Integer j1NonHeinousGirls7to11;
	private Integer j1NonHeinousGirls12to15;
	private Integer j1NonHeinousGirls16to18;
	private Integer j1NonHeinousGirlsGreaterThan18;
	private Integer j1NonHeinousGirlsTotal;

	private Integer j1NonHeinousGrandTotal;

	private Integer j2HeinousTotalCases;
	private Integer j2HeinousBoys7to11;
	private Integer j2HeinousBoys12to15;
	private Integer j2HeinousBoys16to18;
	private Integer j2HeinousBoysGreaterThan18;
	private Integer j2HeinousBoysTotal;

	private Integer j2HeinousGirls7to11;
	private Integer j2HeinousGirls12to15;
	private Integer j2HeinousGirls16to18;
	private Integer j2HeinousGirlsGreaterThan18;
	private Integer j2HeinousGirlsTotal;

	private Integer j2HeinousGrandTotal;

	private Integer j3TotalCases;
	private Integer j3TotalBoys7to11;
	private Integer j3TotalBoys12to15;
	private Integer j3TotalBoys16to18;
	private Integer j3TotalBoysGreaterThan18;
	private Integer j3TotalBoysTotal;
	private Integer j3TotalGirls7to11;
	private Integer j3TotalGirls12to15;
	private Integer j3TotalGirls16to18;
	private Integer j3TotalGirlsGreaterThan18;
	private Integer j3TotalGirlsTotal;
	private Integer j3TotalGrandTotal;
	
	
	// J ends
	// K starts
	private Integer jjbSectionKId;
	private Integer k1;
	private Integer k2a;
	private Integer k2b;
	private Boolean k3a;
	private Integer k3b;
	private Boolean k4a;
	private Integer k4b;
	private Integer k4c;

	private Integer k5aCases;
	private Integer k5aBoys;
	private Integer k5aGirls;
	private Integer k5aTotalCICL;
	private String k5b;

	private Integer k6Cases;
	private Integer k6Boys;
	private Integer k6Girls;
	private Integer k6TotalCICL;

	private Integer k7Cases;
	private Integer k7Boys;
	private Integer k7Girls;
	private Integer k7TotalCICL;

	private Integer k8Cases;
	private Integer k8Boys;
	private Integer k8Girls;
	private Integer k8TotalCICL;

	private Integer k9Cases;
	private Integer k9Boys;
	private Integer k9Girls;
	private Integer k9TotalCICL;

	private Integer k10a;
	private String k10b;
	private Integer k10cCases;
	private Integer k10cBoys;
	private Integer k10cGirls;
	private Integer k10cTotalCICL;
	private Integer k11a;
	private String k11b;
	private Integer k11cCases;
	private Integer k11cBoys;
	private Integer k11cGirls;
	private Integer k11cTotalCICL;

	private Integer k12aCases;
	private Integer k12aBoys;
	private Integer k12aGirls;
	private Integer k12aTotalCICL;

	private Integer k12bCases;
	private Integer k12bBoys;
	private Integer k12bGirls;
	private Integer k12bTotalCICL;

	private Integer k12cCases;
	private Integer k12cBoys;
	private Integer k12cGirls;
	private Integer k12cTotalCICL;

	private Integer k12Cases;
	private Integer k12Boys;
	private Integer k12Girls;
	private Integer k12TotalCICL;

	private Integer k13aCases;
	private Integer k13aBoys;
	private Integer k13aGirls;
	private Integer k13aTotalCICL;

	private Integer k13bCases;
	private Integer k13bBoys;
	private Integer k13bGirls;
	private Integer k13bTotalCICL;

	private Integer k13cCases;
	private Integer k13cBoys;
	private Integer k13cGirls;
	private Integer k13cTotalCICL;

	private Integer k13dCases;
	private Integer k13dBoys;
	private Integer k13dGirls;
	private Integer k13dTotalCICL;

	private Integer k14aCases;
	private Integer k14aBoys;
	private Integer k14aGirls;
	private Integer k14aTotalCICL;

	private Integer k14bCases;
	private Integer k14bBoys;
	private Integer k14bGirls;
	private Integer k14bTotalCICL;

	private Integer k14cCases;
	private Integer k14cBoys;
	private Integer k14cGirls;
	private Integer k14cTotalCICL;

	private Integer k14dCases;
	private Integer k14dBoys;
	private Integer k14dGirls;
	private Integer k14dTotalCICL;

	private Integer k15aCases;
	private Integer k15aBoys;
	private Integer k15aGirls;
	private Integer k15aTotalCICL;

	private Integer k15bCases;
	private Integer k15bBoys;
	private Integer k15bGirls;
	private Integer k15bTotalCICL;

	private Integer k15cCases;
	private Integer k15cBoys;
	private Integer k15cGirls;
	private Integer k15cTotalCICL;

	private Integer k15dCases;
	private Integer k15dBoys;
	private Integer k15dGirls;
	private Integer k15dTotalCICL;

	private Integer k16aCases;
	private Integer k16aBoys;
	private Integer k16aGirls;
	private Integer k16aTotalCICL;

	private Integer k16bCases;
	private Integer k16bBoys;
	private Integer k16bGirls;
	private Integer k16bTotalCICL;

	private Integer k16cCases;
	private Integer k16cBoys;
	private Integer k16cGirls;
	private Integer k16cTotalCICL;

	private Integer k16dCases;
	private Integer k16dBoys;
	private Integer k16dGirls;
	private Integer k16dTotalCICL;

	private Integer k16eCases;
	private Integer k16eBoys;
	private Integer k16eGirls;
	private Integer k16eTotalCICL;

	private Integer k16fCases;
	private Integer k16fBoys;
	private Integer k16fGirls;
	private Integer k16fTotalCICL;

	private Integer k17aCases;
	private Integer k17aBoys;
	private Integer k17aGirls;
	private Integer k17aTotalCICL;

	private Integer k17bCases;
	private Integer k17bBoys;
	private Integer k17bGirls;
	private Integer k17bTotalCICL;

	private Integer k17cCases;
	private Integer k17cBoys;
	private Integer k17cGirls;
	private Integer k17cTotalCICL;

	private Integer k17dCases;
	private Integer k17dBoys;
	private Integer k17dGirls;
	private Integer k17dTotalCICL;

	private Integer k17eCases;
	private Integer k17eBoys;
	private Integer k17eGirls;
	private Integer k17eTotalCICL;

	// K ends
	private Boolean l1WasTrainingHeldJJSysytem;
	private Integer l1aNoOfTraining;
	private List<JjbDetailsTraining> jjbDetailsTraining;
	private Timeperiod timeperiod;
	// Getteres and setters starts

	public Integer getId() {
		return id;
	}

	public String getNameOfAuthorizedPerson() {
		return nameOfAuthorizedPerson;
	}

	public boolean isLive() {
		return isLive;
	}

	public Integer getUserId() {
		return userId;
	}

	public boolean isSubmitted() {
		return isSubmitted;
	}

	public Date getDateOfSubmimission() {
		return dateOfSubmimission;
	}

	public Date getLastSaveDate() {
		return lastSaveDate;
	}

	public Date getMonthyear() {
		return monthyear;
	}

	public String getDesignation() {
		return designation;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public Integer getNoOfMembers() {
		return noOfMembers;
	}

	public Integer getNoOfMaleMembers() {
		return noOfMaleMembers;
	}

	public Integer getNoOfFemaleMembers() {
		return noOfFemaleMembers;
	}

	public Integer getNoOfProbationOfficers() {
		return noOfProbationOfficers;
	}

	public String getPlaceOfJjbSittings() {
		return placeOfJjbSittings;
	}

	public Integer getA1TotalCases() {
		return a1TotalCases;
	}

	public Integer getA1Boys7to11() {
		return a1Boys7to11;
	}

	public Integer getA1Boys12to15() {
		return a1Boys12to15;
	}

	public Integer getA1Boys16to18() {
		return a1Boys16to18;
	}

	public Integer getA1BoysGreaterThan18() {
		return a1BoysGreaterThan18;
	}

	public Integer getA1BoysTotal() {
		return a1BoysTotal;
	}

	public Integer getA1Girls7to11() {
		return a1Girls7to11;
	}

	public Integer getA1Girls12to15() {
		return a1Girls12to15;
	}

	public Integer getA1Girls16to18() {
		return a1Girls16to18;
	}

	public Integer getA1GirlsGreaterThan18() {
		return a1GirlsGreaterThan18;
	}

	public Integer getA1GirlsTotal() {
		return a1GirlsTotal;
	}

	public Integer getA1GrandTotal() {
		return a1GrandTotal;
	}

	public Integer getA2TotalCases() {
		return a2TotalCases;
	}

	public Integer getA2Boys7to11() {
		return a2Boys7to11;
	}

	public Integer getA2Boys12to15() {
		return a2Boys12to15;
	}

	public Integer getA2Boys16to18() {
		return a2Boys16to18;
	}

	public Integer getA2BoysGreaterThan18() {
		return a2BoysGreaterThan18;
	}

	public Integer getA2BoysTotal() {
		return a2BoysTotal;
	}

	public Integer getA2Girls7to11() {
		return a2Girls7to11;
	}

	public Integer getA2Girls12to15() {
		return a2Girls12to15;
	}

	public Integer getA2Girls16to18() {
		return a2Girls16to18;
	}

	public Integer getA2GirlsGreaterThan18() {
		return a2GirlsGreaterThan18;
	}

	public Integer getA2GirlsTotal() {
		return a2GirlsTotal;
	}

	public Integer getA2GrandTotal() {
		return a2GrandTotal;
	}

	public Integer getaTotalCases() {
		return aTotalCases;
	}

	public Integer getaBoys7to11() {
		return aBoys7to11;
	}

	public Integer getaBoys12to15() {
		return aBoys12to15;
	}

	public Integer getaBoys16to18() {
		return aBoys16to18;
	}

	public Integer getaBoysGreaterThan18() {
		return aBoysGreaterThan18;
	}

	public Integer getaBoysTotal() {
		return aBoysTotal;
	}

	public Integer getaGirls7to11() {
		return aGirls7to11;
	}

	public Integer getaGirls12to15() {
		return aGirls12to15;
	}

	public Integer getaGirls16to18() {
		return aGirls16to18;
	}

	public Integer getaGirlsGreaterThan18() {
		return aGirlsGreaterThan18;
	}

	public Integer getaGirlsTotal() {
		return aGirlsTotal;
	}

	public Integer getaGrandTotal() {
		return aGrandTotal;
	}

	public Integer getB1TotalCases() {
		return b1TotalCases;
	}

	public Integer getB1Boys7to11() {
		return b1Boys7to11;
	}

	public Integer getB1Boys12to15() {
		return b1Boys12to15;
	}

	public Integer getB1Boys16to18() {
		return b1Boys16to18;
	}

	public Integer getB1BoysGreaterThan18() {
		return b1BoysGreaterThan18;
	}

	public Integer getB1BoysTotal() {
		return b1BoysTotal;
	}

	public Integer getB1Girls7to11() {
		return b1Girls7to11;
	}

	public Integer getB1Girls12to15() {
		return b1Girls12to15;
	}

	public Integer getB1Girls16to18() {
		return b1Girls16to18;
	}

	public Integer getB1GirlsGreaterThan18() {
		return b1GirlsGreaterThan18;
	}

	public Integer getB1GirlsTotal() {
		return b1GirlsTotal;
	}

	public Integer getB1GrandTotal() {
		return b1GrandTotal;
	}

	public Integer getB2TotalCases() {
		return b2TotalCases;
	}

	public Integer getB2Boys7to11() {
		return b2Boys7to11;
	}

	public Integer getB2Boys12to15() {
		return b2Boys12to15;
	}

	public Integer getB2Boys16to18() {
		return b2Boys16to18;
	}

	public Integer getB2BoysGreaterThan18() {
		return b2BoysGreaterThan18;
	}

	public Integer getB2BoysTotal() {
		return b2BoysTotal;
	}

	public Integer getB2Girls7to11() {
		return b2Girls7to11;
	}

	public Integer getB2Girls12to15() {
		return b2Girls12to15;
	}

	public Integer getB2Girls16to18() {
		return b2Girls16to18;
	}

	public Integer getB2GirlsGreaterThan18() {
		return b2GirlsGreaterThan18;
	}

	public Integer getB2GirlsTotal() {
		return b2GirlsTotal;
	}

	public Integer getB2GrandTotal() {
		return b2GrandTotal;
	}

	public Integer getB3TotalCases() {
		return b3TotalCases;
	}

	public Integer getB3Boys7to11() {
		return b3Boys7to11;
	}

	public Integer getB3Boys12to15() {
		return b3Boys12to15;
	}

	public Integer getB3Boys16to18() {
		return b3Boys16to18;
	}

	public Integer getB3BoysGreaterThan18() {
		return b3BoysGreaterThan18;
	}

	public Integer getB3BoysTotal() {
		return b3BoysTotal;
	}

	public Integer getB3Girls7to11() {
		return b3Girls7to11;
	}

	public Integer getB3Girls12to15() {
		return b3Girls12to15;
	}

	public Integer getB3Girls16to18() {
		return b3Girls16to18;
	}

	public Integer getB3GirlsGreaterThan18() {
		return b3GirlsGreaterThan18;
	}

	public Integer getB3GirlsTotal() {
		return b3GirlsTotal;
	}

	public Integer getB3GrandTotal() {
		return b3GrandTotal;
	}

	public Integer getbTotalCases() {
		return bTotalCases;
	}

	public Integer getbBoys7to11() {
		return bBoys7to11;
	}

	public Integer getbBoys12to15() {
		return bBoys12to15;
	}

	public Integer getbBoys16to18() {
		return bBoys16to18;
	}

	public Integer getbBoysGreaterThan18() {
		return bBoysGreaterThan18;
	}

	public Integer getbBoysTotal() {
		return bBoysTotal;
	}

	public Integer getbGirls7to11() {
		return bGirls7to11;
	}

	public Integer getbGirls12to15() {
		return bGirls12to15;
	}

	public Integer getbGirls16to18() {
		return bGirls16to18;
	}

	public Integer getbGirlsGreaterThan18() {
		return bGirlsGreaterThan18;
	}

	public Integer getbGirlsTotal() {
		return bGirlsTotal;
	}

	public Integer getbGrandTotal() {
		return bGrandTotal;
	}

	public Integer getcTotalCases() {
		return cTotalCases;
	}

	public Integer getcBoys7to11() {
		return cBoys7to11;
	}

	public Integer getcBoys12to15() {
		return cBoys12to15;
	}

	public Integer getcBoys16to18() {
		return cBoys16to18;
	}

	public Integer getcBoysGreaterThan18() {
		return cBoysGreaterThan18;
	}

	public Integer getcBoysTotal() {
		return cBoysTotal;
	}

	public Integer getcGirls7to11() {
		return cGirls7to11;
	}

	public Integer getcGirls12to15() {
		return cGirls12to15;
	}

	public Integer getcGirls16to18() {
		return cGirls16to18;
	}

	public Integer getcGirlsGreaterThan18() {
		return cGirlsGreaterThan18;
	}

	public Integer getcGirlsTotal() {
		return cGirlsTotal;
	}

	public Integer getcGrandTotal() {
		return cGrandTotal;
	}

	public Integer getD1TotalCases() {
		return d1TotalCases;
	}

	public Integer getD1Boys7to11() {
		return d1Boys7to11;
	}

	public Integer getD1Boys12to15() {
		return d1Boys12to15;
	}

	public Integer getD1Boys16to18() {
		return d1Boys16to18;
	}

	public Integer getD1BoysGreaterThan18() {
		return d1BoysGreaterThan18;
	}

	public Integer getD1BoysTotal() {
		return d1BoysTotal;
	}

	public Integer getD1Girls7to11() {
		return d1Girls7to11;
	}

	public Integer getD1Girls12to15() {
		return d1Girls12to15;
	}

	public Integer getD1Girls16to18() {
		return d1Girls16to18;
	}

	public Integer getD1GirlsGreaterThan18() {
		return d1GirlsGreaterThan18;
	}

	public Integer getD1GirlsTotal() {
		return d1GirlsTotal;
	}

	public Integer getD1GrandTotal() {
		return d1GrandTotal;
	}

	public Integer getD2TotalCases() {
		return d2TotalCases;
	}

	public Integer getD2Boys7to11() {
		return d2Boys7to11;
	}

	public Integer getD2Boys12to15() {
		return d2Boys12to15;
	}

	public Integer getD2Boys16to18() {
		return d2Boys16to18;
	}

	public Integer getD2BoysGreaterThan18() {
		return d2BoysGreaterThan18;
	}

	public Integer getD2BoysTotal() {
		return d2BoysTotal;
	}

	public Integer getD2Girls7to11() {
		return d2Girls7to11;
	}

	public Integer getD2Girls12to15() {
		return d2Girls12to15;
	}

	public Integer getD2Girls16to18() {
		return d2Girls16to18;
	}

	public Integer getD2GirlsGreaterThan18() {
		return d2GirlsGreaterThan18;
	}

	public Integer getD2GirlsTotal() {
		return d2GirlsTotal;
	}

	public Integer getD2GrandTotal() {
		return d2GrandTotal;
	}

	public Integer getdTotalCases() {
		return dTotalCases;
	}

	public Integer getdBoys7to11() {
		return dBoys7to11;
	}

	public Integer getdBoys12to15() {
		return dBoys12to15;
	}

	public Integer getdBoys16to18() {
		return dBoys16to18;
	}

	public Integer getdBoysGreaterThan18() {
		return dBoysGreaterThan18;
	}

	public Integer getdBoysTotal() {
		return dBoysTotal;
	}

	public Integer getdGirls7to11() {
		return dGirls7to11;
	}

	public Integer getdGirls12to15() {
		return dGirls12to15;
	}

	public Integer getdGirls16to18() {
		return dGirls16to18;
	}

	public Integer getdGirlsGreaterThan18() {
		return dGirlsGreaterThan18;
	}

	public Integer getdGirlsTotal() {
		return dGirlsTotal;
	}

	public Integer getdGrandTotal() {
		return dGrandTotal;
	}

	public Integer getE1TotalCases() {
		return e1TotalCases;
	}

	public Integer getE1Boys7to11() {
		return e1Boys7to11;
	}

	public Integer getE1Boys12to15() {
		return e1Boys12to15;
	}

	public Integer getE1Boys16to18() {
		return e1Boys16to18;
	}

	public Integer getE1BoysGreaterThan18() {
		return e1BoysGreaterThan18;
	}

	public Integer getE1BoysTotal() {
		return e1BoysTotal;
	}

	public Integer getE1Girls7to11() {
		return e1Girls7to11;
	}

	public Integer getE1Girls12to15() {
		return e1Girls12to15;
	}

	public Integer getE1Girls16to18() {
		return e1Girls16to18;
	}

	public Integer getE1GirlsGreaterThan18() {
		return e1GirlsGreaterThan18;
	}

	public Integer getE1GirlsTotal() {
		return e1GirlsTotal;
	}

	public Integer getE1GrandTotal() {
		return e1GrandTotal;
	}

	public Integer getE2TotalCases() {
		return e2TotalCases;
	}

	public Integer getE2Boys7to11() {
		return e2Boys7to11;
	}

	public Integer getE2Boys12to15() {
		return e2Boys12to15;
	}

	public Integer getE2Boys16to18() {
		return e2Boys16to18;
	}

	public Integer getE2BoysGreaterThan18() {
		return e2BoysGreaterThan18;
	}

	public Integer getE2BoysTotal() {
		return e2BoysTotal;
	}

	public Integer getE2Girls7to11() {
		return e2Girls7to11;
	}

	public Integer getE2Girls12to15() {
		return e2Girls12to15;
	}

	public Integer getE2Girls16to18() {
		return e2Girls16to18;
	}

	public Integer getE2GirlsGreaterThan18() {
		return e2GirlsGreaterThan18;
	}

	public Integer getE2GirlsTotal() {
		return e2GirlsTotal;
	}

	public Integer getE2GrandTotal() {
		return e2GrandTotal;
	}

	public Integer getE3TotalCases() {
		return e3TotalCases;
	}

	public Integer getE3Boys7to11() {
		return e3Boys7to11;
	}

	public Integer getE3Boys12to15() {
		return e3Boys12to15;
	}

	public Integer getE3Boys16to18() {
		return e3Boys16to18;
	}

	public Integer getE3BoysGreaterThan18() {
		return e3BoysGreaterThan18;
	}

	public Integer getE3BoysTotal() {
		return e3BoysTotal;
	}

	public Integer getE3Girls7to11() {
		return e3Girls7to11;
	}

	public Integer getE3Girls12to15() {
		return e3Girls12to15;
	}

	public Integer getE3Girls16to18() {
		return e3Girls16to18;
	}

	public Integer getE3GirlsGreaterThan18() {
		return e3GirlsGreaterThan18;
	}

	public Integer getE3GirlsTotal() {
		return e3GirlsTotal;
	}

	public Integer getE3GrandTotal() {
		return e3GrandTotal;
	}

	public Integer getE4TotalCases() {
		return e4TotalCases;
	}

	public Integer getE4Boys7to11() {
		return e4Boys7to11;
	}

	public Integer getE4Boys12to15() {
		return e4Boys12to15;
	}

	public Integer getE4Boys16to18() {
		return e4Boys16to18;
	}

	public Integer getE4BoysGreaterThan18() {
		return e4BoysGreaterThan18;
	}

	public Integer getE4BoysTotal() {
		return e4BoysTotal;
	}

	public Integer getE4Girls7to11() {
		return e4Girls7to11;
	}

	public Integer getE4Girls12to15() {
		return e4Girls12to15;
	}

	public Integer getE4Girls16to18() {
		return e4Girls16to18;
	}

	public Integer getE4GirlsGreaterThan18() {
		return e4GirlsGreaterThan18;
	}

	public Integer getE4GirlsTotal() {
		return e4GirlsTotal;
	}

	public Integer getE4GrandTotal() {
		return e4GrandTotal;
	}

	public Integer getE5TotalCases() {
		return e5TotalCases;
	}

	public Integer getE5Boys7to11() {
		return e5Boys7to11;
	}

	public Integer getE5Boys12to15() {
		return e5Boys12to15;
	}

	public Integer getE5Boys16to18() {
		return e5Boys16to18;
	}

	public Integer getE5BoysGreaterThan18() {
		return e5BoysGreaterThan18;
	}

	public Integer getE5BoysTotal() {
		return e5BoysTotal;
	}

	public Integer getE5Girls7to11() {
		return e5Girls7to11;
	}

	public Integer getE5Girls12to15() {
		return e5Girls12to15;
	}

	public Integer getE5Girls16to18() {
		return e5Girls16to18;
	}

	public Integer getE5GirlsGreaterThan18() {
		return e5GirlsGreaterThan18;
	}

	public Integer getE5GirlsTotal() {
		return e5GirlsTotal;
	}

	public Integer getE5GrandTotal() {
		return e5GrandTotal;
	}

	public Integer getE6TotalCases() {
		return e6TotalCases;
	}

	public Integer getE6Boys7to11() {
		return e6Boys7to11;
	}

	public Integer getE6Boys12to15() {
		return e6Boys12to15;
	}

	public Integer getE6Boys16to18() {
		return e6Boys16to18;
	}

	public Integer getE6BoysGreaterThan18() {
		return e6BoysGreaterThan18;
	}

	public Integer getE6BoysTotal() {
		return e6BoysTotal;
	}

	public Integer getE6Girls7to11() {
		return e6Girls7to11;
	}

	public Integer getE6Girls12to15() {
		return e6Girls12to15;
	}

	public Integer getE6Girls16to18() {
		return e6Girls16to18;
	}

	public Integer getE6GirlsGreaterThan18() {
		return e6GirlsGreaterThan18;
	}

	public Integer getE6GirlsTotal() {
		return e6GirlsTotal;
	}

	public Integer getE6GrandTotal() {
		return e6GrandTotal;
	}

	public Integer getE7TotalCases() {
		return e7TotalCases;
	}

	public Integer getE7Boys7to11() {
		return e7Boys7to11;
	}

	public Integer getE7Boys12to15() {
		return e7Boys12to15;
	}

	public Integer getE7Boys16to18() {
		return e7Boys16to18;
	}

	public Integer getE7BoysGreaterThan18() {
		return e7BoysGreaterThan18;
	}

	public Integer getE7BoysTotal() {
		return e7BoysTotal;
	}

	public Integer getE7Girls7to11() {
		return e7Girls7to11;
	}

	public Integer getE7Girls12to15() {
		return e7Girls12to15;
	}

	public Integer getE7Girls16to18() {
		return e7Girls16to18;
	}

	public Integer getE7GirlsGreaterThan18() {
		return e7GirlsGreaterThan18;
	}

	public Integer getE7GirlsTotal() {
		return e7GirlsTotal;
	}

	public Integer getE7GrandTotal() {
		return e7GrandTotal;
	}

	public Integer getE8TotalCases() {
		return e8TotalCases;
	}

	public Integer getE8Boys7to11() {
		return e8Boys7to11;
	}

	public Integer getE8Boys12to15() {
		return e8Boys12to15;
	}

	public Integer getE8Boys16to18() {
		return e8Boys16to18;
	}

	public Integer getE8BoysGreaterThan18() {
		return e8BoysGreaterThan18;
	}

	public Integer getE8BoysTotal() {
		return e8BoysTotal;
	}

	public Integer getE8Girls7to11() {
		return e8Girls7to11;
	}

	public Integer getE8Girls12to15() {
		return e8Girls12to15;
	}

	public Integer getE8Girls16to18() {
		return e8Girls16to18;
	}

	public Integer getE8GirlsGreaterThan18() {
		return e8GirlsGreaterThan18;
	}

	public Integer getE8GirlsTotal() {
		return e8GirlsTotal;
	}

	public Integer getE8GrandTotal() {
		return e8GrandTotal;
	}

	public Integer getE9TotalCases() {
		return e9TotalCases;
	}

	public Integer getE9Boys7to11() {
		return e9Boys7to11;
	}

	public Integer getE9Boys12to15() {
		return e9Boys12to15;
	}

	public Integer getE9Boys16to18() {
		return e9Boys16to18;
	}

	public Integer getE9BoysGreaterThan18() {
		return e9BoysGreaterThan18;
	}

	public Integer getE9BoysTotal() {
		return e9BoysTotal;
	}

	public Integer getE9Girls7to11() {
		return e9Girls7to11;
	}

	public Integer getE9Girls12to15() {
		return e9Girls12to15;
	}

	public Integer getE9Girls16to18() {
		return e9Girls16to18;
	}

	public Integer getE9GirlsGreaterThan18() {
		return e9GirlsGreaterThan18;
	}

	public Integer getE9GirlsTotal() {
		return e9GirlsTotal;
	}

	public Integer getE9GrandTotal() {
		return e9GrandTotal;
	}

	public Integer getE10TotalCases() {
		return e10TotalCases;
	}

	public Integer getE10Boys7to11() {
		return e10Boys7to11;
	}

	public Integer getE10Boys12to15() {
		return e10Boys12to15;
	}

	public Integer getE10Boys16to18() {
		return e10Boys16to18;
	}

	public Integer getE10BoysGreaterThan18() {
		return e10BoysGreaterThan18;
	}

	public Integer getE10BoysTotal() {
		return e10BoysTotal;
	}

	public Integer getE10Girls7to11() {
		return e10Girls7to11;
	}

	public Integer getE10Girls12to15() {
		return e10Girls12to15;
	}

	public Integer getE10Girls16to18() {
		return e10Girls16to18;
	}

	public Integer getE10GirlsGreaterThan18() {
		return e10GirlsGreaterThan18;
	}

	public Integer getE10GirlsTotal() {
		return e10GirlsTotal;
	}

	public Integer getE10GrandTotal() {
		return e10GrandTotal;
	}

	public Integer getE11TotalCases() {
		return e11TotalCases;
	}

	public Integer getE11Boys7to11() {
		return e11Boys7to11;
	}

	public Integer getE11Boys12to15() {
		return e11Boys12to15;
	}

	public Integer getE11Boys16to18() {
		return e11Boys16to18;
	}

	public Integer getE11BoysGreaterThan18() {
		return e11BoysGreaterThan18;
	}

	public Integer getE11BoysTotal() {
		return e11BoysTotal;
	}

	public Integer getE11Girls7to11() {
		return e11Girls7to11;
	}

	public Integer getE11Girls12to15() {
		return e11Girls12to15;
	}

	public Integer getE11Girls16to18() {
		return e11Girls16to18;
	}

	public Integer getE11GirlsGreaterThan18() {
		return e11GirlsGreaterThan18;
	}

	public Integer getE11GirlsTotal() {
		return e11GirlsTotal;
	}

	public Integer getE11GrandTotal() {
		return e11GrandTotal;
	}

	public Integer getE12TotalCases() {
		return e12TotalCases;
	}

	public Integer getE12Boys7to11() {
		return e12Boys7to11;
	}

	public Integer getE12Boys12to15() {
		return e12Boys12to15;
	}

	public Integer getE12Boys16to18() {
		return e12Boys16to18;
	}

	public Integer getE12BoysGreaterThan18() {
		return e12BoysGreaterThan18;
	}

	public Integer getE12BoysTotal() {
		return e12BoysTotal;
	}

	public Integer getE12Girls7to11() {
		return e12Girls7to11;
	}

	public Integer getE12Girls12to15() {
		return e12Girls12to15;
	}

	public Integer getE12Girls16to18() {
		return e12Girls16to18;
	}

	public Integer getE12GirlsGreaterThan18() {
		return e12GirlsGreaterThan18;
	}

	public Integer getE12GirlsTotal() {
		return e12GirlsTotal;
	}

	public Integer getE12GrandTotal() {
		return e12GrandTotal;
	}

	public Integer getE13TotalCases() {
		return e13TotalCases;
	}

	public Integer getE13Boys7to11() {
		return e13Boys7to11;
	}

	public Integer getE13Boys12to15() {
		return e13Boys12to15;
	}

	public Integer getE13Boys16to18() {
		return e13Boys16to18;
	}

	public Integer getE13BoysGreaterThan18() {
		return e13BoysGreaterThan18;
	}

	public Integer getE13BoysTotal() {
		return e13BoysTotal;
	}

	public Integer getE13Girls7to11() {
		return e13Girls7to11;
	}

	public Integer getE13Girls12to15() {
		return e13Girls12to15;
	}

	public Integer getE13Girls16to18() {
		return e13Girls16to18;
	}

	public Integer getE13GirlsGreaterThan18() {
		return e13GirlsGreaterThan18;
	}

	public Integer getE13GirlsTotal() {
		return e13GirlsTotal;
	}

	public Integer getE13GrandTotal() {
		return e13GrandTotal;
	}

	public Integer geteTotalCases() {
		return eTotalCases;
	}

	public Integer geteBoys7to11() {
		return eBoys7to11;
	}

	public Integer geteBoys12to15() {
		return eBoys12to15;
	}

	public Integer geteBoys16to18() {
		return eBoys16to18;
	}

	public Integer geteBoysGreaterThan18() {
		return eBoysGreaterThan18;
	}

	public Integer geteBoysTotal() {
		return eBoysTotal;
	}

	public Integer geteGirls7to11() {
		return eGirls7to11;
	}

	public Integer geteGirls12to15() {
		return eGirls12to15;
	}

	public Integer geteGirls16to18() {
		return eGirls16to18;
	}

	public Integer geteGirlsGreaterThan18() {
		return eGirlsGreaterThan18;
	}

	public Integer geteGirlsTotal() {
		return eGirlsTotal;
	}

	public Integer geteGrandTotal() {
		return eGrandTotal;
	}

	public Integer getF1TotalCases() {
		return f1TotalCases;
	}

	public Integer getF1Boys7to11() {
		return f1Boys7to11;
	}

	public Integer getF1Boys12to15() {
		return f1Boys12to15;
	}

	public Integer getF1Boys16to18() {
		return f1Boys16to18;
	}

	public Integer getF1BoysGreaterThan18() {
		return f1BoysGreaterThan18;
	}

	public Integer getF1BoysTotal() {
		return f1BoysTotal;
	}

	public Integer getF1Girls7to11() {
		return f1Girls7to11;
	}

	public Integer getF1Girls12to15() {
		return f1Girls12to15;
	}

	public Integer getF1Girls16to18() {
		return f1Girls16to18;
	}

	public Integer getF1GirlsGreaterThan18() {
		return f1GirlsGreaterThan18;
	}

	public Integer getF1GirlsTotal() {
		return f1GirlsTotal;
	}

	public Integer getF1GrandTotal() {
		return f1GrandTotal;
	}

	public Integer getF2TotalCases() {
		return f2TotalCases;
	}

	public Integer getF2Boys7to11() {
		return f2Boys7to11;
	}

	public Integer getF2Boys12to15() {
		return f2Boys12to15;
	}

	public Integer getF2Boys16to18() {
		return f2Boys16to18;
	}

	public Integer getF2BoysGreaterThan18() {
		return f2BoysGreaterThan18;
	}

	public Integer getF2BoysTotal() {
		return f2BoysTotal;
	}

	public Integer getF2Girls7to11() {
		return f2Girls7to11;
	}

	public Integer getF2Girls12to15() {
		return f2Girls12to15;
	}

	public Integer getF2Girls16to18() {
		return f2Girls16to18;
	}

	public Integer getF2GirlsGreaterThan18() {
		return f2GirlsGreaterThan18;
	}

	public Integer getF2GirlsTotal() {
		return f2GirlsTotal;
	}

	public Integer getF2GrandTotal() {
		return f2GrandTotal;
	}

	public Integer getF3TotalCases() {
		return f3TotalCases;
	}

	public Integer getF3Boys7to11() {
		return f3Boys7to11;
	}

	public Integer getF3Boys12to15() {
		return f3Boys12to15;
	}

	public Integer getF3Boys16to18() {
		return f3Boys16to18;
	}

	public Integer getF3BoysGreaterThan18() {
		return f3BoysGreaterThan18;
	}

	public Integer getF3BoysTotal() {
		return f3BoysTotal;
	}

	public Integer getF3Girls7to11() {
		return f3Girls7to11;
	}

	public Integer getF3Girls12to15() {
		return f3Girls12to15;
	}

	public Integer getF3Girls16to18() {
		return f3Girls16to18;
	}

	public Integer getF3GirlsGreaterThan18() {
		return f3GirlsGreaterThan18;
	}

	public Integer getF3GirlsTotal() {
		return f3GirlsTotal;
	}

	public Integer getF3GrandTotal() {
		return f3GrandTotal;
	}

	public Integer getG1PettyTotalCases() {
		return g1PettyTotalCases;
	}

	public Integer getG1PettyBoys7to11() {
		return g1PettyBoys7to11;
	}

	public Integer getG1PettyBoys12to15() {
		return g1PettyBoys12to15;
	}

	public Integer getG1PettyBoys16to18() {
		return g1PettyBoys16to18;
	}

	public Integer getG1PettyBoysGreaterThan18() {
		return g1PettyBoysGreaterThan18;
	}

	public Integer getG1PettyBoysTotal() {
		return g1PettyBoysTotal;
	}

	public Integer getG1PettyGirls7to11() {
		return g1PettyGirls7to11;
	}

	public Integer getG1PettyGirls12to15() {
		return g1PettyGirls12to15;
	}

	public Integer getG1PettyGirls16to18() {
		return g1PettyGirls16to18;
	}

	public Integer getG1PettyGirlsGreaterThan18() {
		return g1PettyGirlsGreaterThan18;
	}

	public Integer getG1PettyGirlsTotal() {
		return g1PettyGirlsTotal;
	}

	public Integer getG1PettyGrandTotal() {
		return g1PettyGrandTotal;
	}

	public Integer getG1SeriousTotalCases() {
		return g1SeriousTotalCases;
	}

	public Integer getG1SeriousBoys7to11() {
		return g1SeriousBoys7to11;
	}

	public Integer getG1SeriousBoys12to15() {
		return g1SeriousBoys12to15;
	}

	public Integer getG1SeriousBoys16to18() {
		return g1SeriousBoys16to18;
	}

	public Integer getG1SeriousBoysGreaterThan18() {
		return g1SeriousBoysGreaterThan18;
	}

	public Integer getG1SeriousBoysTotal() {
		return g1SeriousBoysTotal;
	}

	public Integer getG1SeriousGirls7to11() {
		return g1SeriousGirls7to11;
	}

	public Integer getG1SeriousGirls12to15() {
		return g1SeriousGirls12to15;
	}

	public Integer getG1SeriousGirls16to18() {
		return g1SeriousGirls16to18;
	}

	public Integer getG1SeriousGirlsGreaterThan18() {
		return g1SeriousGirlsGreaterThan18;
	}

	public Integer getG1SeriousGirlsTotal() {
		return g1SeriousGirlsTotal;
	}

	public Integer getG1SeriousGrandTotal() {
		return g1SeriousGrandTotal;
	}

	public Integer getG1HeinousTotalCases() {
		return g1HeinousTotalCases;
	}

	public Integer getG1HeinousBoys7to11() {
		return g1HeinousBoys7to11;
	}

	public Integer getG1HeinousBoys12to15() {
		return g1HeinousBoys12to15;
	}

	public Integer getG1HeinousBoys16to18() {
		return g1HeinousBoys16to18;
	}

	public Integer getG1HeinousBoysGreaterThan18() {
		return g1HeinousBoysGreaterThan18;
	}

	public Integer getG1HeinousBoysTotal() {
		return g1HeinousBoysTotal;
	}

	public Integer getG1HeinousGirls7to11() {
		return g1HeinousGirls7to11;
	}

	public Integer getG1HeinousGirls12to15() {
		return g1HeinousGirls12to15;
	}

	public Integer getG1HeinousGirls16to18() {
		return g1HeinousGirls16to18;
	}

	public Integer getG1HeinousGirlsGreaterThan18() {
		return g1HeinousGirlsGreaterThan18;
	}

	public Integer getG1HeinousGirlsTotal() {
		return g1HeinousGirlsTotal;
	}

	public Integer getG1HeinousGrandTotal() {
		return g1HeinousGrandTotal;
	}

	public Integer getG1TotalCases() {
		return g1TotalCases;
	}

	public Integer getG1Boys7to11() {
		return g1Boys7to11;
	}

	public Integer getG1Boys12to15() {
		return g1Boys12to15;
	}

	public Integer getG1Boys16to18() {
		return g1Boys16to18;
	}

	public Integer getG1BoysGreaterThan18() {
		return g1BoysGreaterThan18;
	}

	public Integer getG1BoysTotal() {
		return g1BoysTotal;
	}

	public Integer getG1Girls7to11() {
		return g1Girls7to11;
	}

	public Integer getG1Girls12to15() {
		return g1Girls12to15;
	}

	public Integer getG1Girls16to18() {
		return g1Girls16to18;
	}

	public Integer getG1GirlsGreaterThan18() {
		return g1GirlsGreaterThan18;
	}

	public Integer getG1GirlsTotal() {
		return g1GirlsTotal;
	}

	public Integer getG1GrandTotal() {
		return g1GrandTotal;
	}

	public Integer getG2PettyTotalCases() {
		return g2PettyTotalCases;
	}

	public Integer getG2PettyBoys7to11() {
		return g2PettyBoys7to11;
	}

	public Integer getG2PettyBoys12to15() {
		return g2PettyBoys12to15;
	}

	public Integer getG2PettyBoys16to18() {
		return g2PettyBoys16to18;
	}

	public Integer getG2PettyBoysGreaterThan18() {
		return g2PettyBoysGreaterThan18;
	}

	public Integer getG2PettyBoysTotal() {
		return g2PettyBoysTotal;
	}

	public Integer getG2PettyGirls7to11() {
		return g2PettyGirls7to11;
	}

	public Integer getG2PettyGirls12to15() {
		return g2PettyGirls12to15;
	}

	public Integer getG2PettyGirls16to18() {
		return g2PettyGirls16to18;
	}

	public Integer getG2PettyGirlsGreaterThan18() {
		return g2PettyGirlsGreaterThan18;
	}

	public Integer getG2PettyGirlsTotal() {
		return g2PettyGirlsTotal;
	}

	public Integer getG2PettyGrandTotal() {
		return g2PettyGrandTotal;
	}

	public Integer getG2SeriousTotalCases() {
		return g2SeriousTotalCases;
	}

	public Integer getG2SeriousBoys7to11() {
		return g2SeriousBoys7to11;
	}

	public Integer getG2SeriousBoys12to15() {
		return g2SeriousBoys12to15;
	}

	public Integer getG2SeriousBoys16to18() {
		return g2SeriousBoys16to18;
	}

	public Integer getG2SeriousBoysGreaterThan18() {
		return g2SeriousBoysGreaterThan18;
	}

	public Integer getG2SeriousBoysTotal() {
		return g2SeriousBoysTotal;
	}

	public Integer getG2SeriousGirls7to11() {
		return g2SeriousGirls7to11;
	}

	public Integer getG2SeriousGirls12to15() {
		return g2SeriousGirls12to15;
	}

	public Integer getG2SeriousGirls16to18() {
		return g2SeriousGirls16to18;
	}

	public Integer getG2SeriousGirlsGreaterThan18() {
		return g2SeriousGirlsGreaterThan18;
	}

	public Integer getG2SeriousGirlsTotal() {
		return g2SeriousGirlsTotal;
	}

	public Integer getG2SeriousGrandTotal() {
		return g2SeriousGrandTotal;
	}

	public Integer getG2HeinousTotalCases() {
		return g2HeinousTotalCases;
	}

	public Integer getG2HeinousBoys7to11() {
		return g2HeinousBoys7to11;
	}

	public Integer getG2HeinousBoys12to15() {
		return g2HeinousBoys12to15;
	}

	public Integer getG2HeinousBoys16to18() {
		return g2HeinousBoys16to18;
	}

	public Integer getG2HeinousBoysGreaterThan18() {
		return g2HeinousBoysGreaterThan18;
	}

	public Integer getG2HeinousBoysTotal() {
		return g2HeinousBoysTotal;
	}

	public Integer getG2HeinousGirls7to11() {
		return g2HeinousGirls7to11;
	}

	public Integer getG2HeinousGirls12to15() {
		return g2HeinousGirls12to15;
	}

	public Integer getG2HeinousGirls16to18() {
		return g2HeinousGirls16to18;
	}

	public Integer getG2HeinousGirlsGreaterThan18() {
		return g2HeinousGirlsGreaterThan18;
	}

	public Integer getG2HeinousGirlsTotal() {
		return g2HeinousGirlsTotal;
	}

	public Integer getG2HeinousGrandTotal() {
		return g2HeinousGrandTotal;
	}

	public Integer getG2TotalCases() {
		return g2TotalCases;
	}

	public Integer getG2Boys7to11() {
		return g2Boys7to11;
	}

	public Integer getG2Boys12to15() {
		return g2Boys12to15;
	}

	public Integer getG2Boys16to18() {
		return g2Boys16to18;
	}

	public Integer getG2BoysGreaterThan18() {
		return g2BoysGreaterThan18;
	}

	public Integer getG2BoysTotal() {
		return g2BoysTotal;
	}

	public Integer getG2Girls7to11() {
		return g2Girls7to11;
	}

	public Integer getG2Girls12to15() {
		return g2Girls12to15;
	}

	public Integer getG2Girls16to18() {
		return g2Girls16to18;
	}

	public Integer getG2GirlsGreaterThan18() {
		return g2GirlsGreaterThan18;
	}

	public Integer getG2GirlsTotal() {
		return g2GirlsTotal;
	}

	public Integer getG2GrandTotal() {
		return g2GrandTotal;
	}

	public Integer getG3PettyTotalCases() {
		return g3PettyTotalCases;
	}

	public Integer getG3PettyBoys7to11() {
		return g3PettyBoys7to11;
	}

	public Integer getG3PettyBoys12to15() {
		return g3PettyBoys12to15;
	}

	public Integer getG3PettyBoys16to18() {
		return g3PettyBoys16to18;
	}

	public Integer getG3PettyBoysGreaterThan18() {
		return g3PettyBoysGreaterThan18;
	}

	public Integer getG3PettyBoysTotal() {
		return g3PettyBoysTotal;
	}

	public Integer getG3PettyGirls7to11() {
		return g3PettyGirls7to11;
	}

	public Integer getG3PettyGirls12to15() {
		return g3PettyGirls12to15;
	}

	public Integer getG3PettyGirls16to18() {
		return g3PettyGirls16to18;
	}

	public Integer getG3PettyGirlsGreaterThan18() {
		return g3PettyGirlsGreaterThan18;
	}

	public Integer getG3PettyGirlsTotal() {
		return g3PettyGirlsTotal;
	}

	public Integer getG3PettyGrandTotal() {
		return g3PettyGrandTotal;
	}

	public Integer getG3SeriousTotalCases() {
		return g3SeriousTotalCases;
	}

	public Integer getG3SeriousBoys7to11() {
		return g3SeriousBoys7to11;
	}

	public Integer getG3SeriousBoys12to15() {
		return g3SeriousBoys12to15;
	}

	public Integer getG3SeriousBoys16to18() {
		return g3SeriousBoys16to18;
	}

	public Integer getG3SeriousBoysGreaterThan18() {
		return g3SeriousBoysGreaterThan18;
	}

	public Integer getG3SeriousBoysTotal() {
		return g3SeriousBoysTotal;
	}

	public Integer getG3SeriousGirls7to11() {
		return g3SeriousGirls7to11;
	}

	public Integer getG3SeriousGirls12to15() {
		return g3SeriousGirls12to15;
	}

	public Integer getG3SeriousGirls16to18() {
		return g3SeriousGirls16to18;
	}

	public Integer getG3SeriousGirlsGreaterThan18() {
		return g3SeriousGirlsGreaterThan18;
	}

	public Integer getG3SeriousGirlsTotal() {
		return g3SeriousGirlsTotal;
	}

	public Integer getG3SeriousGrandTotal() {
		return g3SeriousGrandTotal;
	}

	public Integer getG3HeinousTotalCases() {
		return g3HeinousTotalCases;
	}

	public Integer getG3HeinousBoys7to11() {
		return g3HeinousBoys7to11;
	}

	public Integer getG3HeinousBoys12to15() {
		return g3HeinousBoys12to15;
	}

	public Integer getG3HeinousBoys16to18() {
		return g3HeinousBoys16to18;
	}

	public Integer getG3HeinousBoysGreaterThan18() {
		return g3HeinousBoysGreaterThan18;
	}

	public Integer getG3HeinousBoysTotal() {
		return g3HeinousBoysTotal;
	}

	public Integer getG3HeinousGirls7to11() {
		return g3HeinousGirls7to11;
	}

	public Integer getG3HeinousGirls12to15() {
		return g3HeinousGirls12to15;
	}

	public Integer getG3HeinousGirls16to18() {
		return g3HeinousGirls16to18;
	}

	public Integer getG3HeinousGirlsGreaterThan18() {
		return g3HeinousGirlsGreaterThan18;
	}

	public Integer getG3HeinousGirlsTotal() {
		return g3HeinousGirlsTotal;
	}

	public Integer getG3HeinousGrandTotal() {
		return g3HeinousGrandTotal;
	}

	public Integer getG3TotalCases() {
		return g3TotalCases;
	}

	public Integer getG3Boys7to11() {
		return g3Boys7to11;
	}

	public Integer getG3Boys12to15() {
		return g3Boys12to15;
	}

	public Integer getG3Boys16to18() {
		return g3Boys16to18;
	}

	public Integer getG3BoysGreaterThan18() {
		return g3BoysGreaterThan18;
	}

	public Integer getG3BoysTotal() {
		return g3BoysTotal;
	}

	public Integer getG3Girls7to11() {
		return g3Girls7to11;
	}

	public Integer getG3Girls12to15() {
		return g3Girls12to15;
	}

	public Integer getG3Girls16to18() {
		return g3Girls16to18;
	}

	public Integer getG3GirlsGreaterThan18() {
		return g3GirlsGreaterThan18;
	}

	public Integer getG3GirlsTotal() {
		return g3GirlsTotal;
	}

	public Integer getG3GrandTotal() {
		return g3GrandTotal;
	}

	public Integer getG4PettyTotalCases() {
		return g4PettyTotalCases;
	}

	public Integer getG4PettyBoys7to11() {
		return g4PettyBoys7to11;
	}

	public Integer getG4PettyBoys12to15() {
		return g4PettyBoys12to15;
	}

	public Integer getG4PettyBoys16to18() {
		return g4PettyBoys16to18;
	}

	public Integer getG4PettyBoysGreaterThan18() {
		return g4PettyBoysGreaterThan18;
	}

	public Integer getG4PettyBoysTotal() {
		return g4PettyBoysTotal;
	}

	public Integer getG4PettyGirls7to11() {
		return g4PettyGirls7to11;
	}

	public Integer getG4PettyGirls12to15() {
		return g4PettyGirls12to15;
	}

	public Integer getG4PettyGirls16to18() {
		return g4PettyGirls16to18;
	}

	public Integer getG4PettyGirlsGreaterThan18() {
		return g4PettyGirlsGreaterThan18;
	}

	public Integer getG4PettyGirlsTotal() {
		return g4PettyGirlsTotal;
	}

	public Integer getG4PettyGrandTotal() {
		return g4PettyGrandTotal;
	}

	public Integer getG4SeriousTotalCases() {
		return g4SeriousTotalCases;
	}

	public Integer getG4SeriousBoys7to11() {
		return g4SeriousBoys7to11;
	}

	public Integer getG4SeriousBoys12to15() {
		return g4SeriousBoys12to15;
	}

	public Integer getG4SeriousBoys16to18() {
		return g4SeriousBoys16to18;
	}

	public Integer getG4SeriousBoysGreaterThan18() {
		return g4SeriousBoysGreaterThan18;
	}

	public Integer getG4SeriousBoysTotal() {
		return g4SeriousBoysTotal;
	}

	public Integer getG4SeriousGirls7to11() {
		return g4SeriousGirls7to11;
	}

	public Integer getG4SeriousGirls12to15() {
		return g4SeriousGirls12to15;
	}

	public Integer getG4SeriousGirls16to18() {
		return g4SeriousGirls16to18;
	}

	public Integer getG4SeriousGirlsGreaterThan18() {
		return g4SeriousGirlsGreaterThan18;
	}

	public Integer getG4SeriousGirlsTotal() {
		return g4SeriousGirlsTotal;
	}

	public Integer getG4SeriousGrandTotal() {
		return g4SeriousGrandTotal;
	}

	public Integer getG4HeinousTotalCases() {
		return g4HeinousTotalCases;
	}

	public Integer getG4HeinousBoys7to11() {
		return g4HeinousBoys7to11;
	}

	public Integer getG4HeinousBoys12to15() {
		return g4HeinousBoys12to15;
	}

	public Integer getG4HeinousBoys16to18() {
		return g4HeinousBoys16to18;
	}

	public Integer getG4HeinousBoysGreaterThan18() {
		return g4HeinousBoysGreaterThan18;
	}

	public Integer getG4HeinousBoysTotal() {
		return g4HeinousBoysTotal;
	}

	public Integer getG4HeinousGirls7to11() {
		return g4HeinousGirls7to11;
	}

	public Integer getG4HeinousGirls12to15() {
		return g4HeinousGirls12to15;
	}

	public Integer getG4HeinousGirls16to18() {
		return g4HeinousGirls16to18;
	}

	public Integer getG4HeinousGirlsGreaterThan18() {
		return g4HeinousGirlsGreaterThan18;
	}

	public Integer getG4HeinousGirlsTotal() {
		return g4HeinousGirlsTotal;
	}

	public Integer getG4HeinousGrandTotal() {
		return g4HeinousGrandTotal;
	}

	public Integer getG4TotalCases() {
		return g4TotalCases;
	}

	public Integer getG4Boys7to11() {
		return g4Boys7to11;
	}

	public Integer getG4Boys12to15() {
		return g4Boys12to15;
	}

	public Integer getG4Boys16to18() {
		return g4Boys16to18;
	}

	public Integer getG4BoysGreaterThan18() {
		return g4BoysGreaterThan18;
	}

	public Integer getG4BoysTotal() {
		return g4BoysTotal;
	}

	public Integer getG4Girls7to11() {
		return g4Girls7to11;
	}

	public Integer getG4Girls12to15() {
		return g4Girls12to15;
	}

	public Integer getG4Girls16to18() {
		return g4Girls16to18;
	}

	public Integer getG4GirlsGreaterThan18() {
		return g4GirlsGreaterThan18;
	}

	public Integer getG4GirlsTotal() {
		return g4GirlsTotal;
	}

	public Integer getG4GrandTotal() {
		return g4GrandTotal;
	}

	public Integer getH1TotalCases() {
		return h1TotalCases;
	}

	public Integer getH1Boys7to11() {
		return h1Boys7to11;
	}

	public Integer getH1Boys12to15() {
		return h1Boys12to15;
	}

	public Integer getH1Boys16to18() {
		return h1Boys16to18;
	}

	public Integer getH1BoysGreaterThan18() {
		return h1BoysGreaterThan18;
	}

	public Integer getH1BoysTotal() {
		return h1BoysTotal;
	}

	public Integer getH1Girls7to11() {
		return h1Girls7to11;
	}

	public Integer getH1Girls12to15() {
		return h1Girls12to15;
	}

	public Integer getH1Girls16to18() {
		return h1Girls16to18;
	}

	public Integer getH1GirlsGreaterThan18() {
		return h1GirlsGreaterThan18;
	}

	public Integer getH1GirlsTotal() {
		return h1GirlsTotal;
	}

	public Integer getH1GrandTotal() {
		return h1GrandTotal;
	}

	public Integer getH2TotalCases() {
		return h2TotalCases;
	}

	public Integer getH2Boys7to11() {
		return h2Boys7to11;
	}

	public Integer getH2Boys12to15() {
		return h2Boys12to15;
	}

	public Integer getH2Boys16to18() {
		return h2Boys16to18;
	}

	public Integer getH2BoysGreaterThan18() {
		return h2BoysGreaterThan18;
	}

	public Integer getH2BoysTotal() {
		return h2BoysTotal;
	}

	public Integer getH2Girls7to11() {
		return h2Girls7to11;
	}

	public Integer getH2Girls12to15() {
		return h2Girls12to15;
	}

	public Integer getH2Girls16to18() {
		return h2Girls16to18;
	}

	public Integer getH2GirlsGreaterThan18() {
		return h2GirlsGreaterThan18;
	}

	public Integer getH2GirlsTotal() {
		return h2GirlsTotal;
	}

	public Integer getH2GrandTotal() {
		return h2GrandTotal;
	}

	public Integer getH3TotalCases() {
		return h3TotalCases;
	}

	public Integer getH3Boys7to11() {
		return h3Boys7to11;
	}

	public Integer getH3Boys12to15() {
		return h3Boys12to15;
	}

	public Integer getH3Boys16to18() {
		return h3Boys16to18;
	}

	public Integer getH3BoysGreaterThan18() {
		return h3BoysGreaterThan18;
	}

	public Integer getH3BoysTotal() {
		return h3BoysTotal;
	}

	public Integer getH3Girls7to11() {
		return h3Girls7to11;
	}

	public Integer getH3Girls12to15() {
		return h3Girls12to15;
	}

	public Integer getH3Girls16to18() {
		return h3Girls16to18;
	}

	public Integer getH3GirlsGreaterThan18() {
		return h3GirlsGreaterThan18;
	}

	public Integer getH3GirlsTotal() {
		return h3GirlsTotal;
	}

	public Integer getH3GrandTotal() {
		return h3GrandTotal;
	}

	public Integer getiTotalCases() {
		return iTotalCases;
	}

	public Integer getiBoysSC() {
		return iBoysSC;
	}

	public Integer getiBoysST() {
		return iBoysST;
	}

	public Integer getiBoysOBC() {
		return iBoysOBC;
	}

	public Integer getiBoysEBC() {
		return iBoysEBC;
	}

	public Integer getiBoysOthers() {
		return iBoysOthers;
	}

	public Integer getiBoysNotKnown() {
		return iBoysNotKnown;
	}

	public Integer getiBoysTotal() {
		return iBoysTotal;
	}

	public Integer getiGirlsSC() {
		return iGirlsSC;
	}

	public Integer getiGirlsST() {
		return iGirlsST;
	}

	public Integer getiGirlsOBC() {
		return iGirlsOBC;
	}

	public Integer getiGirlsEBC() {
		return iGirlsEBC;
	}

	public Integer getiGirlsOthers() {
		return iGirlsOthers;
	}

	public Integer getiGirlsNotKnown() {
		return iGirlsNotKnown;
	}

	public Integer getiGirlsTotal() {
		return iGirlsTotal;
	}

	public Integer getiGrandTotal() {
		return iGrandTotal;
	}

	public Integer getiMinorityBoys() {
		return iMinorityBoys;
	}

	public Integer getiMinorityGirls() {
		return iMinorityGirls;
	}

	public Integer getiMinorityTotal() {
		return iMinorityTotal;
	}

	public Integer getJ1NonHeinousTotalCases() {
		return j1NonHeinousTotalCases;
	}

	public Integer getJ1NonHeinousBoys7to11() {
		return j1NonHeinousBoys7to11;
	}

	public Integer getJ1NonHeinousBoys12to15() {
		return j1NonHeinousBoys12to15;
	}

	public Integer getJ1NonHeinousBoys16to18() {
		return j1NonHeinousBoys16to18;
	}

	public Integer getJ1NonHeinousBoysGreaterThan18() {
		return j1NonHeinousBoysGreaterThan18;
	}

	public Integer getJ1NonHeinousBoysTotal() {
		return j1NonHeinousBoysTotal;
	}

	public Integer getJ1NonHeinousGirls7to11() {
		return j1NonHeinousGirls7to11;
	}

	public Integer getJ1NonHeinousGirls12to15() {
		return j1NonHeinousGirls12to15;
	}

	public Integer getJ1NonHeinousGirls16to18() {
		return j1NonHeinousGirls16to18;
	}

	public Integer getJ1NonHeinousGirlsGreaterThan18() {
		return j1NonHeinousGirlsGreaterThan18;
	}

	public Integer getJ1NonHeinousGirlsTotal() {
		return j1NonHeinousGirlsTotal;
	}

	public Integer getJ1NonHeinousGrandTotal() {
		return j1NonHeinousGrandTotal;
	}

	public Integer getJ2HeinousTotalCases() {
		return j2HeinousTotalCases;
	}

	public Integer getJ2HeinousBoys7to11() {
		return j2HeinousBoys7to11;
	}

	public Integer getJ2HeinousBoys12to15() {
		return j2HeinousBoys12to15;
	}

	public Integer getJ2HeinousBoys16to18() {
		return j2HeinousBoys16to18;
	}

	public Integer getJ2HeinousBoysGreaterThan18() {
		return j2HeinousBoysGreaterThan18;
	}

	public Integer getJ2HeinousBoysTotal() {
		return j2HeinousBoysTotal;
	}

	public Integer getJ2HeinousGirls7to11() {
		return j2HeinousGirls7to11;
	}

	public Integer getJ2HeinousGirls12to15() {
		return j2HeinousGirls12to15;
	}

	public Integer getJ2HeinousGirls16to18() {
		return j2HeinousGirls16to18;
	}

	public Integer getJ2HeinousGirlsGreaterThan18() {
		return j2HeinousGirlsGreaterThan18;
	}

	public Integer getJ2HeinousGirlsTotal() {
		return j2HeinousGirlsTotal;
	}

	public Integer getJ2HeinousGrandTotal() {
		return j2HeinousGrandTotal;
	}

	public Integer getK1() {
		return k1;
	}

	public Integer getK2a() {
		return k2a;
	}

	public Integer getK2b() {
		return k2b;
	}

	public Boolean getK3a() {
		return k3a;
	}

	public Integer getK3b() {
		return k3b;
	}

	public Boolean getK4a() {
		return k4a;
	}

	public Integer getK4b() {
		return k4b;
	}

	public Integer getK4c() {
		return k4c;
	}

	public Integer getK5aCases() {
		return k5aCases;
	}

	public Integer getK5aBoys() {
		return k5aBoys;
	}

	public Integer getK5aGirls() {
		return k5aGirls;
	}

	public Integer getK5aTotalCICL() {
		return k5aTotalCICL;
	}

	public String getK5b() {
		return k5b;
	}

	public Integer getK6Cases() {
		return k6Cases;
	}

	public Integer getK6Boys() {
		return k6Boys;
	}

	public Integer getK6Girls() {
		return k6Girls;
	}

	public Integer getK6TotalCICL() {
		return k6TotalCICL;
	}

	public Integer getK7Cases() {
		return k7Cases;
	}

	public Integer getK7Boys() {
		return k7Boys;
	}

	public Integer getK7Girls() {
		return k7Girls;
	}

	public Integer getK7TotalCICL() {
		return k7TotalCICL;
	}

	public Integer getK8Cases() {
		return k8Cases;
	}

	public Integer getK8Boys() {
		return k8Boys;
	}

	public Integer getK8Girls() {
		return k8Girls;
	}

	public Integer getK8TotalCICL() {
		return k8TotalCICL;
	}

	public Integer getK9Cases() {
		return k9Cases;
	}

	public Integer getK9Boys() {
		return k9Boys;
	}

	public Integer getK9Girls() {
		return k9Girls;
	}

	public Integer getK9TotalCICL() {
		return k9TotalCICL;
	}

	public Integer getK10a() {
		return k10a;
	}

	public String getK10b() {
		return k10b;
	}

	public Integer getK10cCases() {
		return k10cCases;
	}

	public Integer getK10cBoys() {
		return k10cBoys;
	}

	public Integer getK10cGirls() {
		return k10cGirls;
	}

	public Integer getK10cTotalCICL() {
		return k10cTotalCICL;
	}

	public Integer getK11a() {
		return k11a;
	}

	public String getK11b() {
		return k11b;
	}

	public Integer getK11cCases() {
		return k11cCases;
	}

	public Integer getK11cBoys() {
		return k11cBoys;
	}

	public Integer getK11cGirls() {
		return k11cGirls;
	}

	public Integer getK11cTotalCICL() {
		return k11cTotalCICL;
	}

	public Integer getK12aCases() {
		return k12aCases;
	}

	public Integer getK12aBoys() {
		return k12aBoys;
	}

	public Integer getK12aGirls() {
		return k12aGirls;
	}

	public Integer getK12aTotalCICL() {
		return k12aTotalCICL;
	}

	public Integer getK12bCases() {
		return k12bCases;
	}

	public Integer getK12bBoys() {
		return k12bBoys;
	}

	public Integer getK12bGirls() {
		return k12bGirls;
	}

	public Integer getK12bTotalCICL() {
		return k12bTotalCICL;
	}

	public Integer getK12cCases() {
		return k12cCases;
	}

	public Integer getK12cBoys() {
		return k12cBoys;
	}

	public Integer getK12cGirls() {
		return k12cGirls;
	}

	public Integer getK12cTotalCICL() {
		return k12cTotalCICL;
	}

	public Integer getK12Cases() {
		return k12Cases;
	}

	public Integer getK12Boys() {
		return k12Boys;
	}

	public Integer getK12Girls() {
		return k12Girls;
	}

	public Integer getK12TotalCICL() {
		return k12TotalCICL;
	}

	public Integer getK13aCases() {
		return k13aCases;
	}

	public Integer getK13aBoys() {
		return k13aBoys;
	}

	public Integer getK13aGirls() {
		return k13aGirls;
	}

	public Integer getK13aTotalCICL() {
		return k13aTotalCICL;
	}

	public Integer getK13bCases() {
		return k13bCases;
	}

	public Integer getK13bBoys() {
		return k13bBoys;
	}

	public Integer getK13bGirls() {
		return k13bGirls;
	}

	public Integer getK13bTotalCICL() {
		return k13bTotalCICL;
	}

	public Integer getK13cCases() {
		return k13cCases;
	}

	public Integer getK13cBoys() {
		return k13cBoys;
	}

	public Integer getK13cGirls() {
		return k13cGirls;
	}

	public Integer getK13cTotalCICL() {
		return k13cTotalCICL;
	}

	public Integer getK13dCases() {
		return k13dCases;
	}

	public Integer getK13dBoys() {
		return k13dBoys;
	}

	public Integer getK13dGirls() {
		return k13dGirls;
	}

	public Integer getK13dTotalCICL() {
		return k13dTotalCICL;
	}

	public Integer getK14aCases() {
		return k14aCases;
	}

	public Integer getK14aBoys() {
		return k14aBoys;
	}

	public Integer getK14aGirls() {
		return k14aGirls;
	}

	public Integer getK14aTotalCICL() {
		return k14aTotalCICL;
	}

	public Integer getK14bCases() {
		return k14bCases;
	}

	public Integer getK14bBoys() {
		return k14bBoys;
	}

	public Integer getK14bGirls() {
		return k14bGirls;
	}

	public Integer getK14bTotalCICL() {
		return k14bTotalCICL;
	}

	public Integer getK14cCases() {
		return k14cCases;
	}

	public Integer getK14cBoys() {
		return k14cBoys;
	}

	public Integer getK14cGirls() {
		return k14cGirls;
	}

	public Integer getK14cTotalCICL() {
		return k14cTotalCICL;
	}

	public Integer getK14dCases() {
		return k14dCases;
	}

	public Integer getK14dBoys() {
		return k14dBoys;
	}

	public Integer getK14dGirls() {
		return k14dGirls;
	}

	public Integer getK14dTotalCICL() {
		return k14dTotalCICL;
	}

	public Integer getK15aCases() {
		return k15aCases;
	}

	public Integer getK15aBoys() {
		return k15aBoys;
	}

	public Integer getK15aGirls() {
		return k15aGirls;
	}

	public Integer getK15aTotalCICL() {
		return k15aTotalCICL;
	}

	public Integer getK15bCases() {
		return k15bCases;
	}

	public Integer getK15bBoys() {
		return k15bBoys;
	}

	public Integer getK15bGirls() {
		return k15bGirls;
	}

	public Integer getK15bTotalCICL() {
		return k15bTotalCICL;
	}

	public Integer getK15cCases() {
		return k15cCases;
	}

	public Integer getK15cBoys() {
		return k15cBoys;
	}

	public Integer getK15cGirls() {
		return k15cGirls;
	}

	public Integer getK15cTotalCICL() {
		return k15cTotalCICL;
	}

	public Integer getK15dCases() {
		return k15dCases;
	}

	public Integer getK15dBoys() {
		return k15dBoys;
	}

	public Integer getK15dGirls() {
		return k15dGirls;
	}

	public Integer getK15dTotalCICL() {
		return k15dTotalCICL;
	}

	public Integer getK16aCases() {
		return k16aCases;
	}

	public Integer getK16aBoys() {
		return k16aBoys;
	}

	public Integer getK16aGirls() {
		return k16aGirls;
	}

	public Integer getK16aTotalCICL() {
		return k16aTotalCICL;
	}

	public Integer getK16bCases() {
		return k16bCases;
	}

	public Integer getK16bBoys() {
		return k16bBoys;
	}

	public Integer getK16bGirls() {
		return k16bGirls;
	}

	public Integer getK16bTotalCICL() {
		return k16bTotalCICL;
	}

	public Integer getK16cCases() {
		return k16cCases;
	}

	public Integer getK16cBoys() {
		return k16cBoys;
	}

	public Integer getK16cGirls() {
		return k16cGirls;
	}

	public Integer getK16cTotalCICL() {
		return k16cTotalCICL;
	}

	public Integer getK16dCases() {
		return k16dCases;
	}

	public Integer getK16dBoys() {
		return k16dBoys;
	}

	public Integer getK16dGirls() {
		return k16dGirls;
	}

	public Integer getK16dTotalCICL() {
		return k16dTotalCICL;
	}

	public Integer getK16eCases() {
		return k16eCases;
	}

	public Integer getK16eBoys() {
		return k16eBoys;
	}

	public Integer getK16eGirls() {
		return k16eGirls;
	}

	public Integer getK16eTotalCICL() {
		return k16eTotalCICL;
	}

	public Integer getK16fCases() {
		return k16fCases;
	}

	public Integer getK16fBoys() {
		return k16fBoys;
	}

	public Integer getK16fGirls() {
		return k16fGirls;
	}

	public Integer getK16fTotalCICL() {
		return k16fTotalCICL;
	}

	public Integer getK17aCases() {
		return k17aCases;
	}

	public Integer getK17aBoys() {
		return k17aBoys;
	}

	public Integer getK17aGirls() {
		return k17aGirls;
	}

	public Integer getK17aTotalCICL() {
		return k17aTotalCICL;
	}

	public Integer getK17bCases() {
		return k17bCases;
	}

	public Integer getK17bBoys() {
		return k17bBoys;
	}

	public Integer getK17bGirls() {
		return k17bGirls;
	}

	public Integer getK17bTotalCICL() {
		return k17bTotalCICL;
	}

	public Integer getK17cCases() {
		return k17cCases;
	}

	public Integer getK17cBoys() {
		return k17cBoys;
	}

	public Integer getK17cGirls() {
		return k17cGirls;
	}

	public Integer getK17cTotalCICL() {
		return k17cTotalCICL;
	}

	public Integer getK17dCases() {
		return k17dCases;
	}

	public Integer getK17dBoys() {
		return k17dBoys;
	}

	public Integer getK17dGirls() {
		return k17dGirls;
	}

	public Integer getK17dTotalCICL() {
		return k17dTotalCICL;
	}

	public Integer getK17eCases() {
		return k17eCases;
	}

	public Integer getK17eBoys() {
		return k17eBoys;
	}

	public Integer getK17eGirls() {
		return k17eGirls;
	}

	public Integer getK17eTotalCICL() {
		return k17eTotalCICL;
	}

	public List<JjbDetailsTraining> getJjbDetailsTraining() {
		return jjbDetailsTraining;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public void setNameOfAuthorizedPerson(String nameOfAuthorizedPerson) {
		this.nameOfAuthorizedPerson = nameOfAuthorizedPerson;
	}

	public void setLive(boolean isLive) {
		this.isLive = isLive;
	}

	public void setUserId(Integer userId) {
		this.userId = userId;
	}

	public void setSubmitted(boolean isSubmitted) {
		this.isSubmitted = isSubmitted;
	}

	public void setDateOfSubmimission(Date dateOfSubmimission) {
		this.dateOfSubmimission = dateOfSubmimission;
	}

	public void setLastSaveDate(Date lastSaveDate) {
		this.lastSaveDate = lastSaveDate;
	}

	public void setMonthyear(Date monthyear) {
		this.monthyear = monthyear;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public void setNoOfMembers(Integer noOfMembers) {
		this.noOfMembers = noOfMembers;
	}

	public void setNoOfMaleMembers(Integer noOfMaleMembers) {
		this.noOfMaleMembers = noOfMaleMembers;
	}

	public void setNoOfFemaleMembers(Integer noOfFemaleMembers) {
		this.noOfFemaleMembers = noOfFemaleMembers;
	}

	public void setNoOfProbationOfficers(Integer noOfProbationOfficers) {
		this.noOfProbationOfficers = noOfProbationOfficers;
	}

	public void setPlaceOfJjbSittings(String placeOfJjbSittings) {
		this.placeOfJjbSittings = placeOfJjbSittings;
	}

	public void setA1TotalCases(Integer a1TotalCases) {
		this.a1TotalCases = a1TotalCases;
	}

	public void setA1Boys7to11(Integer a1Boys7to11) {
		this.a1Boys7to11 = a1Boys7to11;
	}

	public void setA1Boys12to15(Integer a1Boys12to15) {
		this.a1Boys12to15 = a1Boys12to15;
	}

	public void setA1Boys16to18(Integer a1Boys16to18) {
		this.a1Boys16to18 = a1Boys16to18;
	}

	public void setA1BoysGreaterThan18(Integer a1BoysGreaterThan18) {
		this.a1BoysGreaterThan18 = a1BoysGreaterThan18;
	}

	public void setA1BoysTotal(Integer a1BoysTotal) {
		this.a1BoysTotal = a1BoysTotal;
	}

	public void setA1Girls7to11(Integer a1Girls7to11) {
		this.a1Girls7to11 = a1Girls7to11;
	}

	public void setA1Girls12to15(Integer a1Girls12to15) {
		this.a1Girls12to15 = a1Girls12to15;
	}

	public void setA1Girls16to18(Integer a1Girls16to18) {
		this.a1Girls16to18 = a1Girls16to18;
	}

	public void setA1GirlsGreaterThan18(Integer a1GirlsGreaterThan18) {
		this.a1GirlsGreaterThan18 = a1GirlsGreaterThan18;
	}

	public void setA1GirlsTotal(Integer a1GirlsTotal) {
		this.a1GirlsTotal = a1GirlsTotal;
	}

	public void setA1GrandTotal(Integer a1GrandTotal) {
		this.a1GrandTotal = a1GrandTotal;
	}

	public void setA2TotalCases(Integer a2TotalCases) {
		this.a2TotalCases = a2TotalCases;
	}

	public void setA2Boys7to11(Integer a2Boys7to11) {
		this.a2Boys7to11 = a2Boys7to11;
	}

	public void setA2Boys12to15(Integer a2Boys12to15) {
		this.a2Boys12to15 = a2Boys12to15;
	}

	public void setA2Boys16to18(Integer a2Boys16to18) {
		this.a2Boys16to18 = a2Boys16to18;
	}

	public void setA2BoysGreaterThan18(Integer a2BoysGreaterThan18) {
		this.a2BoysGreaterThan18 = a2BoysGreaterThan18;
	}

	public void setA2BoysTotal(Integer a2BoysTotal) {
		this.a2BoysTotal = a2BoysTotal;
	}

	public void setA2Girls7to11(Integer a2Girls7to11) {
		this.a2Girls7to11 = a2Girls7to11;
	}

	public void setA2Girls12to15(Integer a2Girls12to15) {
		this.a2Girls12to15 = a2Girls12to15;
	}

	public void setA2Girls16to18(Integer a2Girls16to18) {
		this.a2Girls16to18 = a2Girls16to18;
	}

	public void setA2GirlsGreaterThan18(Integer a2GirlsGreaterThan18) {
		this.a2GirlsGreaterThan18 = a2GirlsGreaterThan18;
	}

	public void setA2GirlsTotal(Integer a2GirlsTotal) {
		this.a2GirlsTotal = a2GirlsTotal;
	}

	public void setA2GrandTotal(Integer a2GrandTotal) {
		this.a2GrandTotal = a2GrandTotal;
	}

	public void setaTotalCases(Integer aTotalCases) {
		this.aTotalCases = aTotalCases;
	}

	public void setaBoys7to11(Integer aBoys7to11) {
		this.aBoys7to11 = aBoys7to11;
	}

	public void setaBoys12to15(Integer aBoys12to15) {
		this.aBoys12to15 = aBoys12to15;
	}

	public void setaBoys16to18(Integer aBoys16to18) {
		this.aBoys16to18 = aBoys16to18;
	}

	public void setaBoysGreaterThan18(Integer aBoysGreaterThan18) {
		this.aBoysGreaterThan18 = aBoysGreaterThan18;
	}

	public void setaBoysTotal(Integer aBoysTotal) {
		this.aBoysTotal = aBoysTotal;
	}

	public void setaGirls7to11(Integer aGirls7to11) {
		this.aGirls7to11 = aGirls7to11;
	}

	public void setaGirls12to15(Integer aGirls12to15) {
		this.aGirls12to15 = aGirls12to15;
	}

	public void setaGirls16to18(Integer aGirls16to18) {
		this.aGirls16to18 = aGirls16to18;
	}

	public void setaGirlsGreaterThan18(Integer aGirlsGreaterThan18) {
		this.aGirlsGreaterThan18 = aGirlsGreaterThan18;
	}

	public void setaGirlsTotal(Integer aGirlsTotal) {
		this.aGirlsTotal = aGirlsTotal;
	}

	public void setaGrandTotal(Integer aGrandTotal) {
		this.aGrandTotal = aGrandTotal;
	}

	public void setB1TotalCases(Integer b1TotalCases) {
		this.b1TotalCases = b1TotalCases;
	}

	public void setB1Boys7to11(Integer b1Boys7to11) {
		this.b1Boys7to11 = b1Boys7to11;
	}

	public void setB1Boys12to15(Integer b1Boys12to15) {
		this.b1Boys12to15 = b1Boys12to15;
	}

	public void setB1Boys16to18(Integer b1Boys16to18) {
		this.b1Boys16to18 = b1Boys16to18;
	}

	public void setB1BoysGreaterThan18(Integer b1BoysGreaterThan18) {
		this.b1BoysGreaterThan18 = b1BoysGreaterThan18;
	}

	public void setB1BoysTotal(Integer b1BoysTotal) {
		this.b1BoysTotal = b1BoysTotal;
	}

	public void setB1Girls7to11(Integer b1Girls7to11) {
		this.b1Girls7to11 = b1Girls7to11;
	}

	public void setB1Girls12to15(Integer b1Girls12to15) {
		this.b1Girls12to15 = b1Girls12to15;
	}

	public void setB1Girls16to18(Integer b1Girls16to18) {
		this.b1Girls16to18 = b1Girls16to18;
	}

	public void setB1GirlsGreaterThan18(Integer b1GirlsGreaterThan18) {
		this.b1GirlsGreaterThan18 = b1GirlsGreaterThan18;
	}

	public void setB1GirlsTotal(Integer b1GirlsTotal) {
		this.b1GirlsTotal = b1GirlsTotal;
	}

	public void setB1GrandTotal(Integer b1GrandTotal) {
		this.b1GrandTotal = b1GrandTotal;
	}

	public void setB2TotalCases(Integer b2TotalCases) {
		this.b2TotalCases = b2TotalCases;
	}

	public void setB2Boys7to11(Integer b2Boys7to11) {
		this.b2Boys7to11 = b2Boys7to11;
	}

	public void setB2Boys12to15(Integer b2Boys12to15) {
		this.b2Boys12to15 = b2Boys12to15;
	}

	public void setB2Boys16to18(Integer b2Boys16to18) {
		this.b2Boys16to18 = b2Boys16to18;
	}

	public void setB2BoysGreaterThan18(Integer b2BoysGreaterThan18) {
		this.b2BoysGreaterThan18 = b2BoysGreaterThan18;
	}

	public void setB2BoysTotal(Integer b2BoysTotal) {
		this.b2BoysTotal = b2BoysTotal;
	}

	public void setB2Girls7to11(Integer b2Girls7to11) {
		this.b2Girls7to11 = b2Girls7to11;
	}

	public void setB2Girls12to15(Integer b2Girls12to15) {
		this.b2Girls12to15 = b2Girls12to15;
	}

	public void setB2Girls16to18(Integer b2Girls16to18) {
		this.b2Girls16to18 = b2Girls16to18;
	}

	public void setB2GirlsGreaterThan18(Integer b2GirlsGreaterThan18) {
		this.b2GirlsGreaterThan18 = b2GirlsGreaterThan18;
	}

	public void setB2GirlsTotal(Integer b2GirlsTotal) {
		this.b2GirlsTotal = b2GirlsTotal;
	}

	public void setB2GrandTotal(Integer b2GrandTotal) {
		this.b2GrandTotal = b2GrandTotal;
	}

	public void setB3TotalCases(Integer b3TotalCases) {
		this.b3TotalCases = b3TotalCases;
	}

	public void setB3Boys7to11(Integer b3Boys7to11) {
		this.b3Boys7to11 = b3Boys7to11;
	}

	public void setB3Boys12to15(Integer b3Boys12to15) {
		this.b3Boys12to15 = b3Boys12to15;
	}

	public void setB3Boys16to18(Integer b3Boys16to18) {
		this.b3Boys16to18 = b3Boys16to18;
	}

	public void setB3BoysGreaterThan18(Integer b3BoysGreaterThan18) {
		this.b3BoysGreaterThan18 = b3BoysGreaterThan18;
	}

	public void setB3BoysTotal(Integer b3BoysTotal) {
		this.b3BoysTotal = b3BoysTotal;
	}

	public void setB3Girls7to11(Integer b3Girls7to11) {
		this.b3Girls7to11 = b3Girls7to11;
	}

	public void setB3Girls12to15(Integer b3Girls12to15) {
		this.b3Girls12to15 = b3Girls12to15;
	}

	public void setB3Girls16to18(Integer b3Girls16to18) {
		this.b3Girls16to18 = b3Girls16to18;
	}

	public void setB3GirlsGreaterThan18(Integer b3GirlsGreaterThan18) {
		this.b3GirlsGreaterThan18 = b3GirlsGreaterThan18;
	}

	public void setB3GirlsTotal(Integer b3GirlsTotal) {
		this.b3GirlsTotal = b3GirlsTotal;
	}

	public void setB3GrandTotal(Integer b3GrandTotal) {
		this.b3GrandTotal = b3GrandTotal;
	}

	public void setbTotalCases(Integer bTotalCases) {
		this.bTotalCases = bTotalCases;
	}

	public void setbBoys7to11(Integer bBoys7to11) {
		this.bBoys7to11 = bBoys7to11;
	}

	public void setbBoys12to15(Integer bBoys12to15) {
		this.bBoys12to15 = bBoys12to15;
	}

	public void setbBoys16to18(Integer bBoys16to18) {
		this.bBoys16to18 = bBoys16to18;
	}

	public void setbBoysGreaterThan18(Integer bBoysGreaterThan18) {
		this.bBoysGreaterThan18 = bBoysGreaterThan18;
	}

	public void setbBoysTotal(Integer bBoysTotal) {
		this.bBoysTotal = bBoysTotal;
	}

	public void setbGirls7to11(Integer bGirls7to11) {
		this.bGirls7to11 = bGirls7to11;
	}

	public void setbGirls12to15(Integer bGirls12to15) {
		this.bGirls12to15 = bGirls12to15;
	}

	public void setbGirls16to18(Integer bGirls16to18) {
		this.bGirls16to18 = bGirls16to18;
	}

	public void setbGirlsGreaterThan18(Integer bGirlsGreaterThan18) {
		this.bGirlsGreaterThan18 = bGirlsGreaterThan18;
	}

	public void setbGirlsTotal(Integer bGirlsTotal) {
		this.bGirlsTotal = bGirlsTotal;
	}

	public void setbGrandTotal(Integer bGrandTotal) {
		this.bGrandTotal = bGrandTotal;
	}

	public void setcTotalCases(Integer cTotalCases) {
		this.cTotalCases = cTotalCases;
	}

	public void setcBoys7to11(Integer cBoys7to11) {
		this.cBoys7to11 = cBoys7to11;
	}

	public void setcBoys12to15(Integer cBoys12to15) {
		this.cBoys12to15 = cBoys12to15;
	}

	public void setcBoys16to18(Integer cBoys16to18) {
		this.cBoys16to18 = cBoys16to18;
	}

	public void setcBoysGreaterThan18(Integer cBoysGreaterThan18) {
		this.cBoysGreaterThan18 = cBoysGreaterThan18;
	}

	public void setcBoysTotal(Integer cBoysTotal) {
		this.cBoysTotal = cBoysTotal;
	}

	public void setcGirls7to11(Integer cGirls7to11) {
		this.cGirls7to11 = cGirls7to11;
	}

	public void setcGirls12to15(Integer cGirls12to15) {
		this.cGirls12to15 = cGirls12to15;
	}

	public void setcGirls16to18(Integer cGirls16to18) {
		this.cGirls16to18 = cGirls16to18;
	}

	public void setcGirlsGreaterThan18(Integer cGirlsGreaterThan18) {
		this.cGirlsGreaterThan18 = cGirlsGreaterThan18;
	}

	public void setcGirlsTotal(Integer cGirlsTotal) {
		this.cGirlsTotal = cGirlsTotal;
	}

	public void setcGrandTotal(Integer cGrandTotal) {
		this.cGrandTotal = cGrandTotal;
	}

	public void setD1TotalCases(Integer d1TotalCases) {
		this.d1TotalCases = d1TotalCases;
	}

	public void setD1Boys7to11(Integer d1Boys7to11) {
		this.d1Boys7to11 = d1Boys7to11;
	}

	public void setD1Boys12to15(Integer d1Boys12to15) {
		this.d1Boys12to15 = d1Boys12to15;
	}

	public void setD1Boys16to18(Integer d1Boys16to18) {
		this.d1Boys16to18 = d1Boys16to18;
	}

	public void setD1BoysGreaterThan18(Integer d1BoysGreaterThan18) {
		this.d1BoysGreaterThan18 = d1BoysGreaterThan18;
	}

	public void setD1BoysTotal(Integer d1BoysTotal) {
		this.d1BoysTotal = d1BoysTotal;
	}

	public void setD1Girls7to11(Integer d1Girls7to11) {
		this.d1Girls7to11 = d1Girls7to11;
	}

	public void setD1Girls12to15(Integer d1Girls12to15) {
		this.d1Girls12to15 = d1Girls12to15;
	}

	public void setD1Girls16to18(Integer d1Girls16to18) {
		this.d1Girls16to18 = d1Girls16to18;
	}

	public void setD1GirlsGreaterThan18(Integer d1GirlsGreaterThan18) {
		this.d1GirlsGreaterThan18 = d1GirlsGreaterThan18;
	}

	public void setD1GirlsTotal(Integer d1GirlsTotal) {
		this.d1GirlsTotal = d1GirlsTotal;
	}

	public void setD1GrandTotal(Integer d1GrandTotal) {
		this.d1GrandTotal = d1GrandTotal;
	}

	public void setD2TotalCases(Integer d2TotalCases) {
		this.d2TotalCases = d2TotalCases;
	}

	public void setD2Boys7to11(Integer d2Boys7to11) {
		this.d2Boys7to11 = d2Boys7to11;
	}

	public void setD2Boys12to15(Integer d2Boys12to15) {
		this.d2Boys12to15 = d2Boys12to15;
	}

	public void setD2Boys16to18(Integer d2Boys16to18) {
		this.d2Boys16to18 = d2Boys16to18;
	}

	public void setD2BoysGreaterThan18(Integer d2BoysGreaterThan18) {
		this.d2BoysGreaterThan18 = d2BoysGreaterThan18;
	}

	public void setD2BoysTotal(Integer d2BoysTotal) {
		this.d2BoysTotal = d2BoysTotal;
	}

	public void setD2Girls7to11(Integer d2Girls7to11) {
		this.d2Girls7to11 = d2Girls7to11;
	}

	public void setD2Girls12to15(Integer d2Girls12to15) {
		this.d2Girls12to15 = d2Girls12to15;
	}

	public void setD2Girls16to18(Integer d2Girls16to18) {
		this.d2Girls16to18 = d2Girls16to18;
	}

	public void setD2GirlsGreaterThan18(Integer d2GirlsGreaterThan18) {
		this.d2GirlsGreaterThan18 = d2GirlsGreaterThan18;
	}

	public void setD2GirlsTotal(Integer d2GirlsTotal) {
		this.d2GirlsTotal = d2GirlsTotal;
	}

	public void setD2GrandTotal(Integer d2GrandTotal) {
		this.d2GrandTotal = d2GrandTotal;
	}

	public void setdTotalCases(Integer dTotalCases) {
		this.dTotalCases = dTotalCases;
	}

	public void setdBoys7to11(Integer dBoys7to11) {
		this.dBoys7to11 = dBoys7to11;
	}

	public void setdBoys12to15(Integer dBoys12to15) {
		this.dBoys12to15 = dBoys12to15;
	}

	public void setdBoys16to18(Integer dBoys16to18) {
		this.dBoys16to18 = dBoys16to18;
	}

	public void setdBoysGreaterThan18(Integer dBoysGreaterThan18) {
		this.dBoysGreaterThan18 = dBoysGreaterThan18;
	}

	public void setdBoysTotal(Integer dBoysTotal) {
		this.dBoysTotal = dBoysTotal;
	}

	public void setdGirls7to11(Integer dGirls7to11) {
		this.dGirls7to11 = dGirls7to11;
	}

	public void setdGirls12to15(Integer dGirls12to15) {
		this.dGirls12to15 = dGirls12to15;
	}

	public void setdGirls16to18(Integer dGirls16to18) {
		this.dGirls16to18 = dGirls16to18;
	}

	public void setdGirlsGreaterThan18(Integer dGirlsGreaterThan18) {
		this.dGirlsGreaterThan18 = dGirlsGreaterThan18;
	}

	public void setdGirlsTotal(Integer dGirlsTotal) {
		this.dGirlsTotal = dGirlsTotal;
	}

	public void setdGrandTotal(Integer dGrandTotal) {
		this.dGrandTotal = dGrandTotal;
	}

	public void setE1TotalCases(Integer e1TotalCases) {
		this.e1TotalCases = e1TotalCases;
	}

	public void setE1Boys7to11(Integer e1Boys7to11) {
		this.e1Boys7to11 = e1Boys7to11;
	}

	public void setE1Boys12to15(Integer e1Boys12to15) {
		this.e1Boys12to15 = e1Boys12to15;
	}

	public void setE1Boys16to18(Integer e1Boys16to18) {
		this.e1Boys16to18 = e1Boys16to18;
	}

	public void setE1BoysGreaterThan18(Integer e1BoysGreaterThan18) {
		this.e1BoysGreaterThan18 = e1BoysGreaterThan18;
	}

	public void setE1BoysTotal(Integer e1BoysTotal) {
		this.e1BoysTotal = e1BoysTotal;
	}

	public void setE1Girls7to11(Integer e1Girls7to11) {
		this.e1Girls7to11 = e1Girls7to11;
	}

	public void setE1Girls12to15(Integer e1Girls12to15) {
		this.e1Girls12to15 = e1Girls12to15;
	}

	public void setE1Girls16to18(Integer e1Girls16to18) {
		this.e1Girls16to18 = e1Girls16to18;
	}

	public void setE1GirlsGreaterThan18(Integer e1GirlsGreaterThan18) {
		this.e1GirlsGreaterThan18 = e1GirlsGreaterThan18;
	}

	public void setE1GirlsTotal(Integer e1GirlsTotal) {
		this.e1GirlsTotal = e1GirlsTotal;
	}

	public void setE1GrandTotal(Integer e1GrandTotal) {
		this.e1GrandTotal = e1GrandTotal;
	}

	public void setE2TotalCases(Integer e2TotalCases) {
		this.e2TotalCases = e2TotalCases;
	}

	public void setE2Boys7to11(Integer e2Boys7to11) {
		this.e2Boys7to11 = e2Boys7to11;
	}

	public void setE2Boys12to15(Integer e2Boys12to15) {
		this.e2Boys12to15 = e2Boys12to15;
	}

	public void setE2Boys16to18(Integer e2Boys16to18) {
		this.e2Boys16to18 = e2Boys16to18;
	}

	public void setE2BoysGreaterThan18(Integer e2BoysGreaterThan18) {
		this.e2BoysGreaterThan18 = e2BoysGreaterThan18;
	}

	public void setE2BoysTotal(Integer e2BoysTotal) {
		this.e2BoysTotal = e2BoysTotal;
	}

	public void setE2Girls7to11(Integer e2Girls7to11) {
		this.e2Girls7to11 = e2Girls7to11;
	}

	public void setE2Girls12to15(Integer e2Girls12to15) {
		this.e2Girls12to15 = e2Girls12to15;
	}

	public void setE2Girls16to18(Integer e2Girls16to18) {
		this.e2Girls16to18 = e2Girls16to18;
	}

	public void setE2GirlsGreaterThan18(Integer e2GirlsGreaterThan18) {
		this.e2GirlsGreaterThan18 = e2GirlsGreaterThan18;
	}

	public void setE2GirlsTotal(Integer e2GirlsTotal) {
		this.e2GirlsTotal = e2GirlsTotal;
	}

	public void setE2GrandTotal(Integer e2GrandTotal) {
		this.e2GrandTotal = e2GrandTotal;
	}

	public void setE3TotalCases(Integer e3TotalCases) {
		this.e3TotalCases = e3TotalCases;
	}

	public void setE3Boys7to11(Integer e3Boys7to11) {
		this.e3Boys7to11 = e3Boys7to11;
	}

	public void setE3Boys12to15(Integer e3Boys12to15) {
		this.e3Boys12to15 = e3Boys12to15;
	}

	public void setE3Boys16to18(Integer e3Boys16to18) {
		this.e3Boys16to18 = e3Boys16to18;
	}

	public void setE3BoysGreaterThan18(Integer e3BoysGreaterThan18) {
		this.e3BoysGreaterThan18 = e3BoysGreaterThan18;
	}

	public void setE3BoysTotal(Integer e3BoysTotal) {
		this.e3BoysTotal = e3BoysTotal;
	}

	public void setE3Girls7to11(Integer e3Girls7to11) {
		this.e3Girls7to11 = e3Girls7to11;
	}

	public void setE3Girls12to15(Integer e3Girls12to15) {
		this.e3Girls12to15 = e3Girls12to15;
	}

	public void setE3Girls16to18(Integer e3Girls16to18) {
		this.e3Girls16to18 = e3Girls16to18;
	}

	public void setE3GirlsGreaterThan18(Integer e3GirlsGreaterThan18) {
		this.e3GirlsGreaterThan18 = e3GirlsGreaterThan18;
	}

	public void setE3GirlsTotal(Integer e3GirlsTotal) {
		this.e3GirlsTotal = e3GirlsTotal;
	}

	public void setE3GrandTotal(Integer e3GrandTotal) {
		this.e3GrandTotal = e3GrandTotal;
	}

	public void setE4TotalCases(Integer e4TotalCases) {
		this.e4TotalCases = e4TotalCases;
	}

	public void setE4Boys7to11(Integer e4Boys7to11) {
		this.e4Boys7to11 = e4Boys7to11;
	}

	public void setE4Boys12to15(Integer e4Boys12to15) {
		this.e4Boys12to15 = e4Boys12to15;
	}

	public void setE4Boys16to18(Integer e4Boys16to18) {
		this.e4Boys16to18 = e4Boys16to18;
	}

	public void setE4BoysGreaterThan18(Integer e4BoysGreaterThan18) {
		this.e4BoysGreaterThan18 = e4BoysGreaterThan18;
	}

	public void setE4BoysTotal(Integer e4BoysTotal) {
		this.e4BoysTotal = e4BoysTotal;
	}

	public void setE4Girls7to11(Integer e4Girls7to11) {
		this.e4Girls7to11 = e4Girls7to11;
	}

	public void setE4Girls12to15(Integer e4Girls12to15) {
		this.e4Girls12to15 = e4Girls12to15;
	}

	public void setE4Girls16to18(Integer e4Girls16to18) {
		this.e4Girls16to18 = e4Girls16to18;
	}

	public void setE4GirlsGreaterThan18(Integer e4GirlsGreaterThan18) {
		this.e4GirlsGreaterThan18 = e4GirlsGreaterThan18;
	}

	public void setE4GirlsTotal(Integer e4GirlsTotal) {
		this.e4GirlsTotal = e4GirlsTotal;
	}

	public void setE4GrandTotal(Integer e4GrandTotal) {
		this.e4GrandTotal = e4GrandTotal;
	}

	public void setE5TotalCases(Integer e5TotalCases) {
		this.e5TotalCases = e5TotalCases;
	}

	public void setE5Boys7to11(Integer e5Boys7to11) {
		this.e5Boys7to11 = e5Boys7to11;
	}

	public void setE5Boys12to15(Integer e5Boys12to15) {
		this.e5Boys12to15 = e5Boys12to15;
	}

	public void setE5Boys16to18(Integer e5Boys16to18) {
		this.e5Boys16to18 = e5Boys16to18;
	}

	public void setE5BoysGreaterThan18(Integer e5BoysGreaterThan18) {
		this.e5BoysGreaterThan18 = e5BoysGreaterThan18;
	}

	public void setE5BoysTotal(Integer e5BoysTotal) {
		this.e5BoysTotal = e5BoysTotal;
	}

	public void setE5Girls7to11(Integer e5Girls7to11) {
		this.e5Girls7to11 = e5Girls7to11;
	}

	public void setE5Girls12to15(Integer e5Girls12to15) {
		this.e5Girls12to15 = e5Girls12to15;
	}

	public void setE5Girls16to18(Integer e5Girls16to18) {
		this.e5Girls16to18 = e5Girls16to18;
	}

	public void setE5GirlsGreaterThan18(Integer e5GirlsGreaterThan18) {
		this.e5GirlsGreaterThan18 = e5GirlsGreaterThan18;
	}

	public void setE5GirlsTotal(Integer e5GirlsTotal) {
		this.e5GirlsTotal = e5GirlsTotal;
	}

	public void setE5GrandTotal(Integer e5GrandTotal) {
		this.e5GrandTotal = e5GrandTotal;
	}

	public void setE6TotalCases(Integer e6TotalCases) {
		this.e6TotalCases = e6TotalCases;
	}

	public void setE6Boys7to11(Integer e6Boys7to11) {
		this.e6Boys7to11 = e6Boys7to11;
	}

	public void setE6Boys12to15(Integer e6Boys12to15) {
		this.e6Boys12to15 = e6Boys12to15;
	}

	public void setE6Boys16to18(Integer e6Boys16to18) {
		this.e6Boys16to18 = e6Boys16to18;
	}

	public void setE6BoysGreaterThan18(Integer e6BoysGreaterThan18) {
		this.e6BoysGreaterThan18 = e6BoysGreaterThan18;
	}

	public void setE6BoysTotal(Integer e6BoysTotal) {
		this.e6BoysTotal = e6BoysTotal;
	}

	public void setE6Girls7to11(Integer e6Girls7to11) {
		this.e6Girls7to11 = e6Girls7to11;
	}

	public void setE6Girls12to15(Integer e6Girls12to15) {
		this.e6Girls12to15 = e6Girls12to15;
	}

	public void setE6Girls16to18(Integer e6Girls16to18) {
		this.e6Girls16to18 = e6Girls16to18;
	}

	public void setE6GirlsGreaterThan18(Integer e6GirlsGreaterThan18) {
		this.e6GirlsGreaterThan18 = e6GirlsGreaterThan18;
	}

	public void setE6GirlsTotal(Integer e6GirlsTotal) {
		this.e6GirlsTotal = e6GirlsTotal;
	}

	public void setE6GrandTotal(Integer e6GrandTotal) {
		this.e6GrandTotal = e6GrandTotal;
	}

	public void setE7TotalCases(Integer e7TotalCases) {
		this.e7TotalCases = e7TotalCases;
	}

	public void setE7Boys7to11(Integer e7Boys7to11) {
		this.e7Boys7to11 = e7Boys7to11;
	}

	public void setE7Boys12to15(Integer e7Boys12to15) {
		this.e7Boys12to15 = e7Boys12to15;
	}

	public void setE7Boys16to18(Integer e7Boys16to18) {
		this.e7Boys16to18 = e7Boys16to18;
	}

	public void setE7BoysGreaterThan18(Integer e7BoysGreaterThan18) {
		this.e7BoysGreaterThan18 = e7BoysGreaterThan18;
	}

	public void setE7BoysTotal(Integer e7BoysTotal) {
		this.e7BoysTotal = e7BoysTotal;
	}

	public void setE7Girls7to11(Integer e7Girls7to11) {
		this.e7Girls7to11 = e7Girls7to11;
	}

	public void setE7Girls12to15(Integer e7Girls12to15) {
		this.e7Girls12to15 = e7Girls12to15;
	}

	public void setE7Girls16to18(Integer e7Girls16to18) {
		this.e7Girls16to18 = e7Girls16to18;
	}

	public void setE7GirlsGreaterThan18(Integer e7GirlsGreaterThan18) {
		this.e7GirlsGreaterThan18 = e7GirlsGreaterThan18;
	}

	public void setE7GirlsTotal(Integer e7GirlsTotal) {
		this.e7GirlsTotal = e7GirlsTotal;
	}

	public void setE7GrandTotal(Integer e7GrandTotal) {
		this.e7GrandTotal = e7GrandTotal;
	}

	public void setE8TotalCases(Integer e8TotalCases) {
		this.e8TotalCases = e8TotalCases;
	}

	public void setE8Boys7to11(Integer e8Boys7to11) {
		this.e8Boys7to11 = e8Boys7to11;
	}

	public void setE8Boys12to15(Integer e8Boys12to15) {
		this.e8Boys12to15 = e8Boys12to15;
	}

	public void setE8Boys16to18(Integer e8Boys16to18) {
		this.e8Boys16to18 = e8Boys16to18;
	}

	public void setE8BoysGreaterThan18(Integer e8BoysGreaterThan18) {
		this.e8BoysGreaterThan18 = e8BoysGreaterThan18;
	}

	public void setE8BoysTotal(Integer e8BoysTotal) {
		this.e8BoysTotal = e8BoysTotal;
	}

	public void setE8Girls7to11(Integer e8Girls7to11) {
		this.e8Girls7to11 = e8Girls7to11;
	}

	public void setE8Girls12to15(Integer e8Girls12to15) {
		this.e8Girls12to15 = e8Girls12to15;
	}

	public void setE8Girls16to18(Integer e8Girls16to18) {
		this.e8Girls16to18 = e8Girls16to18;
	}

	public void setE8GirlsGreaterThan18(Integer e8GirlsGreaterThan18) {
		this.e8GirlsGreaterThan18 = e8GirlsGreaterThan18;
	}

	public void setE8GirlsTotal(Integer e8GirlsTotal) {
		this.e8GirlsTotal = e8GirlsTotal;
	}

	public void setE8GrandTotal(Integer e8GrandTotal) {
		this.e8GrandTotal = e8GrandTotal;
	}

	public void setE9TotalCases(Integer e9TotalCases) {
		this.e9TotalCases = e9TotalCases;
	}

	public void setE9Boys7to11(Integer e9Boys7to11) {
		this.e9Boys7to11 = e9Boys7to11;
	}

	public void setE9Boys12to15(Integer e9Boys12to15) {
		this.e9Boys12to15 = e9Boys12to15;
	}

	public void setE9Boys16to18(Integer e9Boys16to18) {
		this.e9Boys16to18 = e9Boys16to18;
	}

	public void setE9BoysGreaterThan18(Integer e9BoysGreaterThan18) {
		this.e9BoysGreaterThan18 = e9BoysGreaterThan18;
	}

	public void setE9BoysTotal(Integer e9BoysTotal) {
		this.e9BoysTotal = e9BoysTotal;
	}

	public void setE9Girls7to11(Integer e9Girls7to11) {
		this.e9Girls7to11 = e9Girls7to11;
	}

	public void setE9Girls12to15(Integer e9Girls12to15) {
		this.e9Girls12to15 = e9Girls12to15;
	}

	public void setE9Girls16to18(Integer e9Girls16to18) {
		this.e9Girls16to18 = e9Girls16to18;
	}

	public void setE9GirlsGreaterThan18(Integer e9GirlsGreaterThan18) {
		this.e9GirlsGreaterThan18 = e9GirlsGreaterThan18;
	}

	public void setE9GirlsTotal(Integer e9GirlsTotal) {
		this.e9GirlsTotal = e9GirlsTotal;
	}

	public void setE9GrandTotal(Integer e9GrandTotal) {
		this.e9GrandTotal = e9GrandTotal;
	}

	public void setE10TotalCases(Integer e10TotalCases) {
		this.e10TotalCases = e10TotalCases;
	}

	public void setE10Boys7to11(Integer e10Boys7to11) {
		this.e10Boys7to11 = e10Boys7to11;
	}

	public void setE10Boys12to15(Integer e10Boys12to15) {
		this.e10Boys12to15 = e10Boys12to15;
	}

	public void setE10Boys16to18(Integer e10Boys16to18) {
		this.e10Boys16to18 = e10Boys16to18;
	}

	public void setE10BoysGreaterThan18(Integer e10BoysGreaterThan18) {
		this.e10BoysGreaterThan18 = e10BoysGreaterThan18;
	}

	public void setE10BoysTotal(Integer e10BoysTotal) {
		this.e10BoysTotal = e10BoysTotal;
	}

	public void setE10Girls7to11(Integer e10Girls7to11) {
		this.e10Girls7to11 = e10Girls7to11;
	}

	public void setE10Girls12to15(Integer e10Girls12to15) {
		this.e10Girls12to15 = e10Girls12to15;
	}

	public void setE10Girls16to18(Integer e10Girls16to18) {
		this.e10Girls16to18 = e10Girls16to18;
	}

	public void setE10GirlsGreaterThan18(Integer e10GirlsGreaterThan18) {
		this.e10GirlsGreaterThan18 = e10GirlsGreaterThan18;
	}

	public void setE10GirlsTotal(Integer e10GirlsTotal) {
		this.e10GirlsTotal = e10GirlsTotal;
	}

	public void setE10GrandTotal(Integer e10GrandTotal) {
		this.e10GrandTotal = e10GrandTotal;
	}

	public void setE11TotalCases(Integer e11TotalCases) {
		this.e11TotalCases = e11TotalCases;
	}

	public void setE11Boys7to11(Integer e11Boys7to11) {
		this.e11Boys7to11 = e11Boys7to11;
	}

	public void setE11Boys12to15(Integer e11Boys12to15) {
		this.e11Boys12to15 = e11Boys12to15;
	}

	public void setE11Boys16to18(Integer e11Boys16to18) {
		this.e11Boys16to18 = e11Boys16to18;
	}

	public void setE11BoysGreaterThan18(Integer e11BoysGreaterThan18) {
		this.e11BoysGreaterThan18 = e11BoysGreaterThan18;
	}

	public void setE11BoysTotal(Integer e11BoysTotal) {
		this.e11BoysTotal = e11BoysTotal;
	}

	public void setE11Girls7to11(Integer e11Girls7to11) {
		this.e11Girls7to11 = e11Girls7to11;
	}

	public void setE11Girls12to15(Integer e11Girls12to15) {
		this.e11Girls12to15 = e11Girls12to15;
	}

	public void setE11Girls16to18(Integer e11Girls16to18) {
		this.e11Girls16to18 = e11Girls16to18;
	}

	public void setE11GirlsGreaterThan18(Integer e11GirlsGreaterThan18) {
		this.e11GirlsGreaterThan18 = e11GirlsGreaterThan18;
	}

	public void setE11GirlsTotal(Integer e11GirlsTotal) {
		this.e11GirlsTotal = e11GirlsTotal;
	}

	public void setE11GrandTotal(Integer e11GrandTotal) {
		this.e11GrandTotal = e11GrandTotal;
	}

	public void setE12TotalCases(Integer e12TotalCases) {
		this.e12TotalCases = e12TotalCases;
	}

	public void setE12Boys7to11(Integer e12Boys7to11) {
		this.e12Boys7to11 = e12Boys7to11;
	}

	public void setE12Boys12to15(Integer e12Boys12to15) {
		this.e12Boys12to15 = e12Boys12to15;
	}

	public void setE12Boys16to18(Integer e12Boys16to18) {
		this.e12Boys16to18 = e12Boys16to18;
	}

	public void setE12BoysGreaterThan18(Integer e12BoysGreaterThan18) {
		this.e12BoysGreaterThan18 = e12BoysGreaterThan18;
	}

	public void setE12BoysTotal(Integer e12BoysTotal) {
		this.e12BoysTotal = e12BoysTotal;
	}

	public void setE12Girls7to11(Integer e12Girls7to11) {
		this.e12Girls7to11 = e12Girls7to11;
	}

	public void setE12Girls12to15(Integer e12Girls12to15) {
		this.e12Girls12to15 = e12Girls12to15;
	}

	public void setE12Girls16to18(Integer e12Girls16to18) {
		this.e12Girls16to18 = e12Girls16to18;
	}

	public void setE12GirlsGreaterThan18(Integer e12GirlsGreaterThan18) {
		this.e12GirlsGreaterThan18 = e12GirlsGreaterThan18;
	}

	public void setE12GirlsTotal(Integer e12GirlsTotal) {
		this.e12GirlsTotal = e12GirlsTotal;
	}

	public void setE12GrandTotal(Integer e12GrandTotal) {
		this.e12GrandTotal = e12GrandTotal;
	}

	public void setE13TotalCases(Integer e13TotalCases) {
		this.e13TotalCases = e13TotalCases;
	}

	public void setE13Boys7to11(Integer e13Boys7to11) {
		this.e13Boys7to11 = e13Boys7to11;
	}

	public void setE13Boys12to15(Integer e13Boys12to15) {
		this.e13Boys12to15 = e13Boys12to15;
	}

	public void setE13Boys16to18(Integer e13Boys16to18) {
		this.e13Boys16to18 = e13Boys16to18;
	}

	public void setE13BoysGreaterThan18(Integer e13BoysGreaterThan18) {
		this.e13BoysGreaterThan18 = e13BoysGreaterThan18;
	}

	public void setE13BoysTotal(Integer e13BoysTotal) {
		this.e13BoysTotal = e13BoysTotal;
	}

	public void setE13Girls7to11(Integer e13Girls7to11) {
		this.e13Girls7to11 = e13Girls7to11;
	}

	public void setE13Girls12to15(Integer e13Girls12to15) {
		this.e13Girls12to15 = e13Girls12to15;
	}

	public void setE13Girls16to18(Integer e13Girls16to18) {
		this.e13Girls16to18 = e13Girls16to18;
	}

	public void setE13GirlsGreaterThan18(Integer e13GirlsGreaterThan18) {
		this.e13GirlsGreaterThan18 = e13GirlsGreaterThan18;
	}

	public void setE13GirlsTotal(Integer e13GirlsTotal) {
		this.e13GirlsTotal = e13GirlsTotal;
	}

	public void setE13GrandTotal(Integer e13GrandTotal) {
		this.e13GrandTotal = e13GrandTotal;
	}

	public void seteTotalCases(Integer eTotalCases) {
		this.eTotalCases = eTotalCases;
	}

	public void seteBoys7to11(Integer eBoys7to11) {
		this.eBoys7to11 = eBoys7to11;
	}

	public void seteBoys12to15(Integer eBoys12to15) {
		this.eBoys12to15 = eBoys12to15;
	}

	public void seteBoys16to18(Integer eBoys16to18) {
		this.eBoys16to18 = eBoys16to18;
	}

	public void seteBoysGreaterThan18(Integer eBoysGreaterThan18) {
		this.eBoysGreaterThan18 = eBoysGreaterThan18;
	}

	public void seteBoysTotal(Integer eBoysTotal) {
		this.eBoysTotal = eBoysTotal;
	}

	public void seteGirls7to11(Integer eGirls7to11) {
		this.eGirls7to11 = eGirls7to11;
	}

	public void seteGirls12to15(Integer eGirls12to15) {
		this.eGirls12to15 = eGirls12to15;
	}

	public void seteGirls16to18(Integer eGirls16to18) {
		this.eGirls16to18 = eGirls16to18;
	}

	public void seteGirlsGreaterThan18(Integer eGirlsGreaterThan18) {
		this.eGirlsGreaterThan18 = eGirlsGreaterThan18;
	}

	public void seteGirlsTotal(Integer eGirlsTotal) {
		this.eGirlsTotal = eGirlsTotal;
	}

	public void seteGrandTotal(Integer eGrandTotal) {
		this.eGrandTotal = eGrandTotal;
	}

	public void setF1TotalCases(Integer f1TotalCases) {
		this.f1TotalCases = f1TotalCases;
	}

	public void setF1Boys7to11(Integer f1Boys7to11) {
		this.f1Boys7to11 = f1Boys7to11;
	}

	public void setF1Boys12to15(Integer f1Boys12to15) {
		this.f1Boys12to15 = f1Boys12to15;
	}

	public void setF1Boys16to18(Integer f1Boys16to18) {
		this.f1Boys16to18 = f1Boys16to18;
	}

	public void setF1BoysGreaterThan18(Integer f1BoysGreaterThan18) {
		this.f1BoysGreaterThan18 = f1BoysGreaterThan18;
	}

	public void setF1BoysTotal(Integer f1BoysTotal) {
		this.f1BoysTotal = f1BoysTotal;
	}

	public void setF1Girls7to11(Integer f1Girls7to11) {
		this.f1Girls7to11 = f1Girls7to11;
	}

	public void setF1Girls12to15(Integer f1Girls12to15) {
		this.f1Girls12to15 = f1Girls12to15;
	}

	public void setF1Girls16to18(Integer f1Girls16to18) {
		this.f1Girls16to18 = f1Girls16to18;
	}

	public void setF1GirlsGreaterThan18(Integer f1GirlsGreaterThan18) {
		this.f1GirlsGreaterThan18 = f1GirlsGreaterThan18;
	}

	public void setF1GirlsTotal(Integer f1GirlsTotal) {
		this.f1GirlsTotal = f1GirlsTotal;
	}

	public void setF1GrandTotal(Integer f1GrandTotal) {
		this.f1GrandTotal = f1GrandTotal;
	}

	public void setF2TotalCases(Integer f2TotalCases) {
		this.f2TotalCases = f2TotalCases;
	}

	public void setF2Boys7to11(Integer f2Boys7to11) {
		this.f2Boys7to11 = f2Boys7to11;
	}

	public void setF2Boys12to15(Integer f2Boys12to15) {
		this.f2Boys12to15 = f2Boys12to15;
	}

	public void setF2Boys16to18(Integer f2Boys16to18) {
		this.f2Boys16to18 = f2Boys16to18;
	}

	public void setF2BoysGreaterThan18(Integer f2BoysGreaterThan18) {
		this.f2BoysGreaterThan18 = f2BoysGreaterThan18;
	}

	public void setF2BoysTotal(Integer f2BoysTotal) {
		this.f2BoysTotal = f2BoysTotal;
	}

	public void setF2Girls7to11(Integer f2Girls7to11) {
		this.f2Girls7to11 = f2Girls7to11;
	}

	public void setF2Girls12to15(Integer f2Girls12to15) {
		this.f2Girls12to15 = f2Girls12to15;
	}

	public void setF2Girls16to18(Integer f2Girls16to18) {
		this.f2Girls16to18 = f2Girls16to18;
	}

	public void setF2GirlsGreaterThan18(Integer f2GirlsGreaterThan18) {
		this.f2GirlsGreaterThan18 = f2GirlsGreaterThan18;
	}

	public void setF2GirlsTotal(Integer f2GirlsTotal) {
		this.f2GirlsTotal = f2GirlsTotal;
	}

	public void setF2GrandTotal(Integer f2GrandTotal) {
		this.f2GrandTotal = f2GrandTotal;
	}

	public void setF3TotalCases(Integer f3TotalCases) {
		this.f3TotalCases = f3TotalCases;
	}

	public void setF3Boys7to11(Integer f3Boys7to11) {
		this.f3Boys7to11 = f3Boys7to11;
	}

	public void setF3Boys12to15(Integer f3Boys12to15) {
		this.f3Boys12to15 = f3Boys12to15;
	}

	public void setF3Boys16to18(Integer f3Boys16to18) {
		this.f3Boys16to18 = f3Boys16to18;
	}

	public void setF3BoysGreaterThan18(Integer f3BoysGreaterThan18) {
		this.f3BoysGreaterThan18 = f3BoysGreaterThan18;
	}

	public void setF3BoysTotal(Integer f3BoysTotal) {
		this.f3BoysTotal = f3BoysTotal;
	}

	public void setF3Girls7to11(Integer f3Girls7to11) {
		this.f3Girls7to11 = f3Girls7to11;
	}

	public void setF3Girls12to15(Integer f3Girls12to15) {
		this.f3Girls12to15 = f3Girls12to15;
	}

	public void setF3Girls16to18(Integer f3Girls16to18) {
		this.f3Girls16to18 = f3Girls16to18;
	}

	public void setF3GirlsGreaterThan18(Integer f3GirlsGreaterThan18) {
		this.f3GirlsGreaterThan18 = f3GirlsGreaterThan18;
	}

	public void setF3GirlsTotal(Integer f3GirlsTotal) {
		this.f3GirlsTotal = f3GirlsTotal;
	}

	public void setF3GrandTotal(Integer f3GrandTotal) {
		this.f3GrandTotal = f3GrandTotal;
	}

	public void setG1PettyTotalCases(Integer g1PettyTotalCases) {
		this.g1PettyTotalCases = g1PettyTotalCases;
	}

	public void setG1PettyBoys7to11(Integer g1PettyBoys7to11) {
		this.g1PettyBoys7to11 = g1PettyBoys7to11;
	}

	public void setG1PettyBoys12to15(Integer g1PettyBoys12to15) {
		this.g1PettyBoys12to15 = g1PettyBoys12to15;
	}

	public void setG1PettyBoys16to18(Integer g1PettyBoys16to18) {
		this.g1PettyBoys16to18 = g1PettyBoys16to18;
	}

	public void setG1PettyBoysGreaterThan18(Integer g1PettyBoysGreaterThan18) {
		this.g1PettyBoysGreaterThan18 = g1PettyBoysGreaterThan18;
	}

	public void setG1PettyBoysTotal(Integer g1PettyBoysTotal) {
		this.g1PettyBoysTotal = g1PettyBoysTotal;
	}

	public void setG1PettyGirls7to11(Integer g1PettyGirls7to11) {
		this.g1PettyGirls7to11 = g1PettyGirls7to11;
	}

	public void setG1PettyGirls12to15(Integer g1PettyGirls12to15) {
		this.g1PettyGirls12to15 = g1PettyGirls12to15;
	}

	public void setG1PettyGirls16to18(Integer g1PettyGirls16to18) {
		this.g1PettyGirls16to18 = g1PettyGirls16to18;
	}

	public void setG1PettyGirlsGreaterThan18(Integer g1PettyGirlsGreaterThan18) {
		this.g1PettyGirlsGreaterThan18 = g1PettyGirlsGreaterThan18;
	}

	public void setG1PettyGirlsTotal(Integer g1PettyGirlsTotal) {
		this.g1PettyGirlsTotal = g1PettyGirlsTotal;
	}

	public void setG1PettyGrandTotal(Integer g1PettyGrandTotal) {
		this.g1PettyGrandTotal = g1PettyGrandTotal;
	}

	public void setG1SeriousTotalCases(Integer g1SeriousTotalCases) {
		this.g1SeriousTotalCases = g1SeriousTotalCases;
	}

	public void setG1SeriousBoys7to11(Integer g1SeriousBoys7to11) {
		this.g1SeriousBoys7to11 = g1SeriousBoys7to11;
	}

	public void setG1SeriousBoys12to15(Integer g1SeriousBoys12to15) {
		this.g1SeriousBoys12to15 = g1SeriousBoys12to15;
	}

	public void setG1SeriousBoys16to18(Integer g1SeriousBoys16to18) {
		this.g1SeriousBoys16to18 = g1SeriousBoys16to18;
	}

	public void setG1SeriousBoysGreaterThan18(Integer g1SeriousBoysGreaterThan18) {
		this.g1SeriousBoysGreaterThan18 = g1SeriousBoysGreaterThan18;
	}

	public void setG1SeriousBoysTotal(Integer g1SeriousBoysTotal) {
		this.g1SeriousBoysTotal = g1SeriousBoysTotal;
	}

	public void setG1SeriousGirls7to11(Integer g1SeriousGirls7to11) {
		this.g1SeriousGirls7to11 = g1SeriousGirls7to11;
	}

	public void setG1SeriousGirls12to15(Integer g1SeriousGirls12to15) {
		this.g1SeriousGirls12to15 = g1SeriousGirls12to15;
	}

	public void setG1SeriousGirls16to18(Integer g1SeriousGirls16to18) {
		this.g1SeriousGirls16to18 = g1SeriousGirls16to18;
	}

	public void setG1SeriousGirlsGreaterThan18(Integer g1SeriousGirlsGreaterThan18) {
		this.g1SeriousGirlsGreaterThan18 = g1SeriousGirlsGreaterThan18;
	}

	public void setG1SeriousGirlsTotal(Integer g1SeriousGirlsTotal) {
		this.g1SeriousGirlsTotal = g1SeriousGirlsTotal;
	}

	public void setG1SeriousGrandTotal(Integer g1SeriousGrandTotal) {
		this.g1SeriousGrandTotal = g1SeriousGrandTotal;
	}

	public void setG1HeinousTotalCases(Integer g1HeinousTotalCases) {
		this.g1HeinousTotalCases = g1HeinousTotalCases;
	}

	public void setG1HeinousBoys7to11(Integer g1HeinousBoys7to11) {
		this.g1HeinousBoys7to11 = g1HeinousBoys7to11;
	}

	public void setG1HeinousBoys12to15(Integer g1HeinousBoys12to15) {
		this.g1HeinousBoys12to15 = g1HeinousBoys12to15;
	}

	public void setG1HeinousBoys16to18(Integer g1HeinousBoys16to18) {
		this.g1HeinousBoys16to18 = g1HeinousBoys16to18;
	}

	public void setG1HeinousBoysGreaterThan18(Integer g1HeinousBoysGreaterThan18) {
		this.g1HeinousBoysGreaterThan18 = g1HeinousBoysGreaterThan18;
	}

	public void setG1HeinousBoysTotal(Integer g1HeinousBoysTotal) {
		this.g1HeinousBoysTotal = g1HeinousBoysTotal;
	}

	public void setG1HeinousGirls7to11(Integer g1HeinousGirls7to11) {
		this.g1HeinousGirls7to11 = g1HeinousGirls7to11;
	}

	public void setG1HeinousGirls12to15(Integer g1HeinousGirls12to15) {
		this.g1HeinousGirls12to15 = g1HeinousGirls12to15;
	}

	public void setG1HeinousGirls16to18(Integer g1HeinousGirls16to18) {
		this.g1HeinousGirls16to18 = g1HeinousGirls16to18;
	}

	public void setG1HeinousGirlsGreaterThan18(Integer g1HeinousGirlsGreaterThan18) {
		this.g1HeinousGirlsGreaterThan18 = g1HeinousGirlsGreaterThan18;
	}

	public void setG1HeinousGirlsTotal(Integer g1HeinousGirlsTotal) {
		this.g1HeinousGirlsTotal = g1HeinousGirlsTotal;
	}

	public void setG1HeinousGrandTotal(Integer g1HeinousGrandTotal) {
		this.g1HeinousGrandTotal = g1HeinousGrandTotal;
	}

	public void setG1TotalCases(Integer g1TotalCases) {
		this.g1TotalCases = g1TotalCases;
	}

	public void setG1Boys7to11(Integer g1Boys7to11) {
		this.g1Boys7to11 = g1Boys7to11;
	}

	public void setG1Boys12to15(Integer g1Boys12to15) {
		this.g1Boys12to15 = g1Boys12to15;
	}

	public void setG1Boys16to18(Integer g1Boys16to18) {
		this.g1Boys16to18 = g1Boys16to18;
	}

	public void setG1BoysGreaterThan18(Integer g1BoysGreaterThan18) {
		this.g1BoysGreaterThan18 = g1BoysGreaterThan18;
	}

	public void setG1BoysTotal(Integer g1BoysTotal) {
		this.g1BoysTotal = g1BoysTotal;
	}

	public void setG1Girls7to11(Integer g1Girls7to11) {
		this.g1Girls7to11 = g1Girls7to11;
	}

	public void setG1Girls12to15(Integer g1Girls12to15) {
		this.g1Girls12to15 = g1Girls12to15;
	}

	public void setG1Girls16to18(Integer g1Girls16to18) {
		this.g1Girls16to18 = g1Girls16to18;
	}

	public void setG1GirlsGreaterThan18(Integer g1GirlsGreaterThan18) {
		this.g1GirlsGreaterThan18 = g1GirlsGreaterThan18;
	}

	public void setG1GirlsTotal(Integer g1GirlsTotal) {
		this.g1GirlsTotal = g1GirlsTotal;
	}

	public void setG1GrandTotal(Integer g1GrandTotal) {
		this.g1GrandTotal = g1GrandTotal;
	}

	public void setG2PettyTotalCases(Integer g2PettyTotalCases) {
		this.g2PettyTotalCases = g2PettyTotalCases;
	}

	public void setG2PettyBoys7to11(Integer g2PettyBoys7to11) {
		this.g2PettyBoys7to11 = g2PettyBoys7to11;
	}

	public void setG2PettyBoys12to15(Integer g2PettyBoys12to15) {
		this.g2PettyBoys12to15 = g2PettyBoys12to15;
	}

	public void setG2PettyBoys16to18(Integer g2PettyBoys16to18) {
		this.g2PettyBoys16to18 = g2PettyBoys16to18;
	}

	public void setG2PettyBoysGreaterThan18(Integer g2PettyBoysGreaterThan18) {
		this.g2PettyBoysGreaterThan18 = g2PettyBoysGreaterThan18;
	}

	public void setG2PettyBoysTotal(Integer g2PettyBoysTotal) {
		this.g2PettyBoysTotal = g2PettyBoysTotal;
	}

	public void setG2PettyGirls7to11(Integer g2PettyGirls7to11) {
		this.g2PettyGirls7to11 = g2PettyGirls7to11;
	}

	public void setG2PettyGirls12to15(Integer g2PettyGirls12to15) {
		this.g2PettyGirls12to15 = g2PettyGirls12to15;
	}

	public void setG2PettyGirls16to18(Integer g2PettyGirls16to18) {
		this.g2PettyGirls16to18 = g2PettyGirls16to18;
	}

	public void setG2PettyGirlsGreaterThan18(Integer g2PettyGirlsGreaterThan18) {
		this.g2PettyGirlsGreaterThan18 = g2PettyGirlsGreaterThan18;
	}

	public void setG2PettyGirlsTotal(Integer g2PettyGirlsTotal) {
		this.g2PettyGirlsTotal = g2PettyGirlsTotal;
	}

	public void setG2PettyGrandTotal(Integer g2PettyGrandTotal) {
		this.g2PettyGrandTotal = g2PettyGrandTotal;
	}

	public void setG2SeriousTotalCases(Integer g2SeriousTotalCases) {
		this.g2SeriousTotalCases = g2SeriousTotalCases;
	}

	public void setG2SeriousBoys7to11(Integer g2SeriousBoys7to11) {
		this.g2SeriousBoys7to11 = g2SeriousBoys7to11;
	}

	public void setG2SeriousBoys12to15(Integer g2SeriousBoys12to15) {
		this.g2SeriousBoys12to15 = g2SeriousBoys12to15;
	}

	public void setG2SeriousBoys16to18(Integer g2SeriousBoys16to18) {
		this.g2SeriousBoys16to18 = g2SeriousBoys16to18;
	}

	public void setG2SeriousBoysGreaterThan18(Integer g2SeriousBoysGreaterThan18) {
		this.g2SeriousBoysGreaterThan18 = g2SeriousBoysGreaterThan18;
	}

	public void setG2SeriousBoysTotal(Integer g2SeriousBoysTotal) {
		this.g2SeriousBoysTotal = g2SeriousBoysTotal;
	}

	public void setG2SeriousGirls7to11(Integer g2SeriousGirls7to11) {
		this.g2SeriousGirls7to11 = g2SeriousGirls7to11;
	}

	public void setG2SeriousGirls12to15(Integer g2SeriousGirls12to15) {
		this.g2SeriousGirls12to15 = g2SeriousGirls12to15;
	}

	public void setG2SeriousGirls16to18(Integer g2SeriousGirls16to18) {
		this.g2SeriousGirls16to18 = g2SeriousGirls16to18;
	}

	public void setG2SeriousGirlsGreaterThan18(Integer g2SeriousGirlsGreaterThan18) {
		this.g2SeriousGirlsGreaterThan18 = g2SeriousGirlsGreaterThan18;
	}

	public void setG2SeriousGirlsTotal(Integer g2SeriousGirlsTotal) {
		this.g2SeriousGirlsTotal = g2SeriousGirlsTotal;
	}

	public void setG2SeriousGrandTotal(Integer g2SeriousGrandTotal) {
		this.g2SeriousGrandTotal = g2SeriousGrandTotal;
	}

	public void setG2HeinousTotalCases(Integer g2HeinousTotalCases) {
		this.g2HeinousTotalCases = g2HeinousTotalCases;
	}

	public void setG2HeinousBoys7to11(Integer g2HeinousBoys7to11) {
		this.g2HeinousBoys7to11 = g2HeinousBoys7to11;
	}

	public void setG2HeinousBoys12to15(Integer g2HeinousBoys12to15) {
		this.g2HeinousBoys12to15 = g2HeinousBoys12to15;
	}

	public void setG2HeinousBoys16to18(Integer g2HeinousBoys16to18) {
		this.g2HeinousBoys16to18 = g2HeinousBoys16to18;
	}

	public void setG2HeinousBoysGreaterThan18(Integer g2HeinousBoysGreaterThan18) {
		this.g2HeinousBoysGreaterThan18 = g2HeinousBoysGreaterThan18;
	}

	public void setG2HeinousBoysTotal(Integer g2HeinousBoysTotal) {
		this.g2HeinousBoysTotal = g2HeinousBoysTotal;
	}

	public void setG2HeinousGirls7to11(Integer g2HeinousGirls7to11) {
		this.g2HeinousGirls7to11 = g2HeinousGirls7to11;
	}

	public void setG2HeinousGirls12to15(Integer g2HeinousGirls12to15) {
		this.g2HeinousGirls12to15 = g2HeinousGirls12to15;
	}

	public void setG2HeinousGirls16to18(Integer g2HeinousGirls16to18) {
		this.g2HeinousGirls16to18 = g2HeinousGirls16to18;
	}

	public void setG2HeinousGirlsGreaterThan18(Integer g2HeinousGirlsGreaterThan18) {
		this.g2HeinousGirlsGreaterThan18 = g2HeinousGirlsGreaterThan18;
	}

	public void setG2HeinousGirlsTotal(Integer g2HeinousGirlsTotal) {
		this.g2HeinousGirlsTotal = g2HeinousGirlsTotal;
	}

	public void setG2HeinousGrandTotal(Integer g2HeinousGrandTotal) {
		this.g2HeinousGrandTotal = g2HeinousGrandTotal;
	}

	public void setG2TotalCases(Integer g2TotalCases) {
		this.g2TotalCases = g2TotalCases;
	}

	public void setG2Boys7to11(Integer g2Boys7to11) {
		this.g2Boys7to11 = g2Boys7to11;
	}

	public void setG2Boys12to15(Integer g2Boys12to15) {
		this.g2Boys12to15 = g2Boys12to15;
	}

	public void setG2Boys16to18(Integer g2Boys16to18) {
		this.g2Boys16to18 = g2Boys16to18;
	}

	public void setG2BoysGreaterThan18(Integer g2BoysGreaterThan18) {
		this.g2BoysGreaterThan18 = g2BoysGreaterThan18;
	}

	public void setG2BoysTotal(Integer g2BoysTotal) {
		this.g2BoysTotal = g2BoysTotal;
	}

	public void setG2Girls7to11(Integer g2Girls7to11) {
		this.g2Girls7to11 = g2Girls7to11;
	}

	public void setG2Girls12to15(Integer g2Girls12to15) {
		this.g2Girls12to15 = g2Girls12to15;
	}

	public void setG2Girls16to18(Integer g2Girls16to18) {
		this.g2Girls16to18 = g2Girls16to18;
	}

	public void setG2GirlsGreaterThan18(Integer g2GirlsGreaterThan18) {
		this.g2GirlsGreaterThan18 = g2GirlsGreaterThan18;
	}

	public void setG2GirlsTotal(Integer g2GirlsTotal) {
		this.g2GirlsTotal = g2GirlsTotal;
	}

	public void setG2GrandTotal(Integer g2GrandTotal) {
		this.g2GrandTotal = g2GrandTotal;
	}

	public void setG3PettyTotalCases(Integer g3PettyTotalCases) {
		this.g3PettyTotalCases = g3PettyTotalCases;
	}

	public void setG3PettyBoys7to11(Integer g3PettyBoys7to11) {
		this.g3PettyBoys7to11 = g3PettyBoys7to11;
	}

	public void setG3PettyBoys12to15(Integer g3PettyBoys12to15) {
		this.g3PettyBoys12to15 = g3PettyBoys12to15;
	}

	public void setG3PettyBoys16to18(Integer g3PettyBoys16to18) {
		this.g3PettyBoys16to18 = g3PettyBoys16to18;
	}

	public void setG3PettyBoysGreaterThan18(Integer g3PettyBoysGreaterThan18) {
		this.g3PettyBoysGreaterThan18 = g3PettyBoysGreaterThan18;
	}

	public void setG3PettyBoysTotal(Integer g3PettyBoysTotal) {
		this.g3PettyBoysTotal = g3PettyBoysTotal;
	}

	public void setG3PettyGirls7to11(Integer g3PettyGirls7to11) {
		this.g3PettyGirls7to11 = g3PettyGirls7to11;
	}

	public void setG3PettyGirls12to15(Integer g3PettyGirls12to15) {
		this.g3PettyGirls12to15 = g3PettyGirls12to15;
	}

	public void setG3PettyGirls16to18(Integer g3PettyGirls16to18) {
		this.g3PettyGirls16to18 = g3PettyGirls16to18;
	}

	public void setG3PettyGirlsGreaterThan18(Integer g3PettyGirlsGreaterThan18) {
		this.g3PettyGirlsGreaterThan18 = g3PettyGirlsGreaterThan18;
	}

	public void setG3PettyGirlsTotal(Integer g3PettyGirlsTotal) {
		this.g3PettyGirlsTotal = g3PettyGirlsTotal;
	}

	public void setG3PettyGrandTotal(Integer g3PettyGrandTotal) {
		this.g3PettyGrandTotal = g3PettyGrandTotal;
	}

	public void setG3SeriousTotalCases(Integer g3SeriousTotalCases) {
		this.g3SeriousTotalCases = g3SeriousTotalCases;
	}

	public void setG3SeriousBoys7to11(Integer g3SeriousBoys7to11) {
		this.g3SeriousBoys7to11 = g3SeriousBoys7to11;
	}

	public void setG3SeriousBoys12to15(Integer g3SeriousBoys12to15) {
		this.g3SeriousBoys12to15 = g3SeriousBoys12to15;
	}

	public void setG3SeriousBoys16to18(Integer g3SeriousBoys16to18) {
		this.g3SeriousBoys16to18 = g3SeriousBoys16to18;
	}

	public void setG3SeriousBoysGreaterThan18(Integer g3SeriousBoysGreaterThan18) {
		this.g3SeriousBoysGreaterThan18 = g3SeriousBoysGreaterThan18;
	}

	public void setG3SeriousBoysTotal(Integer g3SeriousBoysTotal) {
		this.g3SeriousBoysTotal = g3SeriousBoysTotal;
	}

	public void setG3SeriousGirls7to11(Integer g3SeriousGirls7to11) {
		this.g3SeriousGirls7to11 = g3SeriousGirls7to11;
	}

	public void setG3SeriousGirls12to15(Integer g3SeriousGirls12to15) {
		this.g3SeriousGirls12to15 = g3SeriousGirls12to15;
	}

	public void setG3SeriousGirls16to18(Integer g3SeriousGirls16to18) {
		this.g3SeriousGirls16to18 = g3SeriousGirls16to18;
	}

	public void setG3SeriousGirlsGreaterThan18(Integer g3SeriousGirlsGreaterThan18) {
		this.g3SeriousGirlsGreaterThan18 = g3SeriousGirlsGreaterThan18;
	}

	public void setG3SeriousGirlsTotal(Integer g3SeriousGirlsTotal) {
		this.g3SeriousGirlsTotal = g3SeriousGirlsTotal;
	}

	public void setG3SeriousGrandTotal(Integer g3SeriousGrandTotal) {
		this.g3SeriousGrandTotal = g3SeriousGrandTotal;
	}

	public void setG3HeinousTotalCases(Integer g3HeinousTotalCases) {
		this.g3HeinousTotalCases = g3HeinousTotalCases;
	}

	public void setG3HeinousBoys7to11(Integer g3HeinousBoys7to11) {
		this.g3HeinousBoys7to11 = g3HeinousBoys7to11;
	}

	public void setG3HeinousBoys12to15(Integer g3HeinousBoys12to15) {
		this.g3HeinousBoys12to15 = g3HeinousBoys12to15;
	}

	public void setG3HeinousBoys16to18(Integer g3HeinousBoys16to18) {
		this.g3HeinousBoys16to18 = g3HeinousBoys16to18;
	}

	public void setG3HeinousBoysGreaterThan18(Integer g3HeinousBoysGreaterThan18) {
		this.g3HeinousBoysGreaterThan18 = g3HeinousBoysGreaterThan18;
	}

	public void setG3HeinousBoysTotal(Integer g3HeinousBoysTotal) {
		this.g3HeinousBoysTotal = g3HeinousBoysTotal;
	}

	public void setG3HeinousGirls7to11(Integer g3HeinousGirls7to11) {
		this.g3HeinousGirls7to11 = g3HeinousGirls7to11;
	}

	public void setG3HeinousGirls12to15(Integer g3HeinousGirls12to15) {
		this.g3HeinousGirls12to15 = g3HeinousGirls12to15;
	}

	public void setG3HeinousGirls16to18(Integer g3HeinousGirls16to18) {
		this.g3HeinousGirls16to18 = g3HeinousGirls16to18;
	}

	public void setG3HeinousGirlsGreaterThan18(Integer g3HeinousGirlsGreaterThan18) {
		this.g3HeinousGirlsGreaterThan18 = g3HeinousGirlsGreaterThan18;
	}

	public void setG3HeinousGirlsTotal(Integer g3HeinousGirlsTotal) {
		this.g3HeinousGirlsTotal = g3HeinousGirlsTotal;
	}

	public void setG3HeinousGrandTotal(Integer g3HeinousGrandTotal) {
		this.g3HeinousGrandTotal = g3HeinousGrandTotal;
	}

	public void setG3TotalCases(Integer g3TotalCases) {
		this.g3TotalCases = g3TotalCases;
	}

	public void setG3Boys7to11(Integer g3Boys7to11) {
		this.g3Boys7to11 = g3Boys7to11;
	}

	public void setG3Boys12to15(Integer g3Boys12to15) {
		this.g3Boys12to15 = g3Boys12to15;
	}

	public void setG3Boys16to18(Integer g3Boys16to18) {
		this.g3Boys16to18 = g3Boys16to18;
	}

	public void setG3BoysGreaterThan18(Integer g3BoysGreaterThan18) {
		this.g3BoysGreaterThan18 = g3BoysGreaterThan18;
	}

	public void setG3BoysTotal(Integer g3BoysTotal) {
		this.g3BoysTotal = g3BoysTotal;
	}

	public void setG3Girls7to11(Integer g3Girls7to11) {
		this.g3Girls7to11 = g3Girls7to11;
	}

	public void setG3Girls12to15(Integer g3Girls12to15) {
		this.g3Girls12to15 = g3Girls12to15;
	}

	public void setG3Girls16to18(Integer g3Girls16to18) {
		this.g3Girls16to18 = g3Girls16to18;
	}

	public void setG3GirlsGreaterThan18(Integer g3GirlsGreaterThan18) {
		this.g3GirlsGreaterThan18 = g3GirlsGreaterThan18;
	}

	public void setG3GirlsTotal(Integer g3GirlsTotal) {
		this.g3GirlsTotal = g3GirlsTotal;
	}

	public void setG3GrandTotal(Integer g3GrandTotal) {
		this.g3GrandTotal = g3GrandTotal;
	}

	public void setG4PettyTotalCases(Integer g4PettyTotalCases) {
		this.g4PettyTotalCases = g4PettyTotalCases;
	}

	public void setG4PettyBoys7to11(Integer g4PettyBoys7to11) {
		this.g4PettyBoys7to11 = g4PettyBoys7to11;
	}

	public void setG4PettyBoys12to15(Integer g4PettyBoys12to15) {
		this.g4PettyBoys12to15 = g4PettyBoys12to15;
	}

	public void setG4PettyBoys16to18(Integer g4PettyBoys16to18) {
		this.g4PettyBoys16to18 = g4PettyBoys16to18;
	}

	public void setG4PettyBoysGreaterThan18(Integer g4PettyBoysGreaterThan18) {
		this.g4PettyBoysGreaterThan18 = g4PettyBoysGreaterThan18;
	}

	public void setG4PettyBoysTotal(Integer g4PettyBoysTotal) {
		this.g4PettyBoysTotal = g4PettyBoysTotal;
	}

	public void setG4PettyGirls7to11(Integer g4PettyGirls7to11) {
		this.g4PettyGirls7to11 = g4PettyGirls7to11;
	}

	public void setG4PettyGirls12to15(Integer g4PettyGirls12to15) {
		this.g4PettyGirls12to15 = g4PettyGirls12to15;
	}

	public void setG4PettyGirls16to18(Integer g4PettyGirls16to18) {
		this.g4PettyGirls16to18 = g4PettyGirls16to18;
	}

	public void setG4PettyGirlsGreaterThan18(Integer g4PettyGirlsGreaterThan18) {
		this.g4PettyGirlsGreaterThan18 = g4PettyGirlsGreaterThan18;
	}

	public void setG4PettyGirlsTotal(Integer g4PettyGirlsTotal) {
		this.g4PettyGirlsTotal = g4PettyGirlsTotal;
	}

	public void setG4PettyGrandTotal(Integer g4PettyGrandTotal) {
		this.g4PettyGrandTotal = g4PettyGrandTotal;
	}

	public void setG4SeriousTotalCases(Integer g4SeriousTotalCases) {
		this.g4SeriousTotalCases = g4SeriousTotalCases;
	}

	public void setG4SeriousBoys7to11(Integer g4SeriousBoys7to11) {
		this.g4SeriousBoys7to11 = g4SeriousBoys7to11;
	}

	public void setG4SeriousBoys12to15(Integer g4SeriousBoys12to15) {
		this.g4SeriousBoys12to15 = g4SeriousBoys12to15;
	}

	public void setG4SeriousBoys16to18(Integer g4SeriousBoys16to18) {
		this.g4SeriousBoys16to18 = g4SeriousBoys16to18;
	}

	public void setG4SeriousBoysGreaterThan18(Integer g4SeriousBoysGreaterThan18) {
		this.g4SeriousBoysGreaterThan18 = g4SeriousBoysGreaterThan18;
	}

	public void setG4SeriousBoysTotal(Integer g4SeriousBoysTotal) {
		this.g4SeriousBoysTotal = g4SeriousBoysTotal;
	}

	public void setG4SeriousGirls7to11(Integer g4SeriousGirls7to11) {
		this.g4SeriousGirls7to11 = g4SeriousGirls7to11;
	}

	public void setG4SeriousGirls12to15(Integer g4SeriousGirls12to15) {
		this.g4SeriousGirls12to15 = g4SeriousGirls12to15;
	}

	public void setG4SeriousGirls16to18(Integer g4SeriousGirls16to18) {
		this.g4SeriousGirls16to18 = g4SeriousGirls16to18;
	}

	public void setG4SeriousGirlsGreaterThan18(Integer g4SeriousGirlsGreaterThan18) {
		this.g4SeriousGirlsGreaterThan18 = g4SeriousGirlsGreaterThan18;
	}

	public void setG4SeriousGirlsTotal(Integer g4SeriousGirlsTotal) {
		this.g4SeriousGirlsTotal = g4SeriousGirlsTotal;
	}

	public void setG4SeriousGrandTotal(Integer g4SeriousGrandTotal) {
		this.g4SeriousGrandTotal = g4SeriousGrandTotal;
	}

	public void setG4HeinousTotalCases(Integer g4HeinousTotalCases) {
		this.g4HeinousTotalCases = g4HeinousTotalCases;
	}

	public void setG4HeinousBoys7to11(Integer g4HeinousBoys7to11) {
		this.g4HeinousBoys7to11 = g4HeinousBoys7to11;
	}

	public void setG4HeinousBoys12to15(Integer g4HeinousBoys12to15) {
		this.g4HeinousBoys12to15 = g4HeinousBoys12to15;
	}

	public void setG4HeinousBoys16to18(Integer g4HeinousBoys16to18) {
		this.g4HeinousBoys16to18 = g4HeinousBoys16to18;
	}

	public void setG4HeinousBoysGreaterThan18(Integer g4HeinousBoysGreaterThan18) {
		this.g4HeinousBoysGreaterThan18 = g4HeinousBoysGreaterThan18;
	}

	public void setG4HeinousBoysTotal(Integer g4HeinousBoysTotal) {
		this.g4HeinousBoysTotal = g4HeinousBoysTotal;
	}

	public void setG4HeinousGirls7to11(Integer g4HeinousGirls7to11) {
		this.g4HeinousGirls7to11 = g4HeinousGirls7to11;
	}

	public void setG4HeinousGirls12to15(Integer g4HeinousGirls12to15) {
		this.g4HeinousGirls12to15 = g4HeinousGirls12to15;
	}

	public void setG4HeinousGirls16to18(Integer g4HeinousGirls16to18) {
		this.g4HeinousGirls16to18 = g4HeinousGirls16to18;
	}

	public void setG4HeinousGirlsGreaterThan18(Integer g4HeinousGirlsGreaterThan18) {
		this.g4HeinousGirlsGreaterThan18 = g4HeinousGirlsGreaterThan18;
	}

	public void setG4HeinousGirlsTotal(Integer g4HeinousGirlsTotal) {
		this.g4HeinousGirlsTotal = g4HeinousGirlsTotal;
	}

	public void setG4HeinousGrandTotal(Integer g4HeinousGrandTotal) {
		this.g4HeinousGrandTotal = g4HeinousGrandTotal;
	}

	public void setG4TotalCases(Integer g4TotalCases) {
		this.g4TotalCases = g4TotalCases;
	}

	public void setG4Boys7to11(Integer g4Boys7to11) {
		this.g4Boys7to11 = g4Boys7to11;
	}

	public void setG4Boys12to15(Integer g4Boys12to15) {
		this.g4Boys12to15 = g4Boys12to15;
	}

	public void setG4Boys16to18(Integer g4Boys16to18) {
		this.g4Boys16to18 = g4Boys16to18;
	}

	public void setG4BoysGreaterThan18(Integer g4BoysGreaterThan18) {
		this.g4BoysGreaterThan18 = g4BoysGreaterThan18;
	}

	public void setG4BoysTotal(Integer g4BoysTotal) {
		this.g4BoysTotal = g4BoysTotal;
	}

	public void setG4Girls7to11(Integer g4Girls7to11) {
		this.g4Girls7to11 = g4Girls7to11;
	}

	public void setG4Girls12to15(Integer g4Girls12to15) {
		this.g4Girls12to15 = g4Girls12to15;
	}

	public void setG4Girls16to18(Integer g4Girls16to18) {
		this.g4Girls16to18 = g4Girls16to18;
	}

	public void setG4GirlsGreaterThan18(Integer g4GirlsGreaterThan18) {
		this.g4GirlsGreaterThan18 = g4GirlsGreaterThan18;
	}

	public void setG4GirlsTotal(Integer g4GirlsTotal) {
		this.g4GirlsTotal = g4GirlsTotal;
	}

	public void setG4GrandTotal(Integer g4GrandTotal) {
		this.g4GrandTotal = g4GrandTotal;
	}

	public void setH1TotalCases(Integer h1TotalCases) {
		this.h1TotalCases = h1TotalCases;
	}

	public void setH1Boys7to11(Integer h1Boys7to11) {
		this.h1Boys7to11 = h1Boys7to11;
	}

	public void setH1Boys12to15(Integer h1Boys12to15) {
		this.h1Boys12to15 = h1Boys12to15;
	}

	public void setH1Boys16to18(Integer h1Boys16to18) {
		this.h1Boys16to18 = h1Boys16to18;
	}

	public void setH1BoysGreaterThan18(Integer h1BoysGreaterThan18) {
		this.h1BoysGreaterThan18 = h1BoysGreaterThan18;
	}

	public void setH1BoysTotal(Integer h1BoysTotal) {
		this.h1BoysTotal = h1BoysTotal;
	}

	public void setH1Girls7to11(Integer h1Girls7to11) {
		this.h1Girls7to11 = h1Girls7to11;
	}

	public void setH1Girls12to15(Integer h1Girls12to15) {
		this.h1Girls12to15 = h1Girls12to15;
	}

	public void setH1Girls16to18(Integer h1Girls16to18) {
		this.h1Girls16to18 = h1Girls16to18;
	}

	public void setH1GirlsGreaterThan18(Integer h1GirlsGreaterThan18) {
		this.h1GirlsGreaterThan18 = h1GirlsGreaterThan18;
	}

	public void setH1GirlsTotal(Integer h1GirlsTotal) {
		this.h1GirlsTotal = h1GirlsTotal;
	}

	public void setH1GrandTotal(Integer h1GrandTotal) {
		this.h1GrandTotal = h1GrandTotal;
	}

	public void setH2TotalCases(Integer h2TotalCases) {
		this.h2TotalCases = h2TotalCases;
	}

	public void setH2Boys7to11(Integer h2Boys7to11) {
		this.h2Boys7to11 = h2Boys7to11;
	}

	public void setH2Boys12to15(Integer h2Boys12to15) {
		this.h2Boys12to15 = h2Boys12to15;
	}

	public void setH2Boys16to18(Integer h2Boys16to18) {
		this.h2Boys16to18 = h2Boys16to18;
	}

	public void setH2BoysGreaterThan18(Integer h2BoysGreaterThan18) {
		this.h2BoysGreaterThan18 = h2BoysGreaterThan18;
	}

	public void setH2BoysTotal(Integer h2BoysTotal) {
		this.h2BoysTotal = h2BoysTotal;
	}

	public void setH2Girls7to11(Integer h2Girls7to11) {
		this.h2Girls7to11 = h2Girls7to11;
	}

	public void setH2Girls12to15(Integer h2Girls12to15) {
		this.h2Girls12to15 = h2Girls12to15;
	}

	public void setH2Girls16to18(Integer h2Girls16to18) {
		this.h2Girls16to18 = h2Girls16to18;
	}

	public void setH2GirlsGreaterThan18(Integer h2GirlsGreaterThan18) {
		this.h2GirlsGreaterThan18 = h2GirlsGreaterThan18;
	}

	public void setH2GirlsTotal(Integer h2GirlsTotal) {
		this.h2GirlsTotal = h2GirlsTotal;
	}

	public void setH2GrandTotal(Integer h2GrandTotal) {
		this.h2GrandTotal = h2GrandTotal;
	}

	public void setH3TotalCases(Integer h3TotalCases) {
		this.h3TotalCases = h3TotalCases;
	}

	public void setH3Boys7to11(Integer h3Boys7to11) {
		this.h3Boys7to11 = h3Boys7to11;
	}

	public void setH3Boys12to15(Integer h3Boys12to15) {
		this.h3Boys12to15 = h3Boys12to15;
	}

	public void setH3Boys16to18(Integer h3Boys16to18) {
		this.h3Boys16to18 = h3Boys16to18;
	}

	public void setH3BoysGreaterThan18(Integer h3BoysGreaterThan18) {
		this.h3BoysGreaterThan18 = h3BoysGreaterThan18;
	}

	public void setH3BoysTotal(Integer h3BoysTotal) {
		this.h3BoysTotal = h3BoysTotal;
	}

	public void setH3Girls7to11(Integer h3Girls7to11) {
		this.h3Girls7to11 = h3Girls7to11;
	}

	public void setH3Girls12to15(Integer h3Girls12to15) {
		this.h3Girls12to15 = h3Girls12to15;
	}

	public void setH3Girls16to18(Integer h3Girls16to18) {
		this.h3Girls16to18 = h3Girls16to18;
	}

	public void setH3GirlsGreaterThan18(Integer h3GirlsGreaterThan18) {
		this.h3GirlsGreaterThan18 = h3GirlsGreaterThan18;
	}

	public void setH3GirlsTotal(Integer h3GirlsTotal) {
		this.h3GirlsTotal = h3GirlsTotal;
	}

	public void setH3GrandTotal(Integer h3GrandTotal) {
		this.h3GrandTotal = h3GrandTotal;
	}

	public void setiTotalCases(Integer iTotalCases) {
		this.iTotalCases = iTotalCases;
	}

	public void setiBoysSC(Integer iBoysSC) {
		this.iBoysSC = iBoysSC;
	}

	public void setiBoysST(Integer iBoysST) {
		this.iBoysST = iBoysST;
	}

	public void setiBoysOBC(Integer iBoysOBC) {
		this.iBoysOBC = iBoysOBC;
	}

	public void setiBoysEBC(Integer iBoysEBC) {
		this.iBoysEBC = iBoysEBC;
	}

	public void setiBoysOthers(Integer iBoysOthers) {
		this.iBoysOthers = iBoysOthers;
	}

	public void setiBoysNotKnown(Integer iBoysNotKnown) {
		this.iBoysNotKnown = iBoysNotKnown;
	}

	public void setiBoysTotal(Integer iBoysTotal) {
		this.iBoysTotal = iBoysTotal;
	}

	public void setiGirlsSC(Integer iGirlsSC) {
		this.iGirlsSC = iGirlsSC;
	}

	public void setiGirlsST(Integer iGirlsST) {
		this.iGirlsST = iGirlsST;
	}

	public void setiGirlsOBC(Integer iGirlsOBC) {
		this.iGirlsOBC = iGirlsOBC;
	}

	public void setiGirlsEBC(Integer iGirlsEBC) {
		this.iGirlsEBC = iGirlsEBC;
	}

	public void setiGirlsOthers(Integer iGirlsOthers) {
		this.iGirlsOthers = iGirlsOthers;
	}

	public void setiGirlsNotKnown(Integer iGirlsNotKnown) {
		this.iGirlsNotKnown = iGirlsNotKnown;
	}

	public void setiGirlsTotal(Integer iGirlsTotal) {
		this.iGirlsTotal = iGirlsTotal;
	}

	public void setiGrandTotal(Integer iGrandTotal) {
		this.iGrandTotal = iGrandTotal;
	}

	public void setiMinorityBoys(Integer iMinorityBoys) {
		this.iMinorityBoys = iMinorityBoys;
	}

	public void setiMinorityGirls(Integer iMinorityGirls) {
		this.iMinorityGirls = iMinorityGirls;
	}

	public void setiMinorityTotal(Integer iMinorityTotal) {
		this.iMinorityTotal = iMinorityTotal;
	}

	public void setJ1NonHeinousTotalCases(Integer j1NonHeinousTotalCases) {
		this.j1NonHeinousTotalCases = j1NonHeinousTotalCases;
	}

	public void setJ1NonHeinousBoys7to11(Integer j1NonHeinousBoys7to11) {
		this.j1NonHeinousBoys7to11 = j1NonHeinousBoys7to11;
	}

	public void setJ1NonHeinousBoys12to15(Integer j1NonHeinousBoys12to15) {
		this.j1NonHeinousBoys12to15 = j1NonHeinousBoys12to15;
	}

	public void setJ1NonHeinousBoys16to18(Integer j1NonHeinousBoys16to18) {
		this.j1NonHeinousBoys16to18 = j1NonHeinousBoys16to18;
	}

	public void setJ1NonHeinousBoysGreaterThan18(
			Integer j1NonHeinousBoysGreaterThan18) {
		this.j1NonHeinousBoysGreaterThan18 = j1NonHeinousBoysGreaterThan18;
	}

	public void setJ1NonHeinousBoysTotal(Integer j1NonHeinousBoysTotal) {
		this.j1NonHeinousBoysTotal = j1NonHeinousBoysTotal;
	}

	public void setJ1NonHeinousGirls7to11(Integer j1NonHeinousGirls7to11) {
		this.j1NonHeinousGirls7to11 = j1NonHeinousGirls7to11;
	}

	public void setJ1NonHeinousGirls12to15(Integer j1NonHeinousGirls12to15) {
		this.j1NonHeinousGirls12to15 = j1NonHeinousGirls12to15;
	}

	public void setJ1NonHeinousGirls16to18(Integer j1NonHeinousGirls16to18) {
		this.j1NonHeinousGirls16to18 = j1NonHeinousGirls16to18;
	}

	public void setJ1NonHeinousGirlsGreaterThan18(
			Integer j1NonHeinousGirlsGreaterThan18) {
		this.j1NonHeinousGirlsGreaterThan18 = j1NonHeinousGirlsGreaterThan18;
	}

	public void setJ1NonHeinousGirlsTotal(Integer j1NonHeinousGirlsTotal) {
		this.j1NonHeinousGirlsTotal = j1NonHeinousGirlsTotal;
	}

	public void setJ1NonHeinousGrandTotal(Integer j1NonHeinousGrandTotal) {
		this.j1NonHeinousGrandTotal = j1NonHeinousGrandTotal;
	}

	public void setJ2HeinousTotalCases(Integer j2HeinousTotalCases) {
		this.j2HeinousTotalCases = j2HeinousTotalCases;
	}

	public void setJ2HeinousBoys7to11(Integer j2HeinousBoys7to11) {
		this.j2HeinousBoys7to11 = j2HeinousBoys7to11;
	}

	public void setJ2HeinousBoys12to15(Integer j2HeinousBoys12to15) {
		this.j2HeinousBoys12to15 = j2HeinousBoys12to15;
	}

	public void setJ2HeinousBoys16to18(Integer j2HeinousBoys16to18) {
		this.j2HeinousBoys16to18 = j2HeinousBoys16to18;
	}

	public void setJ2HeinousBoysGreaterThan18(Integer j2HeinousBoysGreaterThan18) {
		this.j2HeinousBoysGreaterThan18 = j2HeinousBoysGreaterThan18;
	}

	public void setJ2HeinousBoysTotal(Integer j2HeinousBoysTotal) {
		this.j2HeinousBoysTotal = j2HeinousBoysTotal;
	}

	public void setJ2HeinousGirls7to11(Integer j2HeinousGirls7to11) {
		this.j2HeinousGirls7to11 = j2HeinousGirls7to11;
	}

	public void setJ2HeinousGirls12to15(Integer j2HeinousGirls12to15) {
		this.j2HeinousGirls12to15 = j2HeinousGirls12to15;
	}

	public void setJ2HeinousGirls16to18(Integer j2HeinousGirls16to18) {
		this.j2HeinousGirls16to18 = j2HeinousGirls16to18;
	}

	public void setJ2HeinousGirlsGreaterThan18(Integer j2HeinousGirlsGreaterThan18) {
		this.j2HeinousGirlsGreaterThan18 = j2HeinousGirlsGreaterThan18;
	}

	public void setJ2HeinousGirlsTotal(Integer j2HeinousGirlsTotal) {
		this.j2HeinousGirlsTotal = j2HeinousGirlsTotal;
	}

	public void setJ2HeinousGrandTotal(Integer j2HeinousGrandTotal) {
		this.j2HeinousGrandTotal = j2HeinousGrandTotal;
	}

	public void setK1(Integer k1) {
		this.k1 = k1;
	}

	public void setK2a(Integer k2a) {
		this.k2a = k2a;
	}

	public void setK2b(Integer k2b) {
		this.k2b = k2b;
	}

	public void setK3a(Boolean k3a) {
		this.k3a = k3a;
	}

	public void setK3b(Integer k3b) {
		this.k3b = k3b;
	}

	public void setK4a(Boolean k4a) {
		this.k4a = k4a;
	}

	public void setK4b(Integer k4b) {
		this.k4b = k4b;
	}

	public void setK4c(Integer k4c) {
		this.k4c = k4c;
	}

	public void setK5aCases(Integer k5aCases) {
		this.k5aCases = k5aCases;
	}

	public void setK5aBoys(Integer k5aBoys) {
		this.k5aBoys = k5aBoys;
	}

	public void setK5aGirls(Integer k5aGirls) {
		this.k5aGirls = k5aGirls;
	}

	public void setK5aTotalCICL(Integer k5aTotalCICL) {
		this.k5aTotalCICL = k5aTotalCICL;
	}

	public void setK5b(String k5b) {
		this.k5b = k5b;
	}

	public void setK6Cases(Integer k6Cases) {
		this.k6Cases = k6Cases;
	}

	public void setK6Boys(Integer k6Boys) {
		this.k6Boys = k6Boys;
	}

	public void setK6Girls(Integer k6Girls) {
		this.k6Girls = k6Girls;
	}

	public void setK6TotalCICL(Integer k6TotalCICL) {
		this.k6TotalCICL = k6TotalCICL;
	}

	public void setK7Cases(Integer k7Cases) {
		this.k7Cases = k7Cases;
	}

	public void setK7Boys(Integer k7Boys) {
		this.k7Boys = k7Boys;
	}

	public void setK7Girls(Integer k7Girls) {
		this.k7Girls = k7Girls;
	}

	public void setK7TotalCICL(Integer k7TotalCICL) {
		this.k7TotalCICL = k7TotalCICL;
	}

	public void setK8Cases(Integer k8Cases) {
		this.k8Cases = k8Cases;
	}

	public void setK8Boys(Integer k8Boys) {
		this.k8Boys = k8Boys;
	}

	public void setK8Girls(Integer k8Girls) {
		this.k8Girls = k8Girls;
	}

	public void setK8TotalCICL(Integer k8TotalCICL) {
		this.k8TotalCICL = k8TotalCICL;
	}

	public void setK9Cases(Integer k9Cases) {
		this.k9Cases = k9Cases;
	}

	public void setK9Boys(Integer k9Boys) {
		this.k9Boys = k9Boys;
	}

	public void setK9Girls(Integer k9Girls) {
		this.k9Girls = k9Girls;
	}

	public void setK9TotalCICL(Integer k9TotalCICL) {
		this.k9TotalCICL = k9TotalCICL;
	}

	public void setK10a(Integer k10a) {
		this.k10a = k10a;
	}

	public void setK10b(String k10b) {
		this.k10b = k10b;
	}

	public void setK10cCases(Integer k10cCases) {
		this.k10cCases = k10cCases;
	}

	public void setK10cBoys(Integer k10cBoys) {
		this.k10cBoys = k10cBoys;
	}

	public void setK10cGirls(Integer k10cGirls) {
		this.k10cGirls = k10cGirls;
	}

	public void setK10cTotalCICL(Integer k10cTotalCICL) {
		this.k10cTotalCICL = k10cTotalCICL;
	}

	public void setK11a(Integer k11a) {
		this.k11a = k11a;
	}

	public void setK11b(String k11b) {
		this.k11b = k11b;
	}

	public void setK11cCases(Integer k11cCases) {
		this.k11cCases = k11cCases;
	}

	public void setK11cBoys(Integer k11cBoys) {
		this.k11cBoys = k11cBoys;
	}

	public void setK11cGirls(Integer k11cGirls) {
		this.k11cGirls = k11cGirls;
	}

	public void setK11cTotalCICL(Integer k11cTotalCICL) {
		this.k11cTotalCICL = k11cTotalCICL;
	}

	public void setK12aCases(Integer k12aCases) {
		this.k12aCases = k12aCases;
	}

	public void setK12aBoys(Integer k12aBoys) {
		this.k12aBoys = k12aBoys;
	}

	public void setK12aGirls(Integer k12aGirls) {
		this.k12aGirls = k12aGirls;
	}

	public void setK12aTotalCICL(Integer k12aTotalCICL) {
		this.k12aTotalCICL = k12aTotalCICL;
	}

	public void setK12bCases(Integer k12bCases) {
		this.k12bCases = k12bCases;
	}

	public void setK12bBoys(Integer k12bBoys) {
		this.k12bBoys = k12bBoys;
	}

	public void setK12bGirls(Integer k12bGirls) {
		this.k12bGirls = k12bGirls;
	}

	public void setK12bTotalCICL(Integer k12bTotalCICL) {
		this.k12bTotalCICL = k12bTotalCICL;
	}

	public void setK12cCases(Integer k12cCases) {
		this.k12cCases = k12cCases;
	}

	public void setK12cBoys(Integer k12cBoys) {
		this.k12cBoys = k12cBoys;
	}

	public void setK12cGirls(Integer k12cGirls) {
		this.k12cGirls = k12cGirls;
	}

	public void setK12cTotalCICL(Integer k12cTotalCICL) {
		this.k12cTotalCICL = k12cTotalCICL;
	}

	public void setK12Cases(Integer k12Cases) {
		this.k12Cases = k12Cases;
	}

	public void setK12Boys(Integer k12Boys) {
		this.k12Boys = k12Boys;
	}

	public void setK12Girls(Integer k12Girls) {
		this.k12Girls = k12Girls;
	}

	public void setK12TotalCICL(Integer k12TotalCICL) {
		this.k12TotalCICL = k12TotalCICL;
	}

	public void setK13aCases(Integer k13aCases) {
		this.k13aCases = k13aCases;
	}

	public void setK13aBoys(Integer k13aBoys) {
		this.k13aBoys = k13aBoys;
	}

	public void setK13aGirls(Integer k13aGirls) {
		this.k13aGirls = k13aGirls;
	}

	public void setK13aTotalCICL(Integer k13aTotalCICL) {
		this.k13aTotalCICL = k13aTotalCICL;
	}

	public void setK13bCases(Integer k13bCases) {
		this.k13bCases = k13bCases;
	}

	public void setK13bBoys(Integer k13bBoys) {
		this.k13bBoys = k13bBoys;
	}

	public void setK13bGirls(Integer k13bGirls) {
		this.k13bGirls = k13bGirls;
	}

	public void setK13bTotalCICL(Integer k13bTotalCICL) {
		this.k13bTotalCICL = k13bTotalCICL;
	}

	public void setK13cCases(Integer k13cCases) {
		this.k13cCases = k13cCases;
	}

	public void setK13cBoys(Integer k13cBoys) {
		this.k13cBoys = k13cBoys;
	}

	public void setK13cGirls(Integer k13cGirls) {
		this.k13cGirls = k13cGirls;
	}

	public void setK13cTotalCICL(Integer k13cTotalCICL) {
		this.k13cTotalCICL = k13cTotalCICL;
	}

	public void setK13dCases(Integer k13dCases) {
		this.k13dCases = k13dCases;
	}

	public void setK13dBoys(Integer k13dBoys) {
		this.k13dBoys = k13dBoys;
	}

	public void setK13dGirls(Integer k13dGirls) {
		this.k13dGirls = k13dGirls;
	}

	public void setK13dTotalCICL(Integer k13dTotalCICL) {
		this.k13dTotalCICL = k13dTotalCICL;
	}

	public void setK14aCases(Integer k14aCases) {
		this.k14aCases = k14aCases;
	}

	public void setK14aBoys(Integer k14aBoys) {
		this.k14aBoys = k14aBoys;
	}

	public void setK14aGirls(Integer k14aGirls) {
		this.k14aGirls = k14aGirls;
	}

	public void setK14aTotalCICL(Integer k14aTotalCICL) {
		this.k14aTotalCICL = k14aTotalCICL;
	}

	public void setK14bCases(Integer k14bCases) {
		this.k14bCases = k14bCases;
	}

	public void setK14bBoys(Integer k14bBoys) {
		this.k14bBoys = k14bBoys;
	}

	public void setK14bGirls(Integer k14bGirls) {
		this.k14bGirls = k14bGirls;
	}

	public void setK14bTotalCICL(Integer k14bTotalCICL) {
		this.k14bTotalCICL = k14bTotalCICL;
	}

	public void setK14cCases(Integer k14cCases) {
		this.k14cCases = k14cCases;
	}

	public void setK14cBoys(Integer k14cBoys) {
		this.k14cBoys = k14cBoys;
	}

	public void setK14cGirls(Integer k14cGirls) {
		this.k14cGirls = k14cGirls;
	}

	public void setK14cTotalCICL(Integer k14cTotalCICL) {
		this.k14cTotalCICL = k14cTotalCICL;
	}

	public void setK14dCases(Integer k14dCases) {
		this.k14dCases = k14dCases;
	}

	public void setK14dBoys(Integer k14dBoys) {
		this.k14dBoys = k14dBoys;
	}

	public void setK14dGirls(Integer k14dGirls) {
		this.k14dGirls = k14dGirls;
	}

	public void setK14dTotalCICL(Integer k14dTotalCICL) {
		this.k14dTotalCICL = k14dTotalCICL;
	}

	public void setK15aCases(Integer k15aCases) {
		this.k15aCases = k15aCases;
	}

	public void setK15aBoys(Integer k15aBoys) {
		this.k15aBoys = k15aBoys;
	}

	public void setK15aGirls(Integer k15aGirls) {
		this.k15aGirls = k15aGirls;
	}

	public void setK15aTotalCICL(Integer k15aTotalCICL) {
		this.k15aTotalCICL = k15aTotalCICL;
	}

	public void setK15bCases(Integer k15bCases) {
		this.k15bCases = k15bCases;
	}

	public void setK15bBoys(Integer k15bBoys) {
		this.k15bBoys = k15bBoys;
	}

	public void setK15bGirls(Integer k15bGirls) {
		this.k15bGirls = k15bGirls;
	}

	public void setK15bTotalCICL(Integer k15bTotalCICL) {
		this.k15bTotalCICL = k15bTotalCICL;
	}

	public void setK15cCases(Integer k15cCases) {
		this.k15cCases = k15cCases;
	}

	public void setK15cBoys(Integer k15cBoys) {
		this.k15cBoys = k15cBoys;
	}

	public void setK15cGirls(Integer k15cGirls) {
		this.k15cGirls = k15cGirls;
	}

	public void setK15cTotalCICL(Integer k15cTotalCICL) {
		this.k15cTotalCICL = k15cTotalCICL;
	}

	public void setK15dCases(Integer k15dCases) {
		this.k15dCases = k15dCases;
	}

	public void setK15dBoys(Integer k15dBoys) {
		this.k15dBoys = k15dBoys;
	}

	public void setK15dGirls(Integer k15dGirls) {
		this.k15dGirls = k15dGirls;
	}

	public void setK15dTotalCICL(Integer k15dTotalCICL) {
		this.k15dTotalCICL = k15dTotalCICL;
	}

	public void setK16aCases(Integer k16aCases) {
		this.k16aCases = k16aCases;
	}

	public void setK16aBoys(Integer k16aBoys) {
		this.k16aBoys = k16aBoys;
	}

	public void setK16aGirls(Integer k16aGirls) {
		this.k16aGirls = k16aGirls;
	}

	public void setK16aTotalCICL(Integer k16aTotalCICL) {
		this.k16aTotalCICL = k16aTotalCICL;
	}

	public void setK16bCases(Integer k16bCases) {
		this.k16bCases = k16bCases;
	}

	public void setK16bBoys(Integer k16bBoys) {
		this.k16bBoys = k16bBoys;
	}

	public void setK16bGirls(Integer k16bGirls) {
		this.k16bGirls = k16bGirls;
	}

	public void setK16bTotalCICL(Integer k16bTotalCICL) {
		this.k16bTotalCICL = k16bTotalCICL;
	}

	public void setK16cCases(Integer k16cCases) {
		this.k16cCases = k16cCases;
	}

	public void setK16cBoys(Integer k16cBoys) {
		this.k16cBoys = k16cBoys;
	}

	public void setK16cGirls(Integer k16cGirls) {
		this.k16cGirls = k16cGirls;
	}

	public void setK16cTotalCICL(Integer k16cTotalCICL) {
		this.k16cTotalCICL = k16cTotalCICL;
	}

	public void setK16dCases(Integer k16dCases) {
		this.k16dCases = k16dCases;
	}

	public void setK16dBoys(Integer k16dBoys) {
		this.k16dBoys = k16dBoys;
	}

	public void setK16dGirls(Integer k16dGirls) {
		this.k16dGirls = k16dGirls;
	}

	public void setK16dTotalCICL(Integer k16dTotalCICL) {
		this.k16dTotalCICL = k16dTotalCICL;
	}

	public void setK16eCases(Integer k16eCases) {
		this.k16eCases = k16eCases;
	}

	public void setK16eBoys(Integer k16eBoys) {
		this.k16eBoys = k16eBoys;
	}

	public void setK16eGirls(Integer k16eGirls) {
		this.k16eGirls = k16eGirls;
	}

	public void setK16eTotalCICL(Integer k16eTotalCICL) {
		this.k16eTotalCICL = k16eTotalCICL;
	}

	public void setK16fCases(Integer k16fCases) {
		this.k16fCases = k16fCases;
	}

	public void setK16fBoys(Integer k16fBoys) {
		this.k16fBoys = k16fBoys;
	}

	public void setK16fGirls(Integer k16fGirls) {
		this.k16fGirls = k16fGirls;
	}

	public void setK16fTotalCICL(Integer k16fTotalCICL) {
		this.k16fTotalCICL = k16fTotalCICL;
	}

	public void setK17aCases(Integer k17aCases) {
		this.k17aCases = k17aCases;
	}

	public void setK17aBoys(Integer k17aBoys) {
		this.k17aBoys = k17aBoys;
	}

	public void setK17aGirls(Integer k17aGirls) {
		this.k17aGirls = k17aGirls;
	}

	public void setK17aTotalCICL(Integer k17aTotalCICL) {
		this.k17aTotalCICL = k17aTotalCICL;
	}

	public void setK17bCases(Integer k17bCases) {
		this.k17bCases = k17bCases;
	}

	public void setK17bBoys(Integer k17bBoys) {
		this.k17bBoys = k17bBoys;
	}

	public void setK17bGirls(Integer k17bGirls) {
		this.k17bGirls = k17bGirls;
	}

	public void setK17bTotalCICL(Integer k17bTotalCICL) {
		this.k17bTotalCICL = k17bTotalCICL;
	}

	public void setK17cCases(Integer k17cCases) {
		this.k17cCases = k17cCases;
	}

	public void setK17cBoys(Integer k17cBoys) {
		this.k17cBoys = k17cBoys;
	}

	public void setK17cGirls(Integer k17cGirls) {
		this.k17cGirls = k17cGirls;
	}

	public void setK17cTotalCICL(Integer k17cTotalCICL) {
		this.k17cTotalCICL = k17cTotalCICL;
	}

	public void setK17dCases(Integer k17dCases) {
		this.k17dCases = k17dCases;
	}

	public void setK17dBoys(Integer k17dBoys) {
		this.k17dBoys = k17dBoys;
	}

	public void setK17dGirls(Integer k17dGirls) {
		this.k17dGirls = k17dGirls;
	}

	public void setK17dTotalCICL(Integer k17dTotalCICL) {
		this.k17dTotalCICL = k17dTotalCICL;
	}

	public void setK17eCases(Integer k17eCases) {
		this.k17eCases = k17eCases;
	}

	public void setK17eBoys(Integer k17eBoys) {
		this.k17eBoys = k17eBoys;
	}

	public void setK17eGirls(Integer k17eGirls) {
		this.k17eGirls = k17eGirls;
	}

	public void setK17eTotalCICL(Integer k17eTotalCICL) {
		this.k17eTotalCICL = k17eTotalCICL;
	}

	public void setJjbDetailsTraining(List<JjbDetailsTraining> jjbDetailsTraining) {
		this.jjbDetailsTraining = jjbDetailsTraining;
	}

	public Integer getJjbSectionAId() {
		return jjbSectionAId;
	}

	public Integer getJjbSectionBId() {
		return jjbSectionBId;
	}

	public Integer getJjbSectionCId() {
		return jjbSectionCId;
	}

	public Integer getJjbSectionDId() {
		return jjbSectionDId;
	}

	public Integer getJjbSectionEId() {
		return jjbSectionEId;
	}

	public Integer getJjbSectionFId() {
		return jjbSectionFId;
	}

	public Integer getJjbSectionGId() {
		return jjbSectionGId;
	}

	public Integer getJjbSectionHId() {
		return jjbSectionHId;
	}

	public Integer getJjbSectionIId() {
		return jjbSectionIId;
	}

	public Integer getJjbSectionJId() {
		return jjbSectionJId;
	}

	public Integer getJjbSectionKId() {
		return jjbSectionKId;
	}

	public void setJjbSectionAId(Integer jjbSectionAId) {
		this.jjbSectionAId = jjbSectionAId;
	}

	public void setJjbSectionBId(Integer jjbSectionBId) {
		this.jjbSectionBId = jjbSectionBId;
	}

	public void setJjbSectionCId(Integer jjbSectionCId) {
		this.jjbSectionCId = jjbSectionCId;
	}

	public void setJjbSectionDId(Integer jjbSectionDId) {
		this.jjbSectionDId = jjbSectionDId;
	}

	public void setJjbSectionEId(Integer jjbSectionEId) {
		this.jjbSectionEId = jjbSectionEId;
	}

	public void setJjbSectionFId(Integer jjbSectionFId) {
		this.jjbSectionFId = jjbSectionFId;
	}

	public void setJjbSectionGId(Integer jjbSectionGId) {
		this.jjbSectionGId = jjbSectionGId;
	}

	public void setJjbSectionHId(Integer jjbSectionHId) {
		this.jjbSectionHId = jjbSectionHId;
	}

	public void setJjbSectionIId(Integer jjbSectionIId) {
		this.jjbSectionIId = jjbSectionIId;
	}

	public void setJjbSectionJId(Integer jjbSectionJId) {
		this.jjbSectionJId = jjbSectionJId;
	}

	public void setJjbSectionKId(Integer jjbSectionKId) {
		this.jjbSectionKId = jjbSectionKId;
	}

	public Boolean getL1WasTrainingHeldJJSysytem() {
		return l1WasTrainingHeldJJSysytem;
	}

	public Integer getL1aNoOfTraining() {
		return l1aNoOfTraining;
	}

	public void setL1WasTrainingHeldJJSysytem(Boolean l1WasTrainingHeldJJSysytem) {
		this.l1WasTrainingHeldJJSysytem = l1WasTrainingHeldJJSysytem;
	}

	public void setL1aNoOfTraining(Integer l1aNoOfTraining) {
		this.l1aNoOfTraining = l1aNoOfTraining;
	}

	public Integer getJ3TotalCases() {
		return j3TotalCases;
	}

	public Integer getJ3TotalBoys7to11() {
		return j3TotalBoys7to11;
	}

	public Integer getJ3TotalBoys12to15() {
		return j3TotalBoys12to15;
	}

	public Integer getJ3TotalBoys16to18() {
		return j3TotalBoys16to18;
	}

	public Integer getJ3TotalBoysGreaterThan18() {
		return j3TotalBoysGreaterThan18;
	}

	public Integer getJ3TotalBoysTotal() {
		return j3TotalBoysTotal;
	}

	public Integer getJ3TotalGirls7to11() {
		return j3TotalGirls7to11;
	}

	public Integer getJ3TotalGirls12to15() {
		return j3TotalGirls12to15;
	}

	public Integer getJ3TotalGirls16to18() {
		return j3TotalGirls16to18;
	}

	public Integer getJ3TotalGirlsGreaterThan18() {
		return j3TotalGirlsGreaterThan18;
	}

	public Integer getJ3TotalGirlsTotal() {
		return j3TotalGirlsTotal;
	}

	public Integer getJ3TotalGrandTotal() {
		return j3TotalGrandTotal;
	}

	public void setJ3TotalCases(Integer j3TotalCases) {
		this.j3TotalCases = j3TotalCases;
	}

	public void setJ3TotalBoys7to11(Integer j3TotalBoys7to11) {
		this.j3TotalBoys7to11 = j3TotalBoys7to11;
	}

	public void setJ3TotalBoys12to15(Integer j3TotalBoys12to15) {
		this.j3TotalBoys12to15 = j3TotalBoys12to15;
	}

	public void setJ3TotalBoys16to18(Integer j3TotalBoys16to18) {
		this.j3TotalBoys16to18 = j3TotalBoys16to18;
	}

	public void setJ3TotalBoysGreaterThan18(Integer j3TotalBoysGreaterThan18) {
		this.j3TotalBoysGreaterThan18 = j3TotalBoysGreaterThan18;
	}

	public void setJ3TotalBoysTotal(Integer j3TotalBoysTotal) {
		this.j3TotalBoysTotal = j3TotalBoysTotal;
	}

	public void setJ3TotalGirls7to11(Integer j3TotalGirls7to11) {
		this.j3TotalGirls7to11 = j3TotalGirls7to11;
	}

	public void setJ3TotalGirls12to15(Integer j3TotalGirls12to15) {
		this.j3TotalGirls12to15 = j3TotalGirls12to15;
	}

	public void setJ3TotalGirls16to18(Integer j3TotalGirls16to18) {
		this.j3TotalGirls16to18 = j3TotalGirls16to18;
	}

	public void setJ3TotalGirlsGreaterThan18(Integer j3TotalGirlsGreaterThan18) {
		this.j3TotalGirlsGreaterThan18 = j3TotalGirlsGreaterThan18;
	}

	public void setJ3TotalGirlsTotal(Integer j3TotalGirlsTotal) {
		this.j3TotalGirlsTotal = j3TotalGirlsTotal;
	}

	public void setJ3TotalGrandTotal(Integer j3TotalGrandTotal) {
		this.j3TotalGrandTotal = j3TotalGrandTotal;
	}

	public Integer getH4TotalCases() {
		return h4TotalCases;
	}

	public Integer getH4Boys7to11() {
		return h4Boys7to11;
	}

	public Integer getH4Boys12to15() {
		return h4Boys12to15;
	}

	public Integer getH4Boys16to18() {
		return h4Boys16to18;
	}

	public Integer getH4BoysGreaterThan18() {
		return h4BoysGreaterThan18;
	}

	public Integer getH4BoysTotal() {
		return h4BoysTotal;
	}

	public Integer getH4Girls7to11() {
		return h4Girls7to11;
	}

	public Integer getH4Girls12to15() {
		return h4Girls12to15;
	}

	public Integer getH4Girls16to18() {
		return h4Girls16to18;
	}

	public Integer getH4GirlsGreaterThan18() {
		return h4GirlsGreaterThan18;
	}

	public Integer getH4GirlsTotal() {
		return h4GirlsTotal;
	}

	public Integer getH4GrandTotal() {
		return h4GrandTotal;
	}

	public void setH4TotalCases(Integer h4TotalCases) {
		this.h4TotalCases = h4TotalCases;
	}

	public void setH4Boys7to11(Integer h4Boys7to11) {
		this.h4Boys7to11 = h4Boys7to11;
	}

	public void setH4Boys12to15(Integer h4Boys12to15) {
		this.h4Boys12to15 = h4Boys12to15;
	}

	public void setH4Boys16to18(Integer h4Boys16to18) {
		this.h4Boys16to18 = h4Boys16to18;
	}

	public void setH4BoysGreaterThan18(Integer h4BoysGreaterThan18) {
		this.h4BoysGreaterThan18 = h4BoysGreaterThan18;
	}

	public void setH4BoysTotal(Integer h4BoysTotal) {
		this.h4BoysTotal = h4BoysTotal;
	}

	public void setH4Girls7to11(Integer h4Girls7to11) {
		this.h4Girls7to11 = h4Girls7to11;
	}

	public void setH4Girls12to15(Integer h4Girls12to15) {
		this.h4Girls12to15 = h4Girls12to15;
	}

	public void setH4Girls16to18(Integer h4Girls16to18) {
		this.h4Girls16to18 = h4Girls16to18;
	}

	public void setH4GirlsGreaterThan18(Integer h4GirlsGreaterThan18) {
		this.h4GirlsGreaterThan18 = h4GirlsGreaterThan18;
	}

	public void setH4GirlsTotal(Integer h4GirlsTotal) {
		this.h4GirlsTotal = h4GirlsTotal;
	}

	public void setH4GrandTotal(Integer h4GrandTotal) {
		this.h4GrandTotal = h4GrandTotal;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}

	
}
