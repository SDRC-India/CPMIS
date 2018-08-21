/**
 * 
 */
package org.sdrc.cpmisweb.util;

import java.util.Calendar;
import java.util.Date;

/**
 * @author Pratyush Kumar Rath
 * Created on: 27-Nov-2017 3:21:04 pm
 *
 */
public class CPMISDate {
	public Date currentMonthFirstDate(){
		Calendar cal = Calendar.getInstance();
		cal.add(Calendar.MONTH, 0);
		cal.set(Calendar.DATE, 1);
		cal.set(Calendar.HOUR_OF_DAY, 0);  
        cal.set(Calendar.MINUTE, 0);  
        cal.set(Calendar.SECOND, 0);  
        cal.set(Calendar.MILLISECOND, 0);  
		Date currentMonthFirstDay = cal.getTime();
		return currentMonthFirstDay;
	}
	
	public Date currentMonthLastDate(){
		Calendar cal = Calendar.getInstance();
		cal.add(Calendar.MONTH, 0);
		cal.set(Calendar.DATE, cal.getActualMaximum(Calendar.DATE));
		cal.set(Calendar.HOUR_OF_DAY, 23);  
        cal.set(Calendar.MINUTE, 59);  
        cal.set(Calendar.SECOND, 59);  
        cal.set(Calendar.MILLISECOND, 59);
		Date currentMonthLastDay = cal.getTime();
		return currentMonthLastDay;
	}
	
	public Date previousMonthFirstDate(){
		Calendar cal = Calendar.getInstance();
		cal.add(Calendar.MONTH, -1);
		cal.set(Calendar.DATE, 1);
		cal.set(Calendar.HOUR_OF_DAY, 0);  
        cal.set(Calendar.MINUTE, 0);  
        cal.set(Calendar.SECOND, 0);  
        cal.set(Calendar.MILLISECOND, 0);  
		Date previousMonthFirstDate = cal.getTime();
		return previousMonthFirstDate;
	}
	
	public Date previousMonthLastDate(){
		Calendar cal = Calendar.getInstance();
		cal.add(Calendar.MONTH, -1);
		cal.set(Calendar.DATE, cal.getActualMaximum(Calendar.DATE));
		cal.set(Calendar.HOUR_OF_DAY, 23);  
        cal.set(Calendar.MINUTE, 59);  
        cal.set(Calendar.SECOND, 59);  
        cal.set(Calendar.MILLISECOND, 59);
		Date previousMonthLastDate = cal.getTime();
		return previousMonthLastDate;
	}
}
