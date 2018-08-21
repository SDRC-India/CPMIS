package org.sdrc.cpmisweb.util;

import org.springframework.stereotype.Component;

@Component
public class PathConstants {
	
//	PATH constants for all views
	public static final String VIEW_CWC="childWelfareCommittee";
	public static final String VIEW_JJB="juvenileJusticeBoard";
	public static final String VIEW_CCI_HOME="childCareInstitution";
	public static final String VIEW_CCI_CH="ChildrenHome";
	public static final String VIEW_CCI_OS="OpenShelter";
	public static final String VIEW_CCI_POS="placeOfSafetyCCI";
	public static final String VIEW_CCI_SH="specialHome";
	public static final String VIEW_SJPU="specialJuvenliePoliceUnit";
	public static final String VIEW_DCPU="DistrictChildProtectionUnit";
	public static final String VIEW_SAA="specializedAdoptionAgency";
	public static final String VIEW_EXCEPTION="exception";
	public static final String VIEW_REPORT="report";
	public static final String VIEW_STATUSREPORT="statusReport";
	
	public static final String LOG_IN ="login";
	public static final String HOME_PAGE="cpmishomepage";
	//footer links 
	public static final String TERMS_PAGE="cpmistermspage";
	public static final String DISCLAIMER_PAGE="cpmisdisclaimerpage";
	public static final String PRIVACY_PAGE="cpmisprivacypage";
	public static final String SITEMAP_PAGE="cpmissitemappage";
	
	public static final String HOME_PAGE_LINK="https://www.cpmis.org/";
	public static final String TERMS_PAGE_LINK="https://www.cpmis.org/terms.php";
	public static final String DISCLAIMER_PAGE_LINK="https://www.cpmis.org/disclaimer.php";
	public static final String PRIVACY_PAGE_LINK="https://www.cpmis.org/privacy-policy.php";
	public static final String SITEMAP_PAGE_LINK="https://www.cpmis.org/sitemap.php";
	
	public static final String ONLY_URL="/";
	public static final String REDIRECT_LOGIN="redirect:login";
	public static final String REDIRECT_DASHBOARD="redirect:dashboard"; 
	
	public static final String PNF_URL="/*";
	public static final String PNF ="404exception";
	
	public static final String ALL_URL="/*";
	public static final String LOG_OUT="logout";
	public static final String AREA_DETAILS="getAreas";
	public static final String TYPE_DETAILS="getDropdownItems";
	public static final String USER_AREA_DETAILS="getUserArea";
	public static final String CCI_NAME_DETAILS="getCciNameList";
	public static final String REDIRECT="redirect:/";

	// Path constants for AdminController page
	public static final String ADMIN_CONTROLLER_CWC = "cwc-data-entry";
	public static final String ADMIN_CONTROLLER_JJB = "jjb-data-entry";
	public static final String ADMIN_CONTROLLER_CCI_HOME = "observation-home-data-entry";
	public static final String ADMIN_CONTROLLER_CCI_CH = "children-home-data-entry";
	public static final String ADMIN_CONTROLLER_CCI_OS = "open-shelter-data-entry";
	public static final String ADMIN_CONTROLLER_CCI_POS = "place-of-safety-data-entry";
	public static final String ADMIN_CONTROLLER_CCI_SH = "special-home-data-entry";	
	public static final String ADMIN_CONTROLLER_SJPU = "sjpu-data-entry";	
	public static final String ADMIN_CONTROLLER_DCPU = "dcpu-data-entry";	
	public static final String ADMIN_CONTROLLER_SAA = "saa-data-entry";	
	
	public static final String ADMIN_CONTROLLER_REPORT="report";
	public static final String ADMIN_CONTROLLER_STATUSREPORT="statusReport";
	
//	path constants for AuthenticateController
	
