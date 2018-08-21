package org.sdrc.cpmisweb.util;


/**
 * 
 * @author
 *
 */
public class Constant {

	public static final String BABY_DETAILS_INDICATOR_TYPEDETAIL_ID = "baby.details.indicator.typedetail.id";
	
	public static final  String USER_PRINCIPAL="UserPrincipal"; 
    public static final  String REFERER ="referer"; 
    public static final  String REDIRECT ="redirect:";
    public static final  String ATTRIBUTE_EMAIL ="email";
    public static final  String BAD_CREDENTIALS_LOGIN="badCredentials.login";
    public static final  String ACCESS_DENIED="accessDenied";
	
    public static final String ERROR_LIST = "errorList";
    
    public static final String USER_ID="userId";
    public static final String USER_NAME="userName";
    public static final String USER_VIEW_NAME="userViewName";
    public static final String INVALID_CREDENTIALS="Invalid Credential";
    public static final String INVALID_USERS="Invalid User!";
    public static final String FORM_ERROR="formError";
    public static final String CLASS_NAME="className";
    public static final String ALERT_DANGER="alert alert-danger";
    
    public static final String TYPE_OF_HOME="typeOfHome";
    public static final String HOME_TYPE_OH="Observation Home";
    public static final String HOME_TYPE_CH="Children Home";
    public static final String HOME_TYPE_OS="Open Shelter";
    public static final String HOME_TYPE_POS="Place Of Safety";
    public static final String HOME_TYPE_SH="Special Home";
    
    public static class Slices{
		public static String FIRST_SLICE = "firstslices";
		public static String SECOND_SLICE = "secondslices";
		public static String THIRD_SLICE = "thirdslices";
		public static String FOUTRH_SLICE = "fourthslices";
		public static final String FIFTHSLICES = "fifthslices";
		public static final String SIXTH_SLICES = "sixthslices";
	}
    
	
	public static final String PASSWORD_CHANGED_SUCCESSFULLY = "Your password has been changed successfully.";
	public static final String INCORRECT_PASSWORD = "The current password is incorrect.";
	public static final String SESSION_OUT_ERROR="Your session is out. Please login and try again.";
	public static final String INVALID_EMAIL_ID_ERROR = "Please enter valid email id.";

	public static final String ERROR_USER_NOT_APPROVED = null;
	public static final String ERROR_USER_INACTIVE = null;
	public static final String ERROR_USER_REJECTED = null;
	public static final String ERROR_USER_INVALID = null;

	public static final String ERROR_RESETPASSWORD_UNAUTHORIZED = "Unauthorized access";

	public static final String ERROR_RESETPASSWORD_LINK_EXPIRED = "Unable to process the request as the link has expired";
	
	//All user type codes
	public static final String TYPECODE_VALUE_CWC="institution.typeDetails.id.cwc";
	public static final String TYPECODE_VALUE_JJB="institution.typeDetails.id.jjb";
	public static final String TYPECODE_VALUE_CCIOH="institution.typeDetails.id.ccioh";
	public static final String TYPECODE_VALUE_CCICH="institution.typeDetails.id.ccich";
	public static final String TYPECODE_VALUE_CCIOS="institution.typeDetails.id.ccios";
	public static final String TYPECODE_VALUE_CCIPOS="institution.typeDetails.id.ccipos";
	public static final String TYPECODE_VALUE_CCISH="institution.typeDetails.id.ccish";
	public static final String TYPECODE_VALUE_SJPU="institution.typeDetails.id.sjpu";
	public static final String TYPECODE_VALUE_DCPU="institution.typeDetails.id.dcpu";
	public static final String TYPECODE_VALUE_SAA="institution.typeDetails.id.saa";
	public static final String TYPECODE_VALUE_SLU="institution.typeDetails.id.slu";
	
	//for Submission status ServiceImpl
	public static final String SET_CURRENT_TIMEPERIOD_VALUE="current.timeperiod.value";
	public static final String MONTHLY_PERIODICITY_VALUE="monthly.periodicity.value";
	public static final String STATUS_REPORT_CURRENT_MONTH="status.report.current.month";
	
	//if requirement will come for percentage then add the 'id' of 'column percentage' in the following array
	public static final Integer[] UNITS_TO_BE_SHOWN_IN_DASHBOARD = {1};
	public static final Integer STATE_LEVEL_USER_TYPE_ID = 11;
	
	public static final String UNAUTHORIZED = "unauthorized";
	public static final String LOGIN_META_ID = "loginMetaId";
	public static final String SUCCESS_LOGGED_OUT = "success.logged.out";
	public static final String DUPLICATELOGIN_UNAUTHORIZED = "duplicatelogin.unauthorized";
	public static final String DUPLICATELOGIN_UNAUTHORIZED_MODAL = "duplicatelogin.unauthorized.modal";
}