	public static final String AUTH_CONTROLLER_UA="userAuthenticate";
	
//	PATH CONSTANTS FOR Cwccontroller
	public static final String CWC_CONTROLLER_SAVE  ="saveCWC";
	public static final String CWC_CONTROLLER_SUBMIT="submitCWC";
	public static final String CWC_CONTROLLER_GET_DATA="getLastSavedData";
	
//	PATH CONSTANTS FOR Jjbcontroller
	public static final String JJB_CONTROLLER_SAVE  ="saveJJB";
	public static final String JJB_CONTROLLER_SUBMIT="submitJJB";
	public static final String JJB_CONTROLLER_GET_DATA="getLastSavedJJBData";

//	PATH CONSTANTS FOR CciChildHospitalController
	public static final String CCI_CH_CONTROLLER_SAVE  ="saveCciChildrenHome";
	public static final String CCI_CH_CONTROLLER_SUBMIT="submitCciChildrenHome";
	public static final String CCI_CH_CONTROLLER_GET_DATA="getLastSavedCciChildrenHomeData";

//	PATH CONSTANTS FOR CciObservationHomeController
	public static final String CCI_OBSERVTION_HOME_CONTROLLER_SAVE  ="saveCciObservationHome";
	public static final String CCI_OBSERVTION_HOME_CONTROLLER_SUBMIT="submitCciObservationHome";
	public static final String CCI_OBSERVTION_HOME_CONTROLLER_GET_DATA="getLastSavedCciObservationHomeData";

//	PATH CONSTANTS FOR CciSpecialHomeController
	public static final String CCI_SPECIAL_HOME_CONTROLLER_SAVE  ="saveCciSpecialHome";
	public static final String CCI_SPECIAL_HOME_CONTROLLER_SUBMIT="submitCciSpecialHome";
	public static final String CCI_SPECIAL_HOME_CONTROLLER_GET_DATA="getLastSavedCciSpecialHomeData";
	
//	PATH CONSTANTS FOR CciOpenShelterController
	public static final String CCI_OS_CONTROLLER_SAVE  ="saveCciOpenShelter";
	public static final String CCI_OS_CONTROLLER_SUBMIT="submitCciOpenShelter";
	public static final String CCI_OS_CONTROLLER_GET_DATA="getLastSavedCciOpenShelterData";

//	PATH CONSTANTS FOR CciPlaceOfSafetyController
	public static final String CCI_POS_CONTROLLER_SAVE  ="saveCciPlaceOfSafety";
	public static final String CCI_POS_CONTROLLER_SUBMIT="submitCciPlaceOfSafety";
	public static final String CCI_POS_CONTROLLER_GET_DATA="getLastSavedCciPlaceOfSafetyData";

// PATH CONSTANTS FOR SJPU
	public static final String SJPU_CONTROLLER_SAVE="saveSJPU";
	public static final String SJPU_CONTROLLER_SUBMIT="submitSJPU";
	public static final String SJPU_CONTROLLER_GET_DATA="getLastSavedSJPUData";
	
// PATH CONSTANTS FOR SJPU
	public static final String DCPU_CONTROLLER_SAVE="saveDCPU";
	public static final String DCPU_CONTROLLER_SUBMIT="submitDCPU";
	public static final String DCPU_CONTROLLER_GET_DATA="getLastSavedDCPUData";
	
	public static final String SAA_CONTROLLER_SAVE  ="saveSAA";
    public static final String SAA_CONTROLLER_SUBMIT="submitSAA";
    public static final String SAA_CONTROLLER_GET_DATA="getLastSavedSAAData";
    
//	Submission Status report Constatnts
    public static final String STATUS_REPORT_SUBMISSIONREPORT="submissionReport";
    public static final String STATUS_REPORT_SUBMISSIONREPORT_TIMEPERIOD="submissionReportTimeperiod";
    public static final String STATUS_REPORT_TIMEPERIOD="statusTimeperiod";
    public static final String STATUS_REPORT_STATUS_INSTITUTION_TYPE="statusInstitutionType";
    public static final String STATUS_REPORT_CURRENT_MONTH_STATUS="getCurrentMonthStatus";
    
//    WebController PathConstants
    
    public static final String WEBCONTROLLER_CHANGE_PASSWORD="changePassword";
    public static final String WEBCONTROLLER_CHANGE_FORGET_PASSWORD="changeForgotPassword";
    public static final String WEBCONTROLLER_FORGET_PASSWORD="forgotPassword";
    public static final String WEBCONTROLLER_RESET_PASSWORD="resetPassword";
    public static final String WEBCONTROLLER_GET_REPORTS="getReports";
    
//    auto save Path constatnts
    public static final String AUTO_SAVE_SAA="autoSaveSAA";
    public static final String AUTO_SAVE_SJPU="autoSaveSJPU";
    public static final String AUTO_SAVE_JJB="autoSaveJJB";
    public static final String AUTO_SAVE_DCPU="autoSaveDCPU";
    public static final String AUTO_SAVE_CWC="autoSaveCWC";
    public static final String AUTO_SAVE_CCIOH="autoSaveCciOH";
    public static final String AUTO_SAVE_CCIPOS="autoSaveCciPlaceOfSafety";
    public static final String AUTO_SAVE_CCIOS="autoSaveCciOpenShelter";
    public static final String AUTO_SAVE_CCISH="autoSaveCciSplHome";
    public static final String AUTO_SAVE_CCICH="autoSaveCciChildrenHome";
    
//    Configuration Controller
    public static final String READ_INSERT_DATA_FROM_EXCEL="readAndInsertAgencyDataFromExcel";
    
    public static final Integer STATE_LEVEL_USER_TYPE_ID = 11;
    
    public static final String LAST_ACCESSED_TIME_CALL="testSeverCall";
    
}
